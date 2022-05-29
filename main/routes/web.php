<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

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
Route::delete('remove-shop', [ProductController::class, 'removeShop'])->name('remove_shop');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update_cart');
