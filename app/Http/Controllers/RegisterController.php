<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash, Session, Validator;
use Illuminate\Support\Str;
class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        return view('user/add-mosque');
    }
    public function store_new_users(Request $request)
    {
        $data = $request->all();
        // print_r($data); exit;
        $validator = Validator::make($data, [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
            'company_name' => 'required|string|max:100',
            'password' => 'required|min:8',
            'address' => 'required|string|max:255',
            'tax_id' => 'required|string|max:20',
            'w9_form' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx|max:5120',
            'tax_form' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx|max:5120',
            'credit_form' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx|max:5120',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'msg' => 'lvl_error',
                'response' => $validator->errors()->all()
            ]);
        }


        if ($request->hasFile('w9_form')) {
            $file = $request->file('w9_form');
            $w9_form = $this->uploadFile($file);
        }
        if ($request->hasFile('tax_form')) {
            $file = $request->file('tax_form');
            $tax_form = $this->uploadFile($file);
        }
        if ($request->hasFile('credit_form')) {
            $file = $request->file('credit_form');
            $credit_form = $this->uploadFile($file);
        }

        $data['full_name'] = $data['first_name'] . ' ' . $data['last_name'];

        // print_r([$w9_form,$tax_form,$credit_form]); exit;

        $verification_token = Str::random(60);
        $verificationLink = url('verify/'.$verification_token);

        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            if ($existingUser->is_verified == 0) {
                $existingUser->verification_token = $verification_token;
                $existingUser->is_verified = 0;
                $existingUser->first_name = $data['first_name'];
                $existingUser->last_name = $data['last_name'];
                $existingUser->full_name = $data['full_name'];
                $existingUser->company_name = $data['company_name'];
                $existingUser->phone_no = $data['phone'];
                $existingUser->address = $data['address'];
                $existingUser->tax_id = $data['tax_id'];
                $existingUser->w9_application = $w9_form;
                $existingUser->tax_application = $tax_form;
                $existingUser->credit_application = $credit_form;
                $existingUser->password = Hash::make($data['password']);
                $existingUser->save();
                $this->sendVerificationEmail($existingUser, $verificationLink, $existingUser->email);
                return response()->json([
                    'msg' => 'error',
                    'response' => 'Your account isn’t verified yet. Please check your email for the verification link or reach out to support for assistance.',
                ]);
            } else {
                return response()->json([
                    'msg' => 'error',
                    'response' => 'Email is already registered. Please login.',
                ]);
            }
        }

        $user = User::create([

            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'full_name' => $data['full_name'],
            'company_name' => $data['company_name'],
            'address' => $data['address'],
            'tax_id' => $data['tax_id'],
            'email' => $data['email'],
            'phone_no' => $data['phone'],
            'password' => Hash::make($data['password']),
            'is_verified' => 0,
            'verification_token' => $verification_token,
            'w9_application' => $w9_form,
            'tax_application' => $tax_form,
            'credit_application' => $credit_form,

        ]);

        if($user) {
            $this->sendVerificationEmail($user, $verificationLink, $request->email);
            return response()->json(['msg' => 'success', 'response'=>'Your account has been created successfully! Please check your inbox or spam folder to verify your email address.']);
        } else {
            return response()->json(['msg' => 'error', 'response'=>'Something went wrong.']);
        }
    }
    public function sendVerificationEmail($user, $verificationLink, $recipientEmail)
    {
        $to = $recipientEmail;
        $edata['verificationLink'] = $verificationLink;
        $edata['recipientEmail'] = $recipientEmail;
        $edata['full_name'] = $user->full_name;
        $subject = get_section_content('project', 'site_title') .'(New Registration)';
        $email_body = view('emails/account_verification_email', compact("edata"));
        $body = $email_body;

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= 'From: <' . get_section_content('project', 'noreply_email') . '>' . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "Content-Transfer-Encoding: 7bit\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        $headers .= "X-Priority: 3\r\n";
        $headers .= "X-MSMail-Priority: Normal\r\n";
        $headers .= "Importance: Normal\r\n";
        @mail($to, $subject, $body, $headers);
        return true;
    }
    public function verify($token)
    {
        $verificationRecord = User::where('verification_token', $token)->first();
        if (!$verificationRecord) {
            return redirect("error")->withErrors('Link has been expired.');
        }
        $verificationRecord->verification_token = null;
        $verificationRecord->is_verified = 1;
        $verificationRecord->verified_at = date('Y-m-d h:i:s');
        $verificationRecord->save();
        if (!$verificationRecord) {
            return redirect("error")->withErrors('Something went wrong.');
        }
        return redirect("login")->with('success', 'Your account verified successfully. You can login now.');
    }
    public function error()
    {
        return view('error');
    }

    public function uploadFile($file, $destinationPath = 'uploads/user_documents/')
    {
        $timestamp = now()->timestamp;
        $fileName = $timestamp . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
        $filePath = $file->move(public_path($destinationPath), $fileName);
        return $fileName;
    }

    public function fileUpload($file, $destinationPath = 'uploads/user_documents/')
    {
        $timestamp = now()->timestamp;
        $originalExtension = $file->getClientOriginalExtension();
        $fileName = $timestamp . '_' . Str::random(10) . '.' . $originalExtension;
        $filePath = $file->move(public_path($destinationPath), $fileName);

        $fileData = [
            'filename' => $fileName,
            'extension' => $originalExtension,
            'size' => $file->getSize(),
            'filepath' => $destinationPath . $fileName,
        ];
        return $fileData;
    }

}