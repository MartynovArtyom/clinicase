<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Material Design for Bootstrap fonts and icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

        <!-- Material Design for Bootstrap CSS -->
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        @stack('style')

    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container px-lg-0">
                <a class="navbar-brand mr-0 mr-sm-2" href="{{ url('/social') }}">
                    <img class="header-logo" src="{{ asset('images/logo.png') }}"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    {{--<ul class="mr-auto"></ul>--}}
                    <div class="mx-auto">
                        <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('social_feed') }}">
                            <div class="search-field-header">
                                <input class="form-control text-secondary" name="post_name" type="search" placeholder="Search" value="{{ isset($_GET['post_name']) ? $_GET['post_name'] : '' }}" aria-label="Search">
                            </div>
                            <div class="field-specialty-search">
                                <select class="custom-select text-secondary" name="specialty_id" >
                                    <option value="" selected>Spécialité médicale</option>
                                    @forelse ($specialty as $data)
                                        <option value="{{ $data->id }}" {{ isset($_GET['specialty_id']) && $_GET['specialty_id'] == $data->id ? 'selected' : '' }}>
                                            {{ $data->name }}
                                        </option>
                                    @empty
                                        <option>Not specialty</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="field-anatomy-search">
                                <select class="custom-select text-secondary" name="anatomy_id" >
                                    <option value="" selected>Anatomy médicale</option>
                                    @forelse ($anatomy as $data)
                                        <option value="{{ $data->id }}" {{ isset($_GET['anatomy_id']) && $_GET['anatomy_id'] == $data->id ? 'selected' : '' }}>
                                            {{ $data->name }}
                                        </option>
                                    @empty
                                        <option>Not anatomy</option>
                                    @endforelse
                                </select>
                            </div>
                            <button class="btn btn-outline-success my-2 my-sm-0 button-search" type="submit">
                                <i class="fa fa-search text-white mb-0"></i>
                            </button>
                        </form>
                    </div>
                    <ul class="navbar-nav navbar-right">
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="align-self-center">
                                <a href="#" class="fa fa-cog text-white mb-0 text-secondary mx-2"></a>
                            </li>
                            <li class="align-self-center">
                                <a href="#" class="fa fa-comments text-white mb-0 text-secondary mx-2"></a>
                            </li>
                            <li class="align-self-center">
                                <a href="#" class="fa fa-bell text-white mb-0 text-secondary mx-2"></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if (isset(Auth::user()->image))
                                        <img class="mr-0 rounded-circle user-image" src="{{ 'images/uploads/avatars/'.Auth::user()->image }}">
                                    @else
                                        <img class="mr-0 rounded-circle user-image" src="{{ 'images/photo.jpg' }}">
                                    @endif
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        @yield('content')


        <footer class="footer footer-background social">
            <div class="container px-lg-0">
                <div class="row flex-wrap">
                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column justify-content-between">
                        <div class="social-footer-menu">
                            <a href="#" class="text-secondary d-inline-block">Contact</a>
                            <a href="#" class="text-secondary d-inline-block">Termes</a>
                            <a href="#" class="text-secondary d-inline-block">Politique</a>
                        </div>
                        <p class="mt-3 mb-0 text-secondary">Tous droits réservés</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-none d-lg-flex text-center flex-column justify-content-between">
                        <img class="mx-auto" src="{{ asset('images/footer_logo.png') }}"/>
                        <p class="text-secondary mb-0">Copyright © 2018 Clinicase</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-0 text-md-right">
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur.</p>
                        <a href="#" class="store_link">
                            <div class="apple_google_store">
                                <img src="{{ asset('images/apple_store.png') }}"/>
                                <span class="text-secondary">App Store</span>
                            </div>
                        </a>
                        <a href="#" class="store_link">
                            <div class="apple_google_store">
                                <img src="{{ asset('images/play_market.png') }}"/>
                                <span class="text-secondary">Google play</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

        <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
        @stack('scripts')

    </body>
</html>
