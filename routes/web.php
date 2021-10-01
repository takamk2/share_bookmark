<?php

use App\Http\Controllers\ApiTokenController;
use App\Http\Controllers\CreateApiTokenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', DashboardController::class)->name('login');

// ログイン (Google OAuth)
Route::get('/auth/google/redirect', [GoogleLoginController::class, 'getGoogleAuth']);
Route::get('/login/google/callback', [GoogleLoginController::class, 'authGoogleCallback']);

// ログアウト
Route::get('/logout', LogoutController::class);

// セッティング
Route::get('/settings/', SettingsController::class);

// セッティング > API Token
Route::get('/settings/api-token', ApiTokenController::class);
Route::post('/settings/api-token/create', CreateApiTokenController::class);
