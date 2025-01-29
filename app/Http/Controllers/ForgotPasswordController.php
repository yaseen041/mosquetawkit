<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash, Session, DB;
use App\Models\User;

class ForgotPasswordController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('forgot_password');
    }

    public function forgot_password(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'email' => 'required|email|exists:users',
        ],
        [
            'email.exists'=> 'This email address not found.',
        ]);

        $data['password'] = rand(10000000, 99999999);
        $status = User::where('email', $data['email'])->update([
            'password' => Hash::make($data['password'])
        ]);
        if ($status > 0){
            $this->send_user_credential_email($data);
            return redirect('forgot')->withSuccess('Please check your email inbox.');
        }else{
            return redirect("forgot")->withErrors('Something went wrong, please try again!.');
        }
    }

    public function send_user_credential_email($data)
    {
        $to = $data['email'];
        $subject = 'Password Reset';
        $body = view('emails/reset_password_email', compact("data"));

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