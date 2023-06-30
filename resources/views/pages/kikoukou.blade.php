@extends('layouts.app-kikoukou')

@section('content')

    <div class="banner-home banner-kikoukou">
        <div class="content-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Bienvenue à Kikoukou Resto</h1>
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

    <div class="block-choice mt-5 py-5 bg-light">
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

    <div class="block-choice block-special">
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
    <div class="block-service block-menu">
        <div class="container">
            <div class="row mb-4 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-3">Notre menu</h2>
                    <h3 class="mb-5" style="line-height: 3rem;">Nous vous accompagnons de l'entrée au dessert</h3>
                </div>
            </div>

            <div class="row g-2 g-lg-5 align-items-center">
                <div class="col-12">
                    <div class="card card-menu mb-3">
                        <div class="card-body">
                            <div class="content-text">
                                <h3 class="text-warning mb-3">Entrées</h3>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Gambas</strong> : Gambas grillées aux fines herbes ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Scampi</strong> : Chair de scampi au gingembre et à l'ail ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Ailerons farcis</strong> : 3 ailes de poulet farcies (chèvre, poulet, bœuf) ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Samoussas viandes</strong> : 6 samoussas (boeuf, poulet) avec sauce aigre-douce ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Samoussas légumes</strong> : 6 samoussas légumes avec sauce aigre-douce.</span></p>
                            </div>
                        </div>

                        <div class="card-body p-0 text-end">
                            <a href="#" class="link">Réserver</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card card-menu mb-3">
                        <div class="card-body">
                            <div class="content-text">
                                <h3 class="text-warning mb-3">Salades</h3>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Salade Tanganyika</strong> : Maquereau, champignon, concombre, tomates ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Salade Ubangi</strong> : Avocat, maïs, tomate, échalotes, salade ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Salade Lomani</strong> : Poulet, mangue, œuf dur, tomate, salade ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Salade Maï Ndombe</strong> : Patate douce, poivron, olive, concombre.</span></p>
                            </div>
                        </div>

                        <div class="card-body p-0 text-end">
                            <a href="#" class="link">Réserver</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card card-menu mb-3">
                        <div class="card-body">
                            <div class="content-text">
                                <h3 class="text-warning mb-3">Enfants</h3>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Menu Kids Ntaba Burger</strong> : Ntaba Burger, frites, 1 limonade ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Menu Kids Ntaba Burger</strong> : BBoulettes avec sauce tomate, frites, 1 limonade.</span></p>
                            </div>
                        </div>

                        <div class="card-body p-0 text-end">
                            <a href="#" class="link">Réserver</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card card-menu mb-3">
                        <div class="card-body">
                            <div class="content-text">
                                <h3 class="text-warning mb-3">Side au choix</h3>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Makemba</strong> : Frites banane plantain ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block">Frite patate douce ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block">Kwanga (pâte de manioc cuite à la vapeur) ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Riz sauté afro</strong> : Riz cuit en sauce tomate ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block">Crousty de manioc ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Salade mixte</strong> : Salade, tomate, échalotes ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Madesu</strong> : Haricot blanc à la sauce tomate ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Pondu</strong> : Feuilles de manioc, aubergines, poisson, huile de palme ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Biteku</strong> : Feuilles d'amarante, courgettes, aubergines, échalotes.</span></p>
                            </div>
                        </div>

                        <div class="card-body p-0 text-end">
                            <a href="#" class="link">Réserver</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card card-menu mb-3">
                        <div class="card-body">
                            <div class="content-text">
                                <h3 class="text-warning mb-3">Plats</h3>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Carré de chèvre</strong> : Côtes de chèvre cuites à basse température, taboulé de manioc, légumes ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Ntaba + sauce + 1 side</strong> : Steak de chèvre grillé au BBQ avec sauce au choix.</span></p>
                            </div>
                        </div>

                        <div class="card-body p-0 text-end">
                            <a href="#" class="link">Réserver</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card card-menu mb-3">
                        <div class="card-body">
                            <div class="content-text">
                                <h3 class="text-warning mb-3">Poulets</h3>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>1/4 de poulet + sauce + 1 side</strong> : 1/4 de poulet fermier grillé au BBQ ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>1/2 de poulet + sauce + 1 side</strong> : 1/2 de poulet grillé au BBQ.</span></p>
                            </div>
                        </div>

                        <div class="card-body p-0 text-end">
                            <a href="#" class="link">Réserver</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card card-menu mb-3">
                        <div class="card-body">
                            <div class="content-text">
                                <h3 class="text-warning mb-3">Spécial Moambe (Mossaka)</h3>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Poulet Moambe + 1 side</strong> : 1/4 de poulet fermier cuit à la sauce Moambe (chair de noix de palme) ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Veggie Moambe</strong> : Légumes (courgettes, épis maïs, haricot vert, patate douce, pommes de terre cuite à la sauce Moambe.</span></p>
                            </div>
                        </div>

                        <div class="card-body p-0 text-end">
                            <a href="#" class="link">Réserver</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card card-menu mb-3">
                        <div class="card-body">
                            <div class="content-text">
                                <h3 class="text-warning mb-3">Poisson</h3>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Filet de bar + 1 side</strong> : 2 filets de bar grillé à la planche.</span></p>
                            </div>
                        </div>

                        <div class="card-body p-0 text-end">
                            <a href="#" class="link">Réserver</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card card-menu mb-3">
                        <div class="card-body">
                            <div class="content-text">
                                <h3 class="text-warning mb-3">Sauce</h3>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Sauce Kicoucou</strong> : Sauce à la crème et herbes ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Sauce pili</strong> : Sauce au piment fort ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Sauce Ail</strong> : Huile à l'ail.</span></p>
                            </div>
                        </div>

                        <div class="card-body p-0 text-end">
                            <a href="#" class="link">Réserver</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card card-menu mb-3">
                        <div class="badge-menu bg-danger">
                            Notre spécialité
                        </div>

                        <div class="card-body">
                            <div class="content-text">
                                <h3 class="text-warning mb-3">Burgers</h3>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Ntaba Burger + 1 side</strong> : Viande de chèvre, cheddar, bacon, tomate, cornichon, salade ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Garamba Ntaba Burger + 1 side</strong> : Viande de chèvre, cheddar, mangue, avocat, tartare de tomate, salade ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Nyragongo Ntaba Burger + 1 side</strong> : Viande de chèvre, cheddar, bacon, tomate, salapenos, salade, oignons frites, sauce maison piquante ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Upemba Ntaba Burger+ 1 side</strong> : Viande de chèvre, cheddar, champignons, tomate, salade, oignon frit, sauce maison piquante ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Biega Veggie Burger + 1 side</strong> : Burger de légumes, tomate, cornichons, salade, oignon frit ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Salonga Veggie Burger + 1 side</strong> : Burger de légumes, mangue, avocat, tartare de tomate, oignon frit.</span></p>
                            </div>
                        </div>

                        <div class="card-body p-0 text-end">
                            <a href="#" class="link">Réserver</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card card-menu mb-3">
                        <div class="card-body">
                            <div class="content-text">
                                <h3 class="text-warning mb-3">Desserts</h3>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Tarte mangue</strong> : Tarte à la mangue fait maison ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Coupe Kicoucou</strong> : Mangue, ananas, glace vanille, crème chantilly, coulis ;</span></p>
                                <p class="d-flex mb-1 text-dark"><i class="bi bi-pin-angle-fill me-2 text-warning"></i><span class="d-inline-block"><strong>Kikou Misu</strong> : Tiramisu fait maison à la base de la mangue.</span></p>
                            </div>
                        </div>

                        <div class="card-body p-0 text-end">
                            <a href="#" class="link">Réserver</a>
                        </div>
                    </div>
                </div>
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
