@extends('layouts.app-kikoukou')

@section('content')
    <div class="block-about block-content bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2>Menu</h2>
                    <h3 class="fw-bold">Dégustez nos spécialités</h3>
                    <h4 class="mb-4">Commander vos plats <span class="text-warning">ou bien réserver une table</span></h4>
    @if (!empty(Auth::user()))
                    <a href="#book-a-table" class="btn bg-warning text-white" data-bs-toggle="modal" data-bs-target="#modal-reservation">Je veux juste réserver</a>
    @else
                    <a href="{{ route('login') }}" class="btn bg-warning text-white">Je veux juste réserver</a>
    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="block-choice">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-4 text-md-start text-center">Mes réservations</h3>

                </div>
            </div>
        </div>
    </div>
@endsection
