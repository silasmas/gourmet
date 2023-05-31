@extends('layouts.app')

@section('content')
<div class="banner-home">
    <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="content-banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10">
                                <h1>Kicoucou resto </h1>
                                <h2>Une Nourriture <br> Saine et <span class="text-warning">Délicieuse</span></h2>
                                <p>Kicoucou est un nouveau concept de restaurant qui allie tradition, qualité du service, qualité des produits et cuisine créative.</p>
                                <a href="/kicoucou" class="btn">Savoir plus</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card card-cover">
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                       
                    </div> --}}
                    <img src="{{asset('assets/img/1.jpg')}}" alt="banner" class="cover">
                </div>
            </div>
            <div class="carousel-item">
                <div class="content-banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10">
                                <h1>Atelier</h1>
                                <h2>Production <br> d'Aliments de <span class="text-warning">Qualité</span></h2>
                                <p>Nous assurons le traitement, la conservation, la transformation et  la production des produits alimentaires en série.</p>
                                <a href="/atelier" class="btn">Savoir plus</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card card-cover">
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                       
                    </div> --}}
                    <img src="{{asset('assets/img/3.jpg')}}" alt="banner" class="cover">
                </div>
            </div>
            <div class="carousel-item">
                <div class="content-banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10">
                                <h1>Boisson</h1>
                                <h2>Une Nourriture <br> Saine et <span>Délicieuse</span></h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt magni totam quae tenetur ullam corrupti!</p>
                                <a href="/boisson" class="btn">Savoir plus</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card card-cover">
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                       
                    </div> --}}
                    <img src="{{asset('assets/img/banner.jpg')}}" alt="banner" class="cover">
                </div>
            </div>
            <button class="carousel-control-prev btn-carousel" type="button" data-bs-target="#carousel" data-bs-slide="prev">
              <i class="bi bi-arrow-left"></i>
            </button>
            <button class="carousel-control-next btn-carousel" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <i class="bi bi-arrow-right"></i>

        </div>
    </div>
   
</div>
<div class="block-about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2>Nous sommes Gourmet</h2>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorum nostrum tempora at accusantium id praesentium dolore. Atque aliquid error delectus enim minima vero incidunt impedit, saepe quasi exercitationem tempore!</h3>
            </div>
        </div>
    </div>
</div>
<div class="block-service">
   <div class="container">
        <div class="row g-lg-4 g-3">
            <div class="col-12">
                <div class="text-center">
                    <h2>Nos branches</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <a href="#">
                        <div class="block-img">
                            <img src="{{asset('assets/img/banner.jpg')}}" alt="">
                        </div>
                        <div class="content-text">
                            <h5>Kicoucou resto</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aspernatur dolor earum doloribus ipsum laborum.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <a href="#">
                        <div class="block-img">
                            <img src="{{asset('assets/img/banner.jpg')}}" alt="">
                        </div>
                        <div class="content-text">
                            <h5>Atelier</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aspernatur dolor earum doloribus ipsum laborum.</p>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <a href="#">
                        <div class="block-img">
                            <img src="{{asset('assets/img/banner.jpg')}}" alt="">
                        </div>
                        <div class="content-text">
                            <h5>Boisson</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aspernatur dolor earum doloribus ipsum laborum.</p>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> 
</div>
<div class="block-choice">
    <div class="container">
        <div class="row g-lg-5 g-4 align-items-center">
            <div class="col-lg-6">
                <div class="card">
                    <img src="{{asset('assets/img/img-4.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-start">
                    <h2>Pourquoi nous choisir ? </h2>
                    <h3>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum at quae alias.
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores quasi vero est nihil repellat porro expedita quod?</p>
                    <ul class="list d-flex align-items-baseline flex-wrap">
                        <li>La qualité</li>
                        <li>La qualité</li>
                        <li>La qualité</li>
                        <li>La qualité</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row g-lg-5 g-3">
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
                        <p>Developed By <a href="#">Silas Dev</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection
