<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuth\CustomLogin;
use App\Http\Controllers\CustomAuth\CustomRegister;
use App\Http\Controllers\CustomAuth\PasswordResetController;
use App\Http\Controllers\LikeDislikeController;
use App\Http\Controllers\WatchStreamVedioController;    
use App\Http\Controllers\Dasboard\DashboardController;
use App\Http\Controllers\Dasboard\VideoPostController;   
use App\Http\Controllers\MainViewController;
use App\Http\Controllers\Dasboard\AllvedioController;


Route::get('/', [MainViewController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/test', function () {
    return view('CustomAuth.reset-password');
});
Route::get('/watch/{id}', [WatchStreamVedioController::class, 'watchStreamVedio']);
Route::post('/likedislike',  [LikeDislikeController::class, 'Customlike']);
// Password Reset Routes
Route::get('/forgot-password', [PasswordResetController::class, 'showLinkRequestForm']);
Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLinkEmail'])->name('password.email');


Route::get('/email/verify', function () {
    
    return view('CustomAuth.verify-email');
})->middleware('auth')->name('verification.notice');
 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/login', [CustomLogin::class, 'index'])->name('login');
Route::post('/login', [CustomLogin::class, 'authenticate']);

Route::get('/register', [CustomRegister::class, 'index'])->name('register');
Route::post('/register', [CustomRegister::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/vediopost', [VideoPostController::class, 'index'])->name('vediopost')->middleware('auth');
Route::post('/dashboard/vediopost', [VideoPostController::class, 'createapost'])->name('vediopost.create')->middleware('auth');
Route::get('/dashboard/userallvideos', [AllvedioController::class, 'index'])->name('userallvideos')->middleware('auth');
Route::get('/dashboard/editvediopost/{id}', [AllvedioController::class, 'editvediopost'])->name('editvediopost')->middleware('auth');

Route::any('/logout', function () {
    Auth::logout();
    return view('CustomAuth.login');
})->name('logout');
