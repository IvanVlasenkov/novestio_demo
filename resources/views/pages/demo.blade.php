@extends('layouts.app')

@section('content')

<div class="col-md-9 py-4 f-flex flex-column justify-content-center align-items-center mx-auto">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="container text-center py-4">

        <h2>{{ __('messages.variant') }} "{{ __('messages.demo') }}"</h2>
        <p class="lead">{{ __('messages.page_demo_w1') }}</p>
        <hr class="mb-4">

        <form class="padding d-none" method="post" action="{{ route('seed.demo') }}">
            @csrf
            <div class="panel row">

                <label for="quest-number">{{ __('message.w_panel_3') }}</label>
                
                <select id="quest-number" class="">
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="300">300</option>
                    <option value="1000">1000</option>
                </select>

                <label for="quest-type">{{ __('message.w_panel_2') }}</label>
                <select id="quest-type" class="">
                    <option value="1">{{ __('message.w_panel_1') }}</option>
                </select>

                <button class="btn btn-primary">{{ __('message.w_panel_4') }}</button>

            </div>
        </form>
    </div>

</div>
@endsection
