@extends('layouts.app')

@section('content')

    <div class="col-md-9 py-4 f-flex flex-column justify-content-center align-items-center mx-auto">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

        <div class="container text-center py-4">

            <form class="" id="start-form" name="start-form">
                <div class="box">
                    <div class="box-header text-left">
                        <h2>{{ __('messages.page_start_w3') }}</h2>
                        <small>{{ __('messages.page_start_w4') }}</small>
                    </div>
                    <div class="box-divider"></div>
                    <div class="box-body d-flex flex-md-row">
                        <div class="col-md-2 d-flex justify-content-center">
                            <label for="start-form-budget" class="mr-2 d-flex mb-0 align-items-center">{{ __('messages.budget') }}:</label>
                        </div>
                        <div class="col-md-4 d-flex align-items-center">
                            <input id="start-form-budget" name="start-form-budget" class="form-control align-items-center" placeholder="" value="" />
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4 d-flex justify-content-end align-content-center">
                            <button class="btn btn-primary btn-block text-uppercase" type="submit">{{ __('messages.calculate') }}</button>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="table-responsive">
                        <table class="table table-bordered m-a-0">
                            <thead>
                                <div class="table-icon js--add-start-form-row">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#plus-icon"></use></svg> 
                                </div>
                                <tr>
                                    <th>{{ __('messages.object_number') }}</th>
                                    <th>{{ __('messages.object_cost') }}</th>
                                    <th>{{ __('messages.object_profit') }}</th>
                                </tr>
                            </thead>
                            <tbody id="start-form-tbody">
                                <tr class="js-start-form-row">
                                    <th>
                                        <input id="start-form-number-1" name="start-form-number-1" class="form-transparent" placeholder="" value="1" disabled="disabled" />
                                    </th>
                                    <th>
                                        <input id="start-form-cost-1" name="start-form-cost-1" class="form-control" placeholder="" value="" type="number" />
                                    </th>   
                                    <th>
                                        <input id="start-form-profit-1" name="start-form-profit-1" class="form-control" placeholder="" value="" type="number" />
                                    </th>                              
                                </tr>

                            </tbody>
                        </table>
                    </div>
                
                </div>
            </form>

        </div>

    
    </div>

@endsection

