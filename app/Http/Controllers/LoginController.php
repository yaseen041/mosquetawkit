<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mosques;
use Hash, Session;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:mosque')->except('logout');
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
        if (Auth::guard('mosque')->attempt($credentials)) {
            return redirect('mosque');
        } else {
            return redirect("login")->withErrors('Invalid email or password!.');
        }
    }

    public function logout() {
        Session::flush();
        Auth::guard('mosque')->logout();
        return redirect('login');
    }

}
