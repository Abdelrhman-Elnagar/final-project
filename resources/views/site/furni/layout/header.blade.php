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
    <link rel="shortcut icon" href="{{ asset('site/furni/images/favicon.png') }}">

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

            <!-- Language Selector -->
        <ul class="navbar-nav mx-3">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{-- <img src="{{ asset('site/furni/images/flags/' . app()->getLocale() . '.png') }}" alt="Flag" class="me-1" width="20" height="14"> --}}
                    {{ LaravelLocalization::getCurrentLocaleNative() }}
                </a>
                <ul class="dropdown-menu shadow-sm" aria-labelledby="languageDropdown">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a class="dropdown-item d-flex align-items-center {{ app()->getLocale() == $localeCode ? 'active' : '' }}"
                               href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}">
                                {{-- <img src="{{ asset('site/furni/images/flags/' . $localeCode . '.png') }}" alt="Flag" class="me-2" width="20" height="14"> --}}
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        </ul>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item {{ Route::currentRouteName() == 'furni.index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('furni.index') }}">{{ __('Home') }}</a>
                    </li>
                    {{-- {{ LaravelLocali   zation::getCurrentLocaleDirection() }} --}}
                    <li class="nav-item {{ Route::currentRouteName() == 'furni.shop' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('furni.shop') }}">{{ __('Shop') }}</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'furni.about' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('furni.about') }}">{{ __('About us') }}</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'furni.services' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('furni.services') }}">{{ __('Services') }}</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'furni.blog' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('furni.blog') }}">{{ __('Blog') }}</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'furni.contact' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('furni.contact') }}">{{ __('Contact us') }}</a>
                    </li>

                </ul>



                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="#"><img src="{{ asset('site/furni/images/user.svg') }}"></a>
                    </li>
                    <li><a class="nav-link" href="{{ route('furni.cart') }}"><img
                                src="{{ asset('site/furni/images/cart.svg') }}"></a>
                    </li>
                </ul>
            </div>
        </div>



        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
            @if (Route::has('login'))
                @auth

                    <a href="{{ route('boss.index') }}" class="nav-link">
                        {{ __('Dashboard') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        style="display: none;padding-right:2px;">
                        @csrf
                    </form>

                    <a href="#" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                @else
                    <a href="{{ route('login') }}" class="nav-link">
                        {{ __('Log in') }}
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link">
                            {{ __('Register') }}
                        </a>
                    @endif
                @endauth
            @endif
        </ul>

    </nav>
    <!-- End Header/Navigation -->
