<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>The Silliman Con</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .page-item.active .page-link {
            background-color: #564D4A;
        }

        .page-link {
            color: #564D4A;
        }

        .page-link:hover {
            color: #564D4A;
        }
    </style>
</head>

<body>
    @guest
        @include('layouts.inc.guest-navbar')
    @else
        @include('layouts.inc.user-navbar')
    @endguest

    @yield('content')

    @guest
    @else
        @include('layouts.inc.footer')
    @endguest

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/script.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/custom.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}" crossorigin="anonymous"></script>


    @yield('scripts')
</body>

</html>
