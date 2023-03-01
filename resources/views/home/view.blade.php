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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
</head>

<body style="overflow-x: hidden;">
    <div class="wrapper d-flex">
        <div class="main-sidebar d-flex flex-column flex-shrink-0 p-3 px-0 elevation-4 bg-white"
            style="width: 240px; min-height: 100vh; height: 100%;">
            <a href="#" class="brand-link">
                <div class="d-flex align-items-center">
                    <img src="{{asset('image/bpdaslogo.jpg')}}" alt="BPDASLogo" class="brand-image img-circle elevation-3">
                    <span class="brand-text font-weight-bold">RPDAS InfoSys</span>
                </div>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('residents.index') }}" class="nav-link active" aria-current="page">
                        Resident Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('populations.index') }}" class="nav-link link-dark">
                        Residents Population
                    </a>
                </li>
                <li>
                    <a href="{{ route('specifications.index') }}" class="nav-link link-dark">
                        Facility Structure
                    </a>
                </li>
                <li>
                    <a href="{{ route('healthcases.index') }}" class="nav-link link-dark">
                        Health Cases
                    </a>
                </li>
                <li>
                    <a href="{{ route('educationoccupations.index') }}" class="nav-link link-dark">
                        Education and Occupation
                    </a>
                </li>
                <li>
                    <a href="{{ route('pets.index') }}" class="nav-link link-dark">
                        Pets/Animals
                    </a>
                </li>
                <li>
                    <a href="{{ route('groups.index') }}" class="nav-link link-dark">
                        Community group
                    </a>
                </li>
            </ul>
        </div>

        <div class="container-fluid px-0 mx-0">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-dark navbar-success">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                </ul>
            </nav>

            <div class="content-wrapper py-4 me-0 pe-0">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyright © 2023 <a href="#">Barangay Profiling with Demographic Analysis
                        System</a></strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                </div>
            </footer>
        </div>
    </div>

    <!-Scripts--->
        <script src="//code.jquery.com/jquery-1.12.3.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- jQuery -->
        <script src="{{ asset('js/view/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('js/view/jquery-ui.min.js') }}"></script>
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
        <script src="{{ asset('js/view/philippinesHigh.js') }}"></script>
        <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
        <!-- ChartJS -->
        <script src="{{ asset('js/view/Chart.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="{{ asset('js/view/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('js/view/jquery.vmap.usa.js') }}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('js/view/jquery.knob.min.js') }}"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('js/view/moment.min.js') }}"></script>
        <script src="{{ asset('js/view/daterangepicker.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('js/view/tempusdominus-bootstrap-4.min.js') }}"></script>
        <!-- Summernote -->
        <script src="{{ asset('js/view/summernote-bs4.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('js/view/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('js/view/adminlte.js') }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('js/view/dashboard.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('js/view/demo.js') }}"></script>

        <script src="//code.jquery.com/jquery-1.12.3.js"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script type="text/javascript">
            // Write your startup script here
            // document.write("page loaded");
            $("a[href$='dashboard.php']").addClass("active");
            $("#dashboard").addClass("active");
            $(".userloggedin").hide();
        </script>

        <script>
            $(document).ready(function() {
                $('#table').DataTable();

            });
        </script>

        @if (session('status'))
            <script>
                swal("{{ session('status') }}");
            </script>
        @endif

        @yield('scripts')
</body>

</html>
