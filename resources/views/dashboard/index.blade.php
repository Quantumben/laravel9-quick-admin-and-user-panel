@extends('layouts.dashboard')
@section('user')

 <!-- .topbar-wrap -->
 <div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="token-statistics card card-token height-auto">
                    <div class="card-innr">
                        <div class="token-balance token-balance-with-icon">
                            <div class="token-balance-icon"><img src="{{ asset('custom-css/images/logo-light-sm.png')}}" alt="logo"></div>
                            <div class="token-balance-text">
                                <h6 class="card-sub-title">Balance</h6><span class="lead">{{0}}
                                    <span>Naira</span></span>
                            </div>
                        </div>
                        <div class="token-balance token-balance-s2">
                            <h6 class="card-sub-title">Referal Bonus</h6>
                            <ul class="token-balance-list">
                                <li class="token-balance-sub"><span class="lead">Coming soon</span><span
                                        class="sub">ETH</span></li>
                                <li class="token-balance-sub"><span class="lead">Coming soon</span><span
                                        class="sub">BTC</span></li>
                                <li class="token-balance-sub"><span class="lead">Coming soon</span><span
                                        class="sub">LTC</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- .col -->
            <div class="col-lg-8">
                <div class="token-information card card-full-height">
                    <div class="row no-gutters height-100">
                        <div class="col-md-6 text-center">
                            <div class="token-info"><img class="token-info-icon" src="{{asset('custom-css/images/logo-sm.png')}}"
                                    alt="logo-sm">
                                <div class="gaps-2x"></div>
                                <h1 class="token-info-head text-light">1 ETH = 1000 TKNCN</h1>
                                <h5 class="token-info-sub">1 ETH = 254.05 USD</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="token-info bdr-tl">
                                <div>
                                    <ul class="token-info-list">
                                        <li><span>TokenCoin CoinName:</span>TokenCoin</li>
                                        <li><span>Ticket Symbol:</span>TKNCN</li>
                                    </ul> <a href="#" class="btn btn-primary"><em
                                            class="fas fa-download mr-3"></em>Download Whitepaper</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-lg-6">
                <div class="card card-full-height">
                    <div class="card-innr">
                        <div class="card-head has-aside pb-0">
                            <h4 class="card-title">Recent Users</h4>
                        </div>
                        <table class="data-table user-list">
                            <tbody>
                                <tr class="data-item">
                                    <td class="data-col dt-user">
                                        <div class="user-block">
                                            <div class="user-photo"><img src="{{asset('custom-css/images/user-a.jpg')}}" alt=""></div>
                                            <div class="user-info"><span class="lead user-name">Abu Bin
                                                    Ishtiyak</span><span class="sub user-id">UD102001</span></div>
                                        </div>
                                    </td>
                                    <td class="data-col dt-join text-right"><span class="sub join-time">03 Hours
                                            ago</span></td>
                                </tr><!-- .data-item -->
                                <tr class="data-item">
                                    <td class="data-col dt-user">
                                        <div class="user-block">
                                            <div class="user-photo">HW</div>
                                            <div class="user-info"><span class="lead user-name">Helena
                                                    Walz</span><span class="sub user-id">UD102005</span></div>
                                        </div>
                                    </td>
                                    <td class="data-col dt-join text-right"><span class="sub join-time">09 Hours
                                            ago</span></td>
                                </tr><!-- .data-item -->
                                <tr class="data-item">
                                    <td class="data-col dt-user">
                                        <div class="user-block">
                                            <div class="user-photo bg-secondary">SD</div>
                                            <div class="user-info"><span class="lead user-name">Sherice
                                                    Digangi</span><span class="sub user-id">UD102023</span></div>
                                        </div>
                                    </td>
                                    <td class="data-col dt-join text-right"><span class="sub join-time">11 Hours
                                            ago</span></td>
                                </tr><!-- .data-item -->
                                <tr class="data-item">
                                    <td class="data-col dt-user">
                                        <div class="user-block">
                                            <div class="user-photo bg-danger">DS</div>
                                            <div class="user-info"><span class="lead user-name">Darren
                                                    Square</span><span class="sub user-id">UD102028</span></div>
                                        </div>
                                    </td>
                                    <td class="data-col dt-join text-right"><span class="sub join-time">17 Hours
                                            ago</span></td>
                                </tr><!-- .data-item -->
                                <tr class="data-item">
                                    <td class="data-col dt-user">
                                        <div class="user-block">
                                            <div class="user-photo bg-warning">PR</div>
                                            <div class="user-info"><span class="lead user-name">Patrick
                                                    Reader</span><span class="sub user-id">UD102037</span></div>
                                        </div>
                                    </td>
                                    <td class="data-col dt-join text-right"><span class="sub join-time">23 Hours
                                            ago</span></td>
                                </tr><!-- .data-item -->
                            </tbody>
                        </table>
                    </div>
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-lg-6">
                <div class="card card-timeline card-full-height">
                    <div class="card-innr">
                        <div class="card-head has-aside">
                            <h4 class="card-title">Notifications</h4>
                        </div>
                        <div class="timeline-wrap" id="timeline-notify">
                            <div data-simplebar="init">
                                <div class="timeline-innr">
                                    <div class="timeline">
                                        <div class="timeline-line"></div>
                                        <div class="timeline-item">
                                            <div class="timeline-time">09:30 AM</div>
                                            <div class="timeline-content">
                                                <p>Each member have a unique TWZ referral link to share with friends
                                                    and family and receive a bonus - 15% of the value of their
                                                    contribution.</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item success">
                                            <div class="timeline-time">12:27 AM</div>
                                            <div class="timeline-content">
                                                <div class="chat-users">
                                                    <div class="chat-users-stack">
                                                        <div class="chat-avatar circle"><img src="images/user-a.jpg"
                                                                alt=""></div>
                                                        <div class="chat-avatar circle"><img src="images/user-b.jpg"
                                                                alt=""></div>
                                                        <div class="chat-avatar circle"><img src="images/user-c.jpg"
                                                                alt=""></div>
                                                    </div><span>+14</span>
                                                </div><span class="timeline-content-info">New User Added</span>
                                            </div>
                                        </div>
                                        <div class="timeline-item secondary">
                                            <div class="timeline-time">07:45 PM</div>
                                            <div class="timeline-content"><a href="#"
                                                    class="timeline-content-url">Now You can send payment directly
                                                    to our address or you may pay online</a><span
                                                    class="timeline-content-info">New Article on Blog</span></div>
                                        </div>
                                        <div class="timeline-item secondary">
                                            <div class="timeline-time">07:45 PM</div>
                                            <div class="timeline-content">
                                                <p>500 TWZ referral bonues added</p><span
                                                    class="timeline-content-info">into @Abc</span>
                                            </div>
                                        </div>
                                        <div class="timeline-item hidden success">
                                            <div class="timeline-time">03:45 PM</div>
                                            <div class="timeline-content">
                                                <h5 class="timeline-content-title">Get bonus - 15% of the value of
                                                    your contribution</h5><span class="timeline-content-info">Latest
                                                    Offers</span>
                                            </div>
                                        </div>
                                        <div class="timeline-item hidden light">
                                            <div class="timeline-time">02:30 PM</div>
                                            <div class="timeline-content">
                                                <p>Each member have a unique TWZ referral link to share with friends
                                                    and family and receive a bonus - 15% of the value of their
                                                    contribution.</p><span
                                                    class="timeline-content-info">Announcements</span>
                                            </div>
                                        </div>
                                        <div class="timeline-item hidden light">
                                            <div class="timeline-time">02:30 PM</div>
                                            <div class="timeline-content">
                                                <p>Each member have a unique TWZ referral link to share with friends
                                                    and family and receive a bonus - 15% of the value of their
                                                    contribution.</p><span
                                                    class="timeline-content-info">Announcements</span>
                                            </div>
                                        </div>
                                        <div class="timeline-item hidden danger">
                                            <div class="timeline-time">12:17 AM</div>
                                            <div class="timeline-content">
                                                <p>You can buy our TWZ tokens using ETH, BTC, LTC or USD.</p><span
                                                    class="timeline-content-info">Announcements</span>
                                            </div>
                                        </div>
                                        <div class="timeline-item hidden primary">
                                            <div class="timeline-time">09:31 AM</div>
                                            <div class="timeline-content">
                                                <div class="chat-users">
                                                    <div class="chat-users-stack">
                                                        <div class="chat-avatar circle"><img src="{{asset('reg-login/images/user-a.jpg')}}"
                                                                alt=""></div>
                                                        <div class="chat-avatar circle"><img src="{{asset('reg-login/images/user-c.jpg')}}"
                                                                alt=""></div>
                                                        <div class="chat-avatar circle"><img src="{{asset('reg-login/images/user-b.jpg')}}"
                                                                alt=""></div>
                                                        <div class="chat-avatar circle"><img src="{{asset('reg-login/images/user-d.jpg')}}"
                                                                alt=""></div>
                                                    </div><span>+122</span>
                                                </div><span class="timeline-content-info">New User Added</span>
                                            </div>
                                        </div>
                                        <div class="timeline-item hidden warning">
                                            <div class="timeline-time">08:57 AM</div>
                                            <div class="timeline-content">
                                                <p>Enter your amount, you would like to contribute and calculate the
                                                    amount of token you will received. To get tokens please make a
                                                    payment. You can send payment directly to our address or you may
                                                    pay online. Once you paid, you will receive an email about the
                                                    successfull deposit.</p><span
                                                    class="timeline-content-info">Announcements</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-load"><a href="#" class="link load-timeline"
                                    data-target="timeline-notify" data-show="2">Load More</a></div>
                        </div>
                    </div>
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-lg-6">
                <div class="token-transaction card card-full-height">
                    <div class="card-innr">
                        <div class="card-head has-aside">
                            <h4 class="card-title">Transaction</h4>
                            <div class="card-opt"><a href="transactions.html" class="link ucap">View ALL <em
                                        class="fas fa-angle-right ml-2"></em></a></div>
                        </div>
                        <table class="table tnx-table">
                            <thead>
                                <tr>
                                    <th>Wallet Transaction</th>
                                    <th>Amount</th>
                                    <th class="d-none d-sm-table-cell tnx-date">Date</th>
                                    <th class="tnx-type">
                                        <div class="tnx-type-text"></div>
                                    </th>
                                </tr><!-- tr -->
                            </thead><!-- thead -->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="data-state data-state-pending"></div><span
                                                class="lead">18,750</span>
                                        </div>
                                    </td>
                                    <td><span><span class="lead">3.543</span><span class="sub">ETH <em
                                                    class="fas fa-info-circle" data-toggle="tooltip"
                                                    data-placement="bottom"
                                                    data-original-title="1 ETH = 590.54 USD"></em></span></span>
                                    </td>
                                    <td class="d-none d-sm-table-cell tnx-date"><span class="sub sub-s2">2018-08-24
                                            10:20 PM</span></td>
                                    <td class="tnx-type"><span
                                            class="tnx-type-md badge badge-outline badge-success badge-md">Purchase</span><span
                                            class="tnx-type-sm badge badge-sq badge-outline badge-success badge-md">P</span>
                                    </td>
                                </tr><!-- tr -->
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="data-state data-state-progress"></div><span
                                                class="lead">8,052</span>
                                        </div>
                                    </td>
                                    <td><span><span class="lead">0.165</span><span class="sub">BTC <em
                                                    class="fas fa-info-circle" data-toggle="tooltip"
                                                    data-placement="bottom"
                                                    data-original-title="1 BTC = 5450.54 USD"></em></span></span>
                                    </td>
                                    <td class="d-none d-sm-table-cell tnx-date"><span class="sub sub-s2">2018-08-24
                                            10:20 PM</span></td>
                                    <td class="tnx-type"><span
                                            class="tnx-type-md badge badge-outline badge-warning badge-md">Bonus</span><span
                                            class="tnx-type-sm badge badge-sq badge-outline badge-warning badge-md">B</span>
                                    </td>
                                </tr><!-- tr -->
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="data-state data-state-approved"></div><span
                                                class="lead">19,000</span>
                                        </div>
                                    </td>
                                    <td><span><span class="lead">3.141</span><span class="sub">LTC <em
                                                    class="fas fa-info-circle" data-toggle="tooltip"
                                                    data-placement="bottom"
                                                    data-original-title="1 LTC = 180.54 USD"></em></span></span>
                                    </td>
                                    <td class="d-none d-sm-table-cell tnx-date"><span class="sub sub-s2">2018-08-24
                                            10:20 PM</span></td>
                                    <td class="tnx-type"><span
                                            class="tnx-type-md badge badge-outline badge-warning badge-md">Bonus</span><span
                                            class="tnx-type-sm badge badge-sq badge-outline badge-warning badge-md">B</span>
                                    </td>
                                </tr><!-- tr -->
                            </tbody><!-- tbody -->
                        </table><!-- .table -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="token-sale-graph card card-full-height">
                    <div class="card-innr">
                        <div class="card-head has-aside">
                            <h4 class="card-title">Tokens Sale Graph</h4>
                            <div class="card-opt"><a href="#"
                                    class="link ucap link-light toggle-tigger toggle-caret">7 Days</a>
                                <div class="toggle-class dropdown-content">
                                    <ul class="dropdown-list">
                                        <li><a href="#">30 days</a></li>
                                        <li><a href="#">1 years</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="chart-tokensale"><canvas id="tknSale"></canvas></div>
                    </div>
                </div><!-- .card -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-content -->

@endsection
