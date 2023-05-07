<header class="fixed-top">
    <nav class="navbar navbar-expand-lg sticky-top nav-default">
        <div class="container-fluid px-lg-3 px-xl-3 px-xxl-5">
            <div class="logo-site d-flex align-items-center">
                <a href="/" class="navbar-brand">
                    <img src="{{asset('assets/img/logo.png')}}" alt="logo">
                    <span>Gourmet</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="mb-2 navbar-nav me-auto ms-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">
                            Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">
                            A propos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kicoucou') }}">
                            Kicoucou resto
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('atelier') }}">
                            Atelier
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sommelerie') }}">
                            Sommellerie
                        </a>
                    </li>
                </ul>
            </div>
            <div class="block-tools d-flex align-items-center">
                <div class="block-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <a href="{{ route('login') }}" class="btn">Se connecter</a>
            </div>
        </div>
    </nav>
</header>
