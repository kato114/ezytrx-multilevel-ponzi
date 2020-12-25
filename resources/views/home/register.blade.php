@extends('layouts.main_home')
@section('content')
<div class="row">
    <div class="col-12 text-center">
        <h3 class="text-white mb-4">UPLINE:</h3>
        <h6 class="text-warning">TO CHANGE</h6>
    </div>
</div>
<hr class="border-white">
<div class="row">
    <div class="col-md-2 col-sm-12"></div>
    <div class="col-md-8 col-sm-12">
        <P class="text-white text-center">To join enter Refferal ID</P>
        <input id="inp_referral" class="form-control mb-3 text-center py-2" type="text" placeholder="Enter Referral ID" value="{{ $sid }}">
        <input id="btn_register" class="btn btn-primary mb-2 w-100 py-2" type="button" value="REGISTER NOW">
    </div>
</div>
<hr class="border-white">
<div class="row">
    <div class="col-12 text-center">
        <p class="text-white">Join if You are not yet with us:</p>
        <a class="text-warning" href="{{ route('login') }}"><i class="fa fa-user-plus"></i>Check in EZY TRX</a>
    </div>
</div>
@endsection
@section('script')
    <script src="{{ asset('assets/js/pages/register.js') }}"></script>
@endsection