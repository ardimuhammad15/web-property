<?php

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

Route::get('/', function () {
    return view('index')->with('title','Home');
})-> name('home');

Route::get('/login', function () {
    return view('login')->with('title','Login');
})-> name('login');

Route::get('/signup', function () {
    return view('signup')->with('title','Sign Up');
})->name('signup');

Route::get('/unit', function () {
    return view('unit_rumah')->with('title','Unit');
})->name('unit');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
