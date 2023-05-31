@extends('layouts.app-page')

@section('content')
<div class="banner-home banner-kikoukou">
    <div class="content-banner content-banner-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Bienvenue sur notre sommellerie</h1>
                    <h2>Les boissons <br> servies au frais</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt magni totam quae tenetur ullam
                        corrupti!</p>
                    <a href="#block-boissons" class="btn">Voir boissons</a>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/vin.jpg') }}" alt="banner" class="cover">
    </div>
</div>

<div class="block-about block-formation">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2>Nous sommes Gourmet</h2>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorum nostrum tempora at accusantium id praesentium dolore. Atque aliquid error delectus enim minima vero incidunt impedit, saepe quasi exercitationem tempore!</h3>
            </div>
        </div>
    </div>
</div>
<div class="block-service block-boisson" id="block-boissons">
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
                        <p>Developed By <a href="#">Silas Dev</a></p>
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
