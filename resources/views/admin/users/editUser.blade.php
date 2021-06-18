@extends('admin.layout')

@section('content')
<form class="row g-3 mx-5 my-3" action="{{ route('users.update', $user->id) }}" method="POST">
    <h1>Edit Existing User</h1>
    @csrf
    @method('PUT')
    <div class="row col-4">
    <div class="mb-2">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required value="{{ $user->name }}">
    </div>
    <div class="mb-2">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required value="{{ $user->email }}">
    </div>
    <div class="mb-2">
        <label class="form-label">Role</label>
        <select class="form-select" name="is_admin" aria-label="Default select example" value="{{ $user->is_admin}}" required>
        <option value="" disabled selected>Role</option>
            <option name="is_admin" value="0" >User</option>
            <option name="is_admin" value="1" >Admin</option>
        </select>
    </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-dark btn-lg">Confirm</button>
    </div>
</form>
@endsection