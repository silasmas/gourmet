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
@endsection
