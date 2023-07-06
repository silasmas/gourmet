@extends('layouts.app-page')

@section('content')

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
                            <li class="breadcrumb-item active" aria-current="page">Catégorie</li>
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