@extends('layouts.app')

@section('title', "$category->name")

@section('content')
    <!-- Sub-header Section  -->
    <section class="bg-danger d-flex flex-column flex-md-row justify-content-between px-5">
        <div class="left-content py-2 d-flex flex-column flex-md-row mt-3 mt-md-0">
            @php
                $categories = App\Models\Category::where('navbar_status', '0')
                    ->where('status', '0')
                    ->get();
            @endphp
            @foreach ($categories as $cateitem)
                <div class="me-0 me-md-3 mb-3 mb-md-0 mb-mt-0">
                    <img class="category-nav-image" src="{{ asset("$cateitem->image") }}" alt="">
                    <a class="text-decoration-none text-white fw-bold" href="{{ url('category/' . $cateitem->name) }}">
                        {{ $cateitem->name }}</a>
                </div>
            @endforeach
        </div>
        <div class="right-content">
            <div class="breadcrumbs mt-3 mb-3 mb-md-0">
                <i class="fa-solid fa-house" style="color: white;"></i>
                <a class="text-decoration-none text-white ps-1" href="{{ url('home') }}">Home</a>
                <img width="15" height="15" src="https://img.icons8.com/ios-filled/15/FFFFFF/chevron-right.png"
                    alt="chevron-right" />
                <a class="text-decoration-none text-white ps-1" href="{{ url('categories') }}">Categories</a>
                <img width="15" height="15" src="https://img.icons8.com/ios-filled/15/FFFFFF/chevron-right.png"
                    alt="chevron-right" />
                <a class="text-decoration-none text-white ps-1"
                    href="{{ url('category/' . $cate_name) }}">{{ $cate_name }}</a>
            </div>
        </div>
    </section>

    <!-- Home Introduction Banner Section -->
    <section class="mt-5">
        <p class="fs-1 text-center fw-bold text-danger text-uppercase">{{ $cate_name }}</p>
        <p class="w-25 text-center mx-auto d-block">{{ $cate_description }}</p>
        <div class="text-center w-25 text-center mx-auto d-block">
            <a href="{{ url('new-post') }}" class="btn btn-outline-danger text-decoration-none">Create New Post</a>
            <form class="mt-5">
                <!-- Standard Search Bar  -->
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search by Name of post" name="search">
                    <span class="input-group-text" id="basic-addon2">
                        <button type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </section>

    <!-- Content Post Section  -->
    <section class="min-vh-50 mt-5 mb-5 container">
        <div class="row mt-5 w-100">
            @if (isset($post) && count($post) > 0)
                @foreach ($post as $postitem)
                    <div class="col-12 col-md-4 mb-3">
                        <a class="text-decoration-none text-dark"
                            href="{{ url('category/' . $postitem->category->name . '/' . $postitem->name) }}">
                            <div class="card shadow-sm w-100" style="width: 18rem;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <img width="40" height="40"
                                                src="https://img.icons8.com/ios-filled/50/user-male-circle.png"
                                                alt="user-male-circle" />
                                            <div class="ps-1">
                                                <p class="fs-6 m-0">{{ $postitem->user->name }}</p>
                                                <p class="m-0 text-secondary" style="font-size: 10px;">
                                                    {{ $postitem->created_at->format('m-d-Y') }}</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="fs-6 mt-2 text-secondary">
                                                {{ $postitem->category->name }}
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <p style="font-size: 12px;" class="fw-bold mt-4 mb-2 ps-1">{{ $postitem->name }}
                                        </p>
                                    </div>
                                    <div class="border border-1 border-secondary-subtle rounded-3 py-1 px-2"
                                        style="height: 180px;">
                                        <p class="fs-6 card-text">
                                            {{ $postitem->description }}
                                        </p>
                                    </div>
                                    <div class="mt-3 text-end">
                                        <img width="30" height="30"
                                            src="https://img.icons8.com/ios-glyphs/30/facebook-like--v1.png"
                                            alt="facebook-like--v1" />
                                        <img width="30" height="30"
                                            src="https://img.icons8.com/ios-glyphs/30/comments.png" alt="comments" />
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <div class="col-12 empty-output">
                    <p class="text-center fw-bold mt-5">There are no current confessions for this category...</p>
                </div>
            @endif
        </div>
    </section>

@endsection
