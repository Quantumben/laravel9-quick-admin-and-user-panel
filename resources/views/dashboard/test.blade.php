
{{-- @extends('layouts.dashboard')
@section('user')
    <div class="page-content">
        <div class="container">
            <div class="row"> --}}

<form action="{{route('pay')}}" method="POST">
    @csrf

    <input type="text" name="amount" class="form-control"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" />
    <input type="submit" value="submit">
</form>
        {{-- </div>
    </div>
 </div>
@endsection --}}
