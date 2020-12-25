<!DOCTYPE html>
<html lang="en">
<head>
    <title>TRX DAPP</title>

    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{!! csrf_token() !!}">

    @yield('style')
    <link rel="stylesheet" href="{{ asset('assets/css/spinner.css') }}">

    <script src="https://kit.fontawesome.com/1bc56f82e9.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/web3@0.19.0/dist/web3.js"></script>
    <script src="{{ asset('assets/js/google_analytics_auto.js') }}"></script>
</head>
<body>
    <div class="spinner d-none">
        <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
    @yield('body')

    <div class="modal fade" id="tron_warning" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border border-white border-lg" style="background-image: url({{ asset('assets/images/back/bg.jpg') }})">
                <div class="modal-body text-center">
                    <h6 class="text-white mt-1">This website requires TRX purse to interact with the smart contract. Click your wallet button below</h6>
                    <a href="https://chrome.google.com/webstore/detail/tronlink%EF%BC%88%E6%B3%A2%E5%AE%9D%E9%92%B1%E5%8C%85%EF%BC%89/ibnejdfjmmkpcnlpebklmnkoeoihofec" target="_blank">
                        <img class="my-3" src="{{ asset('assets/images/icons/tronlink.png') }}">
                    </a>
                    <br>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var base_url = "{{ route('home') }}";
        var token = "{{ csrf_token() }}";
        var user_address = "{{ isset($user) ? $user->address  : '' }}";

        var ref_id = 1;
        var contractAddress = '{{ env("CONTRACT_ADDRESS") }}';
        var MatrixInstance;
        var matrixAbi = '[{"constant":true,"inputs":[{"name":"_user","type":"address"}],"name":"findFreeReferrer","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"priceOfLevel","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"address"}],"name":"userInfos","outputs":[{"name":"joined","type":"bool"},{"name":"id","type":"uint256"},{"name":"referrerID","type":"uint256"},{"name":"originalReferrer","type":"uint256"},{"name":"gainAmountCounter","type":"uint256"},{"name":"investAmountCounter","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"_user","type":"address"}],"name":"viewUserReferral","outputs":[{"name":"","type":"address[]"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"userAddressByID","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"lastIDCount","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"acceptOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"newDefaultRefID","type":"uint256"}],"name":"changeDefaultRefID","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_referrerID","type":"uint256"}],"name":"regUser","outputs":[],"payable":true,"stateMutability":"payable","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"},{"name":"","type":"uint256"}],"name":"testArray","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"ownerWallet","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"_user","type":"address"}],"name":"findFreeReferrer1","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"orRef","type":"address"},{"name":"_level","type":"uint256"}],"name":"findNextEligible","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"newOwner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"_user","type":"address"},{"name":"_level","type":"uint256"}],"name":"viewUserlevelBuyCheck","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"defaultRefID","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_level","type":"uint256"}],"name":"buyLevel","outputs":[],"payable":true,"stateMutability":"payable","type":"function"},{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"payable":true,"stateMutability":"payable","type":"fallback"},{"anonymous":false,"inputs":[{"indexed":true,"name":"useraddress","type":"address"},{"indexed":false,"name":"userid","type":"uint256"},{"indexed":false,"name":"placeid","type":"uint256"},{"indexed":false,"name":"refferalid","type":"uint256"},{"indexed":true,"name":"refferaladdress","type":"address"},{"indexed":false,"name":"_time","type":"uint256"}],"name":"regLevelEv","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"userid","type":"uint256"},{"indexed":true,"name":"useraddress","type":"address"},{"indexed":false,"name":"level","type":"uint256"},{"indexed":false,"name":"amount","type":"uint256"},{"indexed":false,"name":"time","type":"uint256"}],"name":"LevelByEv","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"fromUserId","type":"uint256"},{"indexed":false,"name":"fromAddress","type":"address"},{"indexed":false,"name":"toUserId","type":"uint256"},{"indexed":false,"name":"toAddress","type":"address"},{"indexed":false,"name":"amount","type":"uint256"},{"indexed":false,"name":"level","type":"uint256"},{"indexed":false,"name":"Type","type":"uint256"},{"indexed":false,"name":"packageAmount","type":"uint256"},{"indexed":false,"name":"time","type":"uint256"}],"name":"paidForLevelEv","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"_user","type":"address"},{"indexed":true,"name":"_referral","type":"address"},{"indexed":false,"name":"_level","type":"uint256"},{"indexed":false,"name":"_time","type":"uint256"}],"name":"lostForLevelEv","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"name":"user","type":"address"},{"indexed":false,"name":"userid","type":"uint256"},{"indexed":false,"name":"amount","type":"uint256"},{"indexed":false,"name":"timeNow","type":"uint256"},{"indexed":false,"name":"level","type":"uint256"}],"name":"reInvestEv","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"previousOwner","type":"address"},{"indexed":true,"name":"newOwner","type":"address"}],"name":"OwnershipTransferredEv","type":"event"}]';

        async function initApp() {
            tronWeb = window.tronWeb;
            if (tronWeb == null)  {
                show_warning();
                return;
            }

            // if(user_address === tronWeb.defaultAddress.base58) {
            //     console.log(user_address);
            //     console.log(tronWeb.defaultAddress.base58);
            //     $("#HideBuypackage").removeClass('d-none');
            // }

            try {
                MatrixInstance = await tronWeb.contract().at(contractAddress);
                console.log("Success: Get smart contract", contractAddress);        
            } catch (error) {
                console.log("Failed: Get smart contract", contractAddress);
            }
        }

        function show_warning() {
            $("#tron_warning").modal();
        }

        function toggle_spinner() {
            $(".spinner").toggleClass('d-none');
        }

        $(document).ready(function() {
        });
    </script>
    @yield('script')
</body>
</html>