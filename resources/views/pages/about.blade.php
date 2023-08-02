@extends('layouts.app-page')

@section('content')
    <div class="banner-sm">
        <div class="container">
            <div class="text-center">
                <h1>A propos</h1>
            </div>
        </div>
    </div>

    <div class="block-about about-lg py-5">
        <div class="container">
            <div class="row justify-content-center g-4">
                <div class="col-lg-6">
                    <div class="card card-about">
                        <img src="{{ asset('assets/img/6.jpg') }}" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2>Qui sommes-nous ?</h2>
                    <h4 style="font-size: 3rem;">Le Gourmet du Congo</h4>
                    <p class="mb-3 text-dark">Le Gourmet du Congo est une société de droit congolais évoluant dans le secteur de RECA (Restauration et Café).</p>
                    <p class="mb-3 text-dark">Notre ambition est d'offrir des services de qualité sur toute la chaîne de la restauration, en partant du choix des aliments et des ingrédients à la préparation des plats ; puis des mets à la dégustation. Des repas délicieux faits à partir des produits frais, c'est notre credo !</p>
                </div>
            </div>
        </div>
    </div>

    <div class="block-about about-lg py-5">
        <div class="container">
            <div class="row justify-content-center g-4">
                <div class="col-lg-6">
                    <p class="mb-3 text-dark">Le Gourmet du Congo, c'est aussi un atelier de production. Nous produisons en série des produits alimentaires de qualité à des prix concurrentiels. La gamme de nos produits est large. Nous fournissons  diverses boissons (jus, yaourt), des sauces variées, des aliments de consommation directe à la demande ou à la carte comme le boudin de poulet.</p>
                    <p class="mb-3 text-dark">Enfin, le Gourmet du Congo, c'est un service événementiel performant qui a fait ses preuves à l'étranger principalement en Belgique.</p>
                    <p class="mb-3 text-dark">Pour atteindre nos objectifs, nous nous appuyons sur :</p>
                    <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block">Une main d'œuvre experte, à la fois locale et étrangère, sur des passionnés de cuisine et sur un promoteur de projet aguerri dans la restauration ;</span></p>
                    <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block">Le respect rigoureux des normes de sécurité et d’hygiène ;</span></p>
                    <p class="d-flex mb-3 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block">La mise en application des normes HACCP.</span></p>
                </div>

                <div class="col-lg-6">
                    <div class="bg-image overflow-hidden" style="border-radius: 2.5rem;">
                        <img src="{{ asset('assets/img/pub/pub_04.jpg') }}" alt="" class="img-fluid">
                        <div class="mask"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-map">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-map">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <h4>Ici c'est pour la map </h4>
                        </div>
                    </div>
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
                            <span>Phone: <a href="tel:+243898681751"> (+243) 898 681 751</a></span>
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
@endsection
