@extends('layouts.master')

@section('title', 'View Post')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="d-md-flex justify-content-between">
            <p class="fs-2 text-danger fw-bold border-bottom border-danger border-3">VIEW POSTS</p>
            <a href="{{ url('admin/add-post') }}">
                <button class="btn btn-danger">
                    Add Posts
                </button>
            </a>
        </div>
        @if (session('message'))
            <div class="alert alert-success"> {{ session('message') }} </div>
        @endif
        <div class="mt-5">
            <table id="myDataTable" class="table table-striped nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Post Name</th>
                        <th>Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->status == '1' ? 'Hidden' : 'Visible' }}</td>
                            <td>
                                <a href=" {{ url('admin/edit-post/' . $item->id) }}" class="btn btn-success"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href=" {{ url('admin/delete-post/' . $item->id) }}" class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
