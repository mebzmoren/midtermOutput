@extends('layouts.app')

@section('title', 'New Post')

@section('content')
    <!-- Post Pop-Up Section  -->
    <section class="vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 col-lg-5 mt-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <div> {{ $error }} </div>
                            @endforeach
                        </div>
                    @endif
                    @if (session('message'))
                        <h6 class="alert alert-success mb-3">{{ session('message') }}</h6>
                    @endif
                    <div class="card">
                        <div class="card-header bg-danger text-white fw-bold py-4">
                            <div class="d-flex justify-content-between">
                                Post Your Confession
                                <a href="{{ url()->previous() }}"
                                    class="text-decoration-none text-white cursor-pointer">X</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('new-post') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <div class="content-title category-details">
                                        <p class="fs-6 fw-medium m-0">Category Name</p>
                                        <select name="category_id" class="form-select">
                                            <option value="1">test</option>
                                            @foreach ($category as $cateitem)
                                                <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="content-title">
                                        <p class="fs-6 fw-medium m-0">Confession Title</p>
                                    </div>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <div class="content-title">
                                        <p class="fs-6 fw-medium m-0">Confession Message</p>
                                    </div>
                                    <textarea required="required" name="description" row="3" style="height: 150px;" class="form-control"
                                        maxlength="255"></textarea>
                                </div>
                                <div class="content-btn">
                                    <button type="submit" class="btn btn-outline-dark w-100">POST</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
