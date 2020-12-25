@extends('layouts.main_home')
@section('content')
<div class="row">
    <div class="col-12 text-center">
        <h3 class="text-white mb-4">THE ENTRANCE TO THE OFFICE</h3>
        <h6 class="text-warning mb-4">FOR ACCESS TO ALL THE FUNCTIONS OF YOUR PERSONAL ACCOUNT, USE LOGIN:</h6>
        <input id="btn_login" class="btn btn-primary w-50 py-2" type="button" value="AUTHORIZATION">
        <P class="text-white">To view the enter account ID or TRX Wallet Address</P>
    </div>
</div>
<div class="row">
    <div class="col-md-2 col-sm-12"></div>
    <div class="col-md-8 col-sm-12">
        <input id="inp_view_id" class="form-control mb-3 text-center py-2" type="text" placeholder="Enter TRX Address or ID">
        <input id="btn_view" class="btn btn-primary mb-2 w-100 py-2" type="button" value="VIEWING">
    </div>
</div>
<hr class="border-white">
<div class="row">
    <div class="col-12 text-center">
        <p class="text-white">Join if You are not yet with us:</p>
        <a class="text-warning" href="{{ route('register') }}"><i class="fa fa-user-plus"></i>Check in EZY TRX</a>
    </div>
</div>
@endsection
@section('script')
    <script src="{{ asset('assets/js/pages/login.js') }}"></script>
@endsection