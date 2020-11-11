@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/cstyle.css') }}">
@endsection
@section('body')
    <div class="container">
        <div class="header row mt-3">
            <div class="col-md-3 col-sm-12">
                <div class="text-center">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/blogo.png') }}" width="170"></a>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="row mt-1">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="navbarCollapse" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav ml-auto">
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Main</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{ asset('dashboard') }}" class="dropdown-item">Dashboard</a>
                                            <a href="{{ asset('team') }}" class="dropdown-item">Team Stats</a>
                                            <a href="{{ asset('personal') }}" class="dropdown-item">Personal Stats</a>
                                            <a href="{{ asset('leaderboard') }}" class="dropdown-item">Leaderboard</a>
                                            <a href="{{ asset('matrix') }}" class="dropdown-item">Matrix</a>
                                            <a href="{{ asset('lost') }}" class="dropdown-item">Lost Earning</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Information</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{ asset('instruction') }}" class="dropdown-item">Instructions</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('home') }}" class="nav-link">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-6 text-center">
                        <h3 class="text-warning my-0">17567</h3>
                        <p class="my-0 text-white">All</p>
                        <p class="my-0 text-white">PARTICIPANTS</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 text-center">
                        <h3 class="text-warning my-0">249</h3>
                        <p class="my-0 text-white">JOINED</p>
                        <p class="my-0 text-white">IN 2 HOURS</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 text-center">
                        <h3 class="text-warning my-0">977777778234</h3>
                        <p class="my-0 text-white">PARTICIPANTS</p>
                        <p class="my-0 text-white">HAVE EARNED TRX</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 text-center">
                        <h3 class="text-warning my-0">$2364396.57</h3>
                        <p class="my-0 text-white">PARTICIPANTS</p>
                        <p class="my-0 text-white">HAVE EARNED USD</p>
                    </div>
                </div>
            </div>            
        </div>
        <div class="content row">
            <div class="col-md-3 col-sm-12">
                <div class="side-top border border-white rounded rounded-lg p-2 mb-4">
                    <div class="mb-3">
                        <h2 class="text-right text-white">ID : 16960</h2>
                        <h4 class="text-right text-white my-2">60 <img src="{{ asset('assets/images/icons/partners_light.svg') }}" width="20"></h4>
                        <h4 class="text-right text-info my-2">$ 0.00</h4>
                        <label class="border border-info rounded rounded-pill w-100 text-center bg-light py-2 my-2">
                            <h4 class="my-0 text-danger">1555500.00 TRX</h4>
                        </label>
                    </div>
                    <div class="border border-white rounded rounded-lg p-3 mb-4">
                        <h5 class="text-white">EZY1 <span class="float-right">$ 5678.34</span></h5>
                        <button class="btn btn-warning btn-sm text-white float-right">956000.00 TRX</button>
                    </div>
                    <div class="border border-white rounded rounded-lg p-3 mb-4">
                        <h5 class="text-white">EZY10 <span class="float-right">$ 5678.34</span></h5>
                        <button class="btn btn-warning btn-sm text-white float-right">599500.00 TRX</button>
                    </div>
                    <div class="border border-white rounded rounded-lg p-3 mb-4">
                        <h5 class="text-white">LOST</h5>
                        <h5 class="text-white">EARNINGS <span class="float-right">$ 14.34</span></h5>
                        <button class="btn btn-warning btn-sm text-white float-right">5500.00 TRX</button>
                    </div>
                    <div class="border border-white rounded rounded-lg p-3 mb-4">
                        <h5 class="text-white mb-3">10X </h5>
                        <h6 class="text-white">Unlimited</h6>
                        <h6 class="text-white">Earning</h6>
                    </div>
                    <div>
                        <p class="text-white"><img src="{{ asset('assets/images/icons/bot_notif.png') }}" width="25">&nbsp;&nbsp;Enable notifications</p>
                        <h6 class="text-white"><i class="fa fa-globe icon" aria-hidden="true" style="font-size: 25px;"></i>&nbsp;&nbsp;USD GBP SGD</h6>
                    </div>
                </div>
                <div class="border border-white rounded rounded-lg pt-1 pb-5 px-2 mb-4">
                    <h5 class="text-white my-3">
                        Affiliate link
                        <span class="float-right">60 <img src="{{ asset('assets/images/icons/partners_light.svg') }}" width="20"></span>
                    </h5>
                    <input type="text" class="form-control" readonly value="https://ezytrx.io/Home/SignUp?sponsormember=12">
                    <button class="btn btn-warning btn-sm text-white float-right">copy</button>
                </div>
                <div class="border border-white rounded rounded-lg pt-1 pb-3 px-2 mb-4 text-center">
                    <h5 class="my-3 text-white">Your Tron Wallet</h5>
                    <h5 class="text-warning">TDz...8Zk</h5>
                    <button class="btn btn-warning btn-sm text-white float-left">Tron Scan</button>
                    <button class="btn btn-warning btn-sm text-white float-right">Copy</button>
                </div>
                <div class="border border-white rounded rounded-lg pt-1 pb-3 px-2 mb-4 text-center">
                    <h5 class="my-3 text-white">Your Tron Wallet</h5>
                    <h5 class="text-warning">TDz...8Zk</h5>
                    <button class="btn btn-warning btn-sm text-white float-left">Tron Scan</button>
                    <button class="btn btn-warning btn-sm text-white float-right">Copy</button>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                @yield('content')
            </div>
        </div>
        <div class="footer">
            <h6 class="text-white text-center mt-3">© 2020 EZYTRX. All rights reserved</h6>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
@endsection