@extends('admin.layout')

@section('content')
<div class="mx-5 my-5">

    <div class="d-flex justify-content-between">
        <h1>Movies List</h1>
        <div>
            <a type="button" href="{{ route('movies.create') }}" class="btn btn-dark ">+ Add New Movie</a>
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
                <th>Image</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Duration</th>
                <th>Release Date</th>
                <th>Director</th>
                <th>Actors</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Duration</th>
                <th>Release Date</th>
                <th>Director</th>
                <th>Actors</th>
                <th>Actions</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/img/{{ $movie->movieImg }}" style="width:80px; height:auto;"></td>
                <td>{{ $movie->movieTitle }}</td>
                <td>{{ $movie->movieGenre }}</td>
                <td>{{ $movie->movieDuration }}</td>
                <td>{{ $movie->movieRelDate }}</td>
                <td>{{ $movie->movieDirector }}</td>
                <td>{{ $movie->movieActors }}</td>
                <td>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                        <a type="button" href="{{ route('movies.edit', $movie->id) }}" class="btn btn-dark ">Edit</a>
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