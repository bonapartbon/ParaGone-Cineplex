@extends('admin.layout')

@section('content')
<main>
    <div class="container-fluid px-4 ">

        @if ($message = Session::get('success'))
        <div class="alert alert-success pb-0">
            <p>{{ $message }}</p>
        </div>
        @endif
        @if ($message = Session::get('error'))
        <div class="alert alert-danger pb-0 mt-3">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="card mb-4 mt-4 shadow p-2 bg-body rounded">
            <div class="card-header d-flex justify-content-between">
                <h2 class="font-weight-bold">Category List</h2>
                <button type="button" href="{{ route('bookings.create') }}" class="btn btn-dark ">+ Add New booking</button>
            </div>

            <div class="card-body ">
                <table class="table table-striped table-hover">
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
            </div>
            <div class="d-flex flex-row-reverse mx-3">{{$bookings->links()}}</div>
        </div>
    </div>
</main>
@endsection