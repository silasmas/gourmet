<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/img/favicon/favicon.ico') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/img/favicon/android-chrome-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="512x512"  href="{{ asset('assets/img/favicon/android-chrome-512x512.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
        <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        <style>
            .text-warning {color: #d1b603!important;} .bg-warning {background-color: #d1b603!important;} .border-warning {border-color: #d1b603!important;}
            .rounded-3 {border-radius: 1.5rem!important;}
        </style>

        <title>Gourmet du Congo</title>
    </head>

    <body>
        @include('parties.navbar')
        <div class="full-menu">
            <div class="close-menu">
                <span></span>
                <span></span>
            </div>
            <div class="container-fluid px-0">
                <div class="container-fluid px-0">
                    <ul>
                        <li>
                            <a href="{{ route('home') }}" class="active">Accueil</a>
                        </li>
                        <li>
                            <a href="{{ route('kicoucou') }}">Kicoucou resto</a>
                        </li>
                        <li>
                            <a href="{{ route('atelier') }}">Atelier</a>
                        </li>
                        <li>
                            <a href="{{ route('boisson') }}">Boissons </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">A propos</a>
                        </li>
                        @auth
                        <li class="dropdown mt-3">
                            <a id="avatarLink" class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ Auth::user()->avatar_url != null ? Auth::user()->avatar_url : asset('assets/img/placeholder.png') }}" alt="{{ Auth::user()->prenom }}" width="40" class="rounded-circle">
                                &nbsp;&nbsp;{{ Auth::user()->prenom }} 
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="avatarLink">
    @if (Auth::user()->is_admin == 1)
                                <li>
                                    <a href="{{ route('dashboard') }}" class="dropdown-item py-2">
                                        <i class="bi bi-speedometer me-1"></i> <span style="font-size: 0.8rem;">Administration</span>
                                    </a>
                                </li>
    @endif
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
                        </li>
                        @endauth
                      </ul>
                </div>
            </div>
            <div class="block-info mt-auto">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="d-flex">
                            <i class="bi bi-geo-alt-fill"></i>
                            <div>
                                <h5>Adresse</h5>
                                <p>
                                    3754, Avenue Kimiala, Q/Salongo<br>Limeté-Kinshasa
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <i class="bi bi-telephone-fill"></i>
                            <div>
                                <h5>Réservations</h5>
                                <p class="mb-0">
                                   <a href="tel:+243898681751">(+243) 898 681 751</a> / <a href="tel:+243833344116">833 344 116</a>
                                </p>
                                <p>
                                   <a href="mailto:gourmetducongo@gmail.com">gourmetducongo@gmail.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <i class="bi bi-clock-fill"></i>
                            <div>
                                <h5>Heures d'ouverture</h5>
                                <p class="mb-0">
                                    Lun-Sam: 11H - 23H 
                                </p>
                                <p>
                                    Dim: Fermé 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="block-network d-flex align-items-center">
                            <a href="#">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="back-drop"></div>

        <!-- =============== ALERT MESSAGES =============== -->
@if (!empty(request()->alert_success))
        <div class="position-fixed w-100" style="top: 41px; z-index: 9999;">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-10 mx-auto">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="bi bi-info-circle me-2 mb-0 fs-4" style="vertical-align: -3px;"></span> {{ request()->alert_success }}
                        <button type="button" class="btn-close mt-1" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                </div>
            </div>
        </div>
@endif
@if (\Session::has('success_message'))
        <div class="position-fixed w-100" style="top: 41px; z-index: 9999;">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-10 mx-auto">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="bi bi-info-circle me-2 mb-0 fs-4" style="vertical-align: -3px;"></span> {{ \Session::get('success_message') }}
                        <button type="button" class="btn-close mt-1" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                </div>
            </div>
        </div>
@endif
@if (!empty($alert_success))
        <div class="position-fixed w-100" style="top: 41px; z-index: 9999;">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-10 mx-auto">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="bi bi-info-circle me-2 mb-0 fs-4" style="vertical-align: -3px;"></span> {{ $alert_success }}
                        <button type="button" class="btn-close mt-1" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                </div>
            </div>
        </div>
@endif
@if (\Session::has('exception'))
        <div class="position-fixed w-100" style="top: 41px; z-index: 9999;">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-10 mx-auto">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="bi bi-exclamation-triangle me-2 mb-0 fs-4" style="vertical-align: -3px;"></span> {{ \Session::get('exception') }}
                        <button type="button" class="btn-close mt-1" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                </div>
            </div>
        </div>
@endif
@if (\Session::has('error_message'))
        <div class="position-fixed w-100" style="top: 41px; z-index: 9999;">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-10 mx-auto">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="bi bi-exclamation-triangle me-2 mb-0 fs-4" style="vertical-align: -3px;"></span> {{ \Session::get('error_message') }}
                        <button type="button" class="btn-close mt-1" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                </div>
            </div>
        </div>
@endif
@if (!empty($response_error))
        <div class="position-fixed w-100" style="top: 41px; z-index: 9999;">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-10 mx-auto">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="bi bi-exclamation-triangle me-2 mb-0 fs-4" style="vertical-align: -3px;"></span> {{ $response_error->message }}
                        <button type="button" class="btn-close mt-1" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                </div>
            </div>
        </div>
@endif
        <!-- /=============== ALERT MESSAGES =============== -->

        <div class="global-div">
            <div class="wrapper">
@yield('content')
            </div>
        </div>
        <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script>
            $(document).ready(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 40) {
                        $(".navbar").addClass('bg-white')
                        // $(".topbar").slideUp()
                        $(".btn-backToTop").addClass('show')
                    } else {
                        $(".navbar").removeClass('bg-white')
                        // $(".topbar").slideDown()
                        $(".btn-backToTop").removeClass('show')

                    }

                });
                $(".btn-backToTop").click(function() {
                    $('html,body').animate({
                        scrollTop: 0
                    }, 1000)
                })
                $('.navbar .block-menu').click(function() {
                    $(this).toggleClass('close')
                    $('.full-menu').toggleClass('show')
                    $('body').toggleClass('overflow')
                    $('.back-drop').toggleClass('show')

                })
                $('.back-drop').click(function() {
                    $(this).removeClass('show')
                    $('.full-menu').removeClass('show')
                    $('body').removeClass('overflow')
                    $('.navbar .block-menu').removeClass('close')
                })
                $('.close-menu').click(function() {
                    $('.back-drop').removeClass('show')
                    $('.full-menu').removeClass('show')
                    $('body').removeClass('overflow')
                    $('.navbar .block-menu').removeClass('close')
                })
                $('.scrollTop').click(function() {
                    $('.global-div').removeClass('translate')
                    $('.full-menu').removeClass('show')
                    $('.navbar').removeClass('bg-black')
                    $('body').removeClass('overflow')
                    $('.navbar .block-menu').removeClass('close')
                    $('.scrollTop').removeClass('active')
                    $(this).addClass('active')
                    var getElement = $(this).attr('href');
                    if ($(getElement).length) {
                        var getOffset = $(getElement).offset().top - $('.navbar').height();
                        $('html,body').animate({
                            scrollTop: getOffset
                        }, 1000);
                    }
                    return false;
                })
            })
        </script>
    </body>
</html>
