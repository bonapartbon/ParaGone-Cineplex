@extends('admin.layout')

@section('content')
<div class="container-fluid px-4">
    <div class="card mb-4 mt-4 shadow p-2 bg-body rounded">
        <div class="card-body">
            <form class="row g-3 mx-2" action="{{ route('bookings.update', $booking->id) }}" method="POST">
                <h1>Edit Existing Booking</h1>
                @csrf
                @method('PUT')
                <div class="col-md-4">
                    <label class="form-label">Title</label>
                    <select name="movieName" class="form-select" aria-label="Default select example" required >
                        <option selected>{{$booking->movieName}}</option>
                        @foreach ($movies as $movie)
                        @if ($movie->movieCurrent == "showing")
                        @if ($movie->movieTitle == $booking->movieName)
                        @else
                        <option>{{$movie->movieTitle}}</option>
                        @endif
                        @endif
                        @endforeach
                    </select>
                    
                </div>
                <div class="col-md-4">
                    <label class="form-label">Type</label>
                    <select name="bookingType" class="form-select" id="bookingType" oninput="calc();" required >
                        <option selected>{{$booking->bookingType}}</option>
                        <option>2D</option>
                        <option>3D</option>
                        <option>4DX</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Date</label>
                    <select name="bookingDate" class="form-select" required>
                        <option selected>{{$booking->bookingDate}}</option>
                        <option>June 19, 2021</option>
                        <option>June 21, 2021</option>
                        <option>June 22, 2021</option>
                        <option>June 23, 2021</option>
                        <option>June 24, 2021</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Time</label>
                    <select name="bookingTime" class="form-select" required>
                        <option disabled selected>{{$booking->bookingTime}}</option>
                        <option>09:00 AM</option>
                        <option>12:00 AM</option>
                        <option>03:00 PM</option>
                        <option>06:00 PM</option>
                        <option>09:00 PM</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Tickets</label>
                    <select name="bookingTicket" class="form-select" id="bookingTicket" oninput="calc();" required>
                        <option disabled selected>{{$booking->bookingTicket}}</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="bookingName" class="form-control" placeholder="Full Name" required value="{{$booking->bookingName}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Email</label>
                    <input type="email" name="bookingEmail" class="form-control" placeholder="Email" required value="{{$booking->bookingEmail}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Phone Number</label>
                    <input type="text" name="bookingPNumber" class="form-control" placeholder="Phone Number" required value="{{$booking->bookingPNumber}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Total Price ($)</label>
                    <input type="text" name="total" id="total" class="form-control" placeholder="Total Price" readonly value="{{$booking->total}}">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-dark btn-lg">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

