@extends('layouts.app-page')

@section('content')
    <div class="banner-sm">
        <div class="container">
            <div class="text-center">
                <h1>A propos</h1>
            </div>
        </div>
    </div>
    <div class="block-about about-lg">
        <div class="container">
            <div class="row justify-content-center g-lg-5 g-4">
                <div class="col-lg-6">
                    <div class="card card-about">
                        <img src="{{ asset('assets/img/banner.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2>Qui sommes-nous ?</h2>
                    <h4>Nous sommes Gourmet du Congo</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis rerum alias labore culpa quaerat.
                        Consectetur atque animi exercitationem facilis. Repellendus doloremque atque, cumque quod vel
                        placeat quia earum sed accusamus.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis rerum alias labore culpa quaerat.
                        Consectetur atque animi exercitationem facilis. Repellendus doloremque atque, cumque quod vel
                        placeat quia earum sed accusamus.
                    </p>
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
                            Rue de la Crèche 19 1050
                            Bruxelles, Belgique
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex">
                    <i class="bi bi-telephone-fill"></i>
                    <div class="div">
                        <h6>Réservations</h6>
                        <p>
                            <span>Phone: <a href="tel:+155895548855">+1 5589 55488 55</a></span>
                        </p>
                        <p>
                            <span>Email: <a href="mailto:infokicoucou@gmail.com">infokicoucou@gmail.com</a></span>
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
                            <p>Developed By <a href="#">Silas Dev</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
