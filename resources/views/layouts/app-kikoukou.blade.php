<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
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
                    <a href="{{ route('about') }}"
                        class="{{ Route::current()->getName() == 'about' ? 'active' : '' }}">A propos</a>
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
                    <a href="{{ route('sommelerie') }}"
                        class="{{ Route::current()->getName() == 'sommelerie' ? 'active' : '' }}">Sommellerie </a>
                </li>
            </ul>
        </div>
        <div class="block-info mt-auto">
            <div class="row g-3">
                <div class="col-12">
                    <div class="d-flex">
                        <i class="bi bi-geo-alt-fill"></i>
                        <div>
                            <h5>Addresse</h5>
                            <p>
                                Rue de la Crèche 19 1050 Bruxelles, Belgique
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
                            <a href="tel:+155895548855"> +1 5589 55488 55</a>
                        </p>
                        <p>
                            <a href="mailto:infokicoucou@gmail.com">infokicoucou@gmail.com</a>
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
                        <span class="bi bi-info-circle me-2 mb-0 fs-4" style="vertical-align: -3px;"></span>
                        {{ request()->alert_success }}
                        <button type="button" class="btn-close mt-1" data-bs-dismiss="alert"
                            aria-label="@lang('miscellaneous.close')"></button>
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
                        <span class="bi bi-info-circle me-2 mb-0 fs-4" style="vertical-align: -3px;"></span>
                        {{ \Session::get('success_message') }}
                        <button type="button" class="btn-close mt-1" data-bs-dismiss="alert"
                            aria-label="@lang('miscellaneous.close')"></button>
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
                        <span class="bi bi-info-circle me-2 mb-0 fs-4" style="vertical-align: -3px;"></span>
                        {{ $alert_success }}
                        <button type="button" class="btn-close mt-1" data-bs-dismiss="alert"
                            aria-label="@lang('miscellaneous.close')"></button>
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
                        <span class="bi bi-exclamation-triangle me-2 mb-0 fs-4" style="vertical-align: -3px;"></span>
                        {{ \Session::get('exception') }}
                        <button type="button" class="btn-close mt-1" data-bs-dismiss="alert"
                            aria-label="@lang('miscellaneous.close')"></button>
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
                        <span class="bi bi-exclamation-triangle me-2 mb-0 fs-4" style="vertical-align: -3px;"></span>
                        {{ \Session::get('error_message') }}
                        <button type="button" class="btn-close mt-1" data-bs-dismiss="alert"
                            aria-label="@lang('miscellaneous.close')"></button>
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
                        <span class="bi bi-exclamation-triangle me-2 mb-0 fs-4" style="vertical-align: -3px;"></span>
                        {{ $response_error->message }}
                        <button type="button" class="btn-close mt-1" data-bs-dismiss="alert"
                            aria-label="@lang('miscellaneous.close')"></button>
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
    </div>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
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

            // TRANSACTION TYPE
            $('#paymentMethod .form-check-input').each(function () {
                $(this).on('click', function () {
                    if ($('#bank_card').is(':checked')) {
                        $('#phoneNumberForMoney').addClass('d-none');

                    } else {
                        $('#phoneNumberForMoney').removeClass('d-none');
                    }
                });
            });
        })
    </script>
</body>

</html>
