@extends('layouts.app-page')

@section('content')

    @if (Route::is('account.home'))
        @include('pages.profile')
    @endif

    @if (Route::is('account.entity'))
        @if ($entity == 'reservation')
            @include('pages.reservation')
        @endif

        @if ($entity == 'order')
            @include('pages.order')
        @endif
    @endif

    @if (Route::is('account.entity.datas'))
        @if ($entity == 'reservation')
            @include('pages.reservation')
        @endif

        @if ($entity == 'order')
            @include('pages.order')
        @endif
    @endif

@endsection