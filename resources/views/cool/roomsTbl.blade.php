@extends('cool.dashboard')

@section('page')
    @php
     //variable de pagina activa
     $currentPage = "rooms";
    @endphp
    
@endsection


@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">ROOMS:</div>
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center title-2">DETALLE:</h3>
                </div>

                <!-- mostrar datos del registro -->
                <dl class="row">
                    <dt class="col-sm-3">#</dt>
                    <dd class="col-sm-9">{{ $room->id }}</dd>

                    <dt class="col-sm-3">Room: </dt>
                    <dd class="col-sm-9">{{ $room->room }}</dd>

                    <dt class="col-sm-3">Guests: </dt>
                    <dd class="col-sm-9">{{ $room->guests }}</dd>

                    <dt class="col-sm-3">State: </dt>
                    <dd class="col-sm-9">{{ $room->state }}</dd>

                    <dt class="col-sm-3">Guest Name: </dt>
                    <dd class="col-sm-9">{{ $room->gestName }}</dd>

                    <dt class="col-sm-3">From Date: </dt>
                    <dd class="col-sm-9">{{ $room->fromDate }}</dd>

                    <dt class="col-sm-3">To Date: </dt>
                    <dd class="col-sm-9">{{ $room->toDate }}</dd>

                    <dt class="col-sm-3">Price: </dt>
                    <dd class="col-sm-9">{{ $room->price }}</dd>
                </dl>                    
                <hr>    
                <!-- Formulario -->
                <h3>Formulario:</h3>
                <hr>
                <form action="" method="post" novalidate="novalidate">
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                        <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true"
                            aria-invalid="false" value="100.00">
                    </div>
                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">Name on card</label>
                        <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true"
                            data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true"
                            aria-invalid="false" aria-describedby="cc-name-error">
                        <span class="help-balt="Cool Admin"ck field-validation-valid" data-valmsg-for="cc-name"
                            data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label for="cc-number" class="control-label mb-1">Card number</label>
                        <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa"
                            value="" data-val="true" data-val-required="Please enter the card number"
                            data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value=""
                                    data-val="true" data-val-required="Please enter the card expiration"
                                    data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY"
                                    autocomplete="cc-exp">
                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="x_card_code" class="control-label mb-1">Security code</label>
                            <div class="input-group">
                                <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value=""
                                    data-val="true" data-val-required="Please enter the security code"
                                    data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">Pay $100.00</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
