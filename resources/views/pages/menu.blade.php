@extends('layouts.app-kikoukou')

@section('content')

    <div class="block-about block-content bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h4 class="mb-3"><div class="badge bg-white text-warning">Menu</div></h4>
                    <h3 class="fw-bold">Dégustez nos spécialités</h3>
                    <h4 class="mb-4">Commander vos plats <span class="text-warning">ou bien réserver une table</span></h4>
    @if (!empty(Auth::user()))
                    <a href="#book-a-table" class="btn bg-warning text-white" data-bs-toggle="modal" data-bs-target="#modal-reservation">Réserver table</a>
    @else
                    <a href="{{ route('login') }}" class="btn bg-warning text-white">Réserver table</a>
    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="block-choice py-5">
        <div class="container">
    @foreach ($categories as $categorie)
        @if (count($categorie->plats) > 0)
            <div class="row">
                <div class="col-12">
                    <h3 class="text-lg-start text-center"><div class="badge bg-secondary">{{ $categorie->nom }}</div></h3>
                </div>
            </div>
            <div class="row g-4 mb-5">
            @foreach ($categorie->plats as $plat)
                <div class="col-lg-6 col-sm-9 col-8 mx-auto">
                    <div class="mCard border border-default bg-light">
                        <div class="row g-0">
                            <div class="col-sm-4">
                                <div id="carouselPlat-{{ $plat->id }}" class="carousel slide">
                                    <div class="carousel-inner">
                @if ($plat->image != null)
                                        <div class="carousel-item active">
                                            <img src="{{ $plat->image }}" class="mCard-img d-block w-100" alt="{{ $plat->nom }}" >
                                        </div>
                @endif
                @if ($plat->image2 != null)
                                        <div class="carousel-item">
                                            <img src="{{ $plat->image2 }}" class="mCard-img d-block w-100" alt="{{ $plat->nom }}" >
                                        </div>
                @endif
                @if ($plat->image3 != null)
                                        <div class="carousel-item">
                                            <img src="{{ $plat->image3 }}" class="mCard-img d-block w-100" alt="{{ $plat->nom }}" >
                                        </div>
                @endif
                @if ($plat->image4 != null)
                                        <div class="carousel-item">
                                            <img src="{{ $plat->image4 }}" class="mCard-img d-block w-100" alt="{{ $plat->nom }}" >
                                        </div>
                @endif
                                    </div>

                @if ($plat->image2 != null && $plat->image3 != null && $plat->image4 != null)
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPlat-{{ $plat->id }}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Précédent</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPlat-{{ $plat->id }}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Suivant</span>
                                    </button>
                @endif
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="mCard-body">
                                    <h5>{{ $plat->nom }}</h5>
                                    <p class="mb-2 small">{{ $plat->description }}</p>
                                    <h4 class="m-sm-0 mb-2"><div class="badge bg-light text-primary fw-bold">{{ $plat->prix . ' ' . $plat->monaie }}</div></h4>
                @if ($plat->quantite > 0)
                                    <a role="button" class="btn btn-sm px-3 py-2 float-sm-end" onclick="addToCart({{ Auth::user()->id }}, {{ $plat->id }}, 'plat');"><i class="bi bi-cart3 me-2"></i>Ajouter au panier</a>
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
@endsection
