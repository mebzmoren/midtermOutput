<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Silliman Con</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/426c14851d.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar Section  -->
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
                    <a href="{{ route('register') }}"><button type="button"
                            class="btn btn-danger">REGISTER</button></a>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Section  -->
    <section>
        <div class="min-h-100 px-4 pt-5 text-center">
            <p class="display-4 fw-bold">Take the first step toward unburdening yourself.</p>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">A safe and anonymous space where you can unburden your heart and share your deepest
                    thoughts and secrets. Join our confession community today, and let the weight of your secrets become
                    a thing of the
                    past. Your journey to emotional freedom starts here.
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <a href="{{ route('login') }}"><button type="button" class="btn btn-danger btn-lg px-4 me-sm-3">Get
                            Started</button></a>
                </div>
            </div>
            <div class="overflow-hidden" style="max-height: 30vh;">
                <div class="container px-5">
                    <img src="{{ asset('assets/images/home-img.png') }}"
                        class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700"
                        height="500" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Hero part of the page --}}
    <section class="min-h-100 py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 p-5">
                    <div class="p-5">
                        <p class="fs-3 text-danger fw-bold">Your Confession, Your Space</p>
                        <p style="text-align: justify" class="mt-5"><span class="fw-bold">The Silliman
                                Confessions</span>
                            is not just a
                            website;
                            it's a
                            digital diary, and a place
                            where your voice matters. Your confessions can be a beacon of hope, a source of comfort, or
                            a
                            revelation for others.</p>
                        <p style="text-align: justify">It's time to liberate your thoughts and unburden your soul. Join
                            us
                            today
                            and become part of a
                            network that believes in the transformative power of truth. Your confession is a step toward
                            healing, understanding, and growth.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 bg-danger p-5">
                    <div class="row">
                        <div class="col-12 col-md-4 mb-3 mb-md-0">
                            <div class="card h-100">
                                <div class="card-body">
                                    <img class="img-fluid w-50 mx-auto d-block"
                                        src="https://img.icons8.com/ios-filled/100/dc3545/like--v1.png"
                                        alt="like--v1" />
                                    <p class="fs-6 text-center fw-bold mt-3">Love + Relationships</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-3 mb-md-0">
                            <div class="card h-100">
                                <div class="card-body">
                                    <img class="img-fluid w-50 mx-auto d-block"
                                        src="https://img.icons8.com/ios-filled/100/dc3545/literature--v1.png"
                                        alt="literature--v1" />
                                    <p class="fs-6 text-center fw-bold mt-3">Confession + Secrets</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-3 mb-md-0">
                            <div class="card h-100">
                                <div class="card-body">
                                    <img class="img-fluid w-50 mx-auto d-block"
                                        src="https://img.icons8.com/ios-filled/100/dc3545/microphone--v1.png"
                                        alt="microphone--v1" />
                                    <p class="fs-6 text-center fw-bold mt-3">Opinion + Thoughts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 col-md-4 mb-3 mb-md-0">
                            <div class="card h-100">
                                <div class="card-body">
                                    <img class="img-fluid w-50 mx-auto d-block"
                                        src="https://img.icons8.com/ios-filled/100/dc3545/museum.png"
                                        alt="museum" />
                                    <p class="fs-6 text-center fw-bold mt-3">Political + Governance</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-3 mb-md-0">
                            <div class="card h-100">
                                <div class="card-body">
                                    <img class="img-fluid w-50 mx-auto d-block"
                                        src="https://img.icons8.com/fluency-systems-filled/100/dc3545/ghost.png"
                                        alt="ghost" />
                                    <p class="fs-6 text-center fw-bold mt-3">Scary + Frightening</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-3 mb-md-0">
                            <div class="card h-100">
                                <div class="card-body">
                                    <img class="img-fluid w-50 mx-auto d-block"
                                        src="https://img.icons8.com/ios-filled/100/dc3545/thinking-bubble.png"
                                        alt="thinking-bubble" />
                                    <p class="fs-6 text-center fw-bold mt-3">Dreams + Fantasy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Main page quote --}}
    <section class="bg-silliman min-h-100 py-5">
        <div class="container">
            <div class="row">
                <p class="fs-2 fw-bold text-white text-center py-5">"Life is full of moments we can't always share with
                    our
                    closest
                    friends and
                    family, but
                    here, you have the freedom to express yourself without fear of judgment. Whether you want to confess
                    a guilty pleasure, seek advice, or simply share your experiences, our platform is here for you."
                </p>
            </div>
        </div>
    </section>

    {{-- Why choose us --}}
    <section class="min-h-100 pt-5">
        <div class="container p-5">
            <p class="fs-1 text-center fw-bold ps-3 text-danger">WHY CHOOSE US?</p>
            <div class="row p-5 md:p-0 lg:p-5">
                <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                    <div class="border p-3 bg-white h-100 rounded-4 shadow card-why">
                        <img class="img-fluid mt-3 w-25 mx-auto d-block text-center"
                            src="https://img.icons8.com/ios-filled/100/dc3545/help.png" alt="help" />
                        <p class="text-center fs-4 fw-bold mt-5">Complete Anonymity</p>
                        <p class="text-center">We value your privacy above all else. You can share your thoughts
                            without revealing your
                            identity, allowing you to speak your truth without any inhibitions.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                    <div class="border p-3 bg-white h-100 rounded-4 shadow card-why">
                        <img class="img-fluid mt-3 w-25 mx-auto d-block text-center"
                            src="https://img.icons8.com/ios-filled/100/dc3545/stackexchange.png" alt="help" />
                        <p class="text-center fs-4 fw-bold mt-5">Diverse Topics</p>
                        <p class="text-center">Our platform welcomes confessions on a wide range of topics, from
                            personal
                            struggles and relationships to guilty pleasures and quirky anecdotes.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                    <div class="border p-3 bg-white h-100 rounded-4 shadow card-why">
                        <img class="img-fluid mt-3 w-25 mx-auto d-block text-center"
                            src="https://img.icons8.com/ios-filled/100/dc3545/security-checked.png" alt="help" />
                        <p class="text-center fs-4 fw-bold mt-5">Moderated for Safety</p>
                        <p class="text-center">We have a dedicated team of moderators ensuring that the platform
                            remains
                            a
                            safe space for all users. Inappropriate content is not tolerated.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Join the community --}}
    <section class="min-h-100 pb-5 mb-5">
        <div class="container">
            <div class="row">
                <p class="fs-1 text-center text-danger fw-bold">Start Your Journey with Us</p>
                <p class="w-50 text-center mx-auto">The path to freedom begins with a single confession. Take that
                    courageous step and
                    join Confessions
                    Unveiled today. Together, we unveil the beauty of the human experience—one confession at a time.</p>
                <form class="text-center" role="search">
                    <a href="{{ route('login') }}" class="pe-2 text-decoration-none">
                        <button type="button" class="btn btn-danger">JOIN
                            US</button>
                    </a>
                </form>
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
</body>

</html>
