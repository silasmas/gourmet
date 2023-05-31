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
                      <span>Kicoucou Resto</span>
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
              
            @endif
                </div>
            </div>
        </div>
        
      </div>
    </nav>
</header>
