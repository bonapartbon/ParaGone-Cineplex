@extends('admin.layout')

@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="card mb-4 mt-4 shadow p-2 bg-body rounded">
            <div class="card-body">

                <h1 class="pb-3">Dashboard</h1>

                <div class="row">
                    <div class="col-sm-12 col-lg-3">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Movies: <b class="float-end">{{count($movie)}}</b></div>

                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{url('admin/movies')}}">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Bookings: <b class="float-end">{{count($booking)}} </b></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{url('admin/bookings')}}">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Users: <b class="float-end">{{count($user)}} </b> </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{url('admin/users')}}">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <div class="card bg-secondary text-white mb-4">
                            <div class="card-body">Revenue:

                                <b class="float-end"> ${{ number_format(\App\Models\Booking::where('status', 'Paid')->sum('total'),2) }} </b>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{url('admin/bookings')}}">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-3">
                        <div class="card border-primary mb-3">
                            <h5 class="text-center mt-3">Movies</h5>
                            <div class="card-body d-flex justify-content-between text-center">
                                <div class="col-6">
                                    <h1>{{ \App\Models\Movie::where('movieCurrent', 'showing')->count('id') }}</h1>
                                    <div>Showing</div>
                                </div>
                                <div style="border-right: 1px solid #333;"></div>
                                <div class="col-6">
                                    <h1>{{ \App\Models\Movie::where('movieCurrent', 'upcoming')->count('id') }}</h1>
                                    <div>Upcoming</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <div class="card border-warning  mb-3">
                            <h5 class="text-center mt-3">Bookings</h5>
                            <div class="card-body d-flex justify-content-between text-center">
                                <div class="col-6">
                                    <h1>{{ \App\Models\Booking::where('bookingStatus', 'Approved')->count('id') }}</h1>
                                    <div>Approved</div>
                                </div>
                                <div style="border-right: 1px solid #333;"></div>
                                <div class="col-6">
                                    <h1>{{ \App\Models\Booking::where('bookingStatus', 'Pending')->count('id') }}</h1>
                                    <div>Unapproved</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <div class="card border-success mb-3">
                            <h5 class="text-center mt-3">Users</h5>
                            <div class="card-body d-flex justify-content-between text-center">
                                <div class="col-6">
                                    <h1>{{ \App\Models\User::where('is_admin', '1')->count('id') }}</h1>
                                    <div>Admin</div>
                                </div>
                                <div style="border-right: 1px solid #333;"></div>
                                <div class="col-6">
                                    <h1>{{ \App\Models\User::where('is_admin', '0')->count('id') }}</h1>
                                    <div>User</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <div class="card border-secondary mb-3">
                            <h5 class="text-center mt-3">Revenue</h5>
                            <div class="card-body d-flex justify-content-between text-center">
                                <div class="col-6">
                                    <h1>{{ \App\Models\Booking::where('status', 'Paid')->count('id') }}</h1>
                                    <div>Paid</div>
                                </div>
                                <div style="border-right: 1px solid #333;"></div>
                                <div class="col-6">
                                    <h1>{{ \App\Models\Booking::where('status', 'Unpaid')->count('id') }}</h1>
                                    <div>Unpaid</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="row">

        </div>

    </div>

</main>
@endsection
