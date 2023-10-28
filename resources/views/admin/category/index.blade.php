@extends('layouts.master')

@section('title', 'Category')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="d-md-flex justify-content-between">
            <p class="fs-2 text-danger fw-bold border-bottom border-danger border-3">VIEW CATEGORY</p>
            <a href="{{ url('admin/add-category') }}">
                <button class="btn btn-danger">
                    Add Category
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
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td> {{ $item->id }} </td>
                            <td> {{ $item->name }} </td>
                            <td>
                                <img src=" {{ asset($item->image) }}" width="50px" height="50px" alt="">
                            </td>
                            <td> {{ $item->status == '1' ? 'Hidden' : 'Visible' }} </td>
                            <td>
                                <a href=" {{ url('admin/edit-category/' . $item->id) }}" class="btn btn-success"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href=" {{ url('admin/delete-category/' . $item->id) }}" class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('.deleteCategoryBtn').click(function(e) {
                e.preventDefault();

                var category_id = $(this).val();
                $('#category_id').val(category_id);
                $('#deleteModal').modal('show');
            });
        });
    </script>

@endsection
