<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::orderBy('id','desc')->get();
        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upcoming()
    {
        $movies = Movie::orderBy('id','desc')->get();
        return view('admin.movies.upcoming', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movies.createMovie');
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
            'movieImg'=>'required',
            'movieTitle'=>'required',
            'movieCurrent'=>'required',
            'movieGenre'=>'required',
            'movieDuration'=>'required',
            'movieRelDate'=>'required',
            'movieDirector'=>'required',
            'movieActors'=>'required',
            'movieTrailer'=>'required',
            'movieDes'=>'required',
        ]);

        Movie::create($request->all());

        if ($request->movieCurrent == "showing"){
            return redirect()->route('movies.index')
            ->with('success', 'Movie Added Successfully.');
        }else {
            return redirect()->route('movies.upcoming')
            ->with('success', 'Movie Added Successfully.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    // Show movies to Showing Homepage
    public function display()
    {
        $data = Movie::orderBy('id','desc')->get();
        return view('layouts.homepage',['movies'=>$data]);
    }

    // Show movies to Upcoming Homepage
    public function displayUp()
    {
        $data = Movie::orderBy('id','desc')->get();
        return view('layouts.upcoming',['movies'=>$data]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('admin.movies.editMovie', compact('movie'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request -> validate([

        ]);

        $movie->update($request->all());

        // return redirect()->route('movies.index')
        //     ->with('success', 'Movie Updated Successfully.');
        if ($request->movieCurrent == "showing"){
            return redirect()->route('movies.index')
            ->with('success', 'Movie Updated Successfully.');
        }else {
            return redirect()->route('movies.upcoming')
            ->with('success', 'Movie Updated Successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        // return redirect()->route('movies.index')
        // ->with('success', 'Movie Deleted Successfully.');
        if ($movie->movieCurrent == "showing"){
            return redirect()->route('movies.index')
            ->with('success', 'Movie Deleted Successfully.');
        }else {
            return redirect()->route('movies.upcoming')
            ->with('success', 'Movie Deleted Successfully.');
        }
    }
}
