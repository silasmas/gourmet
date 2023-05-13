<header class="sticky-top">
    <nav class="navbar navbar-expand-lg sticky-top nav-ki nav-page">
      <div class="container-fluid px-lg-3 px-xl-3 px-xxl-5">
        <div class="row w-100 align-items-center ms-0">
            <div class="col-lg-4 order-2 order-lg-1 col-4 d-flex justify-content-end justify-content-lg-start">
                <div class="block-menu d-flex">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 col-8">
                <div class="logo-site d-flex align-items-center justify-content-center">
                    <a href="/" class="navbar-brand flex-row flex-lg-column me-0 brand">
                      <img src="{{asset('assets/img/logo.png')}}" alt="logo">
                      <span>Kikoukou Resto</span>
                    </a>
                    <div class="menu-toggle">
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 d-none d-lg-flex justify-content-end order-2 order-lg-2 ">
                <div class="block-tools d-flex align-items-center">
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
            </div>
        </div>
        
      </div>
    </nav>
</header>
