@extends('layouts.dashboard')
@section('user')
    <div class="page-content">
        <div class="container">
            <div class="row">

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

@endsection
