@extends('layouts.app-page')

@section('content')
<div class="banner-home banner-kikoukou">
    <div class="content-banner content-banner-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Bienvenue sur notre atelier</h1>
                    <h2>La Formation <span class="text-warning">Culinaire</span></h2>
                    <p>Nous sommes un atelier ouvert. Nous produisons et nous formons.</p>
                    <a href="#block-formation" class="btn">Voir nos formations</a>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/banner.jpg') }}" alt="banner" class="cover">
    </div>
</div>

<div class="block-choice block-special mt-4 py-5">
    <div class="container">
        <div class="row g-3 align-items-center">
            <div class="col-lg-6">
                <div class="card">
                    <img src="{{ asset('assets/img/1.jpg') }}" alt="">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="text-start">
                    <p class="mb-3 text-dark">Notre atelier comprend un service traiteur et une unité de production agroalimentaire. Nous vous conseillons, nous vous guidons et nous organisons pour vous et avec vous vos évènements.</p>
                    <p class="mb-3 text-dark">Nous produisons à la demande :</p>
                    <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-3 text-warning"></i><span class="d-inline-block">Des repas en série ; des menus pour tout type d’évènement (mariage, anniversaire, conférence, soirée festive) ;</span></p>
                    <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-3 text-warning"></i><span class="d-inline-block">Divers aliments (sauces, aliments dérivés) ;</span></p>
                    <p class="d-flex mb-3 text-dark"><i class="bi bi-pin-angle-fill me-3 text-warning"></i><span class="d-inline-block">Diverses boissons, des jus.</span></p>
                    <p class="mb-3 text-dark">Nous assurons également le nettoyage et la mise en emballage des aliments crus comme  les produits d’élevage : la viande ; la volaille : poulet, cailles ; les produits de la pisciculture : le poisson dans toute sa diversité.</p>
                    <p class="mb-3 text-dark">Pour un devis ou un conseil, joignons au (+243) 898 681 751 / 833 344 116 ou nous écrire sur <a href="mailto:gourmetducongo@gmail.com">gourmetducongo@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
