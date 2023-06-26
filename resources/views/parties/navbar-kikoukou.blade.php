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
                <a href="{{ route('login') }}" class="btn">S'identifier</a>
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
                            <a href="{{ route('account.home') }}" class="dropdown-item py-2">
                                <i class="bi bi-person me-1"></i> <span style="font-size: 0.8rem;">Profil</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('account.entity', ['entity' => 'reservation']) }}" class="dropdown-item py-2">
                                <i class="bi bi-telephone-forward me-1"></i> <span style="font-size: 0.8rem;">Mes réservations</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('account.entity', ['entity' => 'order']) }}" class="dropdown-item py-2">
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
        </div>

      </div>
    </nav>
</header>
