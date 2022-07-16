<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;


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

Route::get('/', function () {
    return view('index')->with('title', 'Home');
})->name('home');

Route::get('login', function () {
    return view('login')->with('title', 'Login');
})->name('login');

Route::get('signup', function () {
    return view('signup')->with('title', 'Sign Up');
})->name('signup');

Route::get('unit', function () {
    return view('unit')->with('title', 'Unit');
})->name('unit');

Route::resource('orders', OrderController::class)->only(['index', 'show']);

Route::get('checkout', function () {
    return view('checkout')->with('title', 'Checkout');
})->name('checkout');

Route::get('/dashboard', [App\Http\Controllers\OrderController::class, 'dashboard'])->name('dashboard');

Route::get('/input_dashboard', function () {
    return view('input_dashboard')->with('title', 'Dashboard-Admin');
})->name('input_dashboard');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', [App\Http\Controllers\OrderController::class, 'index'])->name('test');
Route::get('/payment', [App\Http\Controllers\OrderController::class, 'payment'])->name('payment');
Route::post('/payment/store', [App\Http\Controllers\OrderController::class, 'store'])->name('paymentstore');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('payments/midtrans-notification', [PaymentCallbackController::class, 'receive']);
