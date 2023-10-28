@extends('layouts.app')

@section('title', 'About')

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
                <a class="text-decoration-none text-white ps-1" href="{{ url('about') }}">About</a>
            </div>
        </div>
    </section>

    <!-- Introduction Section  -->
    <section class="container pt-5 mb-5">
        <div class="row mt-5">
            <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                <p class="display-4 fw-bold text-danger">Confess, Vent, and Find Relief Anonymously</p>
                <p>Voicing out secrets anonymously can be a sensitive and complex matter. It's a good thing that we are here
                    to serve your needs. Your voice matters and your confessions can be a beacon of hope, a source of
                    comfort, or a revelation for others.</p>
            </div>
            <div class="col-12 col-lg-6">
                <img src="assets/images/logo.png" alt="#" class="mx-auto d-block w-50">
            </div>
        </div>
    </section>

    {{-- About the website and goal of developer --}}
    <section class="container mt-5 mb-5">
        <div class="row">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-12 col-lg-6 community m-0"></div>
                        <div class="col-12 col-lg-6 p-5">
                            <p class="fs-2 fw-bold text-danger">Why we created this platform?</p>
                            <p class="fs-6 text-justify">
                                But sharing can do more than just save you a buck. New psychological research suggests that
                                sharing fosters trust and cooperation in the community and contributes to personal
                                well-being.
                            </p>
                            <div class="mt-3">
                                <div class="d-flex mb-3">
                                    <img width="30" height="30"
                                        src="https://img.icons8.com/material-sharp/30/d9534f/checked--v1.png"
                                        alt="checked--v1" />
                                    <p class="ps-3">Sharing can cause the release of oxytocin, a hormone that increases
                                        feelings of
                                        well-being</p>
                                </div>
                                <div class="d-flex mb-3">
                                    <img width="30" height="30"
                                        src="https://img.icons8.com/material-sharp/30/d9534f/checked--v1.png"
                                        alt="checked--v1" />
                                    <p class="ps-3">Sharing with others is scientifically proven to be good for your brain
                                    </p>
                                </div>
                                <div class="d-flex mb-3">
                                    <img width="30" height="30"
                                        src="https://img.icons8.com/material-sharp/30/d9534f/checked--v1.png"
                                        alt="checked--v1" />
                                    <p class="ps-3">Sharing Helps Build You a Social Network with a sense of being
                                        belonged.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section  -->
    <section class="container pt-5 mb-5">
        <div class="row">
            <p class="fs-1 text-center fw-bold text-danger mb-5">Meet The Team</p>
            <div class="row mx-auto">
                <div class="col-12 col-md-4 mb-5 mb-md-0">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="/images/moses.png" style="width: 150px; height: 150px; object-fit: cover;"
                                    class="rounded-circle mt-3 border border-2 border-danger" alt="developer">
                                <p class="fs-3 fw-medium text-danger mt-2 mb-0">Moses Cubelo</p>
                                <p class="fw-medium">Back-End Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-5 mb-md-0">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="/images/moses.png" style="width: 150px; height: 150px; object-fit: cover;"
                                    class="rounded-circle mt-3 border border-2 border-danger" alt="developer">
                                <p class="fs-3 fw-medium text-danger mt-2 mb-0">Sam & Blane</p>
                                <p class="fw-medium">Back-End Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-5 mb-md-0">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="/images/mebz.png" style="width: 150px; height: 150px; object-fit: cover;"
                                    class="rounded-circle mt-3 border border-2 border-danger" alt="developer">
                                <p class="fs-3 fw-medium text-danger mt-2 mb-0">Ellyza Papas</p>
                                <p class="fw-medium">Back-End Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer Quote --}}
    <section class="container bg-danger my-5 p-5 rounded-pill">
        <div class="row">
            <p class="fs-3 fw-bold text-white text-center p-3 mt-2">"The easiest and most powerful way to increase customer
                loyalty is
                really
                very
                simple. Make
                your customers happy."</p>
        </div>
    </section>
@endsection
