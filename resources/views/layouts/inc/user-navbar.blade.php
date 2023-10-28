<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top px-5">
    <div class="container-fluid">
        <div class="d-flex">
            <div>
                <a class="navbar-brand d-flex" href="/home">
                    <img class="logo-img h-100 align-self-center" src="{{ asset('assets/images/logo.png') }}"
                        alt="logo" srcset="">
                    <p class="logo fs-3 fw-bold ps-2 pt-3" style="color: #dc3545;">TheSillimanCon</p>
                </a>
            </div>
            <button class="navbar-toggler h-100 mt-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ms-auto me-md-5">
                <li class="nav-item mx-2 {{ Request::is('home') ? 'border-bottom border-danger border-3' : '' }}">
                    <a class="text-decoration-none fw-bold text-danger" href="{{ url('home') }}">HOME</a>
                </li>
                <li class="nav-item mx-2 {{ Request::is('about') ? 'border-bottom border-danger border-3' : '' }}">
                    <a class="text-decoration-none fw-bold text-danger" href="{{ url('about') }}">ABOUT</a>
                </li>
                <li class="nav-item mx-2 {{ Request::is('contact') ? 'border-bottom border-danger border-3' : '' }}">
                    <a class="text-decoration-none fw-bold text-danger" href="{{ url('contact') }}">CONTACT</a>
                </li>
                <li class="nav-item mx-2 {{ Request::is('categories') ? 'border-bottom border-danger border-3' : '' }}">
                    <a class="text-decoration-none fw-bold text-danger" href="{{ url('categories') }}">CATEGORIES</a>
                </li>
                <li class="nav-item mx-2 {{ Request::is('faq') ? 'border-bottom border-danger border-3' : '' }}">
                    <a class="text-decoration-none fw-bold text-danger" href="{{ url('faq') }}">FAQs</a>
                </li>
            </ul>
            <div class="d-flex mt-3 mt-md-0">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button
                        type="button" class="btn btn-danger">LOGOUT</button></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>
