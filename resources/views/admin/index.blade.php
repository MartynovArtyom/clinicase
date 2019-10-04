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
        <link href="{{ asset('css/style-header.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        @stack('style')

        <style>
            body .navbar-nav .nav-link {
                font-size: 1.1rem;
                text-transform: none;
            }
        </style>

    </head>
    <body>

        @component('site_top_menu')
            {{--<li class="nav-item">--}}
                {{--<a href="{{ route('register') }}">Register</a>--}}
            {{--</li>--}}
        @endcomponent

        @yield('content')


        <footer class="footer footer-background">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <img class="footer-logo" src="{{ asset('images/logo.png') }}"/>
                        <p class="text-secondary">Site web de partage de cas cliniques pour les médecins. Créer le design d’un site médical</p>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-youtube"></a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-none d-lg-block">
                        <h5 class="text-dark"><a href="{{ url('/accueil/') }}" class="text-dark">Accueil</a></h5>
                        <div><a href="{{ url('/qui-sommes-nous/') }}" class="text-secondary">Qui sommes-nous ?</a></div>
                        <div><a href="{{ url('/medias/') }}" class="text-secondary">Médias</a></div>
                        <div><a href="{{ url('/news/') }}" class="text-secondary">News</a></div>
                        <div><a href="{{ url('/contact/') }}" class="text-secondary">Contact</a></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-none d-lg-block">
                        <h5 class="text-dark">Créer mon compte</h5>
                        @guest
                            <div><a href="{{ url('/register/') }}" class="text-secondary">Se connecter</a></div>
                        @else
                            <div>
                                <a href="{{ route('logout') }}"
                                   class="text-secondary"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                >Logout</a>
                            </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest

                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mt-4 mt-md-0">
                        <h5 class="text-dark">Application mobile</h5>
                        <a href="#">
                            <div class="apple_google_store">
                                <img src="{{ asset('images/apple_store.png') }}"/>
                                <span class="text-secondary">App Store</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="apple_google_store">
                                <img src="{{ asset('images/play_market.png') }}"/>
                                <span class="text-secondary">Google play</span>
                            </div>
                        </a>
                        <small class="text-secondary anotacii">Télécharger notre application mobile</small>
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
