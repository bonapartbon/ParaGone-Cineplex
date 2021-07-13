@extends('admin.layout')

@section('content')
    <main>
        <div class="container-fluid px-4 ">

            @if ($message = Session::get('success'))
                <div class="alert alert-success pb-0 mt-3">
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
                    <h2 class="font-weight-bold">All Bookings</h2>
                    <a type="button" href="{{ secure_route('bookings.create') }}" class="btn btn-dark my-1">+ Add New booking</a>
                </div>

                <div class="card-body table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Ticket</th>
                                <th>Total Price</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Approve</th>
                                <th>Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                {{-- @if ($booking->bookingStatus == 'Pending') --}}
                                <tr>
                                    <th>{{ $booking->id }}</th>
                                    <td>{{ $booking->movieName }}</td>
                                    <td>{{ $booking->bookingType }}</td>
                                    <td>{{ $booking->bookingDate }}</td>
                                    <td>{{ $booking->bookingTime }}</td>
                                    <td>{{ $booking->bookingName }}</td>
                                    <td>{{ $booking->bookingEmail }}</td>
                                    <td>{{ $booking->bookingPNumber }}</td>
                                    <th>{{ $booking->bookingTicket }}</th>
                                    <th>{{ $booking->total }}</th>
                                    <td><a type="button" href="{{ secure_route('bookings.edit', $booking->id) }}"
                                            class="btn btn-dark ">Edit</a></td>
                                    <td>
                                        <form action="{{ secure_route('bookings.destroy', $booking->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger ">Delete</button>
                                        </form>
                                    </td>
                                    @if ($booking->bookingStatus == 'Pending')
                                        <td class="mr-5">
                                            <form action="{{ secure_route('bookings.update', $booking->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <select name="bookingStatus" class="display-none" required>
                                                    <option value="Approved" selected></option>
                                                </select>
                                                <button type="submit" class="btn btn-secondary px-3 mr-5">Approve</button>
                                            </form>
                                        </td>
                                    @elseif ($booking->bookingStatus == 'Approved')
                                        <td>
                                            <a type="button" class="btn btn-success isDisabled">Approved</a>
                                        </td>
                                    @endif
                                    @if ($booking->status == 'Unpaid')
                                        <td class="mr-5">
                                            <form action="{{ secure_route('bookings.update', $booking->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <select name="status" class="display-none" required>
                                                    <option value="Paid" selected></option>
                                                </select>
                                                <button type="submit" class="btn btn-secondary px-3 mr-5">Pay</button>
                                            </form>
                                        </td>
                                    @elseif ($booking->status == 'Paid')
                                        <td>
                                            <a type="button" class="btn btn-success isDisabled">Paid</a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
