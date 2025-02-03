<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index()
    {
        return view('user.contact');
    }

    public function submit(Request $request)
    {
        $data = $request->all();
        $validated = $request->validate([
            'email'   => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10',
        ]);

        $contact = Contact::create($validated);
        $this->sendEmail($data['email'], $data['subject'], $data['message']);

        return response()->json([
            'status' => 'success',
            'message' => 'Message saved and email sent successfully!',
        ]);
    }

    private function sendEmail($fromEmail, $subject, $message)
    {
        // $to = 'admin@gmail.com';
        $to =  get_section_content('project', 'admin_email') ;
        $headers = "From: " . $fromEmail . "\r\n";
        $headers .= "Reply-To: " . $fromEmail . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


        $emailMessage = view('emails.contact', [
            'email'   => $fromEmail,
            'subject' => $subject,
            'message' => $message
        ])->render();
        mail($to, $subject, $emailMessage, $headers);
    }
}