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
                        <a class="nav-link {{ Route::current()->getName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                          Accueil
                        </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{ Route::current()->getName() == 'about' ? 'active' : '' }}" href="{{ route('about') }}">
                            A propos
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
                          <a class="nav-link {{ Route::current()->getName() == 'sommelerie' ? 'active' : '' }}" href="{{ route('sommelerie') }}">
                              Sommellerie
                          </a>
                      </li>
                </ul>
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
              {{-- Debut menu profil --}}
              {{-- <div class="user-box menu-icon-box">
                <div class="icon">
                    <a href="javascript::">
                        <img src="{{ asset('assets/img/uploads/user.png') }}"
                            alt="placeholder" class="img-fluid" />                                  
                       
                    </a>
                </div>
                <div class="dropdown user-dropdown corner-triangle top-right">
                    <ul class="user-dropdown-menu">
                        <li class="dropdown-user-info">
                            <a href="">
                                <div class="clearfix">
                                    <div class="user-image float-start">
                                        <img src="{{ asset('assets/img/uploads/user.png') }}"
                                            alt="placeholder" class="img-fluid" />                                    
                                       
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">
                                            <span class="hi">Salut,</span>
                                            {{ Auth::user()->prenom . ' ' . Auth::user()->name }}
                                        </div>
                                        <div class="user-email">
                                            <span class="email">{{ Auth::user()->email }}</span>
                                            <span class="welcome">Bienvenue</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="user-dropdown-menu-item">
                            <a href=""><i
                                    class="fas fa-gem"></i>Profil</a>
                        </li>
                        <li class="user-dropdown-menu-item">
                            <a href=""><i
                                    class="fas fa-heart"></i>Historique</a>
                        </li>
                        

                        <li class="dropdown-user-logout user-dropdown-menu-item">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                @lang('general.menu.logout')
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div> --}}
            {{-- Fin menu profil --}}
            @endif
            
        </div>
    </nav>
</header>
