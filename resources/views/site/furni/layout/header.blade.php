<!-- /*
    * Bootstrap 5
    * Template Name: Furni
    * Template Author: Untree.co
    * Template URI: https://untree.co/
    * License: https://creativecommons.org/licenses/by/3.0/
    */ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{asset('site/furni/images/favicon.png')}}">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('site/furni/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('site/furni/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('site/furni/css/style.css') }}" rel="stylesheet">
    <title>Furni</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="{{ route('furni.index') }}">Furni<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('furni.index') }}">Home</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('furni.shop') }}">Shop</a></li>
                    <li><a class="nav-link" href="{{ route('furni.about') }}">About us</a></li>
                    <li><a class="nav-link" href="{{ route('furni.services') }}">Services</a></li>
                    <li><a class="nav-link" href="{{ route('furni.blog') }}">Blog</a></li>
                    <li><a class="nav-link" href="{{ route('furni.contact') }}">Contact us</a></li>
                </ul>



                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="#"><img src="{{ asset('site/furni/images/user.svg') }}"></a>
                    </li>
                    <li><a class="nav-link" href="{{ route('furni.cart') }}"><img src="{{ asset('site/furni/images/cart.svg') }}"></a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
            @if (Route::has('login'))
                @auth

                     <a href="{{ route('boss.index') }}" class="nav-link">
                        Dashboard
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;padding-right:2px;">
                        @csrf
                    </form>

                    <a href="#" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                @else
                    <a href="{{ route('login') }}" class="nav-link">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link">
                            Register
                        </a>
                    @endif
                @endauth
            @endif
        </ul>

    </nav>
    <!-- End Header/Navigation -->
