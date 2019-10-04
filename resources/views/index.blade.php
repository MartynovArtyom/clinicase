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

    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="header-logo" src="{{ asset('images/logo.png') }}"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="mr-auto"></ul>
                    @if (Route::has('login'))
                        <ul class="navbar-nav navbar-right">
                            <li class="nav-item">
                                <a class="nav-link padding-link text-dark" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link padding-link text-dark" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link padding-link text-dark" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link padding-link text-dark" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link padding-link text-dark" href="#">Contact</a>
                            </li>

                            @auth
                                <li class="nav-item">
                                    <a class="nav-link padding-link text-dark" href="{{ url('/social') }}">Social</a>
                                </li>
                            @else
                                <li class="nav-item active">
                                    <a class="nav-link button-settings text-white text-center" href="{{ route('login') }}">S`inscrire</a>
                                </li>

                                {{--<a href="{{ route('register') }}">Register</a>--}}
                            @endauth
                        </ul>
                    @endif

                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 background-home-section1 min-height-section1">

                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7 align-self-center ">
                                <h2>Connectez</h2>
                                <h1>Lorem ipsum dolor sit amet</h1>

                                <span class="store-button d-inline-flex align-items-center mr-4 my-4 my-sm-0">
                                    <img src="{{ asset('images/apple_store.png') }}"/>
                                    <span>App Store</span>
                                </span>
                                <span class="store-button d-inline-flex align-items-center mr-4 mb-4 my-sm-0">
                                    <img src="{{ asset('images/play_market.png') }}"/>
                                    <span>Google play</span>
                                </span>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block align-self-end text-lg-right">
                                <img class="devises" src="{{ asset('images/home_section_1.png') }}"/>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 background-home-section2">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-4 text-center">
                                <img src="{{ asset('images/conntaktez.png') }}"/>
                                <h2>Connectez</h2>
                                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="col-12 col-lg-4 text-center">
                                <img src="{{ asset('images/parctarez.png') }}"/>
                                <h2>Connectez</h2>
                                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="col-12 col-lg-4 text-center">
                                <img src="{{ asset('images/book.png') }}"/>
                                <h2>Connectez</h2>
                                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 background-home-section3 min-height-section3">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 align-self-center text-center">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <h1 class="reviews">Témoignages</h1>

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <h3 class="w-75">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor."</h3>

                                            <div class="media mw-50 mt-4 d-block d-md-inline-flex">
                                                <img class="mr-0 mr-md-3 rounded-circle" src="{{ asset('images/photo.jpg') }}"/>
                                                <div class="media-body">
                                                    <h6 class="mt-1 mb-0 text-center text-md-left">Lorem Lorem</h6>
                                                    <p class="text-center text-md-left">Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <h3 class="w-75">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor."</h3>

                                            <div class="media mw-50 mt-4 d-block d-md-inline-flex">
                                                <img class="mr-0 mr-md-3 rounded-circle" src="{{ asset('images/photo.jpg') }}"/>
                                                <div class="media-body">
                                                    <h6 class="mt-1 mb-0 text-center text-md-left">Lorem Lorem</h6>
                                                    <p class="text-center text-md-left">Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev d-none d-sm-flex" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next d-none d-sm-flex" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 background-home-section4">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 align-self-center ">
                                <h1>Cas Récents</h1>
                                <a class="more-cas float-right mb-3" href="#">Voir plus de cas ></a>
                            </div>
                            <div class="col-12 align-self-center ">
                                <div class="card-deck">
                                    <div class="card">
                                        <img class="card-img-top" src="https://sites.google.com/site/prirodanasevseegooglgfgf/_/rsrc/1463456237313/home/priroda_gory_nebo_ozero_oblaka_81150_1920x1080.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="block-user">
                                                <img class="mr-2 rounded-circle" src="{{ asset('images/photo.jpg') }}"/>
                                                <h6 class="text-secondary">Lorem Lorem</h6>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text text-secondary">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                        <div class="card-footer pt-0">
                                            <div class="w-100">
                                                <a href="#" class="fa fa-share-alt text-secondary mr-3"> 25</a>
                                                <a href="#" class="fa fa-comment text-secondary mr-3"> 25</a>
                                                <a href="#" class="fa fa-heart text-secondary mr-3"> 25</a>
                                            </div>
                                            <a href="#">
                                                <p class="text-blue-for-site mt-3 mb-2">Lisez plus ></p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img class="card-img-top" src="https://sites.google.com/site/prirodanasevseegooglgfgf/_/rsrc/1463456237313/home/priroda_gory_nebo_ozero_oblaka_81150_1920x1080.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="block-user">
                                                <img class="mr-2 rounded-circle" src="{{ asset('images/photo.jpg') }}"/>
                                                <h6 class="text-secondary">Lorem Lorem</h6>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text text-secondary">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                        <div class="card-footer pt-0">
                                            <div class="w-100">
                                                <a href="#" class="fa fa-share-alt text-secondary mr-3"> 25</a>
                                                <a href="#" class="fa fa-comment text-secondary mr-3"> 25</a>
                                                <a href="#" class="fa fa-heart text-secondary mr-3"> 25</a>
                                            </div>
                                            <a href="#">
                                                <p class="text-blue-for-site mt-3 mb-2">Lisez plus ></p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img class="card-img-top" src="https://sites.google.com/site/prirodanasevseegooglgfgf/_/rsrc/1463456237313/home/priroda_gory_nebo_ozero_oblaka_81150_1920x1080.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="block-user">
                                                <img class="mr-2 rounded-circle" src="{{ asset('images/photo.jpg') }}"/>
                                                <h6 class="text-secondary">Lorem Lorem</h6>
                                                <p>Lorem ipsum</p>
                                            </div>
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text text-secondary">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                        <div class="card-footer pt-0">
                                            <div class="w-100">
                                                <a href="#" class="fa fa-share-alt text-secondary mr-3"> 25</a>
                                                <a href="#" class="fa fa-comment text-secondary mr-3"> 25</a>
                                                <a href="#" class="fa fa-heart text-secondary mr-3"> 25</a>
                                            </div>
                                            <a href="#">
                                                <p class="text-blue-for-site mt-3 mb-2">Lisez plus ></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer footer-background">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <img class="footer-logo" src="{{ asset('images/logo.png') }}"/>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-youtube"></a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-none d-lg-block">
                        <h5 class="text-dark">One of three columns</h5>
                        <div><a href="#" class="text-secondary">One of three columns</a></div>
                        <div><a href="#" class="text-secondary">One of three columns</a></div>
                        <div><a href="#" class="text-secondary">One of three columns</a></div>
                        <div><a href="#" class="text-secondary">One of three columns</a></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-none d-lg-block">
                        <h5 class="text-dark">One of three columns</h5>
                        <div><a href="#" class="text-secondary">One of three columns</a></div>
                        <div><a href="#" class="text-secondary">One of three columns</a></div>
                        <div><a href="#" class="text-secondary">One of three columns</a></div>
                        <div><a href="#" class="text-secondary">One of three columns</a></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mt-4 mt-md-0">
                        <h5 class="text-dark">One of three columns</h5>
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
                        <small class="text-secondary anotacii">Lorem ipsum dolor sit amet, consectetur.</small>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

        <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

    </body>
</html>
