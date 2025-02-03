<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WTimesController;
use App\Http\Controllers\MosqueController;

use Illuminate\Http\Request;


Route::get('/clearcache', function () {
	$exitCode = Artisan::call('config:clear');
	$exitCode = Artisan::call('cache:clear');
	$exitCode = Artisan::call('config:cache');
	$exitCode = Artisan::call('view:clear');
	$exitCode = Artisan::call('route:clear');
	return 'DONE';
});


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('verify_login', [LoginController::class, 'verify_login']);
Route::get('logout', [LoginController::class, 'logout']);


Route::get('/add-mosque', [MosqueController::class, 'index']);
Route::post('/add-mosque/step1', [MosqueController::class, 'handleStep1'])->name('mosque.step1');
Route::post('/add-mosque/step2', [MosqueController::class, 'handleStep2'])->name('mosque.step2');
Route::post('/add-mosque/step3', [MosqueController::class, 'handleStep3'])->name('mosque.step3');
Route::get('forgot-password', [ForgotPasswordController::class, 'index']);
Route::post('reset-password', [ForgotPasswordController::class, 'forgot_password']);
Route::get('error', [RegisterController::class, 'error']);

Route::get('contact', [ContactController::class, 'index']);
Route::post('submit-contact', [ContactController::class, 'submit']);
Route::get('wtimes', [WTimesController::class, 'index']);
Route::get('faq', [WTimesController::class, 'faq']);
Route::get('installation', [WTimesController::class, 'installation']);

Route::get('/', [UserController::class, 'index']);
Route::get('/online', [UserController::class, 'online']);
Route::get('/online/{mId}/{city}', [MosqueController::class, 'getMosque']);
Route::get('/offline', [UserController::class, 'offline']);

Route::middleware('auth:mosque')->group(function () {
	Route::group(['prefix'  =>  'mosque'], function () {
		Route::get('/', [MosqueController::class, 'profile']);
		Route::get('profile', [MosqueController::class, 'profile']);
		Route::post('upload-profile', [MosqueController::class, 'uploadProfileImage']);
		Route::post('/update-profile', [MosqueController::class, 'update_profile']);
	});
});

Route::get('change_password', [UserController::class, 'change_password']);
Route::post('update_password', [UserController::class, 'update_password']);

Route::get('/home', function () {
	return redirect('mosque');
});

require 'admin.php';
