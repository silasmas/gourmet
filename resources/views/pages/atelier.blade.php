@extends('layouts.app-page')

@section('content')
<div class="banner-home banner-kikoukou">
    <div class="content-banner content-banner-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Bienvenue sur notre atelier</h1>
                    <h2>La Formation <span class="text-warning">Culinaire</span></h2>
                    <p>Nous sommes un atelier ouvert. Nous produisons et nous formons.</p>
                    <a href="#block-formation" class="btn">Voir nos formations</a>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/banner.jpg') }}" alt="banner" class="cover">
    </div>
</div>

<div class="block-about block-formation" id="block-formation">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mb-2">Nos formations</h2>
                <h3 class="mb-5" style="line-height: 3rem;">En tant qu'atelier ouvert, nous produisons et formons.</h3>
            </div>
        </div>
        <div class="row justify-content-center g-lg-5 g-3">
            <div class="col-lg-5">
                <a href="#" data-bs-toggle="modal"
                data-bs-target="#modal-plus-1">
                    <div class="card card-formation">
                        <img src="{{ asset('assets/img/banner.jpg') }}" alt="banner">
                        <div class="content">
                            Production
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-5">
                <a href="#" data-bs-toggle="modal"
                data-bs-target="#modal-plus-2">
                    <div class="card card-formation">
                        <img src="{{ asset('assets/img/banner.jpg') }}" alt="banner">
                        <div class="content">
                            Formation culinaire
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="block-choice block-special py-5 bg-light">
    <div class="container">
        <div class="row g-3 align-items-center">
            <div class="col-lg-6">
                <div class="card">
                    <img src="{{ asset('assets/img/pub/pub_02.jpg') }}" alt="">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="text-start">
                    <p class="mb-3 text-dark">Nous assurons le traitement, la conservation, la transformation et  la production des produits alimentaires en série.</p>
                    <p class="mb-3 text-dark">Notre objectif est d'offrir aux consommateurs une production en série des aliments de meilleure qualité à des prix concurrentiels.</p>
                    <p class="mb-3 text-dark">Nous assurons également :</p>
                    <p class="mb-2 text-dark"><i class="bi bi-pin-angle-fill me-3" style="color: #bea605;"></i><strong>La production des aliments crus</strong> : Ce service englobe le nettoyage, la mise emballage.</p>
                    <ul class="mb-2">
                        <li><u>Produits d'élevage</u> : viande, bœuf, chèvre, gibiers ;</li>
                        <li><u>Volaille</u> : poulet, cailles ;</li>
                        <li><u>Produits agricoles</u> : haricots, maïs ;</li>
                        <li><u>Piscicultures</u> : poisson, dans toute sa diversité.</li>
                    </ul>
                    <p class="mb-3 text-dark"><i class="bi bi-pin-angle-fill me-3" style="color: #bea605;"></i><strong>La Production des produits de consommation directe</strong> : Il s'agit de la transformation et la préparation des aliments prêts à la consommation. La production de diverses boissons, jus, sauces, et différents menus.</p>
                    <p class="mb-3 text-dark">Pour un devis ou un conseil, joignons au (+243) 820 661 009 / 898 681 751 ou nous écrire sur <a href="mailto:gourmetducongo@gmail.com">gourmetducongo@gmail.com</a></p>
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
<div class="modal fade" id="modal-plus-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content ">
        <div class="modal-header px-sm-4" style="border: none;">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pt-0 px-sm-4">
            <h5 class="formation-title">Formation</h5>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit explicabo ratione voluptates asperiores, doloremque aspernatur adipisci recusandae ea dolorem vero, dolores pariatur voluptas cumque aliquam quia libero? Libero, dolorum accusamus.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit explicabo ratione voluptates asperiores, doloremque aspernatur adipisci recusandae ea dolorem vero, dolores pariatur voluptas cumque aliquam quia libero? Libero, dolorum accusamus.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit explicabo ratione voluptates asperiores, doloremque aspernatur adipisci recusandae ea dolorem vero, dolores pariatur voluptas cumque aliquam quia libero? Libero, dolorum accusamus.
            </p>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="modal-plus-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content ">
        <div class="modal-header px-sm-4" style="border: none;">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pt-0 px-sm-4">
            <h5 class="formation-title">Formation</h5>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit explicabo ratione voluptates asperiores, doloremque aspernatur adipisci recusandae ea dolorem vero, dolores pariatur voluptas cumque aliquam quia libero? Libero, dolorum accusamus.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit explicabo ratione voluptates asperiores, doloremque aspernatur adipisci recusandae ea dolorem vero, dolores pariatur voluptas cumque aliquam quia libero? Libero, dolorum accusamus.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit explicabo ratione voluptates asperiores, doloremque aspernatur adipisci recusandae ea dolorem vero, dolores pariatur voluptas cumque aliquam quia libero? Libero, dolorum accusamus.
            </p>
        </div>
      </div>
    </div>
</div>
@endsection
