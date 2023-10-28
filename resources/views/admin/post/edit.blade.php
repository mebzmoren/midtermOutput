@extends('layouts.master')

@section('title', 'Edit Post')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="d-md-flex justify-content-between">
            <p class="fs-2 text-danger fw-bold border-bottom border-danger border-3">UPDATE POSTS</p>
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
            <form action="{{ url('admin/update-post/' . $post->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="" class="mb-2">Category</label>
                    <select name="category_id" required class="form-control">
                        <option value="">-- Select Category --</option>
                        @foreach ($category as $cateitem)
                            <option value="{{ $cateitem->id }}" {{ $post->category_id == $cateitem->id ? 'selected' : '' }}>
                                {{ $cateitem->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="mb-2">Post Name</label>
                    <input type="text" name="name" value="{{ $post->name }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="" class="mb-2">Description</label>
                    <textarea name="description" rows="5" class="form-control">{!! $post->description !!}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="" class="mb-2">Status</label>
                            <input type="checkbox" name="status" {{ $post->status == '1' ? 'checked' : '' }} />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-danger">Update Post</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

    </div>
    </div>

@endsection
