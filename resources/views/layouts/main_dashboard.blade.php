@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/cstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
@endsection
@section('body')
    @php 
        $user = session('user');
    @endphp
    <div class="container">
        <div class="header row mt-3">
            <div class="col-md-3 col-sm-12">
                <div class="text-center">
                    <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/images/logo/blogo.png') }}" width="170"></a>
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
                                            <a href="{{ asset('dividend') }}" class="dropdown-item">Dividend Bonus</a>
                                            <a href="{{ asset('reftop') }}" class="dropdown-item">Top 10 Referral List</a>
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
                        <h3 class="text-warning my-0">{{ App\Models\User::get()->count() }}</h3>
                        <p class="my-0 text-white">All</p>
                        <p class="my-0 text-white">PARTICIPANTS</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 text-center">
                        <h3 class="text-warning my-0">{{ App\Models\User::where('created_at', '>=', date("Y-m-d H:i:s", strtotime('now') - 7200))->get()->count() }}</h3>
                        <p class="my-0 text-white">JOINED</p>
                        <p class="my-0 text-white">IN 2 HOURS</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 text-center">
                        <h3 class="text-warning my-0">{{ number_format((App\Models\User::sum('gain_amount_one') + App\Models\User::sum('gain_amount_ten')) / 1000000) }}</h3>
                        <p class="my-0 text-white">PARTICIPANTS</p>
                        <p class="my-0 text-white">HAVE EARNED TRX</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 text-center">
                        <h3 class="text-warning my-0">${{ number_format((App\Models\User::sum('gain_amount_one') + App\Models\User::sum('gain_amount_ten')) / 1000000 * $tron_price, 2) }}</h3>
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
                        <h2 class="text-right text-white">ID : {{ $user->id }}</h2>
                        <h4 class="text-right text-white my-2">{{ App\Models\User::where('org_referral_id', '=', $user->id)->count() }} <img src="{{ asset('assets/images/icons/partners_light.svg') }}" width="20"></h4>
                        <h4 class="text-right text-info my-2">$ {{ number_format(($user->gain_amount_one + $user->gain_amount_ten) / 1000000 * $tron_price, 2) }}</h4>
                        <label class="border border-info rounded rounded-pill w-100 text-center bg-light py-2 my-2">
                            <h6 class="my-0 text-danger">{{ number_format(($user->gain_amount_one + $user->gain_amount_ten) / 1000000, 2) }} TRX</h6>
                        </label>
                    </div>
                    <div class="border border-white rounded rounded-lg p-3 mb-4">
                        <h5 class="text-white">EZY1 <span class="float-right">$ {{ number_format($user->gain_amount_one / 1000000 * $tron_price, 2) }}</span></h5>
                        <button class="btn btn-warning btn-sm text-white float-right">{{ number_format($user->gain_amount_one / 1000000, 2) }} TRX</button>
                    </div>
                    <div class="border border-white rounded rounded-lg p-3 mb-4">
                        <h5 class="text-white">EZY10 <span class="float-right">$ {{ number_format($user->gain_amount_ten / 1000000 * $tron_price, 2) }}</span></h5>
                        <button class="btn btn-warning btn-sm text-white float-right">{{ number_format($user->gain_amount_ten / 1000000, 2) }} TRX</button>
                    </div>
                    <div class="border border-white rounded rounded-lg p-3 mb-4">
                        <h5 class="text-white">BONUS <span class="float-right">$ {{ number_format($user->gain_amount_bonus / 1000000 * $tron_price, 2) }}</span></h5>
                        <button class="btn btn-warning btn-sm text-white float-right">{{ number_format($user->gain_amount_bonus / 1000000, 2) }} TRX</button>
                    </div>
                    <div class="border border-white rounded rounded-lg p-3 mb-4">
                        <h5 class="text-white">LOST</h5>
                        <h5 class="text-white">EARNINGS <span class="float-right">$ 0.00</span></h5>
                        <button class="btn btn-warning btn-sm text-white float-right">0.00 TRX</button>
                    </div>
                    <div class="border border-white rounded rounded-lg p-3 mb-4">
                        <h5 class="text-white mb-3">10X </h5>
                        <div class="progress">
                            @if($user->user_level != 12)
                            @php
                                $perent = ($user->gain_amount_one + $user->gain_amount_ten) / $user->invest_amount * 10
                            @endphp
                            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                          aria-valuenow="{{$perent}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$perent}}%">
                                {{$perent}}%
                            </div>
                            @else
                            unlimited
                            @endif
                        </div>
                    </div>
                    <div>
                        <p class="text-white"><img src="{{ asset('assets/images/icons/bot_notif.png') }}" width="25">&nbsp;&nbsp;Enable notifications</p>
                        <h6 class="text-white"><i class="fa fa-globe icon" aria-hidden="true" style="font-size: 25px;"></i>&nbsp;&nbsp;USD GBP SGD</h6>
                    </div>
                </div>
                <div class="border border-white rounded rounded-lg pt-1 pb-5 px-2 mb-4">
                    <h5 class="text-white my-3">
                        Affiliate link
                        <span class="float-right">
                            {{ App\Models\User::where('referral_id', '=', $user->id)->count() }}
                            <img src="{{ asset('assets/images/icons/partners_light.svg') }}" width="20"></span>
                    </h5>
                    <input type="text" class="form-control" readonly value="{{ route('register', array('sid'=> $user->id)) }}">
                    <button class="btn btn-warning btn-sm text-white float-right btn-copy">copy</button>
                </div>
                <div class="border border-white rounded rounded-lg pt-1 pb-3 px-2 mb-4 text-center">
                    <h5 class="my-3 text-white">Your Tron Wallet</h5>
                    <h5 class="text-warning">{{ substr($user->address, 0, 3) . "..." . substr($user->address, -3) }}</h5>
                    <input type="hidden" value="{{ $user->address }}">
                    <a class="btn btn-warning btn-sm text-white float-left" href="https://tronscan.org/#/address/{{$user->address}}" target="_blank">Tron Scan</a>
                    <button class="btn btn-warning btn-sm text-white float-right btn-copy">Copy</button>
                </div>
                <div class="border border-white rounded rounded-lg pt-1 pb-3 px-2 mb-4 text-center">
                    <h5 class="my-3 text-white">Smart Contract address</h5>
                    <h5 class="text-warning">{{ substr(env('CONTRACT_ADDRESS'), 0, 3) . "..." . substr(env('CONTRACT_ADDRESS'), -3) }}</h5>
                    <a class="btn btn-warning btn-sm text-white float-left" href="https://tronscan.org/#/address/{{env('CONTRACT_ADDRESS')}}" target="_blank">Tron Scan</a>
                    <input type="hidden" value="{{ env('CONTRACT_ADDRESS') }}">
                    <button class="btn btn-warning btn-sm text-white float-right btn-copy">Copy</button>
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
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
        
        $(".btn-copy").on('click', function() {
            var temp = $("<input>");
            $("body").append(temp);
            temp.val($(this).parent().find('input').val()).select();
            document.execCommand("copy");
            temp.remove();
            toastr["success"]("Copied!")
        });
    } );
    </script>
    @yield('scripts')
@endsection