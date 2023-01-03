<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="{{ asset('css/loginanimation.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('css/view/all.min.css') }}" rel="stylesheet">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link href="{{ asset('css/view/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('css/view/icheck-bootstrap.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('css/view/jqvmap.min.css') }}" rel="stylesheet">
    <!-- Theme style -->
    <link href="{{ asset('css/view/adminlte.min.css') }}" rel="stylesheet">
    <!-- overlayScrollbars -->
    <link href="{{ asset('css/view/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <!-- Daterange picker -->
    <link href="{{ asset('css/view/daterangepicker.css') }}" rel="stylesheet">
    <!-- summernote -->
    <link href="{{ asset('css/view/summernote-bs4.css') }}" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!--    Font awesome icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @yield('body')

    <!-Scripts--->
        <script src="//code.jquery.com/jquery-1.12.3.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- jQuery -->
    <script src="{{ asset('js/view/jquery.min.js') }}" ></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('js/view/jquery-ui.min.js') }}" ></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- amcharts -->
    <script src="//cdn.amcharts.com/lib/4/core.js"></script>
    <script src="//cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="//cdn.amcharts.com/lib/4/maps.js"></script>
    <script src="{{ asset('js/view/philippinesHigh.js') }}" ></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <!-- ChartJS -->
    <script src="{{ asset('js/view/Chart.min.js') }}" ></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{ asset('js/view/jquery.vmap.min.js') }}" ></script>
    <script src="{{ asset('js/view/jquery.vmap.usa.js') }}" ></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('js/view/jquery.knob.min.js') }}" ></script>
    <!-- daterangepicker -->
    <script src="{{ asset('js/view/moment.min.js') }}" ></script>
    <script src="{{ asset('js/view/daterangepicker.js') }}" ></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('js/view/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('js/view/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('js/view/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/view/adminlte.js') }}" ></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('js/view/dashboard.js') }}" ></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('js/view/demo.js') }}" ></script>



</body>

</html>
