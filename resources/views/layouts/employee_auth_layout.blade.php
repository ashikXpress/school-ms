<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- For Search Engine Meta Data  -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="yoursite.com" />

    <title>Authfy : Login-01</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon-16x16.html"/>

    <!-- Main structure css file -->
    <link  rel="stylesheet" href="{{asset('admin/assets/css/login1-style.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if IE]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Start Preloader -->
<div id="preload-block">
    <div class="square-block"></div>
</div>
<!-- Preloader End -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 col-lg-offset-4 col-md-offset-3 col-sm-offset-2">
            <!-- brand-logo start -->
            <div class="brand-logo text-center">
                {{--                <img src="{{asset('admin/assets/images/brand-logo.png')}}" width="120" alt="brand-logo">--}}
                {{--            --}}
                <h2>School MS</h2>
            </div><!-- ./brand-logo -->
            <!-- authfy-login start -->
            <div class="authfy-login">
                @yield('content')

            </div> <!-- ./authfy-login -->
        </div>
    </div> <!-- ./row -->
</div> <!-- ./container -->

<!-- Javascript Files -->

<!-- initialize jQuery Library -->
<script src="{{asset('admin/assets/js/jquery-2.2.4.min.js')}}"></script>

<!-- for Bootstrap js -->
<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>

<!-- Custom js-->
<script src="{{asset('admin/assets/js/custom.js')}}"></script>

</body>

<!-- Mirrored from gitapp.top/demo/authfy/demo/login-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Nov 2019 11:54:56 GMT -->
</html>

