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
                <div class="col-lg-6 mb-5" style="z-index: 999;">
                    <div class="card w-100 h-auto">
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
                                            <td>Scotch whisky</td>
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

                <div class="col-lg-6 mb-5" style="z-index: 998;">
                    <div class="card w-100 h-auto">
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
                                            <td>Gambas grillées aux fines herbes</td>
                                            <td>10</td>
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

                <div class="col-12">
                    <div class="card w-100 h-auto">
                        <div class="p-4 bg-white border border-default rounded-3">
                            <h2 class="mb-4 text-md-start text-center">Commandes des clients</h2>

                            <div class="table-responsive">
                                <table id="dataList" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="fw-bold">Client</th>
                                            <th class="fw-bold">Nom du plat</th>
                                            <th class="fw-bold">Quantité</th>
                                            <th class="fw-bold">À emporter</th>
                                            <th class="fw-bold"></th>
                                        </tr>
                                    </thead>
    
                                    <tbody id="updateCustomerStatus">
                                        <tr>
                                            <a href="#" class="d-block h-100">
                                                <td>
                                                    <img src="{{ asset('assets/img/placeholder.png') }}" alt="" class="rounded-circle me-2" style="width: 34px!important">
                                                    Carlos Bianda
                                                </td>
                                                <td>Salade Tanganyika</td>
                                                <td>3</td>
                                                <td>Oui</td>
                                                <td>
                                                    <div id="status_user-USER-ID" class="form-check form-switch" aria-current="STATUS" onchange="changeStatus('status_user-USER-ID')">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="USER-ID" checked />
                                                        <label role="button" class="ms-2 form-check-label" for="USER-ID">Servi</label>
                                                    </div>
                                                </td>
                                            </a>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p class="m-0 pt-4 pb-0 text-center">
                                <a href="{{ route('dashboard.entity', ['entity' => 'orders']) }}" class="btn-link">Voir toutes les commandes</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection