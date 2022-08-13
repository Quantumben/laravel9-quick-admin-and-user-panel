<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Buy your coin at a cheap rate">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{asset('custom-css/images/favicon.png')}}">
    <!-- Site Title  -->
    <title>TokenCoin - User Dashboard</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="{{asset('custom-css/assets/css/vendor.bundle49f7.css?ver=104')}}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('custom-css/assets/css/style.css')}}" id="layoutstyle">
</head>

<body class="page-user">
@include('layouts.header')

@yield('user')

@include('layouts.footer')

    <!-- JavaScript (include all script here) -->
    <script src="{{asset('custom-css/assets/js/jquery.bundle49f7.js')}}"></script>
    <script src="{{asset('custom-css/assets/js/script49f7.js')}}"></script>
</body>
</html>
