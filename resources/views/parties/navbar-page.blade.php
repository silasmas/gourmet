<header class="sticky-top">
    <nav class="navbar navbar-expand-lg sticky-top nav-page">
      <div class="container-fluid px-lg-3 px-xl-3 px-xxl-5">
        <div class="logo-site d-flex align-items-center">
          <a href="/" class="navbar-brand">
            <img src="{{asset('assets/img/logo.png')}}" alt="logo">
            <span>Gourmet</span>
          </a>
          <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link {{ Route::current()->getName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                Accueil
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::current()->getName() == 'kicoucou' ? 'active' : '' }}" href="{{ route('kicoucou') }}">
                    Kicoucou resto
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::current()->getName() == 'atelier' ? 'active' : '' }}" href="{{ route('atelier') }}">
                    Atelier
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::current()->getName() == 'boisson' ? 'active' : '' }}" href="{{ route('boisson') }}">
                    Boisson
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::current()->getName() == 'about' ? 'active' : '' }}" href="{{ route('about') }}">
                  A propos
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
            @if (Auth::guest())
            <div class="block-tools d-flex align-items-center">
                <div class="block-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <a href="{{ route('login') }}" class="btn">Se connecter</a>
            </div>
            @else
            <div class="block-tools d-flex align-items-center">
                <div class="block-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <a class="btn" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                   Déconnexion
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    class="d-none">
                    @csrf
                </form>
            </div>
            @endif
        </div>
      </div>
    </nav>
</header>
