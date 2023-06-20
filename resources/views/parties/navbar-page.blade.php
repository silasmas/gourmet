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
                <a href="{{ route('register') }}" class="btn">Créer son compte</a>
            </div>
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
                <div class="dropdown">
                  <a id="avatarLink" class="btn px-3 py-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{ Auth::user()->prenom }}&nbsp;&nbsp;
                      <img src="{{ asset('assets/img/placeholder.png') }}" alt="{{ Auth::user()->prenom }}" width="40" class="rounded-circle">
                  </a>

                  <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="avatarLink">
                      <li>
                          <a href="#" class="dropdown-item py-2">
                              <i class="bi bi-person me-1"></i> <span style="font-size: 0.8rem;">Profil</span>
                          </a>
                      </li>
                      <li>
                          <a href="#" class="dropdown-item py-2">
                              <i class="bi bi-telephone-forward me-1"></i> <span style="font-size: 0.8rem;">Mes réservations</span>
                          </a>
                      </li>
                      <li>
                          <a href="#" class="dropdown-item py-2">
                              <i class="bi bi-cart me-1"></i> <span style="font-size: 0.8rem;">Mes commandes</span>
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('logout') }}" class="dropdown-item py-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              <i class="bi bi-power me-1"></i> <span style="font-size: 0.8rem;">Se déconnecter</span>
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </li>
                  </ul>
              </div>
          </div>
            @endif
        </div>
      </div>
    </nav>
</header>
