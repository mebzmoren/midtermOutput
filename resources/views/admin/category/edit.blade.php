@extends('layouts.master')

@section('title', 'Edit Category')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="d-md-flex justify-content-between">
            <p class="fs-2 text-danger fw-bold border-bottom border-danger border-3">EDIT CATEGORY</p>
            <a href="{{ url('admin/category') }}">
                <button class="btn btn-danger">
                    Go Back
                </button>
            </a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div> {{ $error }} </div>
                @endforeach
            </div>
        @endif
        <div class="card p-3 mt-5">
            <form action=" {{ url('admin/update-category/' . $category->id) }} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="mb-2"> Category Name </label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="mb-2"> Description </label>
                    <textarea name="description" rows="5" class="form-control">{{ $category->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="mb-2"> Image </label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label class="mb-2"> Navbar Status </label>
                        <input type="checkbox" name="navbar_status"
                            {{ $category->navbar_status == '1' ? 'checked' : '' }} />
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="mb-2"> Status </label>
                        <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked' : '' }} />
                    </div>
                    <div class="col-md-6 text-end">
                        <button type="submit" class="btn btn-danger"> Update Category </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
