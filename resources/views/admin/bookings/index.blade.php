@extends('admin.layout')

@section('content')
<div class="mx-5 my-5">

    <div class="d-flex justify-content-between">
        <h1>Booking List</h1>
        <div>
            <a type="button" href="{{ route('bookings.create') }}" class="btn btn-dark ">+ Add New booking</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success pb-0">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-striped table-hover" id="datatablesSimple">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Type</th>
                <th>Date</th>
                <th>Time</th>
                <th>Name</th>
                <th>Ticket</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
            <tr>
                <th>{{ $booking->id }}</th>
                <td>{{ $booking->movieName }}</td>
                <td>{{ $booking->bookingType }}</td>
                <td>{{ $booking->bookingDate }}</td>
                <td>{{ $booking->bookingTime }}</td>
                <td>{{ $booking->bookingTicket }}</td>
                <td>{{ $booking->bookingName }}</td>
                <td>{{ $booking->bookingEmail }}</td>
                <td>{{ $booking->bookingPNumber }}</td>
                <td><a type="button" href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-dark ">Edit</a></td>
                <td>
                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$bookings->links()}}
</div>
@endsection