@extends('layouts.dashboard')
@section('user')

<div class="card content-area">
    <div class="card-innr">
        <div class="card-head">
            <h4 class="card-title">User Transactions</h4>
        </div>
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="table-wrap">
                <table class="data-table dt-init user-tnx dataTable no-footer" id="DataTables_Table_0" role="grid"
                    aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr class="data-item data-head" role="row">
                            <th class="data-col dt-tnxno sorting_disabled" rowspan="1" colspan="1">Tranx NO</th>
                            <th class="data-col dt-token sorting_disabled" rowspan="1" colspan="1">Tokens</th>
                            <th class="data-col dt-amount sorting_disabled" rowspan="1" colspan="1">Amount</th>
                            <th class="data-col dt-usd-amount sorting_disabled" rowspan="1" colspan="1">USD Amount
                            </th>
                            <th class="data-col dt-account sorting_disabled" rowspan="1" colspan="1">From</th>
                            <th class="data-col dt-type sorting_disabled" rowspan="1" colspan="1">
                                <div class="dt-type-text">Type</div>
                            </th>
                            <th class="data-col sorting_disabled" rowspan="1" colspan="1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- .data-item -->
                        <!-- .data-item -->
                        <!-- .data-item -->
                        <!-- .data-item -->
                        <!-- .data-item -->
                        <!-- .data-item -->
                        <!-- .data-item -->
                        <!-- .data-item -->
                        <tr class="data-item odd" role="row">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div class="data-state data-state-pending"><span class="d-none">Pending</span></div>
                                    <div class="fake-class"><span class="lead tnx-id">TNX1002</span><span
                                            class="sub sub-date">2018-08-24 10:45PM</span></div>
                                </div>
                            </td>
                            <td class="data-col dt-token"><span class="lead token-amount">18,750</span><span
                                    class="sub sub-symbol">TWZ</span></td>
                            <td class="data-col dt-amount"><span class="lead amount-pay">50.00</span><span
                                    class="sub sub-symbol">ETH <em class="fas fa-info-circle" data-toggle="tooltip"
                                        data-placement="bottom" title=""
                                        data-original-title="1 ETH = 1250 TWZ"></em></span></td>
                            <td class="data-col dt-usd-amount"><span class="lead amount-pay">245.52</span><span
                                    class="sub sub-symbol">USD <em class="fas fa-info-circle" data-toggle="tooltip"
                                        data-placement="bottom" title=""
                                        data-original-title="1 ETH = 350.54 USD"></em></span></td>
                            <td class="data-col dt-account"><span class="lead user-info">1F1T....4XQX</span><span
                                    class="sub sub-date">08 Jul, 18 10:20PM</span></td>
                            <td class="data-col dt-type"><span
                                    class="dt-type-md badge badge-outline badge-success badge-md">Purchase</span><span
                                    class="dt-type-sm badge badge-sq badge-outline badge-success badge-md">P</span></td>
                            <td class="data-col text-right">
                                <div class="relative d-inline-block d-md-none"><a href="#"
                                        class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em
                                            class="ti ti-more-alt"></em></a>
                                    <div class="toggle-class dropdown-content dropdown-content-center-left pd-2x">
                                        <ul class="data-action-list">
                                            <li><a href="#" class="btn btn-auto btn-primary btn-xs"><span>Pay
                                                        <span class="d-none d-xl-inline-block">Now</span></span><em
                                                        class="ti ti-wallet"></em></a></li>
                                            <li><a href="#" class="btn btn-danger-alt btn-xs btn-icon"><em
                                                        class="ti ti-trash"></em></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="data-action-list d-none d-md-inline-flex">
                                    <li><a href="#" class="btn btn-auto btn-primary btn-xs"><span>Pay <span
                                                    class="d-none d-xl-inline-block">Now</span></span><em
                                                class="ti ti-wallet"></em></a></li>
                                    <li><a href="#" class="btn btn-danger-alt btn-xs btn-icon"><em
                                                class="ti ti-trash"></em></a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="data-item even" role="row">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div class="data-state data-state-approved"><span class="d-none">Approved</span>
                                    </div>
                                    <div class="fake-class"><span class="lead tnx-id">TNX1002</span><span
                                            class="sub sub-date">2018-08-24 10:45PM</span></div>
                                </div>
                            </td>
                            <td class="data-col dt-token"><span class="lead token-amount">18,750</span><span
                                    class="sub sub-symbol">TWZ</span></td>
                            <td class="data-col dt-amount"><span class="lead amount-pay">50.00</span><span
                                    class="sub sub-symbol">ETH <em class="fas fa-info-circle" data-toggle="tooltip"
                                        data-placement="bottom" title=""
                                        data-original-title="1 ETH = 1250 TWZ"></em></span></td>
                            <td class="data-col dt-usd-amount"><span class="lead amount-pay">245.52</span><span
                                    class="sub sub-symbol">USD <em class="fas fa-info-circle" data-toggle="tooltip"
                                        data-placement="bottom" title=""
                                        data-original-title="1 ETH = 350.54 USD"></em></span></td>
                            <td class="data-col dt-account"><span class="lead user-info">1F1T....4XQX</span><span
                                    class="sub sub-date">08 Jul, 18 10:20PM</span></td>
                            <td class="data-col dt-type"><span
                                    class="dt-type-md badge badge-outline badge-success badge-md">Purchase</span><span
                                    class="dt-type-sm badge badge-sq badge-outline badge-success badge-md">P</span>
                            </td>
                            <td class="data-col text-right"><a href="#" data-toggle="modal"
                                    data-target="#transaction-details" class="btn btn-light-alt btn-xs btn-icon"><em
                                        class="ti ti-eye"></em></a></td>
                        </tr>
                        <tr class="data-item odd" role="row">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div class="data-state data-state-canceled"><span class="d-none">Canceled</span>
                                    </div>
                                    <div class="fake-class"><span class="lead tnx-id">TNX1002</span><span
                                            class="sub sub-date">2018-08-24 10:45PM</span></div>
                                </div>
                            </td>
                            <td class="data-col dt-token"><span class="lead token-amount">18,750</span><span
                                    class="sub sub-symbol">TWZ</span></td>
                            <td class="data-col dt-amount"><span class="lead amount-pay">50.00</span><span
                                    class="sub sub-symbol">ETH <em class="fas fa-info-circle" data-toggle="tooltip"
                                        data-placement="bottom" title=""
                                        data-original-title="1 ETH = 1250 TWZ"></em></span></td>
                            <td class="data-col dt-usd-amount"><span class="lead amount-pay">245.52</span><span
                                    class="sub sub-symbol">USD <em class="fas fa-info-circle" data-toggle="tooltip"
                                        data-placement="bottom" title=""
                                        data-original-title="1 ETH = 350.54 USD"></em></span></td>
                            <td class="data-col dt-account"><span class="lead user-info">1F1T....4XQX</span><span
                                    class="sub sub-date">08 Jul, 18 10:20PM</span></td>
                            <td class="data-col dt-type"><span
                                    class="dt-type-md badge badge-outline badge-success badge-md">Purchase</span><span
                                    class="dt-type-sm badge badge-sq badge-outline badge-success badge-md">P</span>
                            </td>
                            <td class="data-col text-right"><a href="transaction-details.html"
                                    class="btn btn-light-alt btn-xs btn-icon"><em class="ti ti-eye"></em></a></td>
                        </tr>
                        <tr class="data-item even" role="row">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div class="data-state data-state-progress"><span class="d-none">Progress</span>
                                    </div>
                                    <div class="fake-class"><span class="lead tnx-id">TNX1002</span><span
                                            class="sub sub-date">2018-08-24 10:45PM</span></div>
                                </div>
                            </td>
                            <td class="data-col dt-token"><span class="lead token-amount">18,750</span><span
                                    class="sub sub-symbol">TWZ</span></td>
                            <td class="data-col dt-amount"><span class="lead amount-pay">50.00</span><span
                                    class="sub sub-symbol">ETH <em class="fas fa-info-circle" data-toggle="tooltip"
                                        data-placement="bottom" title=""
                                        data-original-title="1 ETH = 1250 TWZ"></em></span></td>
                            <td class="data-col dt-usd-amount"><span class="lead amount-pay">245.52</span><span
                                    class="sub sub-symbol">USD <em class="fas fa-info-circle" data-toggle="tooltip"
                                        data-placement="bottom" title=""
                                        data-original-title="1 ETH = 350.54 USD"></em></span></td>
                            <td class="data-col dt-account"><span class="lead user-info">1F1T....4XQX</span><span
                                    class="sub sub-date">08 Jul, 18 10:20PM</span></td>
                            <td class="data-col dt-type"><span
                                    class="dt-type-md badge badge-outline badge-success badge-md">Purchase</span><span
                                    class="dt-type-sm badge badge-sq badge-outline badge-success badge-md">P</span>
                            </td>
                            <td class="data-col text-right"><a href="transaction-details.html"
                                    class="btn btn-light-alt btn-xs btn-icon"><em class="ti ti-eye"></em></a></td>
                        </tr>
                        <tr class="data-item odd" role="row">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div class="data-state data-state-approved"><span class="d-none">Approved</span>
                                    </div>
                                    <div class="fake-class"><span class="lead tnx-id">TNX1002</span><span
                                            class="sub sub-date">2018-08-24 10:45PM</span></div>
                                </div>
                            </td>
                            <td class="data-col dt-token"><span class="lead token-amount">1,050</span><span
                                    class="sub sub-symbol">TWZ</span></td>
                            <td class="data-col dt-amount"><span class="lead amount-pay">0.85</span><span
                                    class="sub sub-symbol">ETH <em class="fas fa-info-circle" data-toggle="tooltip"
                                        data-placement="bottom" title=""
                                        data-original-title="1 ETH = 1250 TWZ"></em></span></td>
                            <td class="data-col dt-usd-amount"><span class="lead amount-pay">2.54</span><span
                                    class="sub sub-symbol">USD <em class="fas fa-info-circle" data-toggle="tooltip"
                                        data-placement="bottom" title=""
                                        data-original-title="1 ETH = 350.54 USD"></em></span></td>
                            <td class="data-col dt-account"><span class="lead user-info">Bounty Bonus</span><span
                                    class="sub sub-date">Campaign Name</span></td>
                            <td class="data-col dt-type"><span
                                    class="dt-type-md badge badge-outline badge-info badge-md">Bonus</span><span
                                    class="dt-type-sm badge badge-sq badge-outline badge-info badge-md">B</span></td>
                            <td class="data-col text-right"><a href="transaction-details.html"
                                    class="btn btn-light-alt btn-xs btn-icon"><em class="ti ti-eye"></em></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"
                                    class="page-link">Prev</a></li>
                            <li class="paginate_button page-item active"><a href="#"
                                    aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                    class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#"
                                    aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0"
                                    class="page-link">2</a></li>
                            <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#"
                                    aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0"
                                    class="page-link">Next</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 text-left text-md-right">
                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">1 -5
                        of 8</div>
                </div>
            </div>
        </div>
    </div><!-- .card-innr -->
</div>

@endsection
