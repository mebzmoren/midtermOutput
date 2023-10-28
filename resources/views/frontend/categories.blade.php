@extends('layouts.app')

@section('title', 'Category')

@section('content')
    <!-- Categories Section  -->
    <section class="min-vh-100">
        <div class="pt-5 mb-5">
            <p class="fs-1 text-center text-uppercase text-danger fw-bold">Select a Category</p>
            <p class="mx-auto d-block w-50 text-center">Confession is a deeply personal and often cathartic act that
                spans various
                categories, each carrying its
                unique significance. It's a powerful way to express one's truth, seek forgiveness, or
                share inner thoughts and emotions. Here are some categories of confession:</p>
        </div>
        <div class="w-50 mx-auto d-block mt-5">
            <div class="row">
                @if (count($categories) > 0)
                    @foreach ($categories as $cateitem)
                        <div class="col-12 col-md-4">
                            <img src="{{ asset("$cateitem->image") }}" alt="category"
                                class="img-fluid w-100 h-50 rounded mx-auto d-block mb-3 shadow" style="object-fit: cover;">
                            <p class="text-center fw-medium text-danger fs-5 text-uppercase">{{ $cateitem->name }}</p>
                            <a href="{{ url('category/' . $cateitem->name) }}" class="text-decoration-none pt-5">
                                <button class="btn btn-danger w-100">
                                    View Confession
                                </button>
                            </a>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 empty-output">
                        <p class="text-center fw-bold mt-5">There are no categories...</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
