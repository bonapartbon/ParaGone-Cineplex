<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Movie;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::latest()->paginate(5);
        return view('admin.bookings.index', compact('bookings'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.bookings.createBooking');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'movieName'=>'required',
            'bookingTheatre'=>'required',
            'bookingType'=>'required',
            'bookingDate'=>'required',
            'bookingTime'=>'required',
            'bookingFName'=>'required',
            'bookingLName'=>'required',
            'bookingPNumber'=>'required',
        ]);

        Booking::create($request->all());

        return redirect()->route('bookings.index')
            ->with('success', 'Tickets Booked Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('admin.bookings.editBooking', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $request -> validate([

        ]);

        $booking->update($request->all());

        return redirect()->route('bookings.index')
            ->with('success', 'Booking Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')
        ->with('success', 'Booking Deleted Successfully.');
    }
}
