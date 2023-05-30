@extends('layouts.errors')

@section('errors-content')

<div class="container-xxl d-flex justify-content-center align-items-center py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        @if (Route::is('transaction.en_attente'))

        <div class="row justify-content-center mt-5">
            <div class="col-lg-6">
                <p>@lang('general.transaction_waiting')</p>
                <p>
                    <a href="{{ route('transaction.message', ['entity' => explode('-', request()->success_message)[2], 'orderNumber' => explode('-', request()->success_message)[0], 'userId' => explode('-', request()->success_message)[1]]) }}"
                        class="btn btn-primary rounded-pill py-3 px-5">OK</a>
                </p>
            </div>
        </div>

        @else
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6">
                @if (!empty($status_code))
                    @if ($status_code == '0')
                    <h1 class="text-success" style="font-size: 5rem;"><span class="bi bi-check-circle"></span></h1>
                    @endif

                    @if ($status_code == '1')
                    <h1 class="text-warning" style="font-size: 5rem;"><span class="bi bi-exclamation-circle"></span></h1>
                    @endif
                    @if ($status_code == '2')
                    <h1 class="text-danger" style="font-size: 5rem;"><span class="bi bi-x-circle"></span></h1>
                    @endif
                @endif
                @if (!empty($response_error))
                <h1 class="text-danger" style="font-size: 5rem;"><span class="bi bi-x-circle"></span></h1>
                @endif
                <h3 class="h3 mb-4">{{ !empty($response_error) ? (!empty($response_error->data) ? $response_error->data
                    : $response_error->message) : $message_content }}</h3>
                @if (!empty($message_new_partner))
                <p class="mb-4">{{ $message_new_partner }}</p>
                @endif
                @if (!empty($response_error))
                <p class="small mb-4">{{ !empty($response_error->message) ? $response_error->message :
                    $response_error->data }}</p>
                @endif
                @if (!empty($achat))
                <div class="card mb-4 shadow-0">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="px-2 py-1 border-start border-3 bdc--600">
                            <p class="m-0 text-black">{{ $achat->reference }}</p>
                            <h4 class="h4 mt-0 mb-1 fw-bold c--600 text-truncate"
                                style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">{{ $achat->amount
                                . ' ' . $achat->currency }}</h4>
                            <p class="m-0 small">{{ $achat->created_at }}</p>
                        </div>

                        <div class="px-3 py-1 text-center">
                            <p class="m-0 text-dark text-uppercase text-truncate">{{ $achat->channel }}</p>
                            <span
                                class="badge text-dark">{{
                                $statut }}</span>
                        </div>
                    </div>
                </div>
                @endif

                <a href="{{ route('kicoucou') }}" class="btn d-lg-inline-block d-none btn-warning btn-color rounded-pill py-3 px-5 shadow-0">
                    {{ __('general.back_home') }}
                </a>
            </div>
        </div>
        @endif
    </div>
</div>

@endsection