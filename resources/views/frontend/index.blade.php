@extends('layouts.app')

@section('title', 'Home')

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
                    <img class="category-nav-image" src="{{ asset($cateitem->image) }}" alt="">
                    <a class="text-decoration-none text-white fw-bold" href="{{ url('category/' . $cateitem->name) }}">
                        {{ $cateitem->name }}</a>
                </div>
            @endforeach
        </div>
        <div class="right-content">
            <div class="breadcrumbs mt-3 mb-3 mb-md-0">
                <i class="fa-solid fa-house" style="color: white;"></i>
                <a class="text-decoration-none text-white ps-1" href="{{ url('home') }}">Home</a>
            </div>
        </div>
    </section>

    {{-- List of confession --}}
    <section>
        <div class="container">
            <div class="row p-5">
                <div class="d-flex justify-content-between mb-5">
                    <div>
                        <p class="fs-1 fw-bold">Latest Confessions</p>
                    </div>
                    <div class="mt-3">
                        <a href="/new-post">
                            <button class="btn btn-danger ">New Confession</button>
                        </a>
                    </div>
                </div>
                @if (isset($post) && count($post) > 0)
                    @foreach ($post as $post_item)
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <a class="text-decoration-none text-dark"
                                href="{{ url('category/' . $post_item->category->name . '/' . $post_item->name) }}">
                                <div class="card shadow-sm w-100" style="width: 18rem;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img width="40" height="40"
                                                    src="https://img.icons8.com/ios-filled/50/user-male-circle.png"
                                                    alt="user-male-circle" />
                                                <div class="ps-1">
                                                    <p class="fs-6 m-0">{{ $post_item->user->name }}</p>
                                                    <p class="m-0 text-secondary" style="font-size: 10px;">
                                                        {{ $post_item->created_at->format('m-d-Y') }}</p>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="fs-6 mt-2 text-secondary">
                                                    {{ $post_item->category->name }}
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <p style="font-size: 12px;" class="fw-bold mt-4 mb-2 ps-1">
                                                {{ $post_item->name }}
                                            </p>
                                        </div>
                                        <div class="border border-1 border-secondary-subtle rounded-3 py-1 px-2"
                                            style="height: 180px;">
                                            <p class="fs-6 card-text">
                                                {{ $post_item->description }}
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
                        <p class="text-center fw-bold mt-5">There are no current confessions...</p>
                    </div>
                @endif
                <div class="d-flex justify-content-center">
                    <div class="paginate mt-5">
                        {{ $post->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
