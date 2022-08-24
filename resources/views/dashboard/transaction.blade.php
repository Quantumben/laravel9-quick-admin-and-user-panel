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
                                <th class="data-col sorting_disabled" rowspan="1" colspan="1">Time of Deposit</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr class="data-item odd" role="row">

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
                                <td class="data-col dt-account"><span class="lead user-info">{{$ip}}</span>
                                </td>
                                <td class="data-col dt-usd-amount"><span class="lead amount-pay">{{$date}}</span>
                                        </td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div><!-- .card-innr -->
    </div>
{{-- @endforeach --}}
@endsection
