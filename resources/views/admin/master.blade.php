<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('adminAsset') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('adminAsset') }}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('adminAsset') }}/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{ asset('adminAsset') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('adminAsset') }}/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('adminAsset') }}/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('adminAsset') }}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('adminAsset') }}/assets/images/favicon.png" />
    <!-- Summernote css -->
{{--    <link href="{{ asset('adminAsset') }}/assets/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />--}}

</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.include.sidebar')
    <!-- partial -->
    <div class="container">
        <!-- partial:partials/_navbar.html -->
        @include('admin.include.header')
        <hr><hr><hr><hr>
        <!-- partial -->
        <main>
            @yield('content')
        </main>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@include('admin.include.footer')
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('adminAsset') }}/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->



{{--<script src="{{ asset('adminAsset') }}/assets/jquery/jquery.min.js"></script>--}}
<script src="{{ asset('adminAsset') }}/assets/vendors/chart.js/Chart.min.js"></script>
<script src="{{ asset('adminAsset') }}/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="{{ asset('adminAsset') }}/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="{{ asset('adminAsset') }}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{ asset('adminAsset') }}/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<!-- End plugin js for this page -->
<!-- Summernote js -->
{{--<script src="{{ asset('adminAsset') }}/assets/summernote/summernote-bs4.min.js"></script>--}}

<!-- init js -->
{{--<script src="{{ asset('adminAsset') }}/assets/js/form-editor.init.js"></script>--}}

<!-- inject:js -->
<script src="{{ asset('adminAsset') }}/assets/js/off-canvas.js"></script>
<script src="{{ asset('adminAsset') }}/assets/js/hoverable-collapse.js"></script>
<script src="{{ asset('adminAsset') }}/assets/js/misc.js"></script>
<script src="{{ asset('adminAsset') }}/assets/js/settings.js"></script>
<script src="{{ asset('adminAsset') }}/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('adminAsset') }}/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>
</html>
