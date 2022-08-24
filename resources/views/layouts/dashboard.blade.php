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
    <link rel="stylesheet" href="{{asset('custom-css/assets/css/vendor.bundle49f7.css')}}">
    <!-- Custom styles for this template -->
   <link rel="stylesheet" href="{{asset('custom-css/assets/css/style.css')}}" id="layoutstyle">

   <!-- Custom styles for this template -->
   <link rel="stylesheet" href="assets/css/style49f7.css?ver=104" id="layoutstyle">
    <!-- Toastr styles for this template -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>

<body class="page-user">
@include('layouts.header')

@yield('user')

@include('layouts.footer')


{{-- <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> --}}

    <!-- JavaScript (include all script here) -->
    <script src="{{asset('custom-css/assets/js/jquery.bundle49f7.js')}}"></script>
    <script src="{{asset('custom-css/assets/js/script49f7.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

</body>
</html>
