@extends('admin.layout')

@section('content')
<form class="row g-3 mx-5 my-3" action="{{ route('bookings.store') }}" method="POST">
    <h1>Add New Booking</h1>
    @csrf
    <div class="col-md-6">
        <label class="form-label">Title</label>
        <input type="text" name="movieName" class="form-control" placeholder="Movie Title" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">Theatre</label>
        <select name="bookingTheatre" class="form-select" aria-label="Default select example" required>
            <option value="" disabled selected>Theatre</option>
            <option>Mini (3 Seats)</option>
            <option>Medium (5 Seats)</option>
            <option>Giant (10 Seats)</option>
            </select>
    </div>
    <div class="col-md-4">
        <label class="form-label">Type</label>
        <select name="bookingType" class="form-select" aria-label="Default select example" required>
            <option value="" disabled selected>Type</option>
            <option>2D</option>
            <option>3D</option>
            <option>4DX</option>
            </select>
    </div>
    <div class="col-md-4">
        <label class="form-label">Date</label>
        <input type="date" name="bookingDate" class="form-control" placeholder="Movie Date" required>
    </div>
    <div class="col-md-4">
        <label class="form-label">Time</label>
        <input type="time" name="bookingTime" class="form-control" placeholder="Movie Time" required>
    </div>
    <div class="col-md-4">
        <label class="form-label">First Name</label>
        <input type="text" name="bookingFName" class="form-control" placeholder="First Name" required>
    </div>
    <div class="col-md-4">
        <label class="form-label">Last Name</label>
        <input type="text" name="bookingLName" class="form-control" placeholder="Last Name" required>
    </div>
    <div class="col-md-4">
        <label class="form-label">Phone Number</label>
        <input type="text" name="bookingPNumber" class="form-control" placeholder="Phone Number" required>
    </div>



    <div class="col-12">
        <button type="submit" class="btn btn-dark btn-lg">Add</button>
    </div>
</form>
@endsection