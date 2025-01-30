<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class WTimesController extends Controller
{
    public function index()
    {
        return view('user.wtimes');
    }
    public function installation()
    {
        return view('user.installation');
    }

     public function faq()
    {
        return view('user.faq');
    }
}