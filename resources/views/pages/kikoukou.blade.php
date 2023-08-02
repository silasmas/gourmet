@extends('layouts.app-kikoukou')

@section('content')

    <div class="banner-home banner-kikoukou">
        <div class="content-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Bienvenue à Kicoucou Resto</h1>
                        <h2>Une Nourriture <br> Saine et <span class="text-warning">Délicieuse</span></h2>
                        <p>Kicoucou est un nouveau concept de restaurant qui allie tradition, qualité du service, qualité des produits et cuisine créative.</p>
        @if (!empty(Auth::user()))
                        <a href="#book-a-table" class="btn text-uppercase" data-bs-toggle="modal" data-bs-target="#modal-reservation">Réserver table</a>
        @else
                        <a href="{{ route('login') }}" class="btn text-uppercase">Réserver table</a>
        @endif
                        <a href="{{ route('menu') }}" class="btn bg-transparent ms-3 px-3 text-warning text-uppercase">Commander vos plats</a>
                    </div>
                </div>
                <div class="card card-cover">
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <img src="{{ asset('assets/img/img.png') }}" alt="banner">
                </div>
            </div>

        </div>
    </div>

    <div class="block-choice mt-5 py-lg-4 pt-4 pb-0 bg-light">
        <div class="container">
            <div class="row mb-4 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-3">Dégustez nos spécialités</h2>
                    <h3 class="mb-5" style="line-height: 3rem;">Créativité et service de qualité dans la cuisine traditionnelle</h3>
                </div>
            </div>

            <div class="row g-3 align-items-center">
                <div class="col-lg-6">
                    <div class="card">
                        <img src="{{ asset('assets/img/3.jpg') }}" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="text-start">
                        <p class="mb-3 text-dark">Kicoucou est un nouveau concept de restaurant qui allie tradition, qualité du service, qualité des produits et cuisine créative.</p>
                        <p class="mb-3 text-dark">Vous recherchez un endroit cosy, où partager un repas surprenant entre amis ou en famille ? Kicoucou se fera le plaisir de vous accueillir.</p>
                        <p class="mb-3 text-dark">Cuites sur le grill au BBQ, nos viandes conservent ainsi toute leur saveur et tendreté caractéristiques. C'est la chaleur ardente du soleil de l'Afrique qui fait pousser les piments Kicoucou ! nous avons sélectionné les meilleurs et nous les avons assaisonnés de citron, d'ail, et d'autres ingrédients pour sublimer chaque saveur de nos viandes.</p>
                        <p class="mb-3 text-dark">Des ingrédients frais sélectionnés par nos cuisiniers pour faire voyager vos papilles.</p>
                        <p class="mb-3 text-dark">Des plats faits maison et cuits avec peu de matière grasse pour une cuisine Healthy. Poisson, bœuf, viande de chèvre, poulet, burgers, plats végétariens, etc. Une variété de plats assaisonnés à votre goût. Un festin pour les yeux et pour le ventre.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-choice block-special py-lg-5 pt-0">
        <div class="container">
            <div class="row g-lg-5 g-3">
                <div class="col-lg-6">
                    <div class="text-start">
                        <p class="mb-3 text-dark">Nous apportons un soin particulier à expérimenter de nouveaux plats et de nouvelles saveurs pour satisfaire tout le monde !</p>
                        <p class="mb-3 text-dark">Nos burgers à la viande de chèvre hachée font notre réputation. Grâce à la variété des garnitures, tout le monde y trouve son compte: piquant, mangue, avocat, champignons, etc.</p>
                        <p class="mb-3 text-dark"><strong>Les végétariens ne sont pas oubliés.<br>Nos différent burgers à base de légumes sont des musts.</strong></p>
                        <p class="mb-3 text-dark">Envie d'un dessert original ? Vous êtes au bon endroit ! Chez Kicoucou vous trouverez des desserts maison !</p>
                        <p class="mb-3 text-dark">Optez pour notre coupe aux fruits exotiques. Sans oublier notre délicieuse tarte ainsi que le tiramisu à la mangue.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <img src="{{ asset('assets/img/1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-reservation bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="container">
                            <div class="col-lg-8">
                                <h2 style="color: #f8d911;">Pourquoi nous choisir ?</h2>
                                <h3>L'ambition de notre groupe est d'améliorer la qualité des services dans la production et dans l'événementiel à Kinshasa en RD Congo.</h3>
                                <a href="#" class="btn">Réserver maintenant</a>
                            </div>
                        </div>
                        <img src="{{ asset('assets/img/2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
