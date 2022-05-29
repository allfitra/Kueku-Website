<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\SellerController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Google Login & register
Route::get('auth/google',[GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback',[GoogleController::class, 'callback']);

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Cart dan Order
Route::get('/', [ProductController::class, 'index']);
Route::get('/cart', [ProductController::class, 'cart']);
Route::get('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add_to_cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove_from_cart');
Route::delete('remove-all', [ProductController::class, 'removeAll'])->name('remove_all');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update_cart');

// account
Route::get('account/change_password', [PasswordController::class, 'index'])->middleware('auth');
Route::post('account/change_password', [PasswordController::class, 'update'])->middleware('auth');
Route::resource('account', AccountController::class, [
    'parameters' => [
        'account' => 'user'
    ]
])->middleware('auth');
Route::get('/resend_verify_message', [AccountController::class, 'resend_verify_message'])->middleware('auth');

// Email Verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('success', 'Link verifikasi telah dikirim ke akun email anda');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// Seller Register
Route::get('/seller_register', [SellerController::class, 'index'])->middleware('auth');
Route::post('/seller_register', [SellerController::class, 'store'])->middleware('auth');
