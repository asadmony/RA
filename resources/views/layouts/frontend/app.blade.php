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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="{{ asset('frontend/js/all.js') }}"></script>


</head>
<body>
    <div id="app">
        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="logo" src="{{ asset('img/logo.png') }}" alt="Route Alternative">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/"><i class="fas fa-home fa-lg"></i> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-button" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle nav-button" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div style="width: 500px !important" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="nav-link"> For Students</h5>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Bachelor</a>
                                        <a class="dropdown-item" href="#">Master's</a>
                                        <a class="dropdown-item" href="#">PHD</a>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="nav-link"> For Agents</h5>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Minimum Cost Packages</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle nav-button" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <li class="nav-item">
                            <a class="nav-link nav-button" href="#">Contact</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li> --}}
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div style="margin-bottom: 100px"></div>
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
</body>
</html>
