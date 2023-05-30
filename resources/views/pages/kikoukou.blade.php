@extends('layouts.app-kikoukou')

@section('content')
    <div class="banner-home banner-kikoukou">
        <div class="content-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Bienvenue à Kikoukou Resto</h1>
                        <h2>Une Nourriture <br> Saine et <span>Délicieuse</span></h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt magni totam quae tenetur ullam corrupti!</p>
    @if (!empty(Auth::user()))
                        <a href="#book-a-table" class="btn" data-bs-toggle="modal" data-bs-target="#modal-reservation">Réserver maintenant</a>
    @else
                        <a href="{{ route('login') }}" class="btn">Réserver maintenant</a>
    @endif
                    </div>
                </div>
                <div class="card card-cover">
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <img src="{{ asset('assets/img/img.png') }}" alt="banner">
                </div>
            </div>

        </div>
    </div>
    <div class="block-about block-content" style="background: transparent">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2>Découvrir notre spécialité</h2>
                <h3>Dégustez les spécialités goûteuses de notre terroir dans ces anciennes caves voûtée du 17e siècle</h3>
            </div>
        </div>
    </div>
</div>
{{-- <div class="block-about about-lg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card card-about">
                    <img src="http://127.0.0.1:8000/assets/img/banner.jpg" alt="">
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
            </div>
        </div>
    </div>
</div> --}}
    <div class="block-choice block-special">
        <div class="container">
            <div class="row g-lg-5 g-3 align-items-center">
                <div class="col-lg-6">
                    <div class="card">
                        <img src="{{ asset('assets/img/1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-start">
                        <h2> Notre meilleure spécialité </h2>
                        <h3>
                            Burger Ntaba
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nobis beatae, eaque earum dolor
                            voluptatibus soluta. Quidem veritatis reprehenderit libero veniam odio sit nesciunt sunt magnam
                            possimus? Illo, ea accusamus!</p>
                        <a href="#" class="btn">Commander maintenant</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-service block-menu">
        <div class="container">
            <div class="row g-2 g-lg-5 align-items-center">
                <div class="col-lg-4 order-sm-1 order-2">
                    <div class="card card-menu mb-3">
                        <div class="badge-menu">
                            Congolaise
                        </div>
                        <div class="row g-lg-5">
                            <div class="col-lg-3 col-4">
                                <div class="block-img">
                                    <img src="{{ asset('assets/img/b.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9 col-8">
                                <div class="content-text">
                                    <h5>Nom du plat</h5>
                                    <p>Catégorie</p>
                                    <div class="prix">
                                        12$
                                    </div>
                                    <div class="text-end">
                                        <a href="#" class="link">Commandez</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-menu mb-3">
                        <div class="badge-menu">
                            Congolaise
                        </div>
                        <div class="row g-lg-5">
                            <div class="col-lg-3 col-4">
                                <div class="block-img">
                                    <img src="{{ asset('assets/img/b.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9 col-8">
                                <div class="content-text">
                                    <h5>Nom du plat</h5>
                                    <p>Catégorie</p>
                                    <div class="prix">
                                        12$
                                    </div>
                                    <div class="text-end">
                                        <a href="#" class="link">Commandez</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-menu mb-3">
                        <div class="badge-menu">
                            Congolaise
                        </div>
                        <div class="row g-lg-5">
                            <div class="col-lg-3 col-4">
                                <div class="block-img">
                                    <img src="{{ asset('assets/img/b.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9 col-8">
                                <div class="content-text">
                                    <h5>Nom du plat</h5>
                                    <p>Catégorie</p>
                                    <div class="prix">
                                        12$
                                    </div>
                                    <div class="text-end">
                                        <a href="#" class="link">Commandez</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-sm-2 order-1">
                    <div class="text-center">
                        <h2>Menu</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit distinctio illum assumenda!</p>
                        <a href="{{ route('menu') }}" class="btn mb-4 mb-lg-0">Voir plus</a>
                    </div>
                </div>
                <div class="col-lg-4 order-sm-3 order-3">
                    <div class="card card-menu mb-3">
                        <div class="badge-menu">
                            Congolaise
                        </div>
                        <div class="row g-lg-5">
                            <div class="col-lg-3 col-4">
                                <div class="block-img">
                                    <img src="{{ asset('assets/img/b.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9 col-8">
                                <div class="content-text">
                                    <h5>Nom du plat</h5>
                                    <p>Catégorie</p>
                                    <div class="prix">
                                        12$
                                    </div>
                                    <div class="text-end">
                                        <a href="#" class="link">Commandez</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-menu mb-3">
                        <div class="badge-menu">
                            Congolaise
                        </div>
                        <div class="row g-lg-5">
                            <div class="col-lg-3 col-4">
                                <div class="block-img">
                                    <img src="{{ asset('assets/img/b.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9 col-8">
                                <div class="content-text">
                                    <h5>Nom du plat</h5>
                                    <p>Catégorie</p>
                                    <div class="prix">
                                        12$
                                    </div>
                                    <div class="text-end">
                                        <a href="#" class="link">Commandez</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-menu mb-3">
                        <div class="badge-menu">
                            Congolaise
                        </div>
                        <div class="row g-lg-5">
                            <div class="col-lg-3 col-4">
                                <div class="block-img">
                                    <img src="{{ asset('assets/img/b.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9 col-8">
                                <div class="content-text">
                                    <h5>Nom du plat</h5>
                                    <p>Catégorie</p>
                                    <div class="prix">
                                        12$
                                    </div>
                                    <div class="text-end">
                                        <a href="#" class="link">Commandez</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="block-reservation">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="container">
                            <div class="col-lg-8">
                                <h2>Pourquoi nous choisir ?</h2>
                                <h3>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quisquam odit iure.
                                </h3>
                                <a href="#" class="btn">Réserver maintenant</a>
                            </div>
                        </div>
                        <img src="{{ asset('assets/img/1.jpg') }}" alt="">
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
                        <h6>Addresse</h6>
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
                        <div class="d-flex justify-content-start justify-content-lg-end">
                            <p>Developed By <a href="#">Silas Dev</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="modal-reservation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content ">
            <div class="modal-header px-sm-4" style="border: none;">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0 px-sm-4">
                <div class="text-center">
                    <h5 class="formation-title mb-4">Réservation</h5>
                </div>
                <form action="">
                    <div class="form-group">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="">Nombre de personnes</label>
                                <select id="nombrePersonnes" class="form-select">
                                    <option class="small" selected disabled>Nombre de personnes</option>
                                    <option value="1">1 personne</option>
                                    <option value="2">2 personnes</option>
                                    <option value="3">3 personnes</option>
                                    <option value="4">4 personnes</option>
                                    <option value="5">5 personnes</option>
                                    <option value="6+">Plus de 5 personnes</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <label for="">Plat</label>
                                <select id="plat" class="form-select">
                                    <option class="small" selected disabled>Plat</option>
                                    @foreach ($plats as $plat)
                                        <option value="{{ $plat->prix }}">{{ $plat->nom }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-6">
                                <label for="">Devise</label>
                                <select id="register_monnaie" class="form-select">
                                    <option class="small" selected disabled>Devise</option>
                                    <option value="USD">Dollar américain</option>
                                    <option value="CDF">Franc congolais</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <label for="">Prix unitaire</label>
                                <input type="text" class="form-control bg-transparent" value="23500 CDF" disabled>
                            </div>

                            <div class="col-6">
                                <label for="">Prix total</label>
                                <input type="number" class="form-control" value="">
                            </div>

                            <div class="col-12">
                                <label for="">Date de réservation</label>
                                <input type="date" class="form-control" placeholder="Selectionnez la date">
                            </div>
                            <div class="col-12">
                                <div class="col-12">
                                    <div class="col-input">
                                        <label for="">Heure de réservation</label>
                                    <input type="text" class="form-control" placeholder="Selectionnez l'heure" readonly>
                                    <div class="block-list">
                                        <ul>
                                          <li>09h30</li>
                                          <li>10h30</li>
                                          <li>09h30</li>
                                          <li>10h30</li>
                                          <li>09h30</li>
                                          <li>10h30</li>
                                        </ul>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 justify-content-center d-flex align-items-center mb-5">
                                <button class="btn mt-3">Réserver</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
@endsection
