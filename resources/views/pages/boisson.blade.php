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

<div class="block-about bg-light mt-5 py-5">
    <div class="container">
        <div class="row g-4">
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
