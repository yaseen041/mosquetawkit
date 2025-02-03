<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payments;
use App\Models\Documents;
use Illuminate\Support\Facades\Auth;
use Hash, Session, Validator, DB, DateTime, DateInterval;

class UserController extends Controller
{

    public function index(Request $request)
    {
        return view('user/dashboard');
    }

    public function online(Request $request)
    {
        return view('user.online');
    }

    public function offline(Request $request)
    {
        return view('user.offline');
    }

    public function change_password()
    {
        $data['user'] = User::find(Auth::user()->id);
        return view('user/change_password', $data);
    }

    public function update_password(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'old_password' => 'required',
            'new_password' => 'required|min:6|different:old_password',
            'confirm_password' => 'required|same:new_password',
        ]);
        if ($validator->fails()) {
            $finalResult = response()->json(array('msg' => 'lvl_error', 'response'=>$validator->errors()->all()));
            return $finalResult;
        }
        if (Hash::check($data['old_password'], Auth::user()->password)) {
            $status = User::where('id', Auth::user()->id)->update([
                'password' => Hash::make($data['new_password'])
            ]);
            if($status > 0) {
                $finalResult = response()->json(array('msg' => 'success', 'response'=>'Password successfully updated.'));
                return $finalResult;
            } else {
                $finalResult = response()->json(array('msg' => 'error', 'response'=>'Something went wrong.'));
                return $finalResult;
            }
        } else {
            $finalResult = response()->json(array('msg' => 'error', 'response'=>'Your password is wrong.'));
            return $finalResult;
        }
    }

}