<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Database Table Link  -->
    {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        .dataTables_wrapper .dataTables_length {
            margin-bottom: 30px;
        }

        .dataTables_wrapper .dataTables_info {
            margin-top: 30px;
        }

        .dataTables_wrapper .dataTables_paginate {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    @include('layouts.inc.admin-navbar')

    <div>
        <div class="d-flex" id="admin-row">
            <div class="col-2-nav p-0 " id="admin-sidebar" style="background-color: #F0F0F0">
                @include('layouts.inc.admin-sidebar')
            </div>
            <div class="col-10-nav px-5" id="admin-content">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/script.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/custom.js') }}" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
    <!-- Database Table Script -->
    {{-- <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> --}}

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>

    <script>
        $(document).ready(function() {
            new DataTable('#myDataTable', {
                fixedColumns: true,
                paging: true,
                scrollCollapse: true,
                scrollX: true,
                scrollY: 700
            });
        });

        function myFunction(x) {
            if (x.matches) {
                document.getElementById('admin-sidebar').classList.remove('col-2-nav');
                document.getElementById('admin-sidebar').classList.add('d-none');
                document.getElementById('admin-content').classList.add('col-10-nav');
                document.getElementById('admin-content').classList.add('col-10-nav-hide')
                document.getElementById('admin-content').classList.add('col-10-nav-full')
            }
        }

        var x = window.matchMedia("(max-width: 700px)")
        myFunction(x);
        x.addListener(myFunction);
    </script>



    @yield('scripts')
</body>

</html>
