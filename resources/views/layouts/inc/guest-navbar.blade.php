<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top px-5">
    <div class="container-fluid">
        <div class="d-flex">
            <div>
                <a class="navbar-brand d-flex" href="/">
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
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <form class="d-flex" role="search">
                <a href="{{ route('login') }}" class="pe-2"><button type="button"
                        class="btn btn-outline-danger">LOGIN</button></a>
                <a href="{{ route('register') }}"><button type="button" class="btn btn-danger">REGISTER</button></a>
            </form>
        </div>
    </div>
</nav>
