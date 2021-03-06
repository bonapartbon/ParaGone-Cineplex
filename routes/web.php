<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// public access
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', 'App\Http\Controllers\MovieController@display');
Route::get('/upcoming', 'App\Http\Controllers\MovieController@displayUp');
Route::resource('/booking', 'App\Http\Controllers\homepageBookingController');
Route::get('/ticket', 'App\Http\Controllers\homepageBookingController@display');
Route::post('/contact', [App\Http\Controllers\userContactController::class, 'store']);
Route::get('/contact', function () {
    return view('layouts/contact');
})->name('userContact');
Route::get('/about-us', function () {
    return view('layouts/about-us');
});
Route::post('/payment', 'App\Http\Controllers\homepageBookingController@buyNow');
Route::get('/payment/success', 'App\Http\Controllers\homepageBookingController@success');
Route::get('/payment/fail', 'App\Http\Controllers\homepageBookingController@fail');


// admin access
Route::get('admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::resource('admin/movies', 'App\Http\Controllers\MovieController')->middleware('is_admin');
Route::resource('admin/bookings', 'App\Http\Controllers\BookingController')->middleware('is_admin');
Route::resource('admin/users', 'App\Http\Controllers\UserController')->middleware('is_admin');
Route::get('admin/upcomings', 'App\Http\Controllers\MovieController@upcoming')->middleware('is_admin')->name('movies.upcoming');
Route::resource('admin/contact', 'App\Http\Controllers\ContactController')->middleware('is_admin');

// Verify Register Route
Auth::routes([]);
