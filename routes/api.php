<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\API\HomeController;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\FormController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api'], function ($router) {

    Route::post('signup', [AuthController::class, 'signup']);
    Route::post('signin', [AuthController::class, 'signin']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('forgot-password', [AuthController::class, 'forgotPassword']);
    Route::post('reset-password', [AuthController::class, 'resetPassword']);
    Route::post('verify-account', [AuthController::class, 'verify']);

    Route::get('profile', [AuthController::class, 'profile']);
    Route::get('/refresh', [AuthController::class, 'refresh'])->name('refresh');

    Route::post('/updateProfile', [AuthController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/updatePassword', [AuthController::class, 'updatePassword'])->name('updatePassword');

    Route::post('/project-submit', [HomeController::class, 'store']);
    Route::post('/edit_submission', [HomeController::class, 'edit_submission']);
    Route::post('/update_submission', [HomeController::class, 'update_submission']);
    Route::post('/update_visibility', [HomeController::class, 'update_visibility']);

    Route::get('get_my_documents', [HomeController::class, 'get_my_documents'])->name('get_my_documents');
    Route::get('get-user-projects', [HomeController::class, 'get_user_projects'])->name('get-user-projects');
    Route::post('review-my-submission', [HomeController::class, 'review_my_submission'])->name('review-my-submission');
});



