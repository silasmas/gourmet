@extends('layouts.app-page')

@section('content')

    @if ($entity == 'categorie')
        @include('dashboard.partials.categorie')
    @endif

    @if ($entity == 'plat')
        @include('dashboard.partials.plat')
    @endif

    @if ($entity == 'boisson')
        @include('dashboard.partials.boisson')
    @endif

    @if ($entity == 'orders')
        @include('dashboard.partials.order')
    @endif

@endsection