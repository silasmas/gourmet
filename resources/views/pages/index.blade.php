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
                                <p>Nous vous proposons un accord vins et mets et le négoce de différents types de breuvages importés et des boissons locales.</p>
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
                        <img src="{{asset('assets/img/pub/img.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h5 class="mb-3" style="line-height: 2rem;">Nous sommes une société de droit congolais évoluant dans le secteur de RECA (Restauration et Café).</h5>
                <p class="mb-3 text-dark">Notre ambition est d'offrir des services de qualité sur toute la chaîne de la restauration, en partant du choix des aliments et des ingrédients à la préparation des plats ; puis des mets à la dégustation. Des repas délicieux faits à partir des produits frais, c'est notre credo !</p>
                <p class="mb-3 text-dark">Le Gourmet du Congo, c'est aussi un atelier de production. Nous produisons en série des produits alimentaires de qualité à des prix concurrentiels. La gamme de nos produits est large. Nous fournissons  diverses boissons (jus, yaourt), des sauces variées, des aliments de consommation directe à la demande ou à la carte comme le boudin de poulet.</p>
                <p class="mb-3 text-dark">Enfin, le Gourmet du Congo, c'est un service événementiel performant qui a fait ses preuves à l'étranger principalement en Belgique.</p>
                <p class="mb-3 text-dark">Pour atteindre nos objectifs, nous nous appuyons sur :</p>
                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block">Une main d'œuvre experte, à la fois locale et étrangère, sur des passionnés de cuisine et sur un promoteur de projet aguerri dans la restauration ;</span></p>
                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block">Le respect rigoureux des normes de sécurité et d’hygiène ;</span></p>
                <p class="d-flex mb-3 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block">La mise en application des normes HACCP.</span></p>
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
                    <div class="block-img">
                        <img src="{{asset('assets/img/1.jpg')}}" alt="">
                    </div>
                    <div class="content-text">
                        <h5>Kicoucou resto</h5>
                        <p>Kicoucou est un nouveau concept de restaurant congolais qui allie tradition, qualité du service, qualité des produits et cuisine créative.</p>
                        <a href="{{ route('kicoucou') }}" class="btn pt-0 px-0 border-bottom border-3 border-warning rounded-0 float-end">Voir les détails <i class="bi bi-arrow-right ms-2 align-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="block-img">
                        <img src="{{asset('assets/img/3.jpg')}}" alt="">
                    </div>
                    <div class="content-text">
                        <h5>Atelier</h5>
                        <p>Nous assurons le traitement, la conservation, la transformation et  la production des produits alimentaires en série.</p>
                        <a href="{{ route('atelier') }}" class="btn pt-0 px-0 border-bottom border-3 border-warning rounded-0 float-end">Voir les détails <i class="bi bi-arrow-right ms-2 align-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="block-img">
                        <img src="{{asset('assets/img/5.jpg')}}" alt="">
                    </div>
                    <div class="content-text">
                        <h5>Boisson</h5>
                        <p>Nous vous proposons un accord vins et mets et le négoce de différents types de breuvages importés et des boissons locales.</p>
                        <a href="{{ route('boisson') }}" class="btn pt-0 px-0 border-bottom border-3 border-warning rounded-0 float-end">Voir les détails <i class="bi bi-arrow-right ms-2 align-middle"></i></a>
                    </div>
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
                <h3 style="font-size: 2rem;">LUABEYA NKOBONG Junior</h3>
            </div>
            <div class="col-lg-6">
                <div class="text-start">
                    <h2>Le Promoteur</h2>
                    <p class="mb-3 text-dark"><strong>Luabeya Nkobong Junior</strong> est diplômé en Hôtellerie, option Restauration et détenteur d’un diplôme supérieur en Gestion Hôtelière, titre obtenu en Belgique à l’institut Arthur Haulot.</p>
                    <p class="mb-3 text-dark">Gastronome-hôtelier de formation et homme d’expérience, Monsieur Junior Luabeya Nkobong baigne dans le monde de la restauration depuis une vingtaine d’années. Il a effectué des stages et a travaillé dans différents établissements de renommée internationale comme Hôtel Hilton, Maison du Bœuf, Café d’Egmont, Brasserie Georges, Brasserie du Lac, Hôtels du Groupe Accor.</p>
                    <p class="mb-3 text-dark">Il a occupé différentes fonctions notamment : Maître d’hôtel, Maître des cérémonies, cuisinier, chef de cuisine et Sommelier œnologue. Il a occupé le poste de chef exécutif à l'UCB (cuisine de direction) pendant 2 ans.</p>
                    <p class="mb-3 text-dark">En 2019, il a lancé à Bruxelles la chaîne de Restaurant Kicoucou. Il a, par ailleurs, occupé au sein de Kicoucou le poste de chef et d’associé exécutif. Actuellement, Il porte le projet gourmet du Congo.</p>
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
                        <p>Developed By <a href="#">SDEV</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection
