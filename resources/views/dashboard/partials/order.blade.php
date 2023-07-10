@extends('layouts.app-page')

@section('content')

    <div class="navbar px-2 position-fixed" style="top: 1rem; left: 1rem; z-index: 99999;">
        <a id="avatarLink" class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ Auth::user()->avatar_url != null ? Auth::user()->avatar_url : asset('assets/img/placeholder.png') }}" alt="{{ Auth::user()->prenom }}" width="40" class="rounded-circle">
        </a>

        <ul class="dropdown-menu dropdown-menu-start p-0" aria-labelledby="avatarLink">
            <li>
                <a href="{{ route('home') }}" class="dropdown-item py-2">
                    <i class="bi bi-telephone-forward me-1"></i> <span style="font-size: 0.8rem;">Espace public</span>
                </a>
            </li>
            <li>
                <a href="{{ route('account.home') }}" class="dropdown-item py-2">
                    <i class="bi bi-person me-1"></i> <span style="font-size: 0.8rem;">Profil</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" class="dropdown-item py-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-power me-1"></i> <span style="font-size: 0.8rem;">Se déconnecter</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>

    <div class="block-about block-content bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 mx-auto text-center">
                    <h3 class="fw-bold text-uppercase">Commandes des clients</h3>
                    <h4 class="m-0">Gestion de <span class="text-warning">commandes des clients</span></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="block-about block-content pt-3 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Accueil</a></li>
                            <li class="dropright">
                                <a href="javascript:void(0);" class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-chevron-double-right mx-2 fs-6"></i></a>

                                <ul class="dropdown-menu py-1">
                                    <li>
                                        <a href="{{ route('dashboard.entity', ['entity' => 'categorie']) }}" class="dropdown-item">Catégorie</a>
                                    </li>
                                    <hr class="my-1">
                                    <li>
                                        <a class="dropdown-item disabled">Commandes</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Commandes</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="block-choice py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>
    </div>

@endsection