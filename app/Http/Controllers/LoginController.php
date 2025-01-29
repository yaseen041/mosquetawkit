<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash, Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('login');
    }

    public function verify_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $check_verified = Auth::user()->is_verified;
            $check_status = Auth::user()->status;
            if($check_verified == 1) {
                if($check_status == 0){
                    Auth::logout();
                    Session::flush();
                    return redirect("login")->withErrors('Your account has been suspended by the admin. Please contact the admin for further assistance. Thanks');
                }
                return redirect('profile');

            } else if($check_verified == 0) {
                Auth::logout();
                Session::flush();
                return redirect("login")->withErrors('Your account has not been verified. Please check your email inbox for the verification link.');
            }
        } else {
            return redirect("login")->withErrors('Invalid email or password!.');
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

}
