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

Route::resource('admin/movies', 'App\Http\Controllers\MovieController')->middleware('is_admin');
Route::resource('admin/bookings', 'App\Http\Controllers\BookingController')->middleware('is_admin');
Route::resource('admin/users', 'App\Http\Controllers\UserController')->middleware('is_admin');
Route::resource('admin/upcomings', 'App\Http\Controllers\adminUpcomingController')->middleware('is_admin');

Route::resource('booking', 'App\Http\Controllers\homepageBookingController');

Route::get('/upcoming', function () {
    return view('layouts/upcoming');
});
Route::get('/showtimes', function () {
    return view('layouts/showtimes');
});

Route::get('/contact', function () {
    return view('layouts/contact');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/upcoming', [App\Http\Controllers\upcomingController::class, 'index'])->name('upcoming');
Route::get('admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Verify Register Route

Auth::routes(['verify' => true]);
