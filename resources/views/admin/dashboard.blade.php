@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <div class="px-4">
        <div class="row">
            <div class="mt-5">
                <p class="fs-1 fw-bold text-danger m-0">Collection of Records</p>
                <p>Here's the latest list of records</p>
            </div>
            <div class="row">
                <div class="col-6 col-md-3 mb-2">
                    <div class="card bg-danger h-100">
                        <div class="card-body">
                            <p class="text-center text-white fw-medium text-uppercase">Total Categories</p>
                            <p class="display-4 fw-bold text-center text-white m-0">{{ $category_count }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <a href="{{ url('admin/category') }}" class="text-decoration-none text-white fs-6">VIEW
                                    DETAILS</a>
                                <p class="m-0 text-white">></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-2">
                    <div class="card bg-danger h-100">
                        <div class="card-body">
                            <p class="text-center text-white fw-medium text-uppercase">Total Posts</p>
                            <p class="display-4 fw-bold text-center text-white m-0">{{ $post_count }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <a href="{{ url('admin/posts') }}" class="text-decoration-none text-white fs-6">VIEW
                                    DETAILS</a>
                                <p class="m-0 text-white">></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-2">
                    <div class="card bg-danger h-100">
                        <div class="card-body">
                            <p class="text-center text-white fw-medium text-uppercase">Total Users</p>
                            <p class="display-4 fw-bold text-center text-white m-0">{{ $user_count }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <a href="{{ url('admin/users') }}" class="text-decoration-none text-white fs-6">VIEW
                                    DETAILS</a>
                                <p class="m-0 text-white">></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-2">
                    <div class="card bg-danger h-100">
                        <div class="card-body">
                            <p class="text-center text-white fw-medium text-uppercase">Total Admins</p>
                            <p class="display-4 fw-bold text-center text-white m-0">{{ $admin_count }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <a href="{{ url('admin/users') }}" class="text-decoration-none text-white fs-6">VIEW
                                    DETAILS</a>
                                <p class="m-0 text-white">></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="tb-wrapper">
                    <div class="d-flex">
                        <p style="cursor: pointer;"
                            class="row_toggle border row_toggle border-danger me-3 px-4 rounded text-danger text-uppercase py-2 is-active">
                            Categories</p>
                        <p style="cursor: pointer;"
                            class="row_toggle border row_toggle border-danger me-3 px-4 rounded text-danger text-uppercase py-2">
                            Posts</p>
                        <p style="cursor: pointer;"
                            class="row_toggle border row_toggle border-danger me-3 px-4 rounded text-danger text-uppercase py-2">
                            Users</p>
                    </div>
                    <div class="w-100 row_body table-responsive">
                        <table class="w-100 row_content is-active table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Category Name</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($category) && count($category) > 0)
                                    @foreach ($category as $item)
                                        <tr>
                                            <td class="text-center align-middle"> {{ $item->id }} </td>
                                            <td class="text-center align-middle"> {{ $item->name }} </td>
                                            <td class="text-center align-middle">
                                                <img src=" {{ asset($item->image) }}" width="50px" height="50px"
                                                    alt="">
                                            </td>
                                            <td class="text-center align-middle">
                                                <h6><span
                                                        class="badge {{ $item->status == '1' ? 'bg-danger' : 'bg-success' }}">{{ $item->status == '1' ? 'Hidden' : 'Visible' }}</span>
                                                </h6>
                                            </td>
                                            <td class="text-center align-middle"> {{ $item->created_at }} </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">
                                            <p class="text-center fw-bold">There are no categories...</p>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>

                        </table>
                        <table class="row_content table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Category Name</th>
                                    <th class="text-center">Post Name</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($posts) && count($posts) > 0)
                                    @foreach ($posts as $item)
                                        <tr>
                                            <td class="text-center align-middle">{{ $item->id }}</td>
                                            <td class="text-center align-middle">{{ $item->category->name }}</td>
                                            <td class="text-center align-middle">{{ $item->name }}</td>
                                            <td class="text-center align-middle">
                                                {{ $item->status == '1' ? 'Hidden' : 'Shown' }}</td>
                                            <td class="text-center align-middle">{{ $item->created_at }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">
                                            <p class="text-center fw-bold mt-3">There are no current confessions...</p>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <table class="row_content table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Role</th>
                                    <th class="text-center">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($users) && count($users) > 0)
                                    @foreach ($users as $item)
                                        <tr>
                                            <td class="text-center align-middle">{{ $item->id }}</td>
                                            <td class="text-center align-middle">{{ $item->name }}</td>
                                            <td class="text-center align-middle">{{ $item->email }}</td>
                                            <td class="text-center align-middle">
                                                {{ $item->role_as == '1' ? 'Admin' : 'User' }}
                                            </td>
                                            <td class="text-center align-middle"> {{ $item->created_at }} </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">
                                            <p class="text-center fw-bold mt-3">There are no users...</p>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
