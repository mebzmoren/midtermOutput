@extends('layouts.master')

@section('title', 'Add Post')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="d-md-flex justify-content-between">
            <p class="fs-2 text-danger fw-bold border-bottom border-danger border-3">ADD POSTS</p>
            <a href="{{ url('admin/posts') }}">
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
            <form action="{{ url('admin/add-post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="mb-2">Category</label>
                    <select name="category_id" class="form-control">
                        @foreach ($category as $cateitem)
                            <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="mb-2">Post Name</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="" class="mb-2">Description</label>
                    <textarea name="description" rows="5" class="form-control"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="" class="mb-2">Status</label>
                            <input type="checkbox" name="status" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-danger">Save Post</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
