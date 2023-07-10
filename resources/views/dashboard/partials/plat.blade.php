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
                    <h3 class="fw-bold text-uppercase">Plat</h3>
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
                            <li class="dropright">
                                <a href="javascript:void(0);" class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-chevron-double-right mx-2 fs-6"></i></a>

                                <ul class="dropdown-menu py-1">
                                    <li>
                                        <a href="{{ route('dashboard.entity', ['entity' => 'categorie']) }}" class="dropdown-item">Catégorie</a>
                                    </li>
                                    <hr class="my-1">
                                    <li>
                                        <a href="{{ route('dashboard.entity', ['entity' => 'orders']) }}" class="dropdown-item">Commandes</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.entity', ['entity' => 'categorie']) }}">Catégorie</a></li>
                            <li class="dropright">
                                <a href="javascript:void(0);" class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-chevron-double-right ms-2 me-1 fs-6"></i></a>

                                <ul class="dropdown-menu py-1">
                                    <li>
                                        <a href="{{ route('dashboard.entity', ['entity' => 'boisson']) }}" class="dropdown-item">Boisson</a>
                                    </li>
                                    <hr class="my-1">
                                    <li>
                                        <a class="dropdown-item disabled">Plat</a>
                                    </li>
                                </ul>
                            </li>
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
                <div class="col-lg-5 mb-5">
                    <div class="card h-auto">
                        <div class="p-4 bg-white border border-default rounded-3">
                            <h2 class="mb-4 text-md-start text-center">Ajouter un plat</h2>

                            <form method="POST" action="{{ route('dashboard.entity', ['entity' => 'plat']) }}">
    @csrf
                                <label class="visually-hidden" for="categorie_id">Catégorie</label>
                                <select name="categorie_id" id="categorie_id" class="form-select mb-3">
                                    <option class="small" disabled selected>Catégorie</option>
    @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
    @endforeach
                                </select>

                                <label class="visually-hidden" for="register_nom">Nom du plat</label>
                                <input type="text" name="register_nom" id="register_nom" class="form-control mb-3" placeholder="Nom du plat">

                                <div class="row g-3 mb-3">
                                    <div class="col-sm-6">
                                        <label class="visually-hidden" for="register_prix">Prix</label>
                                        <input type="number" name="register_prix" id="register_prix" class="form-control" placeholder="Prix">
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="visually-hidden" for="register_monnaie">Monnaie</label>
                                        <select name="register_monnaie" id="register_monnaie" class="form-select">
                                            <option class="small" disabled selected>Monnaie</option>
                                            <option value="USD">Dollar américain</option>
                                            <option value="CDF">Franc Congolais</option>
                                        </select>
                                    </div>
                                </div>

                                <label class="visually-hidden" for="register_quantite">Quantité</label>
                                <input type="number" name="register_quantite" id="register_quantite" class="form-control mb-3" placeholder="Quantité">

                                <label class="visually-hidden" for="register_description">Description</label>
                                <textarea name="register_description" id="register_description" class="form-control mb-3" placeholder="Description"></textarea>

                                <p class="mb-1 small text-center">Ajouter des images</p>
                                <div class="row g-3">
                                    <div class="col-sm-6 mb-3">
                                        <div class="bg-image overflow-hidden position-relative rounded">
                                            <img src="{{ asset('assets/img/blank-square.png') }}" alt="" class="image-1 img-fluid rounded">
                                            <div class="mask">
                                                <label role="button" for="register_image_1" class="position-absolute d-flex justify-content-center align-items-center w-100 h-100 text-uppercase" style="top: 0; left: 0;">
                                                    <span class="d-inline-block p-1 rounded-pill fs-3 text-warning"><i class="bi bi-plus-circle-fill"></i></span>
                                                    <input type="file" name="register_image_1" id="register_image_1" class="d-none">
                                                </label>
                                                <input type="hidden" name="data_image_1" id="data_image_1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="bg-image overflow-hidden position-relative rounded">
                                            <img src="{{ asset('assets/img/blank-square.png') }}" alt="" class="image-2 img-fluid rounded">
                                            <div class="mask">
                                                <label role="button" for="register_image_2" class="position-absolute d-flex justify-content-center align-items-center w-100 h-100 text-uppercase" style="top: 0; left: 0;">
                                                    <span class="d-inline-block p-1 rounded-pill fs-3 text-warning"><i class="bi bi-plus-circle-fill"></i></span>
                                                    <input type="file" name="register_image_2" id="register_image_2" class="d-none">
                                                </label>
                                                <input type="hidden" name="data_image_2" id="data_image_2">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="bg-image overflow-hidden position-relative rounded">
                                            <img src="{{ asset('assets/img/blank-square.png') }}" alt="" class="image-3 img-fluid rounded">
                                            <div class="mask">
                                                <label role="button" for="register_image_3" class="position-absolute d-flex justify-content-center align-items-center w-100 h-100 text-uppercase" style="top: 0; left: 0;">
                                                    <span class="d-inline-block p-1 rounded-pill fs-3 text-warning"><i class="bi bi-plus-circle-fill"></i></span>
                                                    <input type="file" name="register_image_3" id="register_image_3" class="d-none">
                                                </label>
                                                <input type="hidden" name="data_image_3" id="data_image_3">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="bg-image overflow-hidden position-relative rounded">
                                            <img src="{{ asset('assets/img/blank-square.png') }}" alt="" class="image-4 img-fluid rounded">
                                            <div class="mask">
                                                <label role="button" for="register_image_4" class="position-absolute d-flex justify-content-center align-items-center w-100 h-100 text-uppercase" style="top: 0; left: 0;">
                                                    <span class="d-inline-block p-1 rounded-pill fs-3 text-warning"><i class="bi bi-plus-circle-fill"></i></span>
                                                    <input type="file" name="register_image_4" id="register_image_4" class="d-none">
                                                </label>
                                                <input type="hidden" name="data_image_4" id="data_image_4">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <button class="btn w-100 rounded-3">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 mb-5">
                    <div class="card h-auto float-lg-end">
                        <div class="p-4 bg-white border border-default rounded-3">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="fw-bold"></th>
                                            <th class="fw-bold"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
    @forelse ($categories as $categorie)
        @if (count($categorie->plats))
                                        <tr class="bg-light">
                                            <td colspan="2">
                                                <h3 class="mt-2 mb-1 fs-6 text-uppercase">{{ $categorie->nom }}</h3>
                                            </td>
                                        </tr>
        @endif
        @forelse ($categorie->plats as $plat)
                                        <tr>
                                            <td>
                                                <div class="bg-image me-3 my-2 float-start" style="width: 70px">
                                                    <img src="{{ $plat->image != null ? $plat->image : asset('assets/img/blank-square.png') }}" alt="" class="img-fluid rounded">
                                                    <div class="mask"></div>
                                                </div>
                                                <h5 class="mt-2 mb-1 fw-bold">{{ $plat->nom }}</h5>
                                                <p class="mb-2 small text-gray">{{ $plat->description }}</p>
                                                <h6 id="quantity-{{ $plat->id }}" class="mt-2 mb-1">
                                                    <u>Quantité</u> <span>{{ $plat->quantite }}</span> 
                                                    <a data-quantity="{{ $plat->quantite }}" role="button" class="btn btn-sm px-2 py-1 ms-2 rounded-pill" onclick="event.preventDefault(); incrementQuantity(this, {{ $plat->id }}, '../plat/update');">Ravitailler</a>
                                                </h6>
                                            </td>
                                            <td class="text-end">
                                                <a role="button" class="btn bg-transparent mt-2 p-0 fs-4 text-dark" title="Supprimer" data-bs-toggle="tooltip" onclick="event.preventDefault(); deleteData({{ $plat->id }}, '../plat');"><i class="bi bi-trash"></i></a><br>
                                                <small class="d-inline-block px-3 py-2 bg-light rounded-pill">{{ $plat->prix . ' ' . $plat->monaie }}</small>
                                            </td>
                                        </tr>
        @empty
        @endforelse
    @empty
                                        <tr>
                                            <td colspan="2" class="text-muted">
                                                <i class="bi bi-info-circle me-2 fs-5"></i>il n'y a pas encore de catégorie <a href="{{ route('dashboard.entity', ['entity' => 'categorie']) }}" class="btn mt-1 py-1 float-end">Ajouter</a>
                                            </td>
                                        </tr>
    @endforelse
    @if (count($plats) == 0)
                                        <tr>
                                            <td colspan="3" class="text-muted"><i class="bi bi-info-circle me-2 align-middle fs-5"></i>La liste est encore vide</td>
                                        </tr>
    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection