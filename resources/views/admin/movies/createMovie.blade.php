@extends('admin.layout')

@section('content')
<form class="row g-3 mx-5 my-3" action="{{ route('movies.store') }}" method="POST">
  <h1>Add New Movie</h1>
  @csrf
  <div class="col-md-6">
    <label class="form-label">Title</label>
    <input type="text" name="movieTitle" class="form-control" placeholder="Movie Title" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Genre</label>
    <input type="text" name="movieGenre" class="form-control" placeholder="Movie Genre" required>
  </div>
  <div class="col-md-4">
    <label class="form-label">Duration</label>
    <input type="number" name="movieDuration" class="form-control" placeholder="Movie Duration" required>
  </div>
  <div class="col-md-4">
    <label class="form-label">Release Date</label>
    <input type="date" name="movieRelDate" class="form-control" placeholder="Movie Release Date" required>
  </div>
  <div class="col-md-4">
    <label class="form-label">Director</label>
    <input type="text" name="movieDirector" class="form-control" placeholder="Movie Director" required>
  </div>
  <div class="col-md-12">
    <label class="form-label">Actors</label>
    <input type="text" name="movieActors" class="form-control" placeholder="Movie Actors" required>
  </div>
  <div class="mb-3">
    <label for="formFile" class="form-label">Movie Image</label>
    <input class="form-control" type="file" name="movieImg" required>
  </div>
  <div class="col-4">
    <button type="submit" class="btn btn-dark btn-lg">Add</button>
  </div>
</form>
@endsection