@extends('layouts.app')

@section('title', 'Contact')

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
                <a class="text-decoration-none text-white ps-1" href="{{ url('contact') }}">Contact</a>
            </div>
        </div>
    </section>

    <!-- Contact Section  -->
    <div class="container vh-100 pt-5 mt-5">
        <div class="row">
            <p class="display-4 fw-bold text-danger text-center">GET IN TOUCH</p>
            <div class="card mt-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 contact-us"></div>
                        <div class="col-lg-6 p-5">
                            <p class="fs-2 fw-medium text-danger text-uppercase m-0">Email Us</p>
                            <p>Want to get in touch? We'd love to hear from you. Here's how you can reach us...</p>
                            <div class="d-flex">
                                <img width="30" height="30"
                                    src="https://img.icons8.com/ios-glyphs/30/d9534f/new-post.png" alt="new-post" />
                                <p class="mt-1 ps-3 fw-bold">thesillimancon@gmail.com</p>
                            </div>
                            <p class="fs-2 fw-medium text-danger text-uppercase m-0 pt-5">Call Us</p>
                            <p>Our support team is here to help, have any concerns? Please use the information below</p>
                            <div class="d-flex">
                                <img width="30" height="30"
                                    src="https://img.icons8.com/ios-glyphs/30/d9534f/new-post.png" alt="new-post" />
                                <p class="mt-1 ps-3 fw-bold">+639123456789</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/script.js') }}" crossorigin="anonymous"></script>
@endsection
