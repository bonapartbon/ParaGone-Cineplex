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
                <h2 class="font-weight-bold">User List</h2>
            </div>

            <div class="card-body ">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th>{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->is_admin == 1)
                                Admin
                                @else
                                User
                                @endif
                            </td>
                            <td> <a type="button" href="{{ route('users.edit', $user->id) }}" class="btn btn-dark ">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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
            <div class="d-flex flex-row-reverse mx-3">{{$users->links()}}</div>
        </div>
    </div>
</main>
@endsection