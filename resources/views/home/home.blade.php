@extends('home.view')


@section('body')
<body class="sidebar-mini layout-fixed sidebar-closed sidebar-collapse" style="height: auto;">
    <div class="ewMessageDialog" style="display: none;"></div>

    <style type="text/css">
        #chartdiv2 {
            width: 100%;
            height: 250;
        }
    </style>
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-success">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="dashboard.php" class="nav-link active">Home</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4 sidebar-dark-success">
            <!-- Brand Logo -->
            <a href="#" class="brand-link navbar-secondary">
                <img src="image/bpdaslogo.jpg" alt="BPDASLogo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">RPDAS InfoSys</span>
            </a>

            <!-- Sidebar -->
            <div
                class="sidebar os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition">
                <div class="os-resize-observer-host observed">
                    <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                </div>
                <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                    <div class="os-resize-observer"></div>
                </div>
                <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 656px;"></div>
                <div class="os-padding">
                    <div class="os-viewport os-viewport-native-scrollbars-invisible">
                        <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                            <!-- Sidebar user panel (optional) -->

                            <!-- Sidebar Menu -->
                            <nav class="mt-2">
                                <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent"
                                    data-widget="treeview" role="menu" data-accordion="false">
                                    <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                                    <li class="nav-item has-treeview menu-open">
                                        <a id="dashboard" href="#" class="nav-link active">
                                            <i class="nav-icon fas fa-tachometer-alt"></i>
                                            <p>
                                                Dashboard
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview" style="display: block;">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Responsive Dashboard</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link active">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Population of Residents</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Specification Type</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Health Cases</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Education and Employment Status</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Household Facility Structure</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Household Pets/Animals</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Household Barangay Community Groups</p>
                                                </a>
                                            </li>
                                            {{-- <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Profiling Status</p>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </li>
                                    {{-- <li class="nav-item userloggedin" style="display: none;">
                                        <a href="#" target="_blank" class="nav-link">
                                            <i class="nav-icon far fa-list-alt"></i>
                                            <p>
                                                Masterlist
                                            </p>
                                        </a>
                                    </li> --}}
                                    {{-- <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fas fa-certificate"></i>
                                            <p>
                                                BPDAS Certification
                                            </p>
                                        </a>
                                    </li> --}}
                                    {{-- <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fas fa-paste"></i>
                                            <p>
                                                Profiles
                                                <i class="fas fa-angle-left right"></i>
                                            </p>
                                        </a> --}}
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="#" target="_blank" class="nav-link">
                                                    <i class="far fa-file-alt nav-icon"></i>
                                                    <p>National Profile</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" target="_blank" class="nav-link">
                                                    <i class="far fa-file-alt nav-icon"></i>
                                                    <p>Regional Profile</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" target="_blank" class="nav-link">
                                                    <i class="far fa-file-alt nav-icon"></i>
                                                    <p>Provincial Profile</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" target="_blank" class="nav-link">
                                                    <i class="far fa-file-alt nav-icon"></i>
                                                    <p>City/Municipal Profile</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" target="_blank" class="nav-link">
                                                    <i class="far fa-file-alt nav-icon"></i>
                                                    <p>Barangay Profile</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    {{-- <li class="nav-item has-treeview">

                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="far fa-file-word nav-icon"></i>
                                                    <p>BPDAS Profiling Tool</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" target="_blank"
                                                    class="nav-link">
                                                    <i class="far fa-file-pdf nav-icon"></i>
                                                    <p>Service Request Form</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="far fa-file-word nav-icon"></i>
                                                    <p>Incident Report</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" target="_blank"
                                                    class="nav-link">
                                                    <i class="far fa-file-pdf nav-icon"></i>
                                                    <p>AO2020-0023 BPDAS</p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview">
                                                <a href="#" class="nav-link">
                                                    <i class="nav-icon fas fa-file"></i>
                                                    <p>
                                                        BPDAS List 2020
                                                        <i class="right fas fa-angle-left"></i>
                                                    </p>
                                                </a>
                                                <ul class="nav nav-treeview">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">
                                                            <i class="far fa-file-excel nav-icon"></i>
                                                            <p>Excel Format</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="downloads/gidalist2020.pdf" target="_blank"
                                                            class="nav-link">
                                                            <i class="far fa-file-pdf nav-icon"></i>
                                                            <p>PDF Format</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item has-treeview">
                                                <a href="#" class="nav-link">
                                                    <i class="nav-icon fas fa-file"></i>
                                                    <p>
                                                        Barangay List 2021
                                                        <i class="right fas fa-angle-left"></i>
                                                    </p>
                                                </a>
                                                <ul class="nav nav-treeview">
                                                    <li class="nav-item">
                                                        <a href="downloads/gidalist2021.xlsx" class="nav-link">
                                                            <i class="far fa-file-excel nav-icon"></i>
                                                            <p>Excel Format</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="downloads/gidalist2021.pdf" target="_blank"
                                                            class="nav-link">
                                                            <i class="far fa-file-pdf nav-icon"></i>
                                                            <p>PDF Format</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>


                                        </ul>
                                    </li>
                                    <li class="nav-header userloggedin" style="display: none;">Account Settings</li>
                                    <li class="nav-item userloggedin" style="display: none;">
                                        <a href="changepwd.php" class="nav-link">
                                            <i class="nav-icon fas fa-lock"></i>
                                            <p>
                                                Change Password
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item userloggedin" style="display: none;">
                                        <a href="logout.php" class="nav-link">
                                            <i class="nav-icon fas fa-sign-out-alt"></i>
                                            <p>
                                                Logout
                                            </p>
                                        </a>
                                    </li>

                                </ul> --}}
                            </nav>
                            <!-- /.sidebar-menu -->
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="height: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 3099px;">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Barangay Profiling with Demographic Analysis</h1>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                   w
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright © 2023 <a href="#">Barangay Profiling with Demographic Analysis System</a></strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
            </div>
        </footer>

        <div id="sidebar-overlay"></div>
    </div>
    <!-- ./wrapper -->

    <script type="text/javascript">
        // Write your startup script here
        // document.write("page loaded");
        $("a[href$='dashboard.php']").addClass("active");
        $("#dashboard").addClass("active");
        $(".userloggedin").hide();
    </script>
</body>
@endsection
