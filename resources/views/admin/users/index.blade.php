@extends('layouts.master')

@section('title', 'View Users')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="d-md-flex justify-content-between">
            <p class="fs-2 text-danger fw-bold border-bottom border-danger border-3">VIEW USERS</p>
        </div>
        @if (session('message'))
            <div class="alert alert-success"> {{ session('message') }} </div>
        @endif
        <div class="mt-5">
            <table id="myDataTable" class="table table-striped nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->role_as == '1' ? 'Admin' : 'User' }}</td>
                            <td>
                                <a href="{{ url('admin/user/' . $item->id) }}" class="btn btn-success"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
