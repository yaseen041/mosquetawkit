<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class ContactController extends Controller
{
    public function index()
    {
        return view('user.contact');
    }
}