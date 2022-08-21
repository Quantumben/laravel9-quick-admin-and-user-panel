@extends('layouts.dashboard')
@section('user')
{{-- @foreach ($shows as $show) --}}

    <div class="card content-area">
        <div class="card-innr">
            <div class="card-head">
                <h4 class="card-title">User Transactions</h4>
                @include('toastr');
            </div>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">


                {{-- <p>This is user {{ $user->id }}</p> --}}

                <div class="table-wrap">
                    <table class="data-table dt-init user-tnx dataTable no-footer" id="DataTables_Table_0" role="grid"
                        aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr class="data-item data-head" role="row">
                                <th class="data-col dt-tnxno sorting_disabled" rowspan="1" colspan="1">Tranx NO</th>
                                <th class="data-col dt-token sorting_disabled" rowspan="1" colspan="1">Amount</th>
                                <th class="data-col dt-amount sorting_disabled" rowspan="1" colspan="1">Status</th>
                                <th class="data-col dt-usd-amount sorting_disabled" rowspan="1" colspan="1">Channel
                                </th>
                                <th class="data-col dt-account sorting_disabled" rowspan="1" colspan="1">IP Address
                                </th>
                                <th class="data-col sorting_disabled" rowspan="1" colspan="1"></th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr class="data-item odd" role="row">

                                {{-- @if (is_array($pay[0]) || is_object($pay[0])) --}}

                            {{-- @foreach ($pay[0] as $pays) --}}
                                <td class="data-col dt-tnxno">
                                    <div class="d-flex align-items-center">
                                        <div class="data-state data-state-pending"><span class="d-none">Pending</span></div>
                                        <div class="fake-class"><span class="lead tnx-id">TNX Ref No</span><span
                                                class="sub sub-date"> {{$ref}}</span></div>
                                    </div>
                                </td>
                                <td class="data-col dt-token"><span class="lead token-amount">{{$amount}}</span><span
                                        class="sub sub-symbol">Naira</span></td>
                                <td class="data-col dt-amount"><span class="lead amount-pay">{{$status}}</span>
                                    </td>
                                <td class="data-col dt-usd-amount"><span class="lead amount-pay">{{$channel}}</span>
                                  </td>
                                <td class="data-col dt-account"><span class="lead user-info">{{$ip}}</span><span
                                        class="sub sub-date">{{$date}}</span></td>
                            {{-- @endforeach --}}
                            {{-- @endif --}}
                            </tr>

                        </tbody>

                    </table>
                </div>

                {{-- <div class="row align-items-center">
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
            </div> --}}
            </div>
        </div><!-- .card-innr -->
    </div>
{{-- @endforeach --}}
@endsection
