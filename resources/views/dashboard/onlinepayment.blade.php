@extends('layouts.dashboard')
@section('user')

<div class="page-content">
    <div class="container">
        <div class="row">

<form action="/pay" method="POST">
    @csrf

    <input type="hidden" name="email" value="{{ auth()->user()->email }}"> {{-- required --}}
    <input type="hidden" name="orderID" value="{{ auth()->user()->id * mt_rand(1111,9999) }}">

     <input type="hidden" name="amount" value="800">
    {{-- required in kobo Note: i'm sending this from the user input value --}}
    <input type="hidden" name="quantity" value="1">
    <input type="hidden" name="currency" value="NGN">

    <div class="modal fade" id="pay-online" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content pb-0">



                <div class="popup-body">
                    <h4 class="popup-title">Fund Wallet</h4>

                    <p>You can choose any of following payment method to make your payment. The balance will
                        appear in your account after successfull payment.</p>
                    <h5 class="mgt-1-5x font-mid">Select payment method:</h5>

                    <ul class="pay-list guttar-20px">

                        {{-- Coingate payment --}}
                        <li class="pay-item">
                            <input type="radio" class="pay-check" name="pay-option" id="pay-coin" disabled>
                            <label class="pay-check-label" for="pay-coin"><img
                                    src="{{ asset('custom-css/images/pay-a.png') }}" alt="pay-logo"></label>
                        </li>

                        {{-- Coin payment --}}
                        <li class="pay-item">
                            <input type="radio" class="pay-check" name="pay-option" id="pay-coinpay">
                            <label class="pay-check-label" for="pay-coinpay"><img
                                    src="{{ asset('custom-css/images/pay-b.png') }}" alt="pay-logo"></label>
                        </li>

                        {{-- Paypal Payment --}}
                        <li class="pay-item">
                            <input type="radio" class="pay-check" name="pay-option" id="pay-paypal" disabled>
                            <label class="pay-check-label" for="pay-paypal">
                                <img
                                    src="{{ asset('custom-css/images/pay-c.png') }}" alt="pay-logo"></label>
                        </li>

                    </ul>

                    <div>
                        {{-- it allows only number as value --}}
                        {{-- <input type="text" name="amount" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" /> --}}

                    </div>

                    <span class="text-light font-italic mgb-2x"><small>* Payment gateway company may charge you a
                            processing fees.</small></span>
                    <div class="pdb-2-5x pdt-1-5x"><input type="checkbox" class="input-checkbox input-checkbox-md"
                            id="agree-term-3"><label for="agree-term-3">I hereby agree to <strong>fund my
                                wallet.</strong>.</label></div>
                    <ul class="d-flex flex-wrap align-items-center guttar-30px">
                        <li>
                            <button type="submit" class="btn btn-primary">Fund Wallet or Proceed to Pay</button>
                            {{-- <input type="submit"  class="btn btn-primary" value="Fund Wallet or Proceed to Pay"> --}}

                        </li>
                        <li class="pdt-1x pdb-1x"><a href="#" data-dismiss="modal" data-toggle="modal"
                                data-target="#get-pay-address" class="link link-primary">Make Manual Payment</a></li>
                    </ul>
                    <div class="gaps-2x"></div>
                    <div class="gaps-1x d-none d-sm-block"></div>
                    <div class="note note-plane note-light mgb-1x"><em class="fas fa-info-circle"></em>
                        <p class="text-light">You will automatically redirect for payment after your order placing.</p>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- Modal End -->
</form>

        </div>
    </div>
</div>
@endsection
