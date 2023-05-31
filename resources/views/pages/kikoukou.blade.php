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
                <form method="POST" action="{{ route('kicoucou.reserver') }}">
                    @csrf
                    <div class="form-group">
                        <div class="row g-3">
                            <div class="col-6">
                                <label for="register_dateReservation">Date de réservation</label>
                                <input type="date" name="register_dateReservation" id="register_dateReservation" class="form-control" placeholder="Selectionnez la date">
                            </div>

                            <div class="col-6">
                                <div class="col-input">
                                    <label for="register_heureReservation">Heure de réservation</label>
                                    <select name="register_heureReservation" id="register_heureReservation" class="form-select">
                                        <option class="small" disabled selected>Choisir l'heure</option>
                                        <option>09h30</option>
                                        <option>10h30</option>
                                        <option>11h30</option>
                                        <option>12h30</option>
                                        <option>13h30</option>
                                        <option>14h30</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="selectNbrPerson">Nombre de personnes</label>
                                <select id="selectNbrPerson" class="form-select">
                                    <option value="1">1 personne</option>
                                    <option value="2">2 personnes</option>
                                    <option value="3">3 personnes</option>
                                    <option value="4">4 personnes</option>
                                    <option value="5">5 personnes</option>
                                    <option value="6+">Plus de 5 personnes</option>
                                </select>

                                <input type="number" id="writeNbrPerson" class="d-none mt-3 form-control" placeholder="Ecrire le nombre de personnes" value="">
                            </div>

                            <div class="col-6">
                                <label for="register_prix">Prix : </label>
                                <input type="text" id="register_prix" name="register_prix" class="form-control ps-0 pt-0 bg-transparent border-0 fs-5 text-primary disabled" value="5 USD">
                            </div>

                            <div id="paymentMethod">
                                <p class="mb-3 pb-1 border-bottom border-default text-uppercase">Mode de paiement</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="transaction_type_id" id="mobile_money" class="align-middle" value="1" />
                                    <label class="form-check-label" for="mobile_money" role="button">
                                        <img src="{{ asset('assets/img/payment-mobile-money.png') }}" alt="Mobile money" width="40"> Mobile money
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="transaction_type_id" id="bank_card" class="align-middle" value="2" />
                                    <label class="form-check-label" for="bank_card" role="button">
                                        <img src="{{ asset('assets/img/payment-credit-card.png') }}" alt="Carte bancaire" width="40"> Carte bancaire
                                    </label>
                                </div>
                            </div>

                            <div id="phoneNumberForMoney" class="col-12 my-2 d-none">
                                <label for="other_phone">Téléphone</label>
                                <input type="text" id="other_phone" name="other_phone" class="form-control" placeholder="Avec code téléphonique (Ex: 243xxxxxxxxx)">
                            </div>
                        </div>
                    </div>

                    <button class="btn mt-3">Réserver</button>
                </form>
            </div>
          </div>
        </div>
    </div>
@endsection
