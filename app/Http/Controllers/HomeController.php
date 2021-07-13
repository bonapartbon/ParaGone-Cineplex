<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Booking;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Movie::orderBy('id','desc')->get();
        return view('layouts.homepage', ['movies' => $data]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $data = Movie::all();
        $data1 = Booking::all();
        $data2 = User::all();

        return view('/admin/adminHome',['movie'=>$data, 'booking'=>$data1, 'user'=>$data2]);

    }
    
}
