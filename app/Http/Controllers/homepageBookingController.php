<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\TicketsMail;

class homepageBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Movie::latest()->get();
        return view('layouts.homepage')->with('movies', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'bookingDate' => 'required',
            'bookingTime' => 'required',
            'bookingTicket' => 'required',
            'bookingName' => 'required',
            'bookingEmail' => 'required',
            'bookingPNumber' => 'required',
            'bookingStatus' => 'required',
        ]);

        Booking::create($request->all());
        $details = Booking::latest()->get()->first();
        if (Auth::check()) {
            Mail::to(Auth::user()->email)->send(new TicketsMail($details));
        } else {
            Mail::to($request->bookingEmail)->send(new TicketsMail($details));
        }
        return redirect()->route('booking.index')
            ->with('success', 'Tickets Booked Successfully, Please check your email for the ticket detail!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Movie::find($id);
        return view('layouts.booking')->with('movie', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function display()
    {
        $data = Booking::latest()->get();
        return view('layouts.ticket',['bookings'=>$data]);
    }
}
