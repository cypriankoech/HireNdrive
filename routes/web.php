<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\BookingController;


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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');

Route::resource('/admin/users',  UserController::class);

Route::resource('cars',  CarController::class);
Route::resource('booking',  BookingController::class);

Route::get('/admin', [UserController::class, 'index'])->name('index','admin');

Route::get('/checkout', function () {
    return view('client/checkout');
})->name('checkout');

Route::get('/pay', function () {
    return view('client/pay');
})->name('pay');

Route::get('/end', function () {
    return view('/end');
})->name('end');

Route::get('/reservation', function () {
    return view('client/reservation');
})->name('reservation');

