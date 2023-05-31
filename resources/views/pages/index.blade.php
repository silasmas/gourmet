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
                                <h2>Des Boissons <br> Vraiment <span class="text-warning">Vitalisantes</span></h2>
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
                    <img src="{{asset('assets/img/5.jpg')}}" alt="banner" class="cover">
                </div>
            </div>
            <button class="carousel-control-prev btn-carousel" type="button" data-bs-target="#carousel" data-bs-slide="prev">
              <i class="bi bi-arrow-left"></i>
            </button>
            <button class="carousel-control-next btn-carousel" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
    </div>
   
</div>
<div class="block-choice py-5">
    <div class="container mt-0">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mb-2">Le Gourmet du Congo</h2>
                <h3 class="mb-5">La qualité dans le service !</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="bg-image mt-4">
                    <div class="card">
                        <img src="{{asset('assets/img/pub/pub_02.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h5 class="mb-3" style="line-height: 2rem;">Nous sommes une société de droit congolais évoluant dans le secteur de RECA.</h5>
                <p class="mb-3 text-dark">Notre ambition est d'offrir des  services de qualité sur toute la chaîne de la restauration, en partant du choix des aliments, de leur préparation à leur mise en bouche. Des repas délicieux faits à partir des produits de qualité, c'est notre credo !</p>
                <p class="mb-3 text-dark">Notre service événementiel assure l'organisation de vos événements : dîners d'affaires ou de famille,  buffets,  cocktails, soirées et cérémonies festives (anniversaire, mariage).</p>
                <p class="mb-3 text-dark">Pour atteindre nos objectifs, nous nous appuyons sur une symbiose d'expertise entre celle acquise à l'étranger et l'expertise locale :</p>
                <p class="mb-1 text-dark"><i class="bi bi-pin-angle-fill me-3" style="color: #bea605;"></i>Les normes de sécurité et d’hygiène rigoureuses ;</p>
                <p class="mb-1 text-dark"><i class="bi bi-pin-angle-fill me-3" style="color: #bea605;"></i>La mise en application des normes HACCP ;</p>
                <p class="mb-3 text-dark"><i class="bi bi-pin-angle-fill me-3" style="color: #bea605;"></i>Le recours aux fournisseurs locaux.</p>
                <p class="mb-3 text-dark">Le pilotage de notre activité par des mains expertes, des passionnés de cuisine et un promoteur aguerri dans la restauration.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-sm-6"></div>
            <div class="col-lg-4 col-sm-6"></div>
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
                            <p>Kicoucou est un nouveau concept de restaurant congolais qui allie tradition, qualité du service, qualité des produits et cuisine créative.</p>
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
                            <p>Nous assurons le traitement, la conservation, la transformation et  la production des produits alimentaires en série.</p>
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
<div class="block-choice block-special">
    <div class="container">
        <div class="row g-lg-5 g-4 align-items-center">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <img src="{{asset('assets/img/pub/pub_03.jpg')}}" alt="">
                </div>
                <h3 style="font-size: 2.5rem;">LUABEYA NKOBONG</h3>
            </div>
            <div class="col-lg-6">
                <div class="text-start">
                    <h2>Le Promoteur</h2>
                    <p class="mb-3 text-dark"><strong>Luabeya Nkobong</strong> est diplômé en Hôtellerie, option Restauration et détenteur d’un diplôme supérieur en Gestion Hôtelière, titre obtenu en Belgique à l’institut Arthur Haulot.</p>
                    <p class="mb-3 text-dark">Gastronome-hôtelier de formation et homme d’expérience, Monsieur Junior Luabeya Nkobong baigne dans le monde de la restauration depuis une vingtaine d’années.</p>
                    <p class="mb-3 text-dark">Il a effectué des stages et a travaillé dans différents établissements de renommée internationale comme  Hôtel Hilton, Maison du Bœuf, Café d’Egmont, Brasserie Georges, Brasserie du Lac, Hôtels du Groupe Accor.</p>
                    <p class="mb-3 text-dark">Il a occupé différentes fonctions notamment : Maître d’hôtel, Maître des cérémonies, cuisinier, chef de cuisine et Sommelier  œnologue. Actuellement il est le chef associé exécutif du Restaurant « <strong>KICOUCOU</strong> » en Belgique.</p>
                    <p class="mb-3 text-dark">Avant la création de Kicoucou, il a occupé le poste de chef exécutif à l'UCB (cuisine de direction) pendant 2 ans.</p>
                    <p class="mb-3 text-dark">Fort de cette expérience, et passionné, Monsieur Luabeya porte le projet du Gourmet du Congo, le lancement d'une chaîne de restaurant Kicoucou et d'un atelier de production d'aliments de qualité à des prix concurrentiels.</p>
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
