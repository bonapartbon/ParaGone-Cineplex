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
                            <div class="card-body">Revenue: </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection