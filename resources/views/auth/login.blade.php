@extends('layouts.app')

@section('content')
    <section class="vh-100 mt-5 mt-md-0">
        <div class="container">
            <div class="row">
                <div class="login-card mx-auto mt-5">
                    <div class="card border border-0 shadow">
                        <div class="card-body bg-transparent py-5">
                            <p class="fs-3 fw-bold text-center text-danger my-0">It all starts here!</p>
                            <p class="fs-3 text-center fw-bold">Login to Confessions</p>
                            {{-- @if (session('message'))
                            <h6 class="alert alert-warning mb-3">{{ session('message') }}</h6>
                        @endif --}}
                            <form method="POST" action="{{ route('login') }}" class="pt-5 px-4">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="mb-2 fw-bold">{{ __('Email Address') }}</label>
                                    <div class="input">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="Enter your email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="mb-2 fw-bold">{{ __('Password') }}</label>
                                    <div class="input">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="Enter your password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div>Don't have an account? <a class="text-decoration-none fs-6 fw-bold text-danger"
                                        href="{{ route('register') }}">
                                        Register now
                                    </a>
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-danger w-50">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section  -->
    <footer class="bg-danger">
        <p class="fs-6 text-white text-center mb-0 py-3">The Silliman Confessions ● All Rights Reserved © 2023</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
@endsection
