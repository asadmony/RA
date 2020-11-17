<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/docs.theme.min.css') }}"> --}}

    <script src="{{ asset('frontend/js/all.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />

</head>
<body>
    <div id="app">
        {{-- navbar --}}

<header class="header">

    <nav class="navbar navbar-expand-lg fixed-top navback">
        <div class="container">
        <a href="/" class="navbar-brand text-uppercase font-weight-bold">
            <img class="logo" src="{{ asset('img/logo.png') }}" alt="Route Alternative">
        </a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link text-uppercase font-weight-bold nav-button"><i class="fas fa-home fa-lg"></i> <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link text-uppercase font-weight-bold nav-button">ABOUT</a></li>
                    <li class="nav-menu nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-button text-uppercase font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">For Students</a>
                            <a class="dropdown-item" href="#">For Agents</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-button text-uppercase font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Study in
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="#">Study in UK</a>
                            <a class="dropdown-item" href="#">Study in Canada</a>
                            <a class="dropdown-item" href="#">Study in Malta</a>
                            <a class="dropdown-item" href="#">Study in Sweden </a>
                            <a class="dropdown-item" href="#">Study in Italy</a>
                            <a class="dropdown-item" href="#">Study in New Zealand</a>
                            <a class="dropdown-item" href="#">Study in France</a>
                            <a class="dropdown-item" href="#">Study in Ireland</a>
                            <a class="dropdown-item" href="#">Study in Netherlands</a>
                            <a class="dropdown-item" href="#">Study in Germany</a>
                            <a class="dropdown-item" href="#">Study in Singapore</a>
                            <a class="dropdown-item" href="#">Study in Japan</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link text-uppercase font-weight-bold nav-button">Contact</a></li>
                </ul>
                <form class="form-inline my-2 my-lg-0 text-center">
                    <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn search-button text-white" type="button"><i class="fas fa-search"></i></button>
                    </div>
                    </div>
                    {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
                </form>
            </div>
        </div>
    </nav>
    <div class="navback"></div>
</header>
        {{-- /navbar --}}


        {{-- page content --}}
        @yield('content')
        {{-- /page content --}}

        {{-- connection --}}
        <section class="pt-5">
            <div class="container text-center">
                <h2><strong>Connect with us</strong></h2>
                <div class="row pt-3">
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <a href="">
                            <img src="{{ asset('img/study.png') }}">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <a href="">
                            <img src="{{ asset('img/share.png') }}">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <a href="">
                            <img src="{{ asset('img/alumni.png') }}">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <a href="">
                            <img src="{{ asset('img/social.png') }}" >
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{-- /connection --}}
        {{-- social media --}}
        <section class="my-5 py-5 testimonials">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <a href="">
                            <img src="{{ asset('img/fb.png') }}">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <img src="{{ asset('img/insta.png') }}">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <img src="{{ asset('img/wapp.png') }}">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{-- /social media --}}
    </div>
    <script src="{{  asset('js/jquery.min.js') }}"></script>
    <script src="{{  asset('js/owl.carousel.min.js') }}"></script>
    <script>
    // owl carousel functions
        jQuery(document).ready(function($) {
            $('.testimonial-item').owlCarousel({
                center: true,
                items: 2,
                loop: true,
                margin: 10,
                responsive: {
                    600: {
                        items: 1
                    }
                }
            });
            $('.universities-items').owlCarousel({
                center: false,
                items: 2,
                loop: true,
                margin: 10,
                responsive: {
                    600: {
                        items: 4
                    }
                }
            });
            $('.loop').owlCarousel({
                center: true,
                items: 2,
                loop: true,
                margin: 10,
                responsive: {
                    600: {
                        items: 4
                    }
                }
            });
            $('.nonloop').owlCarousel({
                center: true,
                items: 2,
                loop: false,
                margin: 10,
                responsive: {
                    600: {
                        items: 4
                    }
                }
            });
            $('.owl-carousel').owlCarousel({
                margin: 10,
                nav: false,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
