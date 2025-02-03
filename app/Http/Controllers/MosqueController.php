<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Hash, Session, Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Mosques;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class MosqueController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('step2')) {
            $uid = $request->query('step2');
            return view('user.add_mosque_step_2', compact('uid'));
        } elseif ($request->has('step3')) {
            $uid = $request->query('step3');
            $mosque = Mosques::where('unique_id', $uid)->first();
            if (!$mosque) {
                return back()->withErrors(['error' => 'Mosque not found.']);
            }

            return view('user.add_mosque_step_final', compact('uid', 'mosque'));
        }
        return view('user.add_mosque');
    }

    public function handleStep1(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:mosques,email',
            'password' => 'required',
        ]);


        $uid = rand(1000, 99999);

        $mosque = Mosques::create([
            'unique_id' => $uid,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $data = [
            'mID' => $uid,
            'email' => $request->email,
            'password' => $request->password,
        ];

        $this->send_user_credential_email($data);

        return redirect()->to('/add-mosque?step2=' . $mosque->unique_id);
    }

    public function handleStep2(Request $request)
    {
        $validatedData = $request->validate([
            'mID'       => 'required|exists:mosques,unique_id',
            'mCOUNTRY'  => 'required',
            'mGPSFULL'  => 'required',
            'mCITY'     => 'required',
        ]);


        $countryParts = explode('|', $validatedData['mCOUNTRY']);
        $countryCode  = $countryParts[0] ?? null;
        $countryName  = $countryParts[1] ?? null;

        $cityParts = preg_split('/[|]/', $validatedData['mCITY']);
        $cityName       = $cityParts[1] ?? null;
        $timezoneOffset = $cityParts[4] ?? null;
        $dstOffset      = $cityParts[5] ?? null;

        $gpsParts = explode('|', $validatedData['mGPSFULL']);
        $latitude       = $gpsParts[2] ?? null;
        $longitude      = $gpsParts[3] ?? null;


        $updated = Mosques::where('unique_id', $validatedData['mID'])
        ->update([
            'country_code'    => $countryCode,
            'country'         => $countryName,
            'gps_full'        => $validatedData['mGPSFULL'],
            'city'            => $cityName,
            'latitude'        => $latitude,
            'longitude'       => $longitude,
            'timezone_offset' => $timezoneOffset,
            'dst_offset'      => $dstOffset,
        ]);

        if ($updated) {
            return redirect()->to('/add-mosque?step3=' . $validatedData['mID']);
        }

        return back()->withErrors(['error' => 'Failed to update mosque details.']);
    }

    public function handleStep3(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'mNAME' => 'required|string',
            'mMETHODS' => 'required|string',
            'mMADHAB' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'msg' => 'lvl_error',
                'response' => $validator->errors()->all()
            ]);
        }

        // Save WTimes JSON file
        $fileName = $request->mID . "-data.js";
        $filePath = public_path("uploads/wtimes/{$fileName}");
        if (!File::exists(public_path('uploads/wtimes'))) {
            File::makeDirectory(public_path('uploads/wtimes'), 0777, true);
        }
        File::put($filePath, $request->mWTIMES);

        // Generate and Save QR Code
        $url = url("online/{$request->mID}/{$request->mxCITY}");
        $qrCodeName = "{$request->mID}-{$request->mxCITY}-qr.png";

        if (!File::exists(public_path('uploads/qrcodes'))) {
            File::makeDirectory(public_path('uploads/qrcodes'), 0777, true, true);
        }

        $qrCode = new QrCode($url);
        $writer = new PngWriter();
        $qrCodeResult = $writer->write($qrCode);
        $qrCodePath = public_path("uploads/qrcodes/{$qrCodeName}");
        File::put($qrCodePath, $qrCodeResult->getString());

        Mosques::where('unique_id', $request->mID)->update([
            'mosque_name' => $request->mMETHODS,
            'app_name' => $request->mNAME,
            'method' => $request->mMETHODS,
            'madhab' => $request->mMADHAB,
            'qr_code' => $qrCodeName,
            'annual_time' => $request->mWTIMES,
        ]);

        $mosque = Mosques::where('unique_id', $request->mID)->first();
        $congrats = "Congratulations! Your mosque has been created successfully.";
        $message = "Please check your inbox for the login credentials and further details. If you have any questions or need assistance, feel free to reach out to us anytime.";
        return view('user.success', compact( 'mosque', 'congrats', 'message'));
    }

    public function profile(Request $request)
    {
        $mosque_id =  Auth::guard('mosque')->id();
        $data['mosque'] = Mosques::find($mosque_id);
        return view('user.mosque_profile', $data);
    }

    public function getMosque($mId, $city)
    {
        $mosque = Mosques::where('unique_id', $mId)->first();

        if (!$mosque) {
            return response()->json([ 'message' => 'Mosque not found' ], 404);
        }
        if ($mosque->city !== $city) {
            return response()->json([ 'message' => 'Mosque not in the specified city' ], 404);
        }
        return view('user.mosque', compact( 'mosque'));
    }

    public function uploadProfileImage(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'pLGfile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ],
            [
                'pLGfile.required' => 'Logo image is required.',
                'pLGfile.image' => 'The uploaded file must be an image.',
                'pLGfile.mimes' => 'Only JPEG, PNG, JPG, GIF, and SVG files are allowed.',
                'pLGfile.max' => 'The image size must not exceed 2MB.'
            ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $mosque = Mosques::find(Auth::guard('mosque')->id());

        if (!$mosque) {
            return back()->with('error', 'Mosque not found.');
        }

        if ($request->hasFile('pLGfile')) {
            $image = $request->file('pLGfile');
            $imageName = $mosque->unique_id . '-logo.' . $image->getClientOriginalExtension();

        // Ensure the directory exists
            $uploadPath = public_path("uploads/mosque_logos/");
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $image->move($uploadPath, $imageName);

            $status = $mosque->update(['logo' => $imageName]);

            return $status
            ? back()->with('success', 'Mosque logo updated successfully!')
            : back()->with('error', 'Something went wrong!!');
        }

        return back()->with('error', 'No file uploaded.');
    }

    public function update_profile(Request $request)
    {
        $data = $request->all();


        $validator = Validator::make($data,
            [
                'mID' => 'required|numeric',
                'mSETTINGS' => 'required|date_format:H:i',
                'm12BOOLZ' => 'nullable|string',
                'mNAMELATIN' => 'required|string|max:255',
                'mNAME' => 'required|string|max:255',
                'mDATA' => 'required|string|max:250',
                'mDatetimeEND' => 'required|date_format:Y-m-d H:i',
                'mAyatsSWITCHER' => 'nullable|in:1',
                'mWTIMES' => 'required|string',
            ],
            [
                'mIQAMAS.regex' => 'The IQAMA times must be in the format "1,1,1,1,1".',
                'mSETTINGS.date_format' => 'The settings time must be in the format "HH:MM".',
                'mDatetimeEND.date_format' => 'The expiration date must be in the format "YYYY-MM-DD HH:MM".',
            ],
        );

        if ($validator->fails()) {
            return response()->json([
                'msg' => 'lvl_error',
                'response' => $validator->errors()->all()
            ]);
        }
        $fileName = $request->mID . "-data.js";
        $filePath = public_path("uploads/wtimes/{$fileName}");
        if (!File::exists(public_path('uploads/wtimes'))) {
            File::makeDirectory(public_path('uploads/wtimes'), 0777, true);
        }
        File::put($filePath, $request->mWTIMES);


        $m12BOOLZ = $request->has('m12BOOLZ') ?'1' : '0';
        $summer_hour = $request->has('mSummer1HOUR') ?'1' : '0';
        $increase_isha_ramadan = $request->has('m30MinIshaRAMADAN') ?'1' : '0';
        $reduce_isha_ramadan = $request->has('mLess1HourRAMADAN') ?'1' : '0';

        $mosque = Mosques::where('unique_id', $request->mID)->update([
            'annual_time' => $request->mWTIMES,
            'iqamaz' => $request->mIQAMAS,
            'm_settings' => $request->mSETTINGS,
            'm_12boolz' => $m12BOOLZ,
            'summer_hour' => $summer_hour,
            'increase_isha_ramadan' => $increase_isha_ramadan,
            'reduce_isha_ramadan' => $reduce_isha_ramadan,
            'latin_name' => $request->mNAMELATIN,
            'app_name' => $request->mNAME,
            'message' => $request->mDATA,
            'message_expire_date' => $request->mDatetimeEND,
            'message_switcher' => $request->mAyatsSWITCHER,
        ]);

        if ($mosque) {
            return response()->json(['msg' => 'success', 'response' => 'Mosque updated successfully.']);
        } else {
            return response()->json(['msg' => 'error', 'response' => 'Something went wrong!']);
        }
    }

    public function send_user_credential_email($data)
    {
        $to = $data['email'];
        $subject = 'New Mosque Credentials';
        $body = view('emails/registration', compact("data"));

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= 'From: <' . get_section_content('project', 'noreply_email') . '>' . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "Content-Transfer-Encoding: 7bit\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        $headers .= "X-Priority: 3\r\n";
        $headers .= "X-MSMail-Priority: Normal\r\n";
        $headers .= "Importance: Normal\r\n";
        @mail($to, $subject, $body, $headers);
    }
}