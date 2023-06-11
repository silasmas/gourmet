@extends('layouts.app-page')

@section('content')
<div class="banner-home banner-kikoukou">
    <div class="content-banner content-banner-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Bienvenue</h1>
                    <h2>Les boissons <br> servies au frais</h2>
                    <p>Nous vous proposons un accord vins et mets et le négoce de différents types de breuvages importés et des boissons locales.</p>
    {{-- @if (!empty(Auth::user()))
                        <a href="#buy-drink" class="btn" data-bs-toggle="modal" data-bs-target="#modal-acheter">Acheter</a>
    @else
                        <a href="{{ route('login') }}" class="btn">Acheter</a>
    @endif --}}
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/vin.jpg') }}" alt="banner" class="cover">
    </div>
</div>


<div class="block-about about-lg py-5">
    <div class="container">
        <div class="row justify-content-center g-4">
            <div class="col-lg-6">
                <div class="card card-about">
                    <img src="{{ asset('assets/img/boissons-01.jpg') }}" alt="">
                </div>
            </div>

            <div class="col-lg-6">
                <h1 class="mb-4">Boissons importées</h1>
                <ul>
                    <li class="mb-3" style="list-style: decimal;">Alcools : Scotch whisky; single malt; Bourbon ;</li>
                    <li class="mb-3" style="list-style: decimal;">Les spiritueux : Brandy, le Rhum, le Cognac et le Vodka ;</li>
                    <li class="mb-3" style="list-style: decimal;">Le vermouth ou vins aromatisés : Martini, Byrrh, Lillet, Cinzano, Noilly Prat ;</li>
                    <li class="mb-3" style="list-style: decimal;">Vins de champagne (blanc de blanc, le demi-sec, le sec) : Chardonnay, Pinot noir, le Meunier ;</li>
                    <li style="list-style: decimal;">Vins (rouge, blanc, rosé) : Toute la carte vinicole du monde (France, Afrique du Sud, Chili, Espagne, Italie, USA etc).</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="block-about about-lg py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center g-4">
            <div class="col-lg-6">
                <h1 class="mb-4">Boissons locales</h1>
                <ul>
                    <li class="mb-3" style="list-style: decimal;">Kwulu Rhum ;</li>
                    <li class="mb-3" style="list-style: decimal;">Lunguila ;</li>
                    <li style="list-style: decimal;">Agené.</li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="bg-image overflow-hidden" style="border-radius: 2.5rem;">
                    <img src="{{ asset('assets/img/boissons-02.jpg') }}" alt="" class="img-fluid">
                    <div class="mask"></div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <div id="block-boissons" class="block-service block-boisson">
    <div class="container">
         <div class="row g-lg-4 g-3">
             <div class="col-12">
                 <div class="text-center">
                     <h2>Nos boissons</h2>
                 </div>
             </div>
         </div>
         <div id="slider-carousel" class="owl-carousel carousel-boisson">
            <div class="item">
                <div class="card card-boisson">
                    <div class="block-img">
                        <img src="{{asset('assets/img/vin.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h6>Liqueur forte</h6>
                        <span class="price">15.000 $</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card card-boisson">
                    <div class="block-img">
                        <img src="{{asset('assets/img/vin.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h6>Liqueur forte</h6>
                        <span class="price">15.000 $</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card card-boisson">
                    <div class="block-img">
                        <img src="{{asset('assets/img/vin.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h6>Liqueur forte</h6>
                        <span class="price">15.000 $</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card card-boisson">
                    <div class="block-img">
                        <img src="{{asset('assets/img/vin.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h6>Liqueur forte</h6>
                        <span class="price">15.000 $</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card card-boisson">
                    <div class="block-img">
                        <img src="{{asset('assets/img/vin.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h6>Liqueur forte</h6>
                        <span class="price">15.000 $</span>
                    </div>
                </div>
            </div>
        </div>
     </div> 
 </div> --}}

 <div class="block-map my-5">
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
<div class="modal fade" id="modal-acheter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header px-sm-4" style="border: none;">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pt-0 px-sm-4">
            <div class="text-center">
                <h5 class="formation-title mb-4">Acheter</h5>
            </div>
            <form method="POST" action="{{ route('kicoucou.acheter') }}">
                @csrf
                <div class="form-group">
                    <div class="row g-3">
                        <div class="col-6">
                            <label for="selectNbrPerson">Boisson</label>
                            <select id="selectNbrPerson" class="form-select">
                                <option>Choisir boisson</option>
                            </select>

                            <input type="number" id="writeNbrPerson" class="d-none mt-3 form-control" placeholder="Ecrire le nombre de personnes" value="">
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

                <button class="btn mt-3">Commander</button>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection
