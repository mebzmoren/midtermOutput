@extends('layouts.app')

@section('title', 'FAQ')

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
                <a class="text-decoration-none text-white ps-1" href="{{ url('faq') }}">FAQs</a>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="faq-container mt-5">
        <p class="fw-bold display-4 text-danger">Frequently Asked Questions (FAQs)</p>
        <p class="text-center fw-bold mt-2">Below you'll find answers to the questions we get asked the most.</p>

        <div class="faq">
            <div class="question">
                <p class="fw-bold fs-4">Will our personal information be exposed?</p>

                <svg width="15" height="10" viewBox="0 0 42 45">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="1" stroke-linecap="round" />
                </svg>

            </div>
            <div class="answer">
                <p class="fs-6">No, this is a confession page where all of the users are completely anonymous and by the
                    user's choice of identity upon registration.</p>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <p class="fw-bold fs-4">Can users outside Silliman University register?</p>

                <svg width="15" height="10" viewBox="0 0 42 45">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="1" stroke-linecap="round" />
                </svg>

            </div>
            <div class="answer">
                <p class="fs-6">Yes, all users is welcome to interact and confess. There is no limitation, but is it
                    appreciated if the topic or confession can relate to the university.</p>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <p class="fw-bold fs-4">Can I post multiple confessions?</p>

                <svg width="15" height="10" viewBox="0 0 42 45">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="1" stroke-linecap="round" />
                </svg>

            </div>
            <div class="answer">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper lorem et leo ultrices vulputate.
                    Nam
                    aliquet justo diam, in.</p>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <p class="fw-bold fs-4">Can I message the person who posted the confession?</p>

                <svg width="15" height="10" viewBox="0 0 42 45">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="1" stroke-linecap="round" />
                </svg>

            </div>
            <div class="answer">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper lorem et leo ultrices vulputate.
                    Nam
                    aliquet justo diam, in.</p>
            </div>
        </div>
    </section>

    <!-- FAQs Questions Section -->
    <section class="ask-questions">
        <h2>Still have questions?</h2>
        <p>You can visit our contact us page here!</p>
        <a href="{{ url('contact') }}"><button class="btn btn-danger">Contact Us</button></a>
    </section>
@endsection
