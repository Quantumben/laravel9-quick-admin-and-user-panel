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
                            <div class="card-head"><span class="card-sub-title text-primary font-mid">Step 1</span>
                                <h4 class="card-title">After a successful Transaction</h4>
                            </div>
                            <div class="card-text">
                                <p>You Can Withdraw Your Funds Using The Following Cryptocurrency.
                                </p>
                            </div>
                            <div class="token-currency-choose">
                                <div class="row guttar-15px">
                                    <div class="col-6">
                                        <div class="pay-option"><input class="pay-option-check" type="radio"
                                                id="payeth" name="payOption" checked><label
                                                class="pay-option-label" for="payeth"><span class="pay-title"><em
                                                        class="pay-icon cf cf-eth"></em><span
                                                        class="pay-cur">ETH</span></span><span
                                                    class="pay-amount">0.000800</span></label></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pay-option"><input class="pay-option-check" type="radio"
                                                id="paylte" name="payOption"><label class="pay-option-label"
                                                for="paylte"><span class="pay-title"><em
                                                        class="pay-icon cf cf-ltc"></em><span
                                                        class="pay-cur">LTC</span></span><span
                                                    class="pay-amount">0.001201</span></label></div>
                                    </div>


                                </div><!-- .row -->


                            </div>



                            <div class="card-head"><span class="card-sub-title text-primary font-mid">Step 2</span>
                                <h4 class="card-title">Make a payment</h4>
                            </div>
                            <div class="card-text">
                                <p>To fund your wallet. You can make payment directly to our bank account or
                                    you may pay online. Once you paid, you will receive an email about the successfull
                                    deposit. </p>
                            </div>
                            <div class="pay-buttons">
                                <div class="pay-button"><a href="#" data-toggle="modal"
                                        data-target="#get-pay-address" class="btn btn-light-alt btn-between w-100">Get
                                        Address for Payment <em class="ti ti-wallet"></em></a></div>
                                <div class="pay-button-sap">or</div>
                                <div class="pay-button"><a href="#" data-toggle="modal"
                                        data-target="#pay-online" class="btn btn-primary btn-between w-100">Make
                                        Online Payment <em class="ti ti-arrow-right"></em></a></div>
                            </div>
                            <div class="pay-notes">
                                <div class="note note-plane note-light note-md font-italic"><em
                                        class="fas fa-info-circle"></em>
                                    <p>Your wallet will be credit automatically after a successfull transaction <br class="d-none d-lg-block"> Please note that, for the bank transfer once approved
                                        by our team your wallet will be credited.. </p>
                                </div>
                            </div>
                        </div> <!-- .card-innr -->
                    </div> <!-- .content-area -->
                </div><!-- .col -->
                <div class="aside sidebar-right col-lg-4">
                    <div class="d-none d-lg-block"><a href="#" data-toggle="modal" data-target="#add-wallet"
                            class="btn btn-danger btn-xl btn-between w-100">ADD YOUR WALLET ADDRESS<em
                                class="ti ti-arrow-right"></em></a>
                        <div class="gaps-3x"></div>
                    </div>
                    <div class="token-statistics card card-token height-auto">
                        <div class="card-innr">
                            <div class="token-balance">
                                <div class="token-balance-text">
                                    <h6 class="card-sub-title">Balance</h6><span class="lead">120,000,000
                                        <span>Naira</span></span>
                                </div>
                            </div>
                            <div class="token-balance token-balance-s2">
                                <h6 class="card-sub-title">Referal Bonus</h6>
                                <ul class="token-balance-list">
                                    <li class="token-balance-sub"><span class="lead">Coming Soon</span><span
                                            class="sub">ETH</span></li>
                                    <li class="token-balance-sub"><span class="lead">Coming Soon</span><span
                                            class="sub">BTC</span></li>
                                    <li class="token-balance-sub"><span class="lead">Coming Soon</span><span
                                            class="sub">LTC</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div><!-- .col -->
            </div><!-- .container -->
        </div><!-- .container -->
    </div><!-- .page-content -->


    <div class="modal fade" id="add-wallet" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content"><a href="#" class="modal-close" data-dismiss="modal"
                    aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="popup-body">
                    <h4 class="popup-title">Wallet Address</h4>
                    <p>In order to withdraw from your <a href="#"><strong>Wallet</strong></a>, please select a
                        cryto and you have to add the crypto address in the input box. <strong>Upon withdrawal you will recieve your payment in the added address.</strong></p>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-with-label"><label for="swalllet"
                                        class="input-item-label">Select Wallet </label><select
                                        class="select-bordered select-block" name="swalllet" id="swalllet">
                                        <option value="eth">USDT</option>
                                    </select></div><!-- .input-item -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                        <div class="input-item input-with-label"><label for="token-address"
                                class="input-item-label">Your Address for tokens:</label><input class="input-bordered"
                                type="text" id="token-address" name="token-address"
                                value="0xde0b295669a9fd93d5f28d9ec85e40f4cb697bae"><span class="input-note">Note:
                                Address should be ERC20-compliant.</span></div><!-- .input-item -->
                        <div class="note note-plane note-danger"><em class="fas fa-info-circle"></em>
                            <p>Dude make sure your wallet address is correct else you will bear the lost.</p>
                        </div>
                        <div class="gaps-3x"></div>
                        <div class="d-sm-flex justify-content-between align-items-center"><button
                                class="btn btn-primary">Add Wallet</button>
                            <div class="gaps-2x d-sm-none"></div><span class="text-success"><em
                                    class="ti ti-check-box"></em> Added wallet address</span>
                        </div>
                    </form><!-- form -->
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- Modal End -->

    <div class="modal fade" id="get-pay-address" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content"><a href="#" class="modal-close" data-dismiss="modal"
                    aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="popup-body">
                    <h4 class="popup-title">Manual Payment</h4>
                    <p>Please make deposit amount of at least <strong>#1000</strong> to our <strong>Zenith bank account</strong></p>

                    <div class="gaps-1x"></div>
                    <h6 class="font-bold">Account Name: Thrilldigitals Global Technologies</h6>
                    <div class="copy-wrap mgb-0-5x"><span class="copy-feedback"></span><em
                            class="fab fa-ethereum"></em><input type="text" class="copy-address"
                            value="1224780068" disabled=""><button
                            class="copy-trigger copy-clipboard"
                            data-clipboard-text="1224780068"><em
                                class="ti ti-files"></em></button></div><!-- .copy-wrap -->
                    <ul class="pay-info-list row">
                        <li class="col-sm-6"><span>6% </span>VAT will be deducted</li>
                        {{-- <li class="col-sm-6"><span>SET GAS PRICE:</span> 95 Gwei</li> --}}
                    </ul><!-- .pay-info-list -->
                    <div class="pdb-2-5x pdt-1-5x"><input type="checkbox" class="input-checkbox input-checkbox-md"
                            id="agree-term"><label for="agree-term">I hereby agree<strong> to deposit based on tokencoin terms</strong>.</label></div><button class="btn btn-primary"
                        data-dismiss="modal" data-toggle="modal" data-target="#pay-confirm">Buy Tokens Now <em
                            class="ti ti-arrow-right mgl-4-5x"></em></button>
                    <div class="gaps-3x"></div>
                    <div class="note note-plane note-light mgb-1x"><em class="fas fa-info-circle"></em>
                        <p>Beware: we will never ask you to make payment through any cryptocurrency address.</p>
                    </div>
                    <div class="note note-plane note-danger"><em class="fas fa-info-circle"></em>
                        <p>In case you are sending with a different name, that doesn't tally with your Tokencoin's Account Username.
                            send us a mail after a successful transaction
                        </p>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- Modal End -->

    <div class="modal fade" id="pay-confirm" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <div class="popup-body">
                    <h4 class="popup-title">Confirming Your Payment</h4>
                    <p class="lead text-primary">Please send us a <strong>Screenshot</strong> of your payment. </p>
                    <p>Wallet balance will be funded only after your transaction is confirmed
                        and approved our team.</p>
                    <p>To <strong>speed up the </strong> proccesing please enter <strong> your Email address
                        </strong> that contain the payment receipt.</p>
                    <div class="input-item input-with-label"><label for="token-address"
                            class="input-item-label">Enter your email address</label><input class="input-bordered"
                            type="text" value="tokencoin@gmail.com"></div>
                    <!-- .input-item -->
                    <ul class="d-flex flex-wrap align-items-center guttar-30px">
                        <li><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#pay-review"
                                class="btn btn-primary">Confirm Payment</a></li>
                        <li class="pdt-1x pdb-1x"><a href="#" data-dismiss="modal" data-toggle="modal"
                                data-target="#pay-online" class="link link-primary">Make Online Payment</a></li>
                    </ul>
                    <div class="gaps-2x"></div>
                    <div class="gaps-1x d-none d-sm-block"></div>
                    <div class="note note-plane note-light mgb-1x"><em class="fas fa-info-circle"></em>
                        <p>Beware: we will never ask you to make payment through any cryptocurrency address.</p>
                    </div>
                    <div class="note note-plane note-danger"><em class="fas fa-info-circle"></em>
                        <p>In case your wallet wasn't credited, please <strong> contact our team </strong></p>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- Modal End -->

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
                            <input type="radio"  class="pay-check" name="pay-option"
                                id="pay-coin" disabled>
                                <label class="pay-check-label" for="pay-coin"><img
                                    src="{{asset('custom-css/images/pay-a.png')}}" alt="pay-logo"></label>
                        </li>

                        {{-- Coin payment --}}
                        <li class="pay-item">
                            <input type="radio" class="pay-check" name="pay-option"
                                id="pay-coinpay">
                                <label class="pay-check-label" for="pay-coinpay"><img
                                    src="{{asset('custom-css/images/pay-b.png')}}" alt="pay-logo"></label>
                        </li>

                        {{-- Paypal Payment --}}
                        <li class="pay-item">
                            <input type="radio" class="pay-check" name="pay-option"
                                id="pay-paypal" disabled>
                                <label class="pay-check-label" for="pay-paypal"><img
                                    src="{{asset('custom-css/images/pay-c.png')}}" alt="pay-logo"></label>
                        </li>

                    </ul><span class="text-light font-italic mgb-2x"><small>* Payment gateway company may charge you a
                            processing fees.</small></span>
                    <div class="pdb-2-5x pdt-1-5x"><input type="checkbox" class="input-checkbox input-checkbox-md"
                            id="agree-term-3"><label for="agree-term-3">I hereby agree to <strong>fund my wallet.</strong>.</label></div>
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
                    <h4 class="popup-title">Buy Tokens and Payment</h4>
                    <p class="lead">To receiving <strong>18,750 TWZ</strong> tokens including <strong>bonus 1,540
                            TWZ</strong> require payment amount of <strong>1.0 ETH</strong>.</p>
                    <p>You can pay via online payment geteway <strong>“Coingate”</strong>. It’s safe and secure.</p>
                    <div class="pdb-2-5x pdt-1-5x"><input type="checkbox" class="input-checkbox input-checkbox-md"
                            id="agree-term-2"><label for="agree-term-2">I hereby agree to the <strong>token purchase
                                aggrement &amp; token sale term</strong>.</label></div><button class="btn btn-primary"
                        data-dismiss="modal" data-toggle="modal" data-target="#pay-thanks">Place Order &amp; Process
                        to Pay <em class="ti ti-arrow-right mgl-4-5x"></em></button>
                    <div class="gaps-3x"></div>
                    <div class="note note-plane note-light mgb-1x"><em class="fas fa-info-circle"></em>
                        <p>You will automatically redirect to Coingate website for payment</p>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- Modal End -->

    <div class="modal fade" id="pay-thanks" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <div class="popup-body text-center">
                    <div class="gaps-2x"></div>
                    <div class="pay-status pay-status-success"><em class="ti ti-check"></em></div>
                    <div class="gaps-2x"></div>
                    <h3>Thanks for your contribution!</h3>
                    <p>Your payment amount <strong>1.0 ETH</strong> has been successfully received againest order no.
                        <strong>TNX94KR8N0</strong>. We’ve added <strong>18,750 TWZ</strong> tokens in account.</p>
                    <div class="gaps-2x"></div><a href="ico-distribution.html" class="btn btn-primary">See Token
                        Balance</a>
                    <div class="gaps-1x"></div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- Modal End -->

    <div class="modal fade" id="pay-review" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <div class="popup-body text-center">
                    <div class="gaps-2x"></div>
                    <div class="pay-status pay-status-success"><em class="ti ti-check"></em></div>
                    <div class="gaps-2x"></div>
                    <h3>We’re reviewing your payment.</h3>
                    <p>We’ll review your transaction and get back to your within 6 hours. You’ll receive an email with
                        the details of your contribution.</p>
                    <div class="gaps-2x"></div><a href="transactions.html" class="btn btn-primary">View
                        Transaction</a>
                    <div class="gaps-1x"></div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- Modal End -->



    <div class="modal fade" id="pay-failed" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <div class="popup-body text-center">
                    <div class="gaps-2x"></div>
                    <div class="pay-status pay-status-error"><em class="ti ti-alert"></em></div>
                    <div class="gaps-2x"></div>
                    <h3>Oops! Payment failed!</h3>
                    <p>Sorry, seems there is an issues occurred and we couldn’t process your payment. If you continue to
                        have issues, please contact us with order no. <strong>TNX94KR8N0</strong>.</p>
                    <div class="gaps-2x"></div><a href="#" data-dismiss="modal" data-toggle="modal"
                        data-target="#get-pay-address" class="btn btn-primary">Try to Pay Again</a>
                    <div class="gaps-1x"></div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- Modal End -->

@endsection
