<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontendAsset') }}/assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontendAsset') }}/assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontendAsset') }}/assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('frontendAsset') }}/assets/images/icons/site.html">
    <link rel="mask-icon" href="{{ asset('frontendAsset') }}/assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="{{ asset('frontendAsset') }}/assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ asset('frontendAsset') }}/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('frontendAsset') }}/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('frontendAsset') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontendAsset') }}/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('frontendAsset') }}/assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontendAsset') }}/assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('frontendAsset') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontendAsset') }}/assets/css/skins/skin-demo-4.css">
    <link rel="stylesheet" href="{{ asset('frontendAsset') }}/assets/css/demos/demo-4.css">
</head>

<body>
<div class="page-wrapper">
    <!-- End .header -->
    @include('frontEnd.include.header')
    <main class="main">
        @yield('content')
    </main><!-- End .main -->
    @include('frontEnd.include.footer')
    <!-- End .footer -->
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
<!-- Mobile Menu -->
<!-- End .mobil-menu-overlay -->
@include('frontEnd.include.mobile-header')
<!-- End .mobile-menu-container -->
<!-- Sign in / Register Modal -->
@include('frontEnd.customer.auth')
<!-- End .modal -->

<!-- Plugins JS File -->
<script src="{{ asset('frontendAsset') }}/assets/js/jquery.min.js"></script>
<script src="{{ asset('frontendAsset') }}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontendAsset') }}/assets/js/jquery.hoverIntent.min.js"></script>
<script src="{{ asset('frontendAsset') }}/assets/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('frontendAsset') }}/assets/js/superfish.min.js"></script>
<script src="{{ asset('frontendAsset') }}/assets/js/owl.carousel.min.js"></script>
<script src="{{ asset('frontendAsset') }}/assets/js/bootstrap-input-spinner.js"></script>
<script src="{{ asset('frontendAsset') }}/assets/js/jquery.plugin.min.js"></script>
<script src="{{ asset('frontendAsset') }}/assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('frontendAsset') }}/assets/js/jquery.countdown.min.js"></script>
<!-- Main JS File -->
<script src="{{ asset('frontendAsset') }}/assets/js/main.js"></script>
<script src="{{ asset('frontendAsset') }}/assets/js/demos/demo-4.js"></script>
</body>


<!-- molla/index-4.html  22 Nov 2019 09:54:18 GMT -->
</html>
