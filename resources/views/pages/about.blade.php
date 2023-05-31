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
                    <p class="mb-3 text-dark">Le Gourmet du Congo est une société de droit congolais évoluant dans le secteur de HORECA.</p>
                    <p class="mb-3 text-dark">L'ambition de notre groupe, «GDC», est d'améliorer la qualité des services dans la restauration c'est-à-dire ; de la production (transformation (des mets) à la livraison (ventes) des produits, et dans l'événementiel (organisation des banquets, réception et autres festivités de grande, moyenne et petite taille) à Kinshasa en RD Congo. Par service de qualité, nous entendons :</p>
                    <p class="mb-1 text-dark"><i class="bi bi-pin-angle-fill me-3" style="color: #bea605;"></i>Transformation et production des produits destinés à la vente</p>
                    <p class="mb-1 text-dark"><i class="bi bi-pin-angle-fill me-3" style="color: #bea605;"></i>Un service personnalisé et complet</p>
                    <p class="mb-1 text-dark"><i class="bi bi-pin-angle-fill me-3" style="color: #bea605;"></i>Des conseils objectifs en événementiel</p>
                    <p class="mb-3 text-dark"><i class="bi bi-pin-angle-fill me-3" style="color: #bea605;"></i>Un service adapté et une aide permanente</p>
                </div>
            </div>
        </div>
    </div>

    <div class="block-about about-lg pt-0 pb-5">
        <div class="container">
            <div class="row justify-content-center g-4">
                <div class="col-lg-6">
                    <p class="mb-3 text-dark">Pour atteindre nos objectifs, nous nous appuyons sur</p>
                    <p class="mb-3 text-dark">L'ambition de notre groupe, «GDC», est d'améliorer la qualité des services dans la restauration c'est-à-dire ; de la production (transformation (des mets) à la livraison (ventes) des produits, et dans l'événementiel (organisation des banquets, réception et autres festivités de grande, moyenne et petite taille) à Kinshasa en RD Congo. Par service de qualité, nous entendons :</p>
                    <p class="mb-1 text-dark"><i class="bi bi-pin-angle-fill me-3" style="color: #bea605;"></i>Une symbiose d'expertise entre celle acquise à l'étranger et l'expertise locale.</p>
                    <p class="mb-1 text-dark"><i class="bi bi-pin-angle-fill me-3" style="color: #bea605;"></i>Les normes de sécurité et d’hygiène rigoureuses, la mise en application des normes HACCP</p>
                    <p class="mb-1 text-dark"><i class="bi bi-pin-angle-fill me-3" style="color: #bea605;"></i>Le recours aux fournisseurs locaux.<br>Notre groupe s'approvisionnera substantiellement auprès des producteurs locaux tels que, les maraîchères, les différentes fermes et plantations locales. C'est un choix stratégique pour nous assurer une réduction des coûts de production et  par la même occasion, encourager le travail des maraîchères et les producteurs locaux.</p>
                    <p class="mb-3 text-dark"><i class="bi bi-pin-angle-fill me-3" style="color: #bea605;"></i>Le pilotage de notre activité par une main experte, un homme de terrain qui détient une expertise avérée dans la restauration collective. Cet expert est également le promoteur principal du gourmet du Congo.</p>
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
                        <div class="d-flex justify-content-center justify-content-lg-end">
                            <p>Developed By <a href="#">SDEV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
