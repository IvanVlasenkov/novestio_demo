@extends('layouts.app')

@section('content')

    <div class="col-md-9 py-4 f-flex flex-column justify-content-center align-items-center mx-auto">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

        <div class="container text-center py-4">

            <h2>{{ __('messages.gallery') }}</h2>


        </div>

    
    </div>

@endsection
