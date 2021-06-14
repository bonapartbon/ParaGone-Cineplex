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

    <table id="datatablesSimple">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Theatre</th>
                <th>Type</th>
                <th>Date</th>
                <th>Time</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Theatre</th>
                <th>Type</th>
                <th>Date</th>
                <th>Time</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($bookings as $booking)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $booking->movieName }}</td>
                <td>{{ $booking->bookingTheatre }}</td>
                <td>{{ $booking->bookingType }}</td>
                <td>{{ $booking->bookingDate }}</td>
                <td>{{ $booking->bookingTime }}</td>
                <td>{{ $booking->bookingFName }}</td>
                <td>{{ $booking->bookingLName }}</td>
                <td>{{ $booking->bookingPNumber }}</td>


                <td>
                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">
                        <a type="button" href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-dark ">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection