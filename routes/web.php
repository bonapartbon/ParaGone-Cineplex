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

Route::get('/', 'App\Http\Controllers\MovieController@display');

Route::resource('admin/movies', 'App\Http\Controllers\MovieController');
Route::resource('admin/bookings', 'App\Http\Controllers\BookingController');
Route::resource('booking', 'App\Http\Controllers\homepageBookingController');


Route::get('/showtimes', function () {
    return view('layouts/showtimes');
});

Route::get('/contact', function () {
    return view('layouts/contact');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Verify Register Route

Auth::routes(['verify' => true]);