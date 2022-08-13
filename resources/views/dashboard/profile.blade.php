@extends('layouts.dashboard')
@section('user')

<div class="main-content col-lg-8">
    <div class="content-area card">
        <div class="card-innr">
            <div class="card-head">
                <h4 class="card-title">Profile Details</h4>
            </div>
            <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                        href="#personal-data">Personal Data</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Settings</a>
                </li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#password">Password</a>
                </li>
            </ul><!-- .nav-tabs-line -->
            <div class="tab-content" id="profile-details">
                <div class="tab-pane fade show active" id="personal-data">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-with-label"><label for="full-name"
                                        class="input-item-label">Full Name</label><input
                                        class="input-bordered" type="text" id="full-name"
                                        name="full-name" value="{{Auth::user()->name}}"></div>
                                <!-- .input-item -->
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-with-label"><label for="email-address"
                                        class="input-item-label">Email Address</label><input
                                        class="input-bordered" type="text" id="email-address"
                                        name="email-address" value="{{Auth::user()->email}}" disabled></div>
                                <!-- .input-item -->
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-with-label"><label for="mobile-number"
                                        class="input-item-label">Token</label><input
                                        class="input-bordered" type="text"
                                        value="{{Auth::user()->tokens}}"></div><!-- .input-item -->
                            </div>

                        </div><!-- .row -->
                        <div class="gaps-1x"></div><!-- 10px gap -->
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <a href="/dashboard"  class="btn btn-primary">Back</a>
                            <div class="gaps-2x d-sm-none"></div><span class="text-success"><em
                                    class="ti ti-check-box"></em> All Changes are saved</span>
                        </div>
                    </form><!-- form -->
                </div><!-- .tab-pane -->
                <div class="tab-pane fade" id="settings">
                    <div class="pdb-1-5x">
                        <h5 class="card-title card-title-sm text-dark">Security Settings</h5>
                    </div>
                    <div class="input-item"><input type="checkbox" class="input-switch input-switch-sm"
                            id="save-log" checked><label for="save-log">Save my Activities Log</label>
                    </div>
                    <div class="input-item"><input type="checkbox" class="input-switch input-switch-sm"
                            id="pass-change-confirm"><label for="pass-change-confirm">Confirm me through
                            email before password change</label></div>
                    <div class="pdb-1-5x">
                        <h5 class="card-title card-title-sm text-dark">Manage Notification</h5>
                    </div>
                    <div class="input-item"><input type="checkbox" class="input-switch input-switch-sm"
                            id="latest-news" checked><label for="latest-news">Notify me by email about
                            sales and latest news</label></div>
                    <div class="input-item"><input type="checkbox" class="input-switch input-switch-sm"
                            id="activity-alert" checked><label for="activity-alert">Alert me by email
                            for unusual activity.</label></div>
                    <div class="gaps-1x"></div>
                    <div class="d-flex justify-content-between align-items-center"><span></span><span
                            class="text-success"><em class="ti ti-check-box"></em> Setting has been
                            updated</span></div>
                </div><!-- .tab-pane -->


                <div class="tab-pane fade" id="password">
                        <form method="" action="google.com">
                            @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-item input-with-label"><label for="old-pass"
                                    class="input-item-label">Old Password</label><input
                                    class="input-bordered" type="password" id="old-pass"
                                    name="old-pass"></div><!-- .input-item -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-item input-with-label"><label for="new-pass"
                                    class="input-item-label">New Password</label><input
                                    class="input-bordered" type="password" id="new-pass"
                                    name="new-pass"></div><!-- .input-item -->
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="input-item input-with-label"><label for="confirm-pass"
                                    class="input-item-label">Confirm New Password</label><input
                                    class="input-bordered" type="password" id="confirm-pass"
                                    name="confirm-pass"></div><!-- .input-item -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                    <div class="note note-plane note-info pdb-1x"><em class="fas fa-info-circle"></em>
                        <p>Password should be minmum 8 letter and include lower and uppercase letter.
                        </p>
                    </div>
                    <div class="gaps-1x"></div><!-- 10px gap -->
                    <div class="d-sm-flex justify-content-between align-items-center"><button
                            class="btn btn-primary">Update</button>
                        <div class="gaps-2x d-sm-none"></div>
                        <span class="text-success"><em
                                class="ti ti-check-box"></em> Changed Password</span>
                    </div>
                        </form>
                </div><!-- .tab-pane -->
            </div><!-- .tab-content -->
        </div><!-- .card-innr -->
    </div><!-- .card -->

</div><!-- .col -->


@endsection
