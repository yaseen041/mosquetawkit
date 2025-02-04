<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller {
    // Show all messages
    public function index() {
        $messages = Contact::latest()->paginate(10);
        return view('admin.contacts.index', compact('messages'));
    }

    // Show single message
    public function show(Request $request) {
        $data = $request->all();
        $contact = Contact::where('id', $data['id'])->first();
        $htmlresult = view('admin/contacts/view_message', compact('contact'))->render();
        return  response()->json(['msg' => 'success', 'response'=>$htmlresult]);
    }

    // public function show($id) {
    //     $message = Contact::findOrFail($id);
    //     $message->update(['is_read' => true]); // Mark as read
    //     return view('admin.contacts.show', compact('message'));
    // }

    // Delete message
    public function destroy(Request $request) {
        $status = Contact::findOrFail($request->id)->delete();

        if ($status) {
            return response()->json(['msg' => 'success', 'response' => 'Message deleted successfully.']);
        } else {
            return response()->json(['msg' => 'error', 'response' => 'Something went wrong.']);
        }
    }
}
