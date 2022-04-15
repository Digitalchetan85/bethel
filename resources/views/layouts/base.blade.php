<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animsition.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kmlpandey77/bootnavbar/css/bootnavbar.css">

    @livewireStyles
    <title>Hello, world!</title>
</head>

<body class="">

    <header class="sticky-top">
        <div id="top-menu" class="bg-primary py-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 align-self-center">
                        <div class="text-center text-md-start">
                            <a href="tel:08880470007" class="text-decoration-none"><i class="fas fa-phone-volume"></i> +91
                                88804 70007</a>
                        </div>
                    </div>
                    <div class="col-md-4 align-self-center">
                        <div class="text-center">
                            <a href="mailto:info@shanthaswebz.com" class="text-decoration-none"><i
                                    class="fas fa-envelope"></i> info@shanthaswebz.com</a>
                        </div>
                    </div>
                    <div class="col-md-4 align-self-center">
                        <div class="text-center text-md-end">
                            <a href="#" class="text-decoration-none"><i class="fab fa-facebook fs-5 mx-2"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fab fa-instagram fs-5 mx-2"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fab fa-linkedin fs-5 mx-2"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fab fa-youtube fs-5 mx-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-white" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}"><img
                        src="{{ asset('assets/images/logo.png') }}" alt="" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link animsition-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link animsition-link" href="{{ route('laptop') }}">Laptop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link animsition-link" href="{{ route('desktop') }}">DeskTop</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('services.laptop-repair') }}">Laptop
                                        Repair</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('services.pc-repair') }}">PC Repair</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('services.mac-repair') }}">Mac
                                        Repair</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('services.data-backup') }}">Data Backup
                                        and Recovery</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ route('services.software-installation') }}">Software
                                        Installation</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ route('services.hardware-updates') }}">Hardware Updates</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link animsition-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                        @if (Route::has('login'))
                            @auth

                                @if (Auth::user()->utype === 'ADM')
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            My Account ({{ Auth::user()->name }})
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('admin.dashboard') }}">Dashboard</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                @else
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            My Account ({{ Auth::user()->name }})
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('user.dashboard') }}">Dashboard</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item d-none">
                                    <a class="nav-link animsition-link" href="{{ route('register') }}">Register</a>
                                </li>
                                <li class="nav-item d-none">
                                    <a class="nav-link animsition-link" href="{{ route('login') }}">Login</a>
                                </li>
                            @endif

                            @endif
                        </ul>
                        <ul class="list-unstyled">
                            <li class="">
                                <a class="btn btn-primary animsition-link" href="tel:08880470007"><i
                                        class="fa fa-phone-volume"></i> 88804 70007</a>
                            </li>
                        </ul>
                        {{-- <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> --}}
                    </div>
                </div>
            </nav>
        </header>

        {{ $slot }}

        <footer>
            <div class="back-to-top position-fixed end-0 bottom-0" id="myBtn"><a href="#top"><span
                        class="fa fa-envelope"></span></a></div>
        </footer>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="{{ asset('assets/js/font-awesome.js') }}"></script>
        <script src="{{ asset('assets/js/animsition.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/gh/kmlpandey77/bootnavbar/js/bootnavbar.js"></script>

        @livewireScripts
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
                                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                                                                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                                                                crossorigin="anonymous">
                                </script>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                                                                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                                                                crossorigin="anonymous">
                                </script>
                                -->
    </body>

    </html>
