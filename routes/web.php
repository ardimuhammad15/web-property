<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentCallbackController; 



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
    return view('index')->with('title','Home');
})-> name('home');
Route::get('/checkout', function () {
    return view('checkout');
})-> name('checkout');

Route::get('/login', function () {
    return view('login')->with('title','Login');
})-> name('login');

Route::get('/signup', function () {
    return view('signup')->with('title','Sign Up');
})->name('signup');

Route::get('/unit', function () {
    return view('unit_rumah')->with('title','Unit');
})->name('unit');

Route::resource('orders', OrderController::class)->only(['index', 'show']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('payments/midtrans-notification', [PaymentCallbackController::class, 'receive']);