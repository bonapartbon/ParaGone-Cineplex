@extends('admin.layout')

@section('content')
<main>
    <div class="container-fluid px-4">
    
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
                <h2 class="font-weight-bold">Movie List</h2>
                <button type="button" href="{{ route('movies.create') }}" class="btn btn-dark text-center my-0">+ Add New Movie</button>
            </div>
            <div class="card-body ">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Current</th>
                            <th>Genre</th>
                            <th>Duration</th>
                            <th>Release Date</th>
                            <th>Director</th>
                            <th>Actors</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                        <tr>
                            <th>{{ $movie->id }}</th>
                            <td><img src="/img/{{ $movie->movieImg }}" style="width:80px; height:auto;"></td>
                            <td>{{ $movie->movieTitle }}</td>
                            <td>{{ $movie->movieCurrent }}</td>
                            <td>{{ $movie->movieGenre }}</td>
                            <td>{{ $movie->movieDuration }}</td>
                            <td>{{ $movie->movieRelDate }}</td>
                            <td>{{ $movie->movieDirector }}</td>
                            <td>{{ $movie->movieActors }}</td>
                            <td> <a type="button" href="{{ route('movies.edit', $movie->id) }}" class="btn btn-dark ">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
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
            <div class="d-flex flex-row-reverse mx-3">{{$movies->links()}}</div>
        </div>
    </div>
</main>
@endsection