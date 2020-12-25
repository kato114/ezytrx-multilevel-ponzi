@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/video-js.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
@endsection
@section('body')
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- preloader Start -->
    <!--<div id="preloader">-->
    <!--    <div id="status"><img src="{{ asset('assets/images/banner/loader.gif') }}" id="preloader_image" alt="loader">-->
    <!--    </div>-->
    <!--</div>-->
    <!--Header area start here-->
    <div section-scroll='0' class="wd_scroll_wrap">
        <header class="gc_main_menu_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-6">
                        <div class="logo-area">
                            <a href="#"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo" /></a>
                        </div>
                    </div>
                    <!-- Mobile Menu  Start -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-6">
                        <div class="menu-area  hidden-xs">
                            <nav class="wd_single_index_menu btc_main_menu">
                                <ul>
                                    <li><a href="0">Home</a></li>
                                    <li><a href="1">About</a></li>
                                    <li><a href="2">Features</a></li>
                                    <li><a href="3">Platform</a></li>
                                    <li><a href="5">Road Map</a></li>
                                    <li><a href="6">Our Steps</a></li>
                                    <li><a href="7">FAQs</a></li>
                                </ul>
                            </nav>
                            <div class="login-btn">
                                <a href="{{ route('login') }}" class="btn1"><i class="fa fa-user"></i><span>Login</span></a>
                                <a href="{{ route('register') }}" class="btn1"><i class="fa fa-user"></i><span>Sign up</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header area end here-->
        <!--Slider area start here-->
        <section class="slider-area">
            <canvas>
                <script src="{{ asset('assets/js/three.js') }}"></script>
                <script src="{{ asset('assets/js/stats.min.js') }}"></script>
                <script src="{{ asset('assets/js/Projector.js') }}"></script>
                <script src="{{ asset('assets/js/CanvasRenderer.js') }}"></script>
            </canvas>
            <div id="particles-js">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="carousel-captions caption-1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="slider-content">
                                                <h2 data-animation="animated bounceInLeft">100% Decentralized <br>TRX Smart Contract</h2>
                                                <div class="buttons">
                                                    <a href="#" class="btn1" data-animation="animated bounceInUp">Download PDF</a>
                                                    <a href="#" class="btn2" data-animation="animated bounceInUp">Join Telegram!</a>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs hidden-sm">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Q-J6aRkB-6I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="slider-content">
                                            <h2 data-animation="animated bounceInLeft">100% Decentralized <br>TRX Smart Contract</h2>
                                            <div class="buttons">
                                                <a href="#" class="btn1" data-animation="animated bounceInUp">Download PDF</a>
                                                <a href="#" class="btn2" data-animation="animated bounceInUp">Join Telegram!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  hidden-xs hidden-sm">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Q-J6aRkB-6I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-nevigation">
                            <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="next" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Slider area end here-->
        <section class="currency-area">
            <div class="container-fliud">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="rete-list bt_title wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">
                            <div class="content">
                                <div class="con text-center w-100">
                                    <h2><img src="{{ asset('assets/images/icons/1.png') }}" alt=""><span>All Participants</span></h2>
                                    <h1 class="text-center mr-b0 mr-t0">{{ number_format($all_participant_count) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="rete-list bt_title wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                            <div class="content">
                                <div class="con text-center w-100">
                                    <h2><img src="{{ asset('assets/images/icons/2.png') }}" alt=""><span>Join In 24 Hours</span></h2>
                                    <h1 class="text-center mr-b0 mr-t0">{{ number_format($recent_participant_count) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="rete-list bt_title wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                            <div class="content">
                                <div class="con text-center w-100">
                                    <h2><img src="{{ asset('assets/images/icons/3.png') }}" alt=""><span>Total Earned TRX</span></h2>
                                    <h1 class="text-center mr-b0 mr-t0">{{ number_format($total_earned_trx) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="rete-list hidden-md   wow  fadeInUp animated" data-wow-duration="2.1s" style="visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                            <div class="content">
                                <div class="con text-center w-100">
                                    <h2><img src="{{ asset('assets/images/icons/5.png') }}" alt=""><span>Total Earned USD</span></h2>
                                    <h1 class="text-center mr-b0 mr-t0">{{ number_format($total_earned_trx * $tron_price, 2) }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--About area start here-->
    <div section-scroll='1' class="wd_scroll_wrap">
        <section class="about-area pd-t70 pd-b100 jarallax bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="about-content">
                            <h2 class="f-40 fw-400 wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">What Is Smart Contract</h2>
                            <p class="wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">EZYTRX is a brand-new smart contract based global Crowd Sourcing platform programmed on the Tron blockchain with 100% decentralized revolutionary technology.</p>
                            <p class="wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">It is the first ever artificial intelligence platform of its kind combining traditional matrix and smart contract.</p>
                            <p class="wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">The system consists of pre-determined conditions to settle and execute all transactions automatically and instantly via the peer to peer system of payments in TRX only.</p>
                            <div class="buttons">
                                <a href="#" class="btn1">Download PDF</a>
                                <a href="{{ route('register') }}" class="btn3">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="about-img wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">
                            <img src="{{ asset('assets/images/about/1.jpg') }}" alt="" style="max-height: 100%;" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About area end here-->
        <div class="sud">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 181.1" style="enable-background:new 0 0 1920 181.1;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                        fill: #10122d;
                    }
                </style>
                <g>
                    <path class="st0" d="M0,80c0,0,28.9-4.2,43-13c14.3-9,71-35.7,137,5c17.3,7.7,33.3,13,48,11c17.3,0.3,50.3,4.7,66,23
                     c20.3,9.7,68,40.3,134-12c24-11,59-16.3,104,2c21,7.3,85,27.7,117-14c24-30.7,62.7-55,141-12c26,10.3,72,14.7,110-14
                     c37.7-19,89.7-29,122,53c23,32.7,47.7,66.3,97,26c24-22.7,51-78.3,137-38c0,0,28.3,15.7,52,15c23.7-0.7,50.7,4.3,76,41
                     c19.7,19.7,71,36.7,121-2c0,0,22.3-16,55-12c0,0,32.7,6.7,56-71c23.3-76,79-92,122-29c9.3,13.7,25,42,62,43c37,1,51.7,25.3,67,48
                     c15.3,22.7,51,22.7,53,23v28.1H0V80z" />
                </g>
            </svg>
        </div>
    </div>
    <div section-scroll='2' class="wd_scroll_wrap">
        <section class="features-area section">
            <div id="features-js">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-heading2 wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">
                                <h2>Our Features</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="featured-lists">
                                <ul>
                                    <li>
                                        <div class="col-sm-6 pd-0 hidden-xs wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                            <div class="contents-l mr-b30 mr-r90">
                                                <h2 class="text-right">1. Blockchain Technology</h2>
                                                <p class="text-right">Disruptive Smart Contract technology provides decentralized <br> market users with the ability to directly engage in personal and <br> business transactions.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 wow  fadeInUp animated" data-wow-duration="1.3s" style="margin-top: -35px; visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                            <div class="imgs-l">
                                                <figure><img src="{{ asset('assets/images/features/1.png') }}" alt="" /></figure>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 visible-xs  wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                            <div class="contents-l mr-b30 mr-r90">
                                                <h2 class="text-right">1. Blockchain Technology</h2>
                                                <p class="text-right">Disruptive Smart Contract technology provides decentralized <br> market users with the ability to directly engage in personal and <br> business transactions.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="rl">
                                        <div class="col-sm-6 pd-0 floatright hidden-xs wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                                            <div class="contents-r mr-b30">
                                                <h2>2. Global Crowd Sourcing Platform</h2>
                                                <p>This is one of the most disruptive business models of all time and<br> grows very rapidly worldwide.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 wow  fadeInUp animated" data-wow-duration="1.6s" style="margin-top: -35px; visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                                            <div class="imgs-r">
                                                <figure><img src="{{ asset('assets/images/features/2.png') }}" alt="" /></figure>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 floatright visible-xs wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                                            <div class="contents-r mr-b30">
                                                <h2>2. Global Crowd Sourcing Platform</h2>
                                                <p>This is one of the most disruptive business models of all time and<br> grows very rapidly worldwide.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col-sm-6 pd-0 hidden-xs wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                            <div class="contents-l mr-b30 mr-r90">
                                                <h2 class="text-right">3. Advanced Security System</h2>
                                                <p class="text-right">EZYTRX is 100% safe and have three levels of information security
                                                    <br>standard ISO 27001:2013</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 wow  fadeInUp animated" data-wow-duration="1.3s" style="margin-top: -35px; visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                            <div class="imgs-l">
                                                <figure><img src="{{ asset('assets/images/features/3.png') }}" alt="" /></figure>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 visible-xs  wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                            <div class="contents-l mr-b30 mr-r90">
                                                <h2 class="text-right">3. Advanced Security System</h2>
                                                <p class="text-right">EZYTRX is 100% safe and have three levels of information security
                                                    <br>standard ISO 27001:2013</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="rl">
                                        <div class="col-sm-6 pd-0 floatright hidden-xs wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                                            <div class="contents-r mr-b30">
                                                <h2>4.Instant Payments</h2>
                                                <p>All transactions are peer to peer and paid instantly to participants in
                                                    <br>their own Tron wallets which they hold the private keys</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 wow  fadeInUp animated" data-wow-duration="1.6s" style="margin-top: -35px; visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                                            <div class="imgs-r">
                                                <figure><img src="{{ asset('assets/images/features/4.png') }}" alt="" /></figure>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 floatright visible-xs wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                                            <div class="contents-r mr-b30">
                                                <h2>4.Instant Payments</h2>
                                                <p>All transactions are peer to peer and paid instantly to participants in
                                                    <br>their own Tron wallets which they hold the private keys</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col-sm-6 pd-0 hidden-xs wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">
                                            <div class="contents-l mr-b30 mr-r90">
                                                <h2 class="text-right">5. Anonymity</h2>
                                                <p class="text-right">The technology supports strong anonymity where you can sign up
                                                    <br>without using any personal data.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 wow  fadeInUp animated" data-wow-duration="1.9s" style="margin-top: -35px; visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">
                                            <div class="imgs-l">
                                                <figure><img src="{{ asset('assets/images/features/5.png') }}" alt="" /></figure>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 visible-xs wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">
                                            <div class="contents-l mr-b30 mr-r90">
                                                <h2 class="text-right">5. Anonymity</h2>
                                                <p class="text-right">The technology supports strong anonymity where you can sign up
                                                    <br>without using any personal data.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="rl">
                                        <div class="col-sm-6 pd-0 floatright hidden-xs wow  fadeInUp animated" data-wow-duration="2.1s" style="visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                                            <div class="contents-r mr-b30">
                                                <h2>6. Compensation plan</h2>
                                                <p>Marketing plan is easy and highly rewarding with no hidden
                                                    <br>conditions. The earning potential in this business is genuinely
                                                    <br>unlimited.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 wow  fadeInUp animated" data-wow-duration="2.1s" style="margin-top: -35px; visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                                            <div class="imgs-r">
                                                <figure><img src="{{ asset('assets/images/features/6.png') }}" alt="" /></figure>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 floatright visible-xs wow  fadeInUp animated" data-wow-duration="2.1s" style="visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                                            <div class="contents-r mr-b30">
                                                <h2>6. Compensation plan</h2>
                                                <p>Marketing plan is easy and highly rewarding with no hidden
                                                    <br>conditions. The earning potential in this business is genuinely
                                                    <br>unlimited.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col-sm-6 pd-0 hidden-xs wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">
                                            <div class="contents-l mr-b30 mr-r90">
                                                <h2 class="text-right">7. Synchronization</h2>
                                                <p class="text-right">Clean and detailed dashboard immediately synchronizes data<br> across all devices.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 wow  fadeInUp animated" data-wow-duration="1.9s" style="margin-top: -35px; visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">
                                            <div class="imgs-l">
                                                <figure><img src="{{ asset('assets/images/features/7.png') }}" alt="" /></figure>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 visible-xs wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">
                                            <div class="contents-l mr-b30 mr-r90">
                                                <h2 class="text-right">7. Synchronization</h2>
                                                <p class="text-right">Clean and detailed dashboard immediately synchronizes data<br> across all devices.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="rl">
                                        <div class="col-sm-6 pd-0 floatright hidden-xs wow  fadeInUp animated" data-wow-duration="2.1s" style="visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                                            <div class="contents-r mr-b30">
                                                <h2>8. Support</h2>
                                                <p>We help all participants to advance their knowledge and careers<br>
                                                 with our training and guidance experts.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 wow  fadeInUp animated" data-wow-duration="2.1s" style="margin-top: -35px; visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                                            <div class="imgs-r">
                                                <figure><img src="{{ asset('assets/images/features/8.png') }}" alt="" /></figure>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pd-0 floatright visible-xs wow  fadeInUp animated" data-wow-duration="2.1s" style="visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                                            <div class="contents-r mr-b30">
                                                <h2>8. Support</h2>
                                                <p>We help all participants to advance their knowledge and careers<br>
                                                 with our training and guidance experts.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div section-scroll='3' class="wd_scroll_wrap">
        <section class="projects bg-img pd-t100 pd-b70 jarallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-heading mr-b30">
                            <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Global Crowdfunding – Next Generation Platform</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <span>Disruptive Smart Contract*technology provides decentralized market users with the ability to directly engage in personal and business <</span>
                        <span>transactions. The EZYTRX decentralized matrix project's Smart Contract is available for public viewing on the Tron Chain</span>
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1 col-12">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <img src="{{ asset('assets/images/features/border-top.png') }}" style="width: 100%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <div class="example">
                                <img src="{{ asset('assets/images/features/ezy.png') }}" style="width: 100%; border: 1px solid #01b1b3; border-radius: 50px; padding: 30px;">
                            </div>
                            <h3 class="text-left mr-t10 mr-b0" style="color: white;">100% commission paid to you</h3>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="example">
                                <img src="{{ asset('assets/images/features/ezy10.png') }}" style="width: 100%; border: 1px solid #01b1b3; border-radius: 50px; padding: 30px;">
                            </div>
                            <h3 class="text-right mr-t10 mr-b0" style="color: white;">10% commission paid to you</h3>
                        </div>
                    </div>
                    <div class="text-center" style="background-image: url({{ asset('assets/images/features/border-bottom.png') }}); background-size: cover;">
                        <div class="pd-t50">
                            <h4 class="text-primary">Simultaneous entry in both platforms happens automatically on registering <br>
                            with only 1000 TRX – JOIN NOW.</h4>
                        </div>
                        <div class="pd-t50">
                            <a href="{{ route('register') }}" class="btn1" style="margin-bottom: -50px;"><i class="fa fa-user"></i><span>ONLY 1000 TRX - JOIN NOW</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tokens-area section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-heading">
                            <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Commission Distribution</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                        <div class="tokens mr-l50">
                            <div class="token-name">EZY 1</div>
                            <div class="token-body text-left">
                                <p>100% commission paid to the sponsor for every member that joins the program.</p>
                                <p>50% commission paid to the sponsor of every member that joins at a higher level than you</p>
                                <p>Your entire network ALWAYS follow you in all steps even if you have not acquired the higher levels in the matrix</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                        <div class="tokens mr-l50">
                            <div class="token-name">EZY 10</div>
                            <div class="token-body text-left">
                                <p>It is a 3 x 10 auto matrix where your referrals, down lines and spillovers are placed automatically following a top to bottom and left to right rule.</p>
                                <p>10% of all sales goes directly to you for every member that gets placed in your matrix, provided you own that step.</p>
                                <p class="mr-b0">Your entire network ALWAYS follow you.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-heading mr-t90">
                            <h3 class="wow fadeInUp animated text-white" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">How EZYTRX will revolutionize the global crowd sourcing industry</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div section-scroll='5' class="wd_scroll_wrap">
        <div class="wd_scroll_wrap">
            <section class="video-des bg-img ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="deslidt">
                                <ul>
                                    <li>
                                        <span class="years"><span class="con">2019</span></span>
                                        <div class="serials">
                                            <span class="cre"></span>
                                            <div class="col-sm-6 col-xs-12 left-con wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">
                                                <div class="box-con">
                                                    <div class="dbox">
                                                        <div class="dleft">
                                                            <div class="imgs"><img src="{{ asset('assets/images/video/2.png') }}" alt="" /></div>
                                                        </div>
                                                        <div class="dright">
                                                            <div class="content">
                                                                <h3>Idea</h3>
                                                                <p>(September - October)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12 right-con  wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                                <div class="box-con">
                                                    <div class="dbox">
                                                        <div class="dleft">
                                                            <div class="content">
                                                                <h3>Market Research</h3>
                                                                <p>(October - December)</p>
                                                            </div>
                                                        </div>
                                                        <div class="dright">
                                                            <div class="imgs"><img src="{{ asset('assets/images/video/3.png') }}" alt="" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="years"><span class="con">2020</span></span>
                                        <div class="serials">
                                            <span class="cre"></span>
                                            <div class="col-sm-6 col-xs-12 left-con wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                                                <div class="box-con">
                                                    <div class="dbox">
                                                        <div class="dleft">
                                                            <div class="imgs"><img src="{{ asset('assets/images/video/3.png') }}" alt="" /></div>
                                                        </div>
                                                        <div class="dright">
                                                            <div class="content">
                                                                <p>(1Q 2020)</p>
                                                                <h3>Formation of foundersteam Business plan</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12 right-con wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">
                                                <div class="box-con">
                                                    <div class="dbox">
                                                        <div class="dleft">
                                                            <div class="content">
                                                                <p>(2Q 2020)</p>
                                                                <h3>Start of Platform<br> Development</h3>
                                                            </div>
                                                        </div>
                                                        <div class="dright">
                                                            <div class="imgs"><img src="{{ asset('assets/images/video/4.png') }}" alt="" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="serials">
                                            <span class="cre"></span>
                                            <div class="col-sm-6 col-xs-12 left-con wow  fadeInUp animated" data-wow-duration="2.1s" style="visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                                                <div class="box-con">
                                                    <div class="dbox">
                                                        <div class="dleft">
                                                            <div class="imgs"><img src="{{ asset('assets/images/video/5.png') }}" alt="" /></div>
                                                        </div>
                                                        <div class="dright">
                                                            <div class="content">
                                                                <p>(3Q 2020)</p>
                                                                <h3>WhitePaper<br> Landing page</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12 right-con wow  fadeInUp animated" data-wow-duration="2.1s" style="visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                                                <div class="box-con">
                                                    <div class="dbox">
                                                        <div class="dleft">
                                                            <div class="content">
                                                                <p>(4Q 2020)</p>
                                                                <h3>Pre-Sale<br>Launch Platform<br>in beta test mode</h3>
                                                            </div>
                                                        </div>
                                                        <div class="dright">
                                                            <div class="imgs"><img src="{{ asset('assets/images/video/6.png') }}" alt="" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="years"><span class="con">2018</span></span>
                                        <div class="serials">
                                            <span class="cre"></span>
                                            <div class="col-sm-6 col-xs-12 left-con  wow  fadeInUp animated" data-wow-duration="2.3s" style="visibility: visible; animation-duration: 2.3s; animation-name: fadeInUp;">
                                                <div class="box-con">
                                                    <div class="dbox">
                                                        <div class="dleft">
                                                            <div class="imgs"><img src="{{ asset('assets/images/video/7.png') }}" alt="" /></div>
                                                        </div>
                                                        <div class="dright">
                                                            <div class="content">
                                                                <p>(1Q 2018)</p>
                                                                <h3>ICO Launch<br>Identification<br>Systemsand work<br>with API Partners</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12 right-con wow  fadeInUp animated" data-wow-duration="2.3s" style="visibility: visible; animation-duration: 2.3s; animation-name: fadeInUp;">
                                                <div class="box-con">
                                                    <div class="dbox">
                                                        <div class="dleft">
                                                            <div class="content">
                                                                <p>(2Q 2018)</p>
                                                                <h3>Launch the<br>Platform in<br>Full mode</h3>
                                                            </div>
                                                        </div>
                                                        <div class="dright">
                                                            <div class="imgs"><img src="{{ asset('assets/images/video/8.png') }}" alt="" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="serials">
                                            <div class="col-sm-12 col-xs-12 center-con wow  fadeInUp animated" data-wow-duration="2.5s" style="visibility: visible; animation-duration: 2.5s; animation-name: fadeInUp;">
                                                <div class="box-con">
                                                    <div class="dbox">
                                                        <div class="dleft">
                                                            <div class="imgs"><img src="{{ asset('assets/images/video/9.png') }}" alt="" /></div>
                                                        </div>
                                                        <div class="dright">
                                                            <div class="content">
                                                                <p>(4Q 2018)</p>
                                                                <h3>Build a Massive<br> Community<br> Worldwide</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                        </ul>
                    </div>
                </div>
        </div>
        </section>
        <div class="sud">
            <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 181.1" style="enable-background:new 0 0 1920 181.1;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                        fill: #10122d;
                    }
                </style>
                <g>
                    <path class="st0" d="M0,80c0,0,28.9-4.2,43-13c14.3-9,71-35.7,137,5c17.3,7.7,33.3,13,48,11c17.3,0.3,50.3,4.7,66,23
                        c20.3,9.7,68,40.3,134-12c24-11,59-16.3,104,2c21,7.3,85,27.7,117-14c24-30.7,62.7-55,141-12c26,10.3,72,14.7,110-14
                        c37.7-19,89.7-29,122,53c23,32.7,47.7,66.3,97,26c24-22.7,51-78.3,137-38c0,0,28.3,15.7,52,15c23.7-0.7,50.7,4.3,76,41
                        c19.7,19.7,71,36.7,121-2c0,0,22.3-16,55-12c0,0,32.7,6.7,56-71c23.3-76,79-92,122-29c9.3,13.7,25,42,62,43c37,1,51.7,25.3,67,48
                        c15.3,22.7,51,22.7,53,23v28.1H0V80z" />
                </g>
            </svg>
        </div>
    </div>
    </div>
    <div section-scroll='6' class="wd_scroll_wrap">
        <section class="tokens-area section">
            <div id="token-js">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-heading2">
                                <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Our Steps</h2>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <img src="{{ asset('assets/images/about/slot.png') }}">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <p class="token-con wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">There are 10 steps in the program, each subsequent level slot is more expensive than the previous one and profits are subsequently as high! You can activate as many levels as you wish at once but must buy all steps in order. You just buy EZY1 slot and EZY10 will be activated automatically.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div section-scroll='7' class="wd_scroll_wrap">
        <section class="blog-area section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-heading2">
                            <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">FAQ's</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1">What is EZYTRX?</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Ezytrx is a global, new generation crowdfunding platform and the first ever smart contract of its kind in the blockchain of Tron cryptocurrency.<br>
                                    It is a software algorithm performing the function of a distribution of affiliate commissions between community members and the observance of certain conditions (based on programs EZY1 and EZY10).
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Who owns EZYTRX?</a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Ezytrx platform is created with the public’s interest in mind and does not have managers or admins. This means that the platform is fully decentralized (i.e. it has no company, no leaders, or admins) and cannot be changed or altered at any time.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">What is a Smart Contract?</a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    A smart contract is nothing but a predetermined algorithm inside the blockchain which automates the execution of transactions.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4">What is Decentralization?</a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    A system in which there are no admins, no servers, and no monitoring needed to manage the project. The creators of the platform are the same project participants like you.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5">How are commissions paid?</a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    All commissions are paid in TRX directly and instantly to the members’ personal TRX wallets. The smart contract never receives payments; therefore, you will never have to wait on a commission payment as it’s paid directly to you.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6">What is the risk of joining EZYTRX?</a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Ezytrx is risk-free! There is no company, no admin, it is a self-operating system located on the blockchain that cannot be changed or destroyed. The code of the smart contract is in the public domain. It is enough to invi te 2 people to immediately recoup the initial cost of participation in the project. All payments go directly into your personal wallet, without any hidden fees and without third-party resources. You can feel safe knowing that Ezytrx will not go away.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7">What personal information is needed to open an account?</a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    No personal information is required to open an account. The only thing required to create your account is a Tron wallet of your choice.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8">How long can EZYTRX last?</a>
                                </h4>
                            </div>
                            <div id="collapse8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Ezytrx is a Smart Cont ract on the Tron blockchain which is fully decentralized and connected to the internet. Ezytrx will be in business for as long as the blockchain and internet exists.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse9">What is the difference between EZY1 and EZY10?</a>
                                </h4>
                            </div>
                            <div id="collapse9" class="panel-collapse collapse">
                                <div class="panel-body">
                                    EZY1 is for your direct referrals. You will earn 100% EZY1 commission from direct referrals where you have taken a position yourself. However, you will earn only 50% EZY1 commission if you refer someone in a higher matrix that you do not hold, with the other 50% going to your sponsor or to anyone above you holding the similar package as your referral.<br>
                                    EZY10 is a team effort. 100% EZY10 commission is distributed across 10 levels irrespective of direct sponsorship, with each level receiving 10% equal distribution.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse10">How many steps are available to upgrade?</a>
                                </h4>
                            </div>
                            <div id="collapse10" class="panel-collapse collapse">
                                <div class="panel-body">
                                    There are a total of 10 steps (TRX): 1000, 2000, 5000, 10K, 20K, 50K, 100K, 200K, 500K, 1M.You can upgrade anytime in a sequential manner, ie. you cannot buy the 3rd step without buying the previous steps.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse11">Can I upgrade my packages at any time?</a>
                                </h4>
                            </div>
                            <div id="collapse11" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Yes, you can upgrade your package at any time you wish to, by simply logging back into your office and selecting the package you wish to upgrade to.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse12">Do I ever lose the people I refer to EZYTRX?</a>
                                </h4>
                            </div>
                            <div id="collapse12" class="panel-collapse collapse">
                                <div class="panel-body">
                                    In Ezytrx, your entire downline including direct , indirect, overflow or spill over follows you at all t imes in every step of the matrix.You will pass up a commission to your upline if you are not active on a position that generates an earning.However, once you become active on that level, you will get paid for any further sales that take place from that point onwards.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse13">Is it compulsory to recruit to earn from the system?</a>
                                </h4>
                            </div>
                            <div id="collapse13" class="panel-collapse collapse">
                                <div class="panel-body">
                                    No. EZY10 platform is arranged in such a way that all participants help each other. You will receive spill overs and overflows from all uplines and downlines. However, to make a lot of money, doing nothing will not work. You must try and help people build their teams, and once they are auto pilot , you will earn passively. The more active you are initially will determine how quickly you will reach this auto- earning mode.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse14">Can my account ever be closed?</a>
                                </h4>
                            </div>
                            <div id="collapse14" class="panel-collapse collapse">
                                <div class="panel-body">                                    
                                    No, once your account is created it can never be removed or destroyed. However,your account will be temporarly suspended on earning 10x of your total purchase steps. This suspension can be lifted by purchasing the next higher step. On purchasing all 10 steps your account will never be suspended and you can earn unlimited.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse15">Is there a limit to the amount of TRX you can earn?</a>
                                </h4>
                            </div>
                            <div id="collapse15" class="panel-collapse collapse">
                                <div class="panel-body">
                                    You can genuinely earn UNLIMITED TRX in this business. The more people you refer and the more people you assist with growing their business, the higher your income potential becomes.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="media-area section bg-img jarallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-heading">
                            <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Press (Media)</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
                        <div class="mediabrand">
                            <ul>
                                <li class="wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/images/media/1.png') }}" alt="" /></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/images/media/2.png') }}" alt="" /></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/images/media/3.png') }}" alt="" /></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="2.1s" style="visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/images/media/4.png') }}" alt="" /></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="2.4s" style="visibility: visible; animation-duration: 2.4s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/images/media/5.png') }}" alt="" /></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="2.7s" style="visibility: visible; animation-duration: 2.7s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/images/media/6.png') }}" alt="" /></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="2.7s" style="visibility: visible; animation-duration: 2.7s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/images/media/7.png') }}" alt="" /></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="2.7s" style="visibility: visible; animation-duration: 2.7s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/images/media/8.png') }}" alt="" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Footer area start here-->
        <footer class="top-foo">
            <div id="footer-js">
                <div class="footer-top section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="con">
                                    <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Subscribe to us!</h2>
                                    <ul>
                                        <li class="wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="wow  fadeInUp animated" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5; animation-name: fadeInUp;"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;"><a href="#"><i class="fa fa-send-o"></i></a></li>
                                        <li class="wow  fadeInUp animated" data-wow-duration="2.4s" style="visibility: visible; animation-duration: 2.4s; animation-name: fadeInUp;"><a href="#"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="search_btm wow  fadeInUp animated" data-wow-duration="2.6s" style="visibility: visible; animation-duration: 2.6s; animation-name: fadeInUp;">
                                                <div class="search_main">
                                                    <input type="text" placeholder="enter your email address">
                                                    <button type="submit">subscribe</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="foo-bot">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="copyright wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">
                                <p>© Smart Contract Address: <a href="#"><span>TGZfB3J9NvHJ3BXnPA19FzBT2uNsrgenKw</span></a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="foo-link wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">
                                <ul>
                                    <li><a href="#">WhitePaper</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/echarts-en.min.js') }}"></script>
    <script src="{{ asset('assets/js/echarts-liquidfill.min.js') }}"></script>
    <script src="{{ asset('assets/js/vc_round_chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/videojs-ie8.min.js') }}"></script>
    <script src="{{ asset('assets/js/video.js') }}"></script>
    <script src="{{ asset('assets/js/Youtube.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection