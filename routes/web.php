<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WTimesController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clearcache', function () {
	$exitCode = Artisan::call('config:clear');
	$exitCode = Artisan::call('cache:clear');
	$exitCode = Artisan::call('config:cache');
	$exitCode = Artisan::call('view:clear');
	$exitCode = Artisan::call('route:clear');
	return 'DONE'; //Return anything
});


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('verify_login', [LoginController::class, 'verify_login']);
Route::get('logout', [LoginController::class, 'logout']);
Route::get('/add-mosque', [RegisterController::class, 'index']);
Route::post('register_new_users', [RegisterController::class, 'store_new_users']);
Route::get('/verify/{token}', [RegisterController::class, 'verify'])->name('verify');
Route::get('error', [RegisterController::class, 'error']);
Route::get('forgot-password', [ForgotPasswordController::class, 'index']);
Route::post('forgot_password', [ForgotPasswordController::class, 'forgot_password']);

Route::get('contact', [ContactController::class, 'index']);
Route::get('wtimes', [WTimesController::class, 'index']);
Route::get('installation', [WTimesController::class, 'installation']);
Route::get('faq', [WTimesController::class, 'faq']);

Route::get('/', [UserController::class, 'index']);
Route::get('/online', [UserController::class, 'online']);
Route::get('/offline', [UserController::class, 'offline']);
Route::get('profile', [UserController::class, 'index']);
Route::post('update_profile', [UserController::class, 'update']);
Route::get('change_password', [UserController::class, 'change_password']);
Route::post('update_password', [UserController::class, 'update_password']);

Route::get('payment/history', [UserController::class, 'payment_history'])->name('payment.history');
Route::post('stripe/payment', [UserController::class, 'processPayment'])->name('stripe.payment');


// Route::get('/', function () {
// 	return redirect('admin/login');
// });

// Route::get('/home', function () {
// 	return redirect('admin/login');
// });

require 'admin.php';
