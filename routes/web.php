<?php

use Illuminate\Support\Facades\Route;
use App\Models\Booking;
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
    return view('home');
});

Route::get('/showtimes', function () {
    return view('layouts/showtimes');
});

Route::get('/contact', function () {
    return view('layouts/contact');
});

Route::get('/booking', function () {
    return view('layouts/booking');
});

Route::post('/booking', function () {
    $booking = new Booking();
    $booking->movieName = request('movieName');
    $booking->bookingTheatre = request('bookingTheatre');
    $booking->bookingType = request('bookingType');
    $booking->bookingDate = request('bookingDate');
    $booking->bookingTime = request('bookingTime');
    $booking->bookingFName = request('bookingFName');
    $booking->bookingLName = request('bookingLName');
    $booking->bookingPNumber = request('bookingPNumber');
    $booking->save();
    return redirect('');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Verify Register Route

Auth::routes(['verify' => true]);