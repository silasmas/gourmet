@extends('layouts.app-page')

@section('content')

    @if (Route::is('account.home'))
        @include('profile.partials.home')
    @endif

    @if (Route::is('account.entity'))
        @if ($entity == 'reservation')
            @include('profile.partials.reservation')
        @endif

        @if ($entity == 'order')
            @include('profile.partials.order')
        @endif
    @endif

    @if (Route::is('account.entity.datas'))
        @if ($entity == 'reservation')
            @include('profile.partials.reservation')
        @endif

        @if ($entity == 'order')
            @include('profile.partials.order')
        @endif
    @endif

@endsection