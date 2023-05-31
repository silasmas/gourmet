@extends('layouts.guest')

@section('guest-content')

            <!-- ======= Breadcrumbs ======= -->
            <div class="breadcrumbs">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>A propos de nous</h2>
                        <ol>
                            <li><a href="{{route('home') }}">Accueil</a></li>
                            <li>A propos</li>
                        </ol>
                    </div>
                </div>
                <div class="card"></div>
            </div><!-- End Breadcrumbs -->

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>A propos</h2>
                        <p>Qui <span>sommes-nous</span></p>
                    </div>

                    <div class="row gy-4">
                        <div class="col-lg-7 position-relative about-img" style="background-image: url({{ asset('assets/img/pub/pub_01.jpg') }}) ;" data-aos="fade-up" data-aos-delay="150">
                            <div class="call-us position-absolute">
                                <h4>Réserver une table</h4>
                                <p>(+243) 820 661 009 / 898 681 751</p>
                            </div>
                        </div>
                        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                            <div class="content ps-0 ps-lg-5">
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                                </p>

                                <div class="position-relative mt-4">
                                    <img src="{{ asset('assets/img/pub/pub_02.jpg') }}" class="img-fluid" alt="">
                                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End About Section -->

@endsection
