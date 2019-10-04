<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
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
                        <a class="nav-link padding-link text-dark" href="{{ url('/') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link padding-link text-dark" href="{{ url('/qui-sommes-nous/') }}">Qui-sommes-nous ?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link padding-link text-dark" href="{{ url('/medias/') }}">Médias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link padding-link text-dark" href="{{ url('/news/') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link padding-link text-dark" href="{{ url('/contact/') }}">Contact</a>
                    </li>

                    @auth
                        <li class="nav-item">
                            <a class="nav-link button-settings-board padding-link text-dark" href="{{ url('/social/') }}">Social</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link button-settings-board text-dark text-center" href="{{ route('login') }}">Se connecter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link button-settings text-white text-center" href="{{ route('register') }}">S`inscrire</a>
                        </li>
                    @endauth

                </ul>
            @endif

        </div>
    </div>
</nav>