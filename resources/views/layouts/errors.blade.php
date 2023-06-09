<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/img/favicon/favicon.ico') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/favicon/android-chrome-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('assets/img/favicon/android-chrome-512x512.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
        <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('assets/addons/custom/bootstrap/js/bootstrap.min.js')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.adminator.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
        <style>
            .text-warning {color: #d1b603!important;} .bg-warning {background-color: #d1b603!important;} .border-warning {border-color: #d1b603!important;}
        </style>

        <title>Erreur : {{ $exception->getStatusCode() }}</title>
    </head>

    <body>
@include('parties.navbar-page')
        <div class="full-menu">
            <div class="close-menu">
                <span></span>
                <span></span>
            </div>
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
                        <a href="{{ route('boisson') }}">Boisson</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">A propos</a>
                    </li>
                    @auth
                    <li class="dropdown mt-3">
                        <a id="avatarLink" class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/img/placeholder.png') }}" alt="{{ Auth::user()->prenom }}" width="40" class="rounded-circle">
                            &nbsp;&nbsp;{{ Auth::user()->prenom }} 
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
                    </li>
                    @endauth
                </ul>
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
                                   <a href="tel:+243820661009"> (+243) 820 661 009 / 898 681 751</a>
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

        <div class="global-div">
            <div class="wrapper">
                <div class="block-choice bg-light py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h1 class="m-0 text-warning" style="font-size: 10rem !important;">{{ $exception->getStatusCode() }}</h1>            
@yield('errors-content')
                            </div>
                        </div>
                    </div>
                </div>

                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 d-flex">
                                <i class="bi bi-geo-alt"></i>
                                <div class="div">
                                    <h6>Adresse</h6>
                                    <p>
                                        3754, Avenue Kimiala, Q/Salongo<br>Limeté-Kinshasa
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex">
                                <i class="bi bi-telephone-fill"></i>
                                <div class="div">
                                    <h6>Réservations</h6>
                                    <p>
                                        <span>Phone: <a href="tel:+243820661009">(+243) 820 661 009 / 898 681 751</a></span>
                                    </p>
                                    <p>
                                        <span>Email: <a href="mailto:gourmetducongo@gmail.com">gourmetducongo@gmail.com</a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex">
                                <i class="bi bi-clock-fill"></i>
                                <div class="div">
                                    <h6>Heures d'ouverture</h6>
                                    <p>
                                        <span>Lun-Sam:</span> 11H - 23H
                                    </p>
                                    <p>
                                        <span>Dim:</span> Fermé
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex">
                                <div class="div">
                                    <h6>Nous suivre</h6>
                                    <div class="block-network">
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
                    <div class="bottom-bar">
                        <div class="container">
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <p class="mb-0">© Gourmet du Congo 2023</p>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex justify-content-center justify-content-lg-end">
                                        <p>Developed By <a href="#">SDEV</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="{{ asset('assets/addons/custom/jquery/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/addons/custom/bootstrap/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript">
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
                });
                $('.navbar .block-menu').click(function() {
                    $(this).toggleClass('close')
                    $('.full-menu').toggleClass('show')
                    $('body').toggleClass('overflow')
                    $('.back-drop').toggleClass('show')

                });
                $('.back-drop').click(function() {
                    $(this).removeClass('show')
                    $('.full-menu').removeClass('show')
                    $('body').removeClass('overflow')
                    $('.navbar .block-menu').removeClass('close')
                });
                $('.close-menu').click(function() {
                    $('.back-drop').removeClass('show')
                    $('.full-menu').removeClass('show')
                    $('body').removeClass('overflow')
                    $('.navbar .block-menu').removeClass('close')
                });
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
                });
            });
        </script>

        <!-- Adminator Javascript -->
        <script defer="defer" src="{{ asset('assets/js/scripts.custom.js') }}"></script>
    </body>
</html>
