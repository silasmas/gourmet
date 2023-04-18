<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Font Icons Files -->
        <link rel="stylesheet" href="{{ asset('assets/icons/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/icons/boxicons/css/boxicons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/icons/remixicon/remixicon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/icons/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css">

        <!-- Addons CSS Files -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/custom/jquery/jquery-ui/jquery-ui.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/custom/cropper/css/cropper.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/yummy/aos/aos.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/yummy/glightbox/css/glightbox.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/yummy/swiper/swiper-bundle.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/custom/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/custom/mdb/css/mdb.min.css') }}">

        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Yummy CSS File -->
        <link href="{{ asset('assets/css/style.yummy.css') }}" rel="stylesheet">
        <!-- Custom CSS File -->
        <link href="{{ asset('assets/css/style.custom.css') }}" rel="stylesheet">

        <title>Groupe Gourmet</title>
    </head>

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                    <h1>Gourmet</h1>
                </a>

                <nav id="navbar" class="navbar shadow-0">
                    <ul>
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li><a href="#">Resto Traiteur</a></li>
                        <li class="dropdown"><a href="#"><span>Atelier</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Production</a></li>
                                <li><a href="#">Formation culinaire</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Sommellerie</a></li>
                        <li><a href="{{ route('about') }}">A propos</a></li>
                    </ul>
                </nav><!-- .navbar -->

                <a class="btn-book-a-table" href="#"><span class="bi bi-lock d-sm-none"></span> <span class="d-sm-inline-block d-none">Se connecter</span></a>
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            </div>
        </header><!-- End Header -->

        <main id="main">
@yield('guest-content')
        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-lg-3 col-md-6 d-flex">
                        <i class="bi bi-geo-alt icon"></i>
                        <div>
                            <h4>Address</h4>
                            <p>Rue de la Crèche 19 1050 <br>Bruxelles, Belgique<br></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links d-flex">
                        <i class="bi bi-telephone icon"></i>
                        <div>
                            <h4>Reservations</h4>
                            <p><strong>Phone:</strong> +1 5589 55488 55<br> <strong>Email:</strong> infokicoucou@gmail.com<br></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links d-flex">
                        <i class="bi bi-clock icon"></i>
                        <div>
                            <h4>Heures d'ouverture</h4>
                            <p><strong>Lun-Sam : 11H - 23H</strong><br>Dim: Fermé</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nous suivre</h4>
                        <div class="social-links d-flex">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Gourmet</span></strong>. Tous droits réservés
                </div>
                <div class="credits">
                    Designed by <a href="https://silasmas.com/">SDEV</a>
                </div>
            </div>
        </footer><!-- End Footer -->
        <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <!-- JavaScript Libraries -->
        <script src="{{ asset('assets/addons/custom/jquery/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/addons/custom/jquery/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/addons/custom/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/addons/custom/mdb/js/mdb.min.js') }}"></script>
        <script src="{{ asset('assets/addons/custom/cropper/js/cropper.min.js') }}"></script>
        <script src="{{ asset('assets/addons/custom/autosize/js/autosize.min.js') }}"></script>
        <script src="{{ asset('assets/addons/yummy/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/addons/yummy/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/addons/yummy/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('assets/addons/yummy/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/addons/custom/biliap/js/biliap.cores.js') }}"></script>

        <!-- Yummy Javascript -->
        <script src="{{ asset('assets/js/scripts.yummy.js') }}"></script>
        <!-- Custom Javascript -->
        <script src="{{ asset('assets/js/scripts.custom.js') }}"></script>
    </body>
</html>
