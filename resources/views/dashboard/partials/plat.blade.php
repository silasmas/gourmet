@extends('layouts.app-page')

@section('content')

    <div class="block-about block-content bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 mx-auto text-center">
                    <h3 class="fw-bold text-uppercase">Plats</h3>
                    <h4 class="m-0">Gestion de <span class="text-warning">plats</span></h4>
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
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.entity', ['entity' => 'categorie']) }}">Catégorie</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Plat</li>
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