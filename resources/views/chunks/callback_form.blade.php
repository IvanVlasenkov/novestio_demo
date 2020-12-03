<form class="needs-validation" action="#" method="POST">

    <div class="row py-2">
        
        <div class="col-md-6 mb-3">
            <label for="firstName">{{ __('messages.youname') }}</label>
        </div>
        <div class="col-md-6 mb-3">
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
            <div class="invalid-feedback">Valid first name is required.</div>
        </div>
    </div>

    <div class="row py-2">
        <div class="col-md-6 mb-3">
            <label for="lastName">{{ __('messages.mail') }}</label>
        </div>
        <div class="col-md-6 mb-3">
            <input type="email" class="form-control" id="lastName" placeholder="" value="" required="">
            <div class="invalid-feedback">Valid last name is required.</div>
        </div>
    </div>

    <button class="btn btn-primary btn-lg btn-block text-uppercase" type="submit">{{ __('messages.call_me') }}</button>

</form>