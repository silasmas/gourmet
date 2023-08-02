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
        <link rel="stylesheet" href="{{ asset('assets/addons/custom/jquery/css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/addons/custom/dataTables/datatables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/addons/custom/sweetalert2/dist/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/addons/custom/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/addons/custom/cropper/css/cropper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        <style>
            .text-warning {color: #d1b603!important;} .bg-warning {background-color: #d1b603!important;} .border-warning {border-color: #d1b603!important;} .rounded-3 {border-radius: 1.5rem!important;}.mCard {width: 100%;flex-direction: column; overflow: hidden; border-radius: 1.5rem;} .mCard-body {flex: 1 1 auto; padding: 1rem;} .mCard-img {width: 100%;}
        </style>

        <title>Gourmet du Congo</title>
    </head>

    <body>
        <!-- Modal Crop Image -->
        <!-- Avatar -->
        <div class="modal fade" id="cropModalImage" tabindex="-1" aria-labelledby="cropModalImageLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header pb-0 border-0">
                        <h5 class="modal-title" id="cropModalImageLabel">Recadrer avant d'enregistrer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 mb-sm-0 mb-4">
                                    <div class="bg-image">
                                        <img src="" id="retrieved_image" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <input type="hidden" name="user_id" id="userId" value="{{ Route::is('account.home') ? Auth::user()->id : '' }}">

                        <button type="button" id="crop" class="btn">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image 1 -->
        <div class="modal fade" id="cropModalImage1" tabindex="-1" aria-labelledby="cropModalImageLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header pb-0 border-0">
                        <h5 class="modal-title" id="cropModalImageLabel1">Recadrer la photo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 mb-sm-0 mb-4">
                                    <div class="bg-image">
                                        <img src="" id="retrieved_image1" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-end">
                        <button type="button" id="crop" class="btn">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image 2 -->
        <div class="modal fade" id="cropModalImage2" tabindex="-1" aria-labelledby="cropModalImageLabel2" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header pb-0 border-0">
                        <h5 class="modal-title" id="cropModalImageLabel2">Recadrer la photo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 mb-sm-0 mb-4">
                                    <div class="bg-image">
                                        <img src="" id="retrieved_image2" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-end">
                        <button type="button" id="crop" class="btn">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image 3 -->
        <div class="modal fade" id="cropModalImage3" tabindex="-1" aria-labelledby="cropModalImageLabel3" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header pb-0 border-0">
                        <h5 class="modal-title" id="cropModalImageLabel3">Recadrer la photo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 mb-sm-0 mb-4">
                                    <div class="bg-image">
                                        <img src="" id="retrieved_image3" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-end">
                        <button type="button" id="crop" class="btn">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image 4 -->
        <div class="modal fade" id="cropModalImage4" tabindex="-1" aria-labelledby="cropModalImageLabel4" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header pb-0 border-0">
                        <h5 class="modal-title" id="cropModalImageLabel4">Recadrer la photo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 mb-sm-0 mb-4">
                                    <div class="bg-image">
                                        <img src="" id="retrieved_image4" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-end">
                        <button type="button" id="crop" class="btn">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Achat boisson -->
        <div class="modal fade" id="modal-acheter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header px-sm-4" style="border: none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 px-sm-4">
                        <div class="text-center">
                            <h5 class="formation-title mb-4">Acheter</h5>
                        </div>
                        <form method="POST" action="{{ route('kicoucou.acheter', ['entity' => 'achat']) }}">
                            @csrf
                            <div class="form-group">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <label for="selectNbrPerson">Boisson</label>
                                        <select id="selectNbrPerson" class="form-select">
                                            <option>Choisir boisson</option>
                                        </select>

                                        <input type="number" id="writeNbrPerson" class="d-none mt-3 form-control" placeholder="Ecrire le nombre de personnes" value="">
                                    </div>

                                    <div id="paymentMethod">
                                        <p class="mb-3 pb-1 border-bottom border-default text-uppercase">Mode de paiement</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="transaction_type_id" id="mobile_money" class="align-middle" value="1" />
                                            <label class="form-check-label" for="mobile_money" role="button">
                                                <img src="{{ asset('assets/img/payment-mobile-money.png') }}" alt="Mobile money" width="40"> Mobile money
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="transaction_type_id" id="bank_card" class="align-middle" value="2" />
                                            <label class="form-check-label" for="bank_card" role="button">
                                                <img src="{{ asset('assets/img/payment-credit-card.png') }}" alt="Carte bancaire" width="40"> Carte bancaire
                                            </label>
                                        </div>
                                    </div>

                                    <div id="phoneNumberForMoney" class="col-12 my-2 d-none">
                                        <label for="other_phone">Téléphone</label>
                                        <input type="text" id="other_phone" name="other_phone" class="form-control" placeholder="Avec code téléphonique (Ex: 243xxxxxxxxx)">
                                    </div>
                                </div>
                            </div>

                            <button class="btn mt-3">Commander</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@if (Route::is('dashboard') || Route::is('dashboard.entity'))
    {{-- @include('parties.navbar-kikoukou') --}}
@else
    @include('parties.navbar-page')    
@endif

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

        <!-- =============== ALERT MESSAGES =============== -->
        <!-- Alert for JavaScript -->
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
        <!-- Alert for JavaScript -->
        <div id="jSReqAlert" class="position-fixed w-100 d-none" style="top: 41px; z-index: 9999;">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-10 mx-auto">
                    <div class="alert alert-dismissible fade show" role="alert">
                        <span class="bi me-2 mb-0 fs-4" style="vertical-align: -3px;"></span> <span class="message_content"></span>
                        <button type="button" class="btn-close mt-1" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /=============== ALERT MESSAGES =============== -->

        <div class="global-div">
            <div class="wrapper">
@yield('content')

                <footer class="{{ Route::current()->getName() != 'dashboard' && Route::current()->getName() != 'dashboard.entity' && Route::current()->getName() != 'dashboard.entity.datas' ? '' : 'py-0' }}">
@if (Route::current()->getName() != 'dashboard' && Route::current()->getName() != 'dashboard.entity' && Route::current()->getName() != 'dashboard.entity.datas')
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
@endif
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

        <!-- Scripts -->
        <script src="{{ asset('assets/addons/custom/jquery/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/addons/custom/jquery/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/addons/custom/bootstrap/js/bootstrap.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/scriptcarousel.js') }}"></script>
        <script src="{{ asset('assets/addons/custom/cropper/js/cropper.min.js') }}"></script>
        <script src="{{ asset('assets/addons/custom/autosize/js/autosize.min.js') }}"></script>
        <script src="{{ asset('assets/addons/custom/dataTables/datatables.min.js') }}"></script>
        <script src="{{ asset('assets/addons/custom/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.custom.js') }}"></script>
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
                // jQuery DataTable
                $('#dataList').DataTable({
                    language: {
                        url: currentHost + '/assets/addons/custom/dataTables/Plugins/i18n/' + $('html').attr('lang') + '.json'
                    },
                    paging: 'matchMedia' in window ? (window.matchMedia('(min-width: 500px)').matches ? true : false) : false,
                    ordering: false,
                    info: 'matchMedia' in window ? (window.matchMedia('(min-width: 500px)').matches ? true : false) : false,
                });

                // Recadrer l'image sans l'uploader
                // IMAGE 1
                var retrievedImage1 = document.getElementById('retrieved_image1');
                var imageResult1 = document.querySelector('.image-1');
                var modal1 = new bootstrap.Modal(document.getElementById('cropModalImage1'), { keyboard: false });

                $('#register_image_1').on('change', function (e) {
                    var files = e.target.files;
                    var done = function (url) {
                        retrievedImage1.src = url;

                        modal1.show();
                    };

                    if (files && files.length > 0) {
                        var reader = new FileReader();

                        reader.onload = function () {
                            done(reader.result);
                        };
                        reader.readAsDataURL(files[0]);
                    }
                });

                $('#cropModalImage1').on('shown.bs.modal', function () {
                    cropper = new Cropper(retrievedImage1, {
                        aspectRatio: 1,
                        viewMode: 3,
                        preview: '#cropModalImage1 .preview'
                    });

                }).on('hidden.bs.modal', function () {
                    cropper.destroy();

                    cropper = null;
                });

                $('#cropModalImage1 #crop').on('click', function () {
                    var canvas = cropper.getCroppedCanvas({
                        width: 700,
                        height: 700
                    });

                    modal1.hide();
                    canvas.toBlob(function (blob) {
                        URL.createObjectURL(blob);
                        var reader = new FileReader();

                        reader.readAsDataURL(blob);
                        reader.onloadend = function () {
                            var base64_data = reader.result;

                            $(imageResult1).attr('src', base64_data);
                            $('#data_image_1').attr('value', base64_data);
                        };
                    });
                });
                // IMAGE 2
                var retrievedImage2 = document.getElementById('retrieved_image2');
                var imageResult2 = document.querySelector('.image-2');
                var modal2 = new bootstrap.Modal(document.getElementById('cropModalImage2'), { keyboard: false });

                $('#register_image_2').on('change', function (e) {
                    var files = e.target.files;
                    var done = function (url) {
                        retrievedImage2.src = url;

                        modal2.show();
                    };

                    if (files && files.length > 0) {
                        var reader = new FileReader();

                        reader.onload = function () {
                            done(reader.result);
                        };
                        reader.readAsDataURL(files[0]);
                    }
                });

                $('#cropModalImage2').on('shown.bs.modal', function () {
                    cropper = new Cropper(retrievedImage2, {
                        aspectRatio: 1,
                        viewMode: 3,
                        preview: '#cropModalImage2 .preview'
                    });

                }).on('hidden.bs.modal', function () {
                    cropper.destroy();

                    cropper = null;
                });

                $('#cropModalImage2 #crop').on('click', function () {
                    var canvas = cropper.getCroppedCanvas({
                        width: 700,
                        height: 700
                    });

                    modal2.hide();
                    canvas.toBlob(function (blob) {
                        URL.createObjectURL(blob);
                        var reader = new FileReader();

                        reader.readAsDataURL(blob);
                        reader.onloadend = function () {
                            var base64_data = reader.result;

                            $(imageResult2).attr('src', base64_data);
                            $('#data_image_2').attr('value', base64_data);
                        };
                    });
                });
                // IMAGE 3
                var retrievedImage3 = document.getElementById('retrieved_image3');
                var imageResult3 = document.querySelector('.image-3');
                var modal3 = new bootstrap.Modal(document.getElementById('cropModalImage3'), { keyboard: false });

                $('#register_image_3').on('change', function (e) {
                    var files = e.target.files;
                    var done = function (url) {
                        retrievedImage3.src = url;

                        modal3.show();
                    };

                    if (files && files.length > 0) {
                        var reader = new FileReader();

                        reader.onload = function () {
                            done(reader.result);
                        };
                        reader.readAsDataURL(files[0]);
                    }
                });

                $('#cropModalImage3').on('shown.bs.modal', function () {
                    cropper = new Cropper(retrievedImage3, {
                        aspectRatio: 1,
                        viewMode: 3,
                        preview: '#cropModalImage3 .preview'
                    });

                }).on('hidden.bs.modal', function () {
                    cropper.destroy();

                    cropper = null;
                });

                $('#cropModalImage3 #crop').on('click', function () {
                    var canvas = cropper.getCroppedCanvas({
                        width: 700,
                        height: 700
                    });

                    modal3.hide();
                    canvas.toBlob(function (blob) {
                        URL.createObjectURL(blob);
                        var reader = new FileReader();

                        reader.readAsDataURL(blob);
                        reader.onloadend = function () {
                            var base64_data = reader.result;

                            $(imageResult3).attr('src', base64_data);
                            $('#data_image_3').attr('value', base64_data);
                        };
                    });
                });
                // IMAGE 4
                var retrievedImage4 = document.getElementById('retrieved_image4');
                var imageResult4 = document.querySelector('.image-4');
                var modal4 = new bootstrap.Modal(document.getElementById('cropModalImage4'), { keyboard: false });

                $('#register_image_4').on('change', function (e) {
                    var files = e.target.files;
                    var done = function (url) {
                        retrievedImage4.src = url;

                        modal4.show();
                    };

                    if (files && files.length > 0) {
                        var reader = new FileReader();

                        reader.onload = function () {
                            done(reader.result);
                        };
                        reader.readAsDataURL(files[0]);
                    }
                });

                $('#cropModalImage4').on('shown.bs.modal', function () {
                    cropper = new Cropper(retrievedImage4, {
                        aspectRatio: 1,
                        viewMode: 3,
                        preview: '#cropModalImage4 .preview'
                    });

                }).on('hidden.bs.modal', function () {
                    cropper.destroy();

                    cropper = null;
                });

                $('#cropModalImage4 #crop').on('click', function () {
                    var canvas = cropper.getCroppedCanvas({
                        width: 700,
                        height: 700
                    });

                    modal4.hide();
                    canvas.toBlob(function (blob) {
                        URL.createObjectURL(blob);
                        var reader = new FileReader();

                        reader.readAsDataURL(blob);
                        reader.onloadend = function () {
                            var base64_data = reader.result;

                            $(imageResult4).attr('src', base64_data);
                            $('#data_image_4').attr('value', base64_data);
                        };
                    });
                });
            });

            // Increment quantity for "plat" or "sommelerie"
            function incrementQuantity(element, id, url) {
                $(element).addClass('disabled');

                var quantity = parseInt(element.getAttribute('data-quantity'));

                // Increment quantity
                quantity++;

                $('#quantity-' + id + ' span').text(quantity);

                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    url: url + '/' + id,
                    method: 'PUT',
                    data: { 'id' : id, 'quantite' : quantity },
                    success: function (data) {
                        if (!data.success) {
                            $('#jSReqAlert .alert').addClass('alert-danger');
                            $('#jSReqAlert .bi').addClass('bi-exclamation-triangle');
                            $('#jSReqAlert .message_content').text(data.message);
                            $('#jSReqAlert').removeClass('d-none');
                            $(element).removeClass('disabled');

                            // Reset decrementing quantity
                            quantity--;

                            $('#quantity-' + id + ' span').text(quantity);

                        } else {
                            $('#jSReqAlert .alert').addClass('alert-success');
                            $('#jSReqAlert .bi').addClass('bi-info-circle');
                            $('#jSReqAlert .message_content').text(data.message);
                            $('#jSReqAlert').removeClass('d-none');
                            location.reload();
                        }
                    },
                    error: function (xhr, error, status_description) {
                        $('#jSReqAlert .alert').addClass('alert-danger');
                        $('#jSReqAlert .bi').addClass('bi-exclamation-triangle');
                        $('#jSReqAlert .message_content').text(xhr.status + ' - ' + status_description);
                        $('#jSReqAlert').removeClass('d-none');
                        $(element).removeClass('disabled');

                        // Reset decrementing quantity
                        quantity--;

                        $('#quantity-' + id + ' span').text(quantity);
                    }
                });
            }

            // Delete from Datatable with SweetAlert
            function deleteData(id, url) {
                Swal.fire({
                    title: 'Attention suppression',
                    text: 'Voulez-vous vraiment supprimer ?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oui, supprimer',
                    cancelButtonText: 'Annuler'

                }).then(function (result) {
                    if (result.isConfirmed) {
                        $.ajax({
                            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                            url: url + '/' + id,
                            method: 'DELETE',
                            data: { 'id' : id },
                            success: function (data) {
                                // load('#tab-session');
                                if (!data.success) {
                                    Swal.fire({
                                        title: 'Oups !',
                                        text: data.message,
                                        icon: 'error'
                                    });

                                } else {
                                    Swal.fire({
                                        title: 'Parfait',
                                        text: data.message,
                                        icon: 'success'
                                    });
                                    location.reload();
                                }
                            },
                            error: function (xhr, error, status_description) {
                                console.log(xhr.responseJSON);
                                console.log(xhr.status);
                                console.log(error);
                                console.log(status_description);
                            }
                        });

                    } else {
                        Swal.fire({
                            title: 'Annulée',
                            text: 'La suppression est annulée',
                            icon: 'error'
                        });
                    }
                });
            }
        </script>
    </body>
</html>
