@extends('admin.layout')

@section('content')
<div class="container-fluid px-4">
  <div class="card mb-4 mt-4 shadow p-2 bg-body rounded">
    <div class="card-body">

      <form class="row g-3 mx-2" action="{{ route('movies.update', $movie->id) }}" method="POST">
        <h1>Edit Existing Movie</h1>
        @csrf
        @method('PUT')
        <div class="col-md-4">
          <label class="form-label">Title</label>
          <input type="text" name="movieTitle" class="form-control" placeholder="Movie Title" required value="{{ $movie->movieTitle }}">
        </div>
        <div class="col-md-4">
          <label class="form-label">Current</label>
          <select class="form-select" name="movieCurrent" aria-label="Default select example" value="{{ $movie->movieCurrent}}" required>
            <option value="" disabled selected>Currently</option>
            <option name="movieCurrent" value="showing">Showing</option>
            <option name="movieCurrent" value="upcoming">UpComing</option>
          </select>
        </div>
        <div class="col-md-4">
          <label class="form-label">Genre</label>
          <input type="text" name="movieGenre" class="form-control" placeholder="Movie Genre" required value="{{ $movie->movieGenre }}">
        </div>
        <div class="col-md-4">
          <label class="form-label">Duration</label>
          <input type="number" name="movieDuration" class="form-control" placeholder="Movie Duration" required value="{{ $movie->movieDuration }}">
        </div>
        <div class="col-md-4">
          <label class="form-label">Release Date</label>
          <input type="date" name="movieRelDate" class="form-control" placeholder="Movie Release Date" required value="{{ $movie->movieRelDate }}">
        </div>
        <div class="col-md-4">
          <label class="form-label">Director</label>
          <input type="text" name="movieDirector" class="form-control" placeholder="Movie Director" required value="{{ $movie->movieDirector }}">
        </div>
        <div class="col-md-6">
          <label class="form-label">Actors</label>
          <input type="text" name="movieActors" class="form-control" placeholder="Movie Actors" required value="{{ $movie->movieActors }}">
        </div>
        <div class="col-md-6">
          <label class="form-label">Trailer URL</label>
          <input type="text" name="movieTrailer" class="form-control" placeholder="Movie Trailer URL" required value="{{ $movie->movieTrailer }}">
        </div>
        <div class="col-md-12">
          <label class="form-label">Description</label>
          <input type="text" name="movieDes" class="form-control" placeholder="Movie Actors" required value="{{ $movie->movieDes }}">
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Movie Image</label>
          <input class="form-control" type="text" name="movieImg" value="{{ $movie->movieImg }}" required >
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-dark btn-lg">Confirm</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
