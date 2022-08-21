@extends('layouts.dashboard')
@section('user')


    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="main-content col-lg-8">
                    <div class="d-lg-none"><a href="#" data-toggle="modal" data-target="#add-wallet"
                            class="btn btn-danger btn-xl btn-between w-100 mgb-1-5x">Add your wallet address before buy
                            <em class="ti ti-arrow-right"></em></a>
                        <div class="gaps-1x mgb-0-5x d-lg-none d-none d-sm-block"></div>
                    </div>
                    <div class="content-area card">
                        <div class="card-innr">
                            <div class="card-head"><span class="card-sub-title text-primary font-mid">Withdraw Crypto</span>
                                <h4 class="card-title">Amount of withdraw</h4>
                            </div>
                            {{-- <div class="card-text">
                                <p>Enter your amount, you would like to contribute and calculate the amount of token you
                                    will received. The calculator helps to convert required currency to tokens.</p>
                            </div> --}}
                            <div class="token-contribute">
                                <div class="token-calc">
                                    <div class="token-pay-amount"><input id="token-base-amount"
                                            class="input-bordered input-with-hint" type="text" value="1">
                                        <div class="token-pay-currency"><a href="#"
                                                class="link ucap link-light toggle-tigger toggle-caret">ETH</a>
                                            <div class="toggle-class dropdown-content">
                                                <ul class="dropdown-list">
                                                    <li><a href="#">BTC</a></li>
                                                    <li><a href="#">LTC</a></li>
                                                    <li><a href="#">USD</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="token-received">
                                        <div class="token-eq-sign">=</div>
                                        <div class="token-received-amount">
                                            <h5 class="token-amount">123,500.84</h5>
                                            <div class="token-symbol">USDT</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="token-calc-note note note-plane"><em
                                        class="fas fa-times-circle text-danger"></em><span
                                        class="note-text text-light">0.O035 USDT minimum contribution require.</span></div>
                            </div>
                            <div class="token-overview-wrap">
                                <div class="token-overview">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="token-bonus token-bonus-sale"><span
                                                    class="token-overview-title">+ 20% Sale Bonus</span><span
                                                    class="token-overview-value bonus-on-sale">15,000.00</span></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="token-bonus token-bonus-amount"><span
                                                    class="token-overview-title">+ 30% Amount Bonus</span><span
                                                    class="token-overview-value bonus-on-amount">5,000.00</span></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="token-total"><span class="token-overview-title font-bold">Total
                                                    USDT</span><span
                                                    class="token-overview-value token-total-amount text-primary">1,823,500.84</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note note-plane note-danger note-sm pdt-1x pl-0">
                                    <p>Your Contribution will be calculated based on exchange rate at the moment your
                                        transaction is confirm.</p>
                                </div>
                            </div>
                        </div> <!-- .card-innr -->
                    </div> <!-- .content-area -->
                </div><!-- .col -->

            </div><!-- .container -->
        </div><!-- .container -->
    </div><!-- .page-content -->


    <div class="modal fade" id="pay-online" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content pb-0">
                <div class="popup-body">
                    <h4 class="popup-title">Withdraw Coin</h4>
                    <p class="lead">To receiving <strong>18,750 USDT</strong> tokens including <strong>bonus 1,540
                            USDT</strong> require payment amount of <strong>1.0 ETH</strong>.</p>
                    <p>You can choose any of following payment method to make your payment. The tokens balance will
                        appear in your account after successfull payment.</p>
                    <h5 class="mgt-1-5x font-mid">Select payment method:</h5>
                    <ul class="pay-list guttar-20px">
                        <li class="pay-item"><input type="radio" class="pay-check" name="pay-option"
                                id="pay-coin"><label class="pay-check-label" for="pay-coin"><img src="images/pay-a.png"
                                    alt="pay-logo"></label></li>
                        <li class="pay-item"><input type="radio" class="pay-check" name="pay-option"
                                id="pay-coinpay"><label class="pay-check-label" for="pay-coinpay"><img
                                    src="images/pay-b.png" alt="pay-logo"></label></li>
                        <li class="pay-item"><input type="radio" class="pay-check" name="pay-option"
                                id="pay-paypal"><label class="pay-check-label" for="pay-paypal"><img
                                    src="images/pay-c.png" alt="pay-logo"></label></li>
                    </ul><span class="text-light font-italic mgb-2x"><small>* Payment gateway company may charge you a
                            processing fees.</small></span>
                    <div class="pdb-2-5x pdt-1-5x"><input type="checkbox" class="input-checkbox input-checkbox-md"
                            id="agree-term-3"><label for="agree-term-3">I hereby agree to the <strong>token purchase
                                aggrement &amp; token sale term</strong>.</label></div>
                    <ul class="d-flex flex-wrap align-items-center guttar-30px">
                        <li><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#pay-review"
                                class="btn btn-primary">Buy Tokens &amp; Process to Pay <em
                                    class="ti ti-arrow-right mgl-2x"></em></a></li>
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
    <div class="modal fade" id="pay-coingate" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <div class="popup-body">
                    <h4 class="popup-title">Withdraw Tokens and Payment</h4>
                    <p class="lead">To receiving <strong>18,750 USDT</strong> tokens including <strong>bonus 1,540
                            USDT</strong> require payment amount of <strong>1.0 ETH</strong>.</p>
                    <p>You can pay via online payment geteway <strong>“Coingate”</strong>. It’s safe and secure.</p>
                    <div class="pdb-2-5x pdt-1-5x"><input type="checkbox" class="input-checkbox input-checkbox-md"
                            id="agree-term-2"><label for="agree-term-2">I hereby agree to the <strong>token purchase
                                aggrement &amp; token sale term</strong>.</label></div><button class="btn btn-primary"
                        data-dismiss="modal" data-toggle="modal" data-target="#pay-thanks">Place Order &amp; Process to
                        Pay <em class="ti ti-arrow-right mgl-4-5x"></em></button>
                    <div class="gaps-3x"></div>
                    <div class="note note-plane note-light mgb-1x"><em class="fas fa-info-circle"></em>
                        <p>You will automatically redirect to Coingate website for payment</p>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- Modal End -->



@endsection
