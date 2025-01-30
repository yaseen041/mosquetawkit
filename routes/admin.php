<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Admin\MosquesController;
use App\Http\Controllers\Admin\ForgotPasswordController;
// use App\Http\Controllers\Admin\PaymentsController;


Route::group(['prefix'  =>  'admin'], function () {
	Route::get('/', [AdminLoginController::class, 'index']);
	Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');
	// Route::get('login', [AdminLoginController::class, 'index'])->name('login');
	Route::post('verify_login', [AdminLoginController::class, 'verify_login']);
	Route::get('logout', [AdminLoginController::class, 'logout']);

	Route::get('forgot-password', [ForgotPasswordController::class, 'index']);
	Route::post('forgot_password', [ForgotPasswordController::class, 'forgot_password']);

	Route::group(['middleware' => ['auth:admin']], function () {
		Route::get('admin', [AdminController::class, 'index']);
		Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
		Route::get('change_password', [AdminController::class, 'change_password']);
		Route::post('update_password', [AdminController::class, 'update_password']);

		Route::group(['prefix' => 'mosques'], function () {
			Route::get('/', [MosquesController::class, 'index']);
			Route::get('manage-mosque/{id}', [MosquesController::class, 'manage_mosque']);
			Route::post('update_status', [MosquesController::class, 'update_status']);
			Route::post('delete', [MosquesController::class, 'destroy']);
		});

	});
});
