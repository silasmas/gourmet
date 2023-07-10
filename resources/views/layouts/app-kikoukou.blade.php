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
        <!-- Modal start -->
        <div class="modal fade" id="modal-reservation" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content ">
                <div class="modal-header px-sm-4" style="border: none;">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0 px-sm-4">
                    <div class="text-center">
                        <h5 class="formation-title mb-4">Réservation</h5>
                    </div>
                    <form method="POST" action="{{ route('kicoucou.reserver') }}">
                        @csrf
                        <div class="form-group">
                            <div class="row g-3">
                                <div class="col-6">
                                    <label for="register_dateReservation">Date de réservation</label>
                                    <input type="date" name="register_dateReservation" id="register_dateReservation" class="form-control" placeholder="Selectionnez la date">
                                </div>
    
                                <div class="col-6">
                                    <div class="col-input">
                                        <label for="register_heureReservation">Heure de réservation</label>
                                        <select name="register_heureReservation" id="register_heureReservation" class="form-select">
                                            <option class="small" disabled selected>Choisir l'heure</option>
                                            <option>09h30</option>
                                            <option>10h30</option>
                                            <option>11h30</option>
                                            <option>12h30</option>
                                            <option>13h30</option>
                                            <option>14h30</option>
                                        </select>
                                    </div>
                                </div>
    
                                <div class="col-6">
                                    <label for="selectNbrPerson">Nombre de personnes</label>
                                    <select id="selectNbrPerson" class="form-select">
                                        <option value="1">1 personne</option>
                                        <option value="2">2 personnes</option>
                                        <option value="3">3 personnes</option>
                                        <option value="4">4 personnes</option>
                                        <option value="5">5 personnes</option>
                                        <option value="6+">Plus de 5 personnes</option>
                                    </select>
    
                                    <input type="number" name="register_nombre" id="writeNbrPerson" class="d-none mt-3 form-control" placeholder="Ecrire le nombre de personnes" value="">
                                </div>
    
                                <div class="col-6">
                                    <label for="register_prix">Prix : </label>
                                    <input type="text" id="register_prix" name="register_prix" class="form-control ps-0 pt-0 bg-transparent border-0 fs-5 text-primary disabled" value="5 USD">
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
    
                        <button class="btn mt-3">Réserver</button>
                    </form>
                </div>
              </div>
            </div>
        </div>
    
        <div id="kicoucouPopUp" class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header px-sm-4" style="border: none;">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0 px-sm-4">
                    <div class="row g-4">
                        <div class="col-lg-6 col-sm-8 mx-auto">
                            <div class="bg-image">
                                <img src="{{ asset('assets/img/logo-kicoucou.png') }}" alt="logo" class="img-fluid">
                                <div class="mask"></div>
                            </div>
                        </div>
    
                        <div class="col-12 text-center">
                            <p>Kicoucou est un nouveau concept de restaurant qui allie tradition, qualité du service, qualité des produits et cuisine créative.</p>
                            <p>Vous recherchez un endroit cosy, où partager un repas surprenant entre amis ou en famille ? Kicoucou se fera le plaisir de vous accueillir.</p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <!-- Modal end -->

        @include('parties.navbar-kikoukou')
        <div class="full-menu">
            <div class="close-menu">
                <span></span>
                <span></span>
            </div>
            <div class="container-fluid px-0">
                <ul>
                    <li>
                        <a href="{{ route('home') }}"
                            class="{{ Route::current()->getName() == 'home' ? 'active' : '' }}">Accueil</a>
                    </li>
                    <li>
                        <a href="{{ route('kicoucou') }}"
                            class="{{ Route::current()->getName() == 'kicoucou' ? 'active' : '' }}">Kicoucou resto</a>
                    </li>
                    <li>
                        <a href="{{ route('atelier') }}"
                            class="{{ Route::current()->getName() == 'atelier' ? 'active' : '' }}">Atelier</a>
                    </li>
                    <li>
                        <a href="{{ route('boisson') }}"
                            class="{{ Route::current()->getName() == 'boisson' ? 'active' : '' }}">boisson </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="{{ Route::current()->getName() == 'about' ? 'active' : '' }}">A propos</a>
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
                                    <div class="d-flex justify-content-start justify-content-lg-end">
                                        <p>Developed By <a href="#">SDEV</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        </div>
        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
@if (!session()->has('first_time'))
        <script type="text/javascript">
            var modalKicoucouPopUp = new bootstrap.Modal(document.querySelector('#kicoucouPopUp'), {
                keyboard: false
            });

            modalKicoucouPopUp.show();
        </script>    
@endif
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
                const listItems = document.querySelectorAll('.col-input .block-list li');
                const inputField = $(listItems).parent().parent().parent().find('.form-control');

                // console.log(inputField);

                listItems.forEach(item => {
                    item.addEventListener('click', () => {
                        $(item).parent().find('li').removeClass('active')
                        $(item).addClass('active')
                        const valList = item.innerText
                        // $(inputField).val(valList);
                        var input = $(item).parent().parent().parent().find('.form-control');
                        input.val(valList)
                        // console.log(inputField.value = item.textContent);
                    });
                });
                // ------------------------------------------------------------------------------
                // NOMBRE DE PERSONNE
                $('#selectNbrPerson').change(function (e) { 
                    var nbrPerson = $(this).val();

                    if ($(this).val() == '6+') {
                        if ($('#writeNbrPerson').hasClass('d-none')) {
                            $('#writeNbrPerson').removeClass('d-none');
                        }

                        $('#writeNbrPerson').val(6);
                        $('#register_prix').val('30 USD');

                    } else {
                        $('#writeNbrPerson').addClass('d-none');
                        $('#writeNbrPerson').val(nbrPerson);
                        $('#register_prix').val((nbrPerson * 5) + ' USD');
                    }

                });

                $('#writeNbrPerson').keyup(function () {
                    var nbrPerson = $(this).val();

                    if (!Number.isInteger(nbrPerson)) {
                        $('#register_prix').val('0 USD');
                    }

                    $('#register_prix').val((nbrPerson * 5) + ' USD');
                });

                // TRANSACTION TYPE
                $('#paymentMethod .align-middle').each(function () {
                    $(this).on('click', function () {
                        if ($('#bank_card').is(':checked')) {
                            $('#phoneNumberForMoney').addClass('d-none');

                        } else {
                            $('#phoneNumberForMoney').removeClass('d-none');
                        }
                    });
                });
            });
        </script>
{{ session()->put('first_time', 'yes') }}
    </body>
</html>
