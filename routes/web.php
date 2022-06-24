<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;


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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::resource('/admin/users',  UserController::class);
Route::get('/admin', [UserController::class, 'index']);

Route::get('/checkout', function () {
    return view('client/checkout');
});

Route::get('/pay', function () {
    return view('client/pay');
});

Route::get('/reservation', function () {
    return view('client/reservation');
});
