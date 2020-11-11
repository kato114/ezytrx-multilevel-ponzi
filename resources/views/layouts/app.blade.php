<!DOCTYPE html>
<html lang="en">
<head>
    <title>TRX DAPP</title>

    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('style')

    <script src="https://kit.fontawesome.com/1bc56f82e9.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/google_analytics_auto.js') }}"></script>
</head>
<body>
    @yield('body')
    @yield('script')
</body>
</html>