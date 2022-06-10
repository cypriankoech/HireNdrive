<?php

use App\Http\Controllers\Admin\UserController;
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

Route::get('/checkout', function () {
    return view('client/checkout');
});

Route::get('/admin', function () {
    return view('admin/admin');
});


Route::get('/reservation', function () {
    return view('client/reservation');
});

Route::get('/dummy_login', function () {
    return view('auth/dummy_login');
});
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/admin/users',  UserController::class);
