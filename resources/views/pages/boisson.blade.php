@extends('layouts.app-page')

@section('content')
<div class="banner-home banner-kikoukou">
    <div class="content-banner content-banner-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Bienvenue</h1>
                    <h2 class="text-capitalize">Les boissons <br> servies <span class="text-warning">au frais</span></h2>
                    <p>Nous vous proposons un accord vins et mets et le négoce de différents types de breuvages importés et des boissons locales.</p>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/vin.jpg') }}" alt="banner" class="cover">
    </div>
</div>

<div class="block-choice bg-light mt-5 py-5">
    <div class="container">
    @foreach ($categories as $categorie)
        @if (count($categorie->sommeleries) > 0)
            <div class="row">
                <div class="col-12">
                    <h3 class="text-lg-start text-center"><div class="badge bg-secondary">{{ $categorie->nom }}</div></h3>
                </div>
            </div>
            <div class="row g-4 mb-5">
            @foreach ($categorie->sommeleries as $boisson)
                <div class="col-lg-6 col-sm-9 col-8 mx-auto">
                    <div class="mCard border border-default bg-white">
                        <div class="row g-0">
                            <div class="col-sm-4">
                                <img src="{{ $boisson->image }}" class="mCard-img d-block w-100" alt="{{ $boisson->nom }}" >
                            </div>
                            <div class="col-sm-8">
                                <div class="mCard-body">
                                    <h5>{{ $boisson->nom }}</h5>
                                    <p class="mb-2 small">{{ $boisson->description }}</p>
                                    <h4 class="m-sm-0 mb-2"><div class="badge bg-light text-primary fw-bold">{{ $boisson->prix . ' ' . $boisson->monaie }}</div></h4>
                @if ($boisson->quantite > 0)
                                    <a role="button" class="btn btn-sm px-3 py-2 float-sm-end" onclick="addToCart({{ Auth::user()->id }}, {{ $boisson->id }}, 'boisson');"><i class="bi bi-cart3 me-2"></i>Ajouter au panier</a>
                @else
                                    <small class="text-danger float-sm-end"><i class="bi bi-info-circle me-2"></i>Stock épuisé</small>
                @endif
                                </div>        
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        @endif
    @endforeach
    </div>
</div>

{{-- <div class="block-map my-5">
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
</div> --}}
@endsection
