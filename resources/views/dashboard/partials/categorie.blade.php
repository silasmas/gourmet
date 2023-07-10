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
                    <h3 class="fw-bold text-uppercase">Catégorie</h3>
                    <h4 class="m-0">Gestion de <span class="text-warning">catégories</span></h4>
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
                                        <a class="dropdown-item disabled">Catégorie</a>
                                    </li>
                                    <hr class="my-1">
                                    <li>
                                        <a href="{{ route('dashboard.entity', ['entity' => 'orders']) }}" class="dropdown-item">Commandes</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Catégorie</li>
                            <li class="dropright">
                                <a href="javascript:void(0);" class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-chevron-double-right ms-2 fs-6"></i></a>

                                <ul class="dropdown-menu py-1">
                                    <li>
                                        <a href="{{ route('dashboard.entity', ['entity' => 'boisson']) }}" class="dropdown-item">Boisson</a>
                                    </li>
                                    <hr class="my-1">
                                    <li>
                                        <a href="{{ route('dashboard.entity', ['entity' => 'plat']) }}" class="dropdown-item">Plat</a>
                                    </li>
                                </ul>
                            </li>
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
                            <h2 class="mb-4 text-md-start text-center">Ajouter une catégorie</h2>

                            <form method="POST" action="{{ route('dashboard.entity', ['entity' => 'categorie']) }}">
    @csrf
                                <label class="visually-hidden" for="register_nom">Nom de la catégorie</label>
                                <input type="text" name="register_nom" id="register_nom" class="form-control mb-3" placeholder="Nom de la catégorie" required autofocus>

                                <label class="visually-hidden" for="register_description">Description</label>
                                <textarea name="register_description" id="register_description" class="form-control mb-3" placeholder="Description"></textarea>

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
                                            <th colspan="2"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
    @forelse ($categories as $categorie)
                                        <tr>
                                            <td>
                                                <h3 class="mt-2 mb-1 fs-3">{{ $categorie->nom }}</h3>
                                                <p class="mb-2">{{ $categorie->description }}</p>
                                            </td>
                                            <td class="text-end">
                                                <a role="button" class="btn bg-transparent mt-2 p-0 fs-4 text-dark" title="Supprimer" data-bs-toggle="tooltip" onclick="event.preventDefault(); deleteData({{ $categorie->id }}, '../categorie');"><i class="bi bi-trash"></i></a><br>
                                            </td>
                                        </tr>
    @empty
                                        <tr>
                                            <td colspan="2" class="text-muted"><i class="bi bi-info-circle me-2 align-middle fs-5"></i>La liste est encore vide</td>
                                        </tr>
    @endforelse
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