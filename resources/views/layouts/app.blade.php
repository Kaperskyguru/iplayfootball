<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ app()->getLocale() }}">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0,maximum-scale=1.0, user-scalable=no" />
    <title>iPlayfootball - @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('img/iLOGO.png')}}" type="image/gif">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/custom/style.css?v=2')}}">
    <script defer="defer" src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    @yield('assets')

</head>

<body>
    <!-- Header Section -->
    <section class="banner" role="banner">
        <!-- Navigation Section -->
        <header id="@yield('id')"  style="@yield('header_style')">
            <nav class="navbar navbar-expand-lg @yield('nav')">
                <a class="navbar-brand row p-3" href=" {{ url('/') }}">
                    <img src="/img/iLOGO.png" class="img-responsive" style="width:50%; height:50%">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/profiles">All-Profiles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Shop</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Quick-Links
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">How It Works?</a>
                                <a class="dropdown-item" href="#">How To Pay?</a>
                                <a class="dropdown-item" href="#">FAQs</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contact-Us
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="tel:08070538333">08070538333</a>
                                <a class="dropdown-item" href="/contact">Say Hello</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Banner Section -->
                @yield('banner_display')
            </header>
        </section>


        <!-- Form Section -->
        <section id="form">
            <div class="container">
                @yield('content')
            </div>
        </section>
        <!-- Form Section -->

        <!-- Intro Section -->
        <section id="introduction">
            <div class="container-fluid">
                @yield('content2')
            </div>
        </section>
        <!-- Intro Section -->


        <!-- footer section -->
        <footer id="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-12 mx-auto">
                                <div class="row">
                                    <h4 class="col-12 p-2 pt-5 text-left">Find A Player</h4>
                                    <form class="form-inline p-3 row" action="/search_results" method="POST" role="search">
                                        @csrf
                                        <input class="form-control form-control-sm mr-sm-2 col-md-8 col-sm-8 col-12" type="text" name ="query"  aria-label="Search" placeholder="Enter player name">
                                        <button class="btn btn-sm btn-danger my-2 my-sm-0 col-md-3 col-sm-3 col-5" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <ul class="list-inline mx-auto">
                                        <span>
                                            <li class="list-inline-item">Sort by position of play</li>
                                        </span>
                                        <li class="list-inline-item text-center">
                                            <a href="#">Defender</a>
                                        </li>
                                        <li class="list-inline-item text-center">
                                            <a href="#">Striker</a>
                                        </li>
                                        <li class="list-inline-item text-center">
                                            <a href="#">Mid-fielder</a>
                                        </li>
                                        <li class="list-inline-item text-center">
                                            <a href="#">Winger</a>
                                        </li>
                                        <li class="list-inline-item text-center">
                                            <a href="#">All-positions</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="hr">
                    <div class="col-12 footer-link">
                        <div class="row">
                            <div class="col-md col-12">
                                <h5 class="col-12">QUICK LINKS</h5>
                                <ul class="col-12">
                                    <li>
                                        <a href="#">How it works</a>
                                    </li>
                                    <li>
                                        <a href="#">How to pay</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQs</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md col-12">
                                <h5 class="col-12">PLAYER OPTIONS</h5>
                                <ul class="col-12">
                                    <li>
                                        <a href="#">Update Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('resetpassword') }}">Reset Password</a>
                                    </li>
                                    <li>
                                        <a href="#">Upgrade Profile Package</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md col-12">
                                <h5 class="col-12">BUSINESS OPTIONS</h5>
                                <ul class="col-12">
                                    <li>
                                        <a href="#">Advert Booking</a>
                                    </li>
                                    <li>
                                        <a href="#">Sponsorship/Patnership</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center footer">
                        <p>Copyright © 2017-2018. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer section -->

        <!-- JS FILES -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="{{asset('js/custom/main.js')}}"></script>

        <script type="text/javascript">
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>

        @yield('footer_assests')
    </body>

    </html>
