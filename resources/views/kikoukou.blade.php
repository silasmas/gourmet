@extends('layouts.app-kikoukou')

@section('content')
<div class="banner-home banner-kikoukou">
    <div class="content-banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1>Bienvenue à Kikoukou Resto</h1>
                    <h2>Une Nourriture <br> Saine et <span>Délicieuse</span></h2>
                    <p class="ms-auto me-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt magni totam quae tenetur ullam corrupti!</p>
                    <a href="#book-a-table" class="btn">Réserver maintenant</a>
                </div>
            </div>
        </div>
        <img src="{{asset('assets/img/1.jpg')}}" alt="banner" class="cover">
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
<div class="block-choice block-special">
    <div class="container">
        <div class="row g-lg-5 g-3 align-items-center">
            <div class="col-lg-6">
                <div class="text-start">
                    <h2>Burger Ntaba </h2>
                    <h3>
                        Notre meilleure spécialité
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nobis beatae, eaque earum dolor voluptatibus soluta. Quidem veritatis reprehenderit libero veniam odio sit nesciunt sunt magnam possimus? Illo, ea accusamus!</p>
                    <a href="#" class="btn">Commander maintenant</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card ms-auto">
                    <img src="{{asset('assets/img/1.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block-service">
    <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="text-center">
                     <h2>Menu</h2>
                 </div>
             </div>
             <div class="col-lg-3">
                 <div class="card card-menu">
                    <div class="block-img">
                        <img src="{{asset('assets/img/banner.jpg')}}" alt="">
                    </div>
                    <div class="content-text text-center">
                        <h5>Nom du plat</h5>
                        <p>12$</p>
                        <a href="#" class="link">Commandez</a>
                    </div>
                 </div>
             </div>
             <div class="col-lg-3">
                <div class="card card-menu">
                   <div class="block-img">
                       <img src="{{asset('assets/img/banner.jpg')}}" alt="">
                   </div>
                   <div class="content-text text-center">
                       <h5>Nom du plat</h5>
                       <p>12$</p>
                       <a href="#" class="link">Commandez</a>
                   </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-menu">
                   <div class="block-img">
                       <img src="{{asset('assets/img/banner.jpg')}}" alt="">
                   </div>
                   <div class="content-text text-center">
                       <h5>Nom du plat</h5>
                       <p>12$</p>
                       <a href="#" class="link">Commandez</a>
                   </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-menu">
                   <div class="block-img">
                       <img src="{{asset('assets/img/banner.jpg')}}" alt="">
                   </div>
                   <div class="content-text text-center">
                       <h5>Nom du plat</h5>
                       <p>12$</p>
                       <a href="#" class="link">Commandez</a>
                   </div>
                </div>
            </div>
             
             {{-- <div class="col-lg-3">
                 <div class="card">
                     <a href="#">
                         <div class="block-img">
                             <img src="{{asset('assets/img/banner.jpg')}}" alt="">
                         </div>
                         <div class="content-text">
                             <h5>Kikoukou resto</h5>
                         </div>
                     </a>
                 </div>
             </div> --}}
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
                    <img src="{{asset('assets/img/1.jpg')}}" alt="">
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
