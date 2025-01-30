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

			// Route::get('/user-documents/{id}', [UsersController::class, 'show_documents']);
			// Route::get('/user-payments/{id}', [UsersController::class, 'show_payments']);
			// Route::post('store-document', [UsersController::class, 'store_document']);
			// Route::post('store-balance', [UsersController::class, 'store_balance']);
			// Route::get('create', [UsersController::class, 'create']);
			// Route::post('update', [UsersController::class, 'update']);
		});

		// Route::group(['prefix' => 'documents'], function () {
		// 	Route::get('/', [DocumentsController::class, 'index']);
		// 	Route::get('create', [DocumentsController::class, 'create']);
		// 	Route::post('store', [DocumentsController::class, 'store']);
		// 	Route::get('view/{id}', [DocumentsController::class, 'show']);
		// 	Route::post('show', [DocumentsController::class, 'show']);
		// 	Route::post('edit', [DocumentsController::class, 'edit']);
		// 	Route::post('update', [DocumentsController::class, 'update_document']);
		// 	Route::post('delete', [DocumentsController::class, 'destroy']);
		// });

		// Route::group(['prefix' => 'payments'], function () {
		// 	Route::get('/', [PaymentsController::class, 'index']);
		// 	Route::get('create', [PaymentsController::class, 'create']);
		// 	Route::post('store', [PaymentsController::class, 'store']);
		// 	Route::post('view-details', [PaymentsController::class, 'view_details']);
		// 	Route::post('show', [PaymentsController::class, 'show']);
		// 	Route::post('update', [PaymentsController::class, 'update_balance']);
		// 	Route::get('view/{id}', [PaymentsController::class, 'show']);
		// 	Route::post('edit', [PaymentsController::class, 'edit']);
		// 	Route::post('delete', [PaymentsController::class, 'destroy']);
		// });
	});
});
