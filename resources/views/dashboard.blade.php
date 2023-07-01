@extends('layouts.app-page')

@section('content')
    <div class="block-about block-content bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 mx-auto text-center">
                    <h3 class="fw-bold text-uppercase">Tableau de bord</h3>
                    <h4 class="m-0">Gestion des plats, <span class="text-warning">des boissons et d'autres</span> données importantes</h4>
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
                          <li class="breadcrumb-item active" aria-current="page">Accueil</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="block-choice py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" style="z-index: 999;">
                    <div class="card h-auto">
                        <div class="p-4 bg-white border border-default rounded-3">
                            <h2 class="mb-4 text-md-start text-center">Boissons</h2>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="fw-bold">Nom de la boisson</th>
                                            <th class="fw-bold">Quantité</th>
                                            <th class="fw-bold"></th>
                                        </tr>
                                    </thead>
    
                                    <tbody id="updateMemberStatus">
                                        <tr>
                                            <td>Madesu + soso</td>
                                            <td>3</td>
                                            <td class="text-end">
                                                <a href="#" class="btn px-3 py-2">Ravitailler</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p class="m-0 pt-4 pb-0 text-center">
                                <a href="{{ route('dashboard.entity', ['entity' => 'boisson']) }}" class="btn-link">Gérer les boissons</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" style="z-index: 999;">
                    <div class="card h-auto">
                        <div class="p-4 bg-white border border-default rounded-3">
                            <h2 class="mb-4 text-md-start text-center">Plats</h2>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="fw-bold">Nom du plat</th>
                                            <th class="fw-bold">Quantité</th>
                                            <th class="fw-bold"></th>
                                        </tr>
                                    </thead>
    
                                    <tbody id="updateMemberStatus">
                                        <tr>
                                            <td>Madesu + soso</td>
                                            <td>3</td>
                                            <td class="text-end">
                                                <a href="#" class="btn px-3 py-2">Ravitailler</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p class="m-0 pt-4 pb-0 text-center">
                                <a href="{{ route('dashboard.entity', ['entity' => 'plat']) }}" class="btn-link">Gérer les plats</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-5">
                    <div class="card h-auto">
                        <div class="table-responsive p-4 bg-white border border-default rounded-3">
                            <h2 class="mb-4 text-md-start text-center">Commandes</h2>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="fw-bold">Nom du plat</th>
                                        <th class="fw-bold">Quantité</th>
                                        <th class="fw-bold"></th>
                                    </tr>
                                </thead>

                                <tbody id="updateMemberStatus">
                                    <tr>
                                        <td>Madesu + soso</td>
                                        <td>3</td>
                                        <td class="text-end">
                                            <a href="#" class="btn px-3 py-2">Ravitailler</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection