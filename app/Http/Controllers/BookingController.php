<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Movie;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;
use Illuminate\Support\Facades\Mail;
use App\Mail\TicketsMail;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::orderBy('bookingStatus', 'desc')->orderBy('id', 'desc')->get();
        return view('admin.bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $movies = Movie::all();
        return view('admin.bookings.createBooking', compact('movies'));
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
            'movieName' => 'required',
            'bookingType' => 'required',
            'bookingStatus' => 'required',
            'bookingDate' => 'required',
            'bookingTime' => 'required',
            'bookingTicket' => 'required',
            'bookingName' => 'required',
            'bookingEmail' => 'required',
            'bookingPNumber' => 'required',
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
        $movies = Movie::all();
        return view('admin.bookings.editBooking', ['booking' => $booking, 'movies' => $movies]);
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
        $request->validate([]);

        $booking->update($request->all());

        if ($request->bookingStatus == 'Approved') {
            $details = $booking;
            Mail::to($booking->bookingEmail)->send(new TicketsMail($details));
            return redirect()->route('bookings.index')
                ->with('success', 'Booking Approved.');
        } else {
            return redirect()->route('bookings.index')
                ->with('success', 'Booking Updated Successfully.');
        }
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