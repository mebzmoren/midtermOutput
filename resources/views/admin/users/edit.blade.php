@extends('layouts.master')

@section('title', 'Edit User')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="d-md-flex justify-content-between">
            <p class="fs-2 text-danger fw-bold border-bottom border-danger border-3">UPDATE USER</p>
            <a href="{{ url('admin/users') }}">
                <button class="btn btn-danger">
                    Go Back
                </button>
            </a>
        </div>
        <div class="card-body">

            <div class="mb-3">
                <label for="">Full Name</label>
                <input type="text" class="form-control" value="{{ $user->name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="">Email Id</label>
                <input type="text" class="form-control" value="{{ $user->email }}"readonly>
            </div>
            <div class="mb-3">
                <label for="">Created At</label>
                <input type="text" class="form-control" value="{{ $user->created_at->format('d/m/y') }}"readonly>
            </div>

            <form action="{{ url('admin/update-user/' . $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Role As</label>
                    <select name="role_as" class="form-control">
                        <option value="1" {{ $user->role_as == '1' ? 'selected' : '' }}>Admin</option>
                        <option value="0" {{ $user->role_as == '0' ? 'selected' : '' }}>User</option>
                        <option value="2" {{ $user->role_as == '2' ? 'selected' : '' }}>Blogger</option>
                    </select>
                </div>

                <div class="mb-3 text-end">
                    <button type="submit" class="btn btn-danger">Update User Role</button>
                </div>
            </form>
        </div>
    </div>

@endsection
