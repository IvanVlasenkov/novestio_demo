@extends('layouts.app')

@section('content')

    <div class="col-md-9 py-4 f-flex flex-column justify-content-center align-items-center mx-auto">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

        <div class="container text-center py-4">

            <h2>{{ __('messages.variant') }} "{{ __('messages.start') }}"</h2>
            <h3 class="text-lowercase">{{ __('messages.to15') }}</h3>
            <p class="lead">{{ __('messages.page_start_w1') }}</p>
            <hr class="mb-4">

        </div>

    
    </div>

@endsection

