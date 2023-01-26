<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}">
        <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        @livewireStyles

    </head>
    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{route('index')}}">NetWorth Estate System</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                @if(Route::is('login'))
                <li><a class="nav-link scrollto" href="{{route('register')}}">Register</a></li>
                @elseif(Route::is('register'))
                <li><a class="nav-link scrollto" href="{{route('login')}}">Sign In</a></li>
                @elseif(Route::is('admin.login'))
                <li><a class="nav-link scrollto" href="{{route('index')}}">Home</a></li>
                @else
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Home Listing</a></li>
                <li><a class="nav-link scrollto" href="#faq">FAQs</a></li>
                @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="{{route('login')}}" class="appointment-btn"><span class="d-none d-md-inline"></span>Get Started</a>

            </div>
        </header><!-- End Header -->

        @include('sweetalert::alert')

        @yield('content')

        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="footer-top">
            <div class="container">
                <div class="row">

                <div class="col-md-6 footer-contact">
                    <h3>NetWorth Estate System</h3>
                    <p>
                    7A, Jalan Bunga Melur 2/18<br>
                    Seksyen 2<br>
                    40000 Shah Alam<br>
                    Selangor<br>
                    Malaysia <br><br>
                    <strong>Phone:</strong> +60 18-368 7133<br>
                    <strong>Email:</strong> NwES@gmail.com<br>
                    </p>
                </div>

                <div class="col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                    <div>
                        <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                    </div>
                    <div>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">About Us</a></li>
                    </div>
                    <div>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                    </div>
                    <div>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('login')}}">Sign In</a></li>
                    </div>
                    <div>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('register')}}">Register</a></li>
                    </div>
                    <div>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('admin.login')}}">Admin</a></li>
                    </div>
                    </ul>
                </div>

                </div>
            </div>
            </div>
        </footer><!-- End Footer -->

        <!-- Template Main JS File -->
        <script src="{{ asset('js/main.js') }}"></script>


        @livewireScripts

        <!-- Scripts -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
        @yield('scripts')

    </body>
</html>
