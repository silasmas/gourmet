@extends('layouts.guest')

@section('guest-content')

            <!-- ======= Hero Section ======= -->
            <section id="hero" class="hero d-flex align-items-center section-bg">
                <div class="container">
                    <div class="row justify-content-between gy-5">
                        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                            <h2 data-aos="fade-up">Une Nourriture Saine<br>et Délicieuse</h2>
                            <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
                            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                                <a href="#book-a-table" class="btn-book-a-table">Commander</a>
                                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Voir la Video</span></a>
                            </div>
                        </div>
                        <div class="col-lg-7 order-1 order-lg-2 text-center text-lg-start">
                            <img src="{{ asset('assets/css/hero.png') }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
                        </div>
                    </div>
                </div>
            </section><!-- End Hero Section -->

            <!-- ======= Stats Counter Section ======= -->
            <section id="stats-counter" class="stats-counter" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{ asset('assets/img/pub/stats-bg.jpg') }}) center bottom;">
                <div class="container" data-aos="zoom-out">
                    <div class="row gy-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Clients</p>
                            </div>
                        </div><!-- End Stats Item -->
    
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Projets</p>
                            </div>
                        </div><!-- End Stats Item -->
    
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Heurs de Support</p>
                            </div>
                        </div><!-- End Stats Item -->
    
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Travailleurs</p>
                            </div>
                        </div><!-- End Stats Item -->
                    </div>
                </div>
            </section><!-- End Stats Counter Section -->

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Témoignages</h2>
                        <p>Ce qu'ils <span>disent de nous</span></p>
                    </div>
                    <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="row gy-4 justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="testimonial-content">
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                                <h3>Saul Goodman</h3>
                                                <h4>Ceo &amp; Founder</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 text-center">
                                            <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="img-fluid testimonial-img" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
    
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="row gy-4 justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="testimonial-content">
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                                <h3>Sara Wilsson</h3>
                                                <h4>Designer</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 text-center">
                                            <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="img-fluid testimonial-img" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
    
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="row gy-4 justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="testimonial-content">
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                                <h3>Jena Karlis</h3>
                                                <h4>Store Owner</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 text-center">
                                            <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="img-fluid testimonial-img" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="row gy-4 justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="testimonial-content">
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                                <h3>John Larson</h3>
                                                <h4>Entrepreneur</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 text-center">
                                            <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="img-fluid testimonial-img" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section><!-- End Testimonials Section -->

@endsection
