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
                <span class="brand-text font-weight-light">BPDAS InfoSys</span>
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
                                                    <p>Population</p>
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
                                                    <p>Barangay Cases</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Employment Status</p>
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
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Part 1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-2 col-6" style="display:none">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h4>17,622 <sup style="font-size: 20px">(41.91 %)</sup></h4>

                                    <p>Validated Barangay Profiles<br><br></p>
                                </div>
                                <div class="icon">
                                    <i class="ion-android-checkbox-outline"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h4>6,463 <sup style="font-size: 20px">(36.68 %)</sup></h4>

                                    <p>Barangays<br><br></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-android-pin"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h4>1,209 <sup style="font-size: 20px">(18.70 %)</sup></h4>
                                    <p>Purok's with Internally Displaced Population</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-android-walk"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h4>766 <sup style="font-size: 20px">(11.85 %)</sup></h4>

                                    <p>Puroks Affected by Armed Conflict</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-android-alert"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h4>3,078,120 <sup style="font-size: 20px">(27.92) %</sup></h4>

                                    <p>IP Population<br><br></p>
                                </div>
                                <div class="icon">
                                    <i class="ion-android-people"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h4>11,024,317 </h4>

                                    <p>Total Population in Barangay Cabantian<br><br></p>
                                </div>
                                <div class="icon">
                                    <i class="ion-ios-people"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable ui-sortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-graph mr-1"></i>
                                        No. of Puroks in Cabantian Davao City
                                    </h3>
                                    <div class="card-tools">
                                        <ul class="nav nav-pills ml-auto">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#revenue-chart"
                                                    data-toggle="tab">Graph</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#world-map-markers"
                                                    data-toggle="tab">Map</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <!-- Morris chart - Sales -->
                                        <div class="chart tab-pane active" id="revenue-chart"
                                            style="position: relative; height: 300px;">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas id="revenue-chart-canvas" height="375"
                                                style="height: 300px; display: block; width: 770px;" width="962"
                                                class="chartjs-render-monitor"></canvas>
                                        </div>
                                        <div class="chart tab-pane" id="sales-chart"
                                            style="position: relative; height: 300px;">
                                            <canvas id="sales-chart-canvas" height="300"
                                                style="height: 300px;"></canvas>
                                        </div>
                                        <div class="chart tab-pane" id="world-map-markers"
                                            style="height: 600px; overflow: hidden">
                                            <div class="chartdiv">
                                                <div
                                                    style="width: 100%; height: 100%; position: relative; overflow: hidden;">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" role="group"
                                                        style="width: 100%; height: 100%; overflow: visible;">
                                                        <defs>
                                                            <clipPath id="id-588"></clipPath>
                                                            <clipPath id="id-615">
                                                                <rect width="0" height="0"></rect>
                                                            </clipPath>
                                                            <linearGradient id="gradient-id-638" x1="1%"
                                                                x2="99%" y1="59%" y2="41%">
                                                                <stop stop-color="#474758" offset="0"></stop>
                                                                <stop stop-color="#474758" stop-opacity="1"
                                                                    offset="0.75"></stop>
                                                                <stop stop-color="#3cabff" stop-opacity="1"
                                                                    offset="0.755"></stop>
                                                            </linearGradient>
                                                            <clipPath id="id-648"></clipPath>
                                                            <filter id="filter-id-620" filterUnits="objectBoundingBox"
                                                                width="200%" height="200%" x="-50%"
                                                                y="-50%">
                                                                <feGaussianBlur result="blurOut" in="SourceGraphic"
                                                                    stdDeviation="1.5"></feGaussianBlur>
                                                                <feOffset result="offsetBlur" dx="1"
                                                                    dy="1"></feOffset>
                                                                <feFlood flood-color="#000000" flood-opacity="0.5">
                                                                </feFlood>
                                                                <feComposite in2="offsetBlur" operator="in">
                                                                </feComposite>
                                                                <feMerge>
                                                                    <feMergeNode></feMergeNode>
                                                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                                                </feMerge>
                                                            </filter>
                                                            <filter id="filter-id-635" filterUnits="objectBoundingBox"
                                                                width="120%" height="120%" x="-10%"
                                                                y="-10%">
                                                                <feColorMatrix type="saturate" values="0">
                                                                </feColorMatrix>
                                                            </filter>
                                                            <filter id="filter-id-653" filterUnits="objectBoundingBox"
                                                                width="200%" height="200%" x="-50%"
                                                                y="-50%">
                                                                <feGaussianBlur result="blurOut" in="SourceGraphic"
                                                                    stdDeviation="1.5"></feGaussianBlur>
                                                                <feOffset result="offsetBlur" dx="1"
                                                                    dy="1"></feOffset>
                                                                <feFlood flood-color="#000000" flood-opacity="0.5">
                                                                </feFlood>
                                                                <feComposite in2="offsetBlur" operator="in">
                                                                </feComposite>
                                                                <feMerge>
                                                                    <feMergeNode></feMergeNode>
                                                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                                                </feMerge>
                                                            </filter>
                                                            <linearGradient id="gradient-id-811" x1="0%"
                                                                x2="100%" y1="50%" y2="50%">
                                                                <stop stop-color="#ffffff" stop-opacity="1"
                                                                    offset="0"></stop>
                                                                <stop stop-color="#c52424" stop-opacity="1"
                                                                    offset="1"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <g>
                                                            <g fill="#ffffff" fill-opacity="0">
                                                                <rect width="0" height="0"></rect>
                                                            </g>
                                                            <g>
                                                                <g role="region" clip-path="url(&quot;#id-615&quot;)"
                                                                    opacity="1" aria-label="Chart">
                                                                    <g fill="#ffffff" fill-opacity="0"
                                                                        aria-label="Use plus and minus keys on your keyboard to zoom in and out">
                                                                        <rect width="10" height="10"></rect>
                                                                    </g>
                                                                    <g>
                                                                        <g>
                                                                            <g fill="#ffffff" fill-opacity="0"
                                                                                focusable="true" tabindex="0">
                                                                                <rect width="10" height="10">
                                                                                </rect>
                                                                            </g>
                                                                            <g>
                                                                                <g transform="translate(0,0)"
                                                                                    style="touch-action: none; user-select: none; -webkit-user-drag: none;">
                                                                                    <g>
                                                                                        <g role="group"
                                                                                            stroke-width="5"
                                                                                            opacity="1"
                                                                                            aria-label="Series"
                                                                                            transform="translate(0,0) scale(0.2)">
                                                                                            <g>
                                                                                                <g
                                                                                                    clip-path="url(&quot;#id-588&quot;)">
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g></g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g></g>
                                                                                                <g fill="#d9d9d9"
                                                                                                    stroke="#ffffff"
                                                                                                    stroke-opacity="1"
                                                                                                    stroke-width="5">
                                                                                                    <g>
                                                                                                        <g shape-rendering="auto"
                                                                                                            stroke="#ffffff"
                                                                                                            fill="#ffffff"
                                                                                                            fill-opacity="0"
                                                                                                            stroke-opacity="0">
                                                                                                            <path
                                                                                                                d="M10.352647900234217,-1.4210854715202004e-14L25.514125712617897,-1.4210854715202004e-14L39.64735209976578,-1.4210854715202004e-14L39.64735209976578,49.999999999999986L39.64735209976578,49.999999999999986L24.485874287382103,49.999999999999986L10.352647900234217,49.999999999999986Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g opacity="0"
                                                                                            style="pointer-events: none;">
                                                                                            <circle r="10">
                                                                                            </circle>
                                                                                        </g>
                                                                                        <g role="group"
                                                                                            stroke-width="5"
                                                                                            opacity="1"
                                                                                            aria-label="Series"
                                                                                            transform="translate(0,0) scale(0.2)">
                                                                                            <g>
                                                                                                <g
                                                                                                    clip-path="url(&quot;#id-648&quot;)">
                                                                                                    <g></g>
                                                                                                </g>
                                                                                                <g></g>
                                                                                                <g fill="#e8a8a8"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M10.741994650456206,39.54764773713427L10.75958196471862,39.71975436649501L10.749575389362462,39.804581453637255L10.784143558774645,40.06392202242534L10.708336169712709,40.25611711778767L10.556721391588894,40.37569578676188L10.499411005458114,40.34092109743764L10.520030615282906,40.232627606230324L10.468178361164632,40.22225552567315L10.352647900234217,39.9876489423708L10.420268091277478,39.92327215949483L10.369628755384099,39.77742498249565L10.533372715757878,39.643162701524474L10.511236958151756,39.584877773155014ZM10.61099948215724,39.380103672645994L10.675890607194276,39.41642138510859L10.711368465275257,39.51804629446524L10.570366721620076,39.55893888944824L10.548837423126486,39.496989321522776L10.490010889214432,39.475626939849036ZM10.94637137136715,39.227805930312954L11.092224787922305,39.230552890946015L11.144380271596901,39.3071609774707L10.971539424535763,39.314791096706585ZM10.79233075679332,39.02024630962705L10.868441375411521,39.03917180489291L10.90513215171751,39.11761901752497L10.77595636075597,39.11517712990851ZM11.499462081962918,38.7879356344377L11.588914801055921,38.890204709896764L11.57132748679362,39.13654354001619L11.411222281094865,39.23146854361052L11.318434036883048,39.13837493540623L11.333292285139123,38.84899246926288L11.366041077213936,38.79220967761429ZM11.219581201546305,38.82640167207792L11.304485477295657,38.81663259444234L11.299330574839473,38.89600487862818L11.188045327696557,38.97659484767358L11.054321093391309,38.99643654638116L11.014901251079209,38.904247192898225L11.105263658840897,38.890204709896764L11.221400578883845,38.74244699881678ZM17.07949237603259,31.864392823844682L17.015510939664352,31.976594322678864L16.950923044183583,31.86623226143641ZM19.099304450198417,31.670012626378053L19.200279892428853,31.76138065236872L19.21968658402875,31.720296404780605L19.329152453834126,31.830975974620507L19.566581196376035,31.8251509416802L19.630865862300595,31.93245048758449L19.575678083063508,31.977207422222207L19.567794114601043,32.03698340854796L19.459541163020617,32.07468702142554L19.40617276112107,32.11760053719415L19.34522362031521,32.080511071307605L19.32702984694032,31.990082453954848L19.26941623125333,31.978433620546852L19.38767575818997,32.18196848778183L19.354017277446417,32.209860401896364L19.18269257816644,32.17859690233638L19.237577127847317,32.25001158150247L19.026832586255182,32.31161548973945L18.8976567952937,32.24204273107408L18.904327845531157,32.047405641302504L18.859146641650284,31.970769864344966L18.9009923204124,31.93214392856499L18.98832243261171,31.98854971795535L19.021677683799,31.870217701680296L19.112949780229542,31.781922345445842ZM22.86541553879448,30.8808815923028L22.893009428413052,30.922296395895756L22.836608730951014,30.97659399220303L22.899074019537977,31.039785219120795L22.829937680713556,31.09009081262203L22.849344372313396,31.18548257293515L22.718349204014373,31.21431356863456L22.645877340071195,31.119537173926417L22.664071113446028,31.03917172541854L22.789304920176335,30.988557593127922L22.80628577532616,30.892232435385914ZM17.47065850359212,30.528040085051245L17.51129126412934,30.5498267491528L17.46307776468592,30.648936504833166L17.49794916365437,30.725642097853694L17.47369079915461,30.75816402221949L17.381509014055325,30.65261846778401L17.40303831254886,30.54031430320579ZM18.732093457582494,30.42002237501041L18.780913416138333,30.50717367009532L18.707228633970146,30.509935419140902ZM18.35730172606037,30.290512976711383L18.373372892541454,30.328876006013616L18.480109696340605,30.33593468954696L18.46009654562829,30.412350348699526L18.535903934690225,30.522516652187555L18.43310911512225,30.582966384963598L18.39763125704127,30.49520602863754L18.286346009898352,30.464519305979977ZM22.594025085952808,30.063996289626125L22.61312854799644,30.123851818683733L22.54732773429066,30.18800182685331L22.4839527570349,30.1833978570723L22.464242835878792,30.12538654217186ZM18.420373473759867,30.00598002276756L18.490722730809352,30.024398146424282L18.481929073678145,30.100523814485882L18.387321452128845,30.166516505218326L18.291500912354593,30.175417606981014L18.27118453208601,30.067065866257913L18.371250285647704,30.06123366489338ZM18.692067156157748,29.611159566014578L18.63839552470199,29.791083913251164L18.57380762922122,29.679017743567577ZM18.036181625994118,29.29608184527404L18.117447147068447,29.324337382426535L18.134124772662062,29.578611020779242L18.215693523292657,29.61023839133479L18.264513481848553,29.553738501161106L18.309391456173216,29.70327393057864L18.218119359742673,30.062461498782156L18.104408276149798,30.18984341053423L18.214783834623915,30.385344484363905L18.25693274294241,30.408974643915805L18.313333440404392,30.57713631997523L18.215390293736448,30.55749803003188L18.110472867274723,30.574374701881823L18.05255602203141,30.981808907426434L18.129273099762088,31.023527547576307L18.135034461330804,31.12168428090505L18.20750632527404,31.17198701555487L18.32819168866058,31.094998581296423L18.403392618609985,31.14284845005502L18.390656977247602,31.21707395294947L18.336075657123047,31.263079582689045L18.39096020680381,31.30294994597272L18.36548892407899,31.381460687515187L18.407637832397427,31.442794252286284L18.316062506410617,31.62800595258515L18.439780165359707,31.627086084933254L18.513161717971627,31.543988987131605L18.580478679458565,31.597650014781294L18.475258023440688,31.644563471493633L18.526503818446542,31.71968319835029L18.484051680571838,31.76138065236872L18.57107856321494,31.802157165584866L18.618685603545885,31.9959068362787L18.718448127551312,32.00173119568806L18.758777658532267,32.10779184290828L18.63839552470199,32.15407605116725L18.505580979065428,32.307018270868625L18.36185016940408,32.369232767968796L18.314243129073134,32.522459434165064L18.134124772662062,32.558005788307284L17.969774353175808,32.514492032728654L17.88123132275149,32.586809977267436L17.714455066815276,32.60550176290879L17.653202696453206,32.698957220287696L17.56587258425384,32.708762048175686L17.323592168812013,33.04668352358334L17.24748155019381,33.426181793277394L17.18289365471304,33.51805596687733L16.504265907830757,33.71281126273594L16.28169541354498,33.74098139979745L16.28472770910747,33.696276380626784L16.137964603883574,33.75139197422633L16.04578281878429,33.85181984499786L15.896593877110433,33.850901326539656L15.83200598162972,33.88213065275982L15.802592714673665,34.15092220258266L15.901142320454085,34.28438259959671L15.8893163677605,34.51209656314595L15.771360070380183,34.48485829267977L15.791373221092499,34.41446511224345L15.722540111824287,34.36518804293883L15.650068247881109,34.386306972986105L15.660984511906008,34.543618928234665L15.764689020142725,34.55739064111182L15.783792482186357,34.64032446306002L15.863238625923202,34.62012695167448L15.860509559916977,34.68377885687771L15.771360070380183,34.77496807863712L15.614590389800128,34.98823290872131L15.533021639169476,35.03320771924832L15.489963042182353,35.17607867118218L15.440233394957659,35.177608271355865L15.270121613902745,35.432725688931086L15.18552056770966,35.53090786869387L15.19279807705965,35.622967506841775L15.034209019142054,35.779854781803344L14.96810497588001,35.800343846547776L14.895936341493098,35.87954549036097L14.860458483412117,35.869454368817586L14.830135527787377,35.97433792110849L14.754024909169232,35.981982239665776L14.597255228589177,36.17919371476807L14.447156598246579,36.165129780186405L14.225495792629488,36.2421742558045L14.189411475436088,36.20640404041343L14.004744675681195,36.31126673371487L13.931363123069275,36.27947231281665L13.872233359600955,36.410620486148005L13.865259079807288,36.56407250705176L13.800367954770252,36.67777713651269L13.72395410659584,36.73798865628255L13.563242441784666,37.08913006732749L13.210283238312286,37.24649436988115L13.067158887763355,37.42523099253586L12.969822200207943,37.43622958122209L12.886130842683485,37.59356307100998L12.770600381753184,37.67848685038415L12.620804980966852,37.683679900636704L12.411273357599669,37.77043216779842L12.235703444532248,37.72003083194842L12.144734577657971,37.815944889405685L12.180515665295218,37.95766843532945L12.038907462527561,38.24902221360249L11.997365013321655,38.26887167211126L11.904879998666047,38.18641866727182L11.82998229827291,38.26856629745275L11.652593007868006,38.269177046718966L11.638644448280616,38.325670475679416L11.31873726643937,38.533001788508884L11.241413729596161,38.652382339039654L11.152870699171842,38.756185293933584L11.070392259872506,38.75984882225397L11.060688914072557,38.64932922350626L11.172277390771683,38.46185831936434L11.181677507015308,38.182448614113724L11.249904157171102,38.12686696465513L11.243233106933644,38.042880491482514L11.324801857564296,38.00714688997117L11.416377183551106,37.77226491705423L11.532817333150206,37.7197253650014L11.499765311519127,37.650383023553225L11.610747329105834,37.504358213448214L11.80845299977932,37.46128166827938L11.790562455960696,37.37848623121231L11.901847703103556,37.299658942148326L11.937325561184537,37.16552226168238L11.9888745857466,37.149327393599556L12.128360181620565,36.92594519707111L12.184154419970184,36.853209952020364L12.291194453325545,36.839151529269245L12.406421684699751,36.72270674286361L12.430680049199509,36.575687839697174L12.5359007052175,36.49437886550636L12.646579493247884,36.52800334323099L12.785458630009316,36.51547066020758L12.823968783652731,36.34306056254943L12.886434072239808,36.28283521227782L12.872182283096095,36.21924471704992L12.980738464232786,36.11712808262733L13.026222897669925,36.146173858007344L13.096268925163145,36.067902000572104L13.1332629310254,36.0831897568373L13.267290394886857,35.92449611456081L13.408595368098304,35.95323942213933L13.495925480297615,35.86456168202139L13.503809448760023,35.97311482692528L13.614185007234141,35.97770142554032L13.62570773037163,35.91104163185125L13.699998971652292,35.870983330520744L13.817652039476457,35.75447245863519L13.819168187257674,35.701871720119215L13.937730943750523,35.674653246282176L13.904678922119444,35.5780087850177L13.938640632419208,35.50827448593718L14.11512023415537,35.467594792315595L14.151507780905092,35.2822295436318L14.2724963738479,35.216459637990006L14.456556714490205,34.998329402672496L14.55055787692703,34.94478667572293L14.584519587226794,34.73733019777801L14.634249234451374,34.7119317831302L14.689740243244728,34.74926425481151L14.784954323906447,34.69387724558088L14.825587084443669,34.56657171746298L15.102738898854057,34.397937568887684L15.27618620502767,34.13898368462689L15.388684370395595,34.06122805823449L15.416581489570376,33.99326528436705L15.38716822261432,33.92438110651527L15.508460045113452,33.864679046997466L15.504214831325953,33.78599132708685L15.564860742575547,33.738838037639226L15.55455093766301,33.667799228883005L15.688881631080847,33.5453109256969L15.745282328542828,33.55204803285168L15.756198592567785,33.44670083089487L15.814115437811097,33.40566248376459L15.864148314592,33.255281318409686L15.905993993354116,33.481613195910825L15.90538753424164,33.590326496836965L16.005453287803334,33.57072804093437L16.00878881292209,33.45006960214435L16.09642215467767,33.33950882650949L15.999691926234732,33.30612465539667L15.997569319340926,33.07455946744943L16.09642215467767,33.09018202724235L16.17647475752699,33.018500734309185L16.268353313070065,33.062000039099665L16.401471088262838,33.024627471818306L16.47030419753105,32.8349935413583L16.380245019325514,32.77708768011109L16.412387352287737,32.74461040965085L16.48152369111216,32.791487756720386L16.499111005374573,32.71305164040329L16.554602014167926,32.74032090681123L16.60463489094883,32.61163016680005L16.666190490867052,32.62266123108725L16.633441698792296,32.51326627491662L16.51002726939953,32.60335681566588L16.48152369111216,32.52766886614107L16.660732358854602,32.38700786364804L16.77717250845376,32.47404149736698L16.815682662097174,32.40876674546944L16.90331600385275,32.33429489596828L16.809314841415926,32.282193044583494L16.835999042365756,32.19116368201317L16.932729270808807,32.17675785251157L16.905741840302767,32.25522196069386L16.963355455989756,32.297517307060275L16.930606663915,32.403556901115124L17.016420628333094,32.43910606774505L17.119518677457336,32.402637514938036L17.240810499956353,32.18901814177093L17.36179909289922,32.18135547281422L17.400915705655166,32.09031994577202L17.393638196305233,32.014299472149254L17.551924024666505,31.85243642355823L17.6268217250597,31.409367780196206L17.515536477916783,31.290375565233767L17.418503019917523,31.319817846403005L17.381509014055325,31.115242950375652L17.220190890131562,31.06187081815257L17.226558710812697,31.02536804792218L17.329353530380672,31.028742292436554L17.314495282124597,30.880268030653333L17.23353299060642,30.888857869815254L17.320256643693313,30.749573397317818L17.392728507636434,30.758470829294623L17.42092885636754,30.830261871613054L17.477026324273254,30.87014422546374L17.391515589411483,30.995306247114023L17.520691380373023,30.993772464901753L17.44458076175482,31.06647194195044L17.532517333066664,31.12076409259147L17.632886316184624,31.21093975842549L17.7575136638024,31.230569089302534L17.846056694226775,31.315217529382025L17.891844357220123,31.45935387152926L17.986451978769423,31.442794252286284L17.900638014351387,31.213700149182124L17.895483111895146,31.118003524126706L17.959464548263384,31.078741533511355L17.845147005557976,31.039785219120795L17.83817272576431,30.99223868105158L17.713848607702744,31.033650270321417L17.64289289154084,30.993772464901753L17.59771168765991,30.925977653833115L17.681099815627988,30.791298805129152L17.64501549843459,30.758470829294623L17.578608225616335,30.801729966481062L17.533730251291672,30.742823584301384L17.504620213891826,30.575295241843634L17.556169238454004,30.492444250853964L17.619544215709766,30.617639434631016L17.71960996927146,30.582966384963598L17.579821143841343,30.48139708581669L17.56556935469763,30.426159966048473L17.57375655271636,30.27179143865886L17.714758296371485,30.463905564735875L17.847876071564258,30.483545152440357L17.840598562214268,30.261049460025532L17.879715174970272,30.17142746490355L17.82877260952057,30.151476584143474L17.785714012533447,30.082413648313164L17.84908898978921,29.9534870360201L17.829379068633102,29.640329779488752L17.877289338520256,29.6231347808841L17.894876652782614,29.535007047921347L17.953096727582135,29.578303955372945L18.021020148181606,29.482496205020546ZM19.056245853211237,29.002742502986926L19.20270572887887,29.033461630054695L19.229086700272376,29.08721842976813L19.22302210914745,29.210083137146455L19.108401336885834,29.436125313348548L19.071407331023636,29.442881434738688L18.968612511455603,29.292703426758713L18.930708816924664,29.38668177610341L18.8824953174813,29.303145784286542L18.790313532382015,29.268132859081888L18.812449289988137,29.206704505859648L18.91979255289982,29.25339030638309L18.89977940218739,29.135751314082704L18.94162508094962,29.128993674454648L19.01500663356154,29.210083137146455L19.11658853490451,29.193804200312904L19.08383974282981,29.11578546373761L19.154795458991714,29.107491870536258ZM20.052658175041074,28.25236389383967L20.154543305940308,28.255744921846535L20.16394342218399,28.30861078637423L20.04174191101623,28.29078416002462ZM19.33339766762157,27.599970864623643L19.44953458766446,27.709135527194647L19.553239095901176,27.78108697183746L19.60114936578833,27.732197318067485L19.692118232662608,27.74265186278656L19.690602084881334,27.85610905989072L19.84494592901143,27.95111039422941L19.68302134597519,28.009829474459266L19.70970554692491,28.06424220531943L19.841307174336407,28.17797909859275L19.794913052230584,28.276338270248097L19.768228851280753,28.3931303340935L19.55869722791357,28.55170529267381L19.4874382821954,28.575059705869485L19.435282798520802,28.51698021468159L19.43225050295831,28.353176307315643L19.5744651648385,28.188430106812568L19.508664351132722,28.14139992070521L19.506238514682707,28.25144179379852L19.40435338378353,28.264351136121988L19.33521704495905,28.164454142094968L19.294281054865678,28.049179018388664L19.357656032121383,28.006755241930684L19.221505961366233,27.847500185565664L19.230602848053707,27.61688429688563ZM20.371958897769844,27.575061592425904L20.444127532156813,27.62118949919524L20.45868255085668,27.72451009958388L20.372868586438642,27.810911840061458L20.492341031600233,27.813679061503244L20.503560525181342,27.923440810631696L20.36680399531366,27.993535960417468L20.197601902927488,27.721127709152135ZM19.30580377800311,26.517973902231105L19.394953267539904,26.54782799424583L19.40586953156486,26.694933787921627L19.662704965706553,26.743862699934603L19.76398363749331,26.826022123675592L19.809164841374184,26.940174956092953L19.921966236298374,26.908483950330663L19.91832748162335,26.984171849983234L20.11330408629061,27.153991884365958L20.183653343340097,27.164143459515103L20.188505016240015,27.102617535454677L20.264918864414426,27.119537457445418L20.24187341813962,27.031859087796533L20.28250617867684,26.920483549559982L20.35588773128876,26.91217614667942L20.366500765757394,27.12138325367073L20.452617959731754,27.082928619053455L20.48718612914405,27.173064474741885L20.55086433595602,27.222897977060562L20.627278184130432,27.244737980023103L20.653052696411464,27.355470348418216L20.603323049186884,27.41083298391883L20.650930089517715,27.48741407198461L20.52721243056868,27.583979781584908L20.384997768688493,27.507096835861027L20.300093492939197,27.58090455083299L20.018999694297577,27.428979111631364L20.035070860778717,27.51878333607179L19.920450088517043,27.648557953383758L19.861017095492514,27.56891108160626L19.885275459992386,27.532007407171562L19.783087099536885,27.47172915631142L19.762164260155828,27.54277108684989L19.681505198193975,27.56460570676819L19.661795277037868,27.50986470065591L19.55414878456986,27.50002337686444L19.52382582894512,27.330863973863934L19.475005870389225,27.35516277161971L19.41496641825222,27.25734964461789L19.409205056683504,27.106924445779583L19.315810353359268,27.02570599529549L19.30307471199683,26.906945532044546L19.25516444210973,26.902637951013638L19.169956936804056,27.071853471211696L19.159040672779213,26.984787180458916L19.239093275628534,26.841099496523306L19.189363628403896,26.807867499957325L19.190273317072695,26.752786638658407L19.251525687434707,26.637386058439432L19.205434794885093,26.573680454887928Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#efc3c3"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M19.675137377512726,48.88157592466322L19.637536912537996,49.02687160980196L19.578710378625942,49.039333896131254L19.588716953982157,48.89251893170663ZM18.943444458287104,48.817132989405735L18.925857144024747,48.87458453887685L18.818817110669272,48.86607326537193L18.83215921114413,48.807709617655874ZM20.29554504959549,48.83385180415004L20.266435012195757,48.86303351917917L20.178498440883857,48.839019419536626L20.252183223052043,48.77366364802885ZM19.04199406406758,48.54931559368151L19.06382659211738,48.73171363300817L18.968006052343185,48.78430305385568L18.835494736262945,48.80345389196959L18.916457027781064,48.61194014735718ZM15.08818388015419,42.675014353791155L15.152165316522428,42.73930604151461L15.099100144179033,42.84838435777795L15.17793982880346,42.9355212970151L14.85924556518711,42.85935283104608L14.857426187849683,42.80359586451971L14.79101891503143,42.76276747232464L14.92898836312412,42.71462556705707L14.999640849729815,42.73839195477049ZM21.422346080611817,47.69220020905635L21.349570987112372,47.656621006631084L21.37868102451216,47.580595593667326L21.459340086474015,47.65114724414139ZM19.01834215868024,49.138726461418784L19.169956936804056,49.21744801704633L19.170866625472854,49.324433261291816L19.02016153601778,49.34722794966144L18.978922316368028,49.16760139045395ZM20.557232156637212,48.53563530127563L20.583916357586986,48.597348133316345L20.53479316947488,48.63261204788453L20.427753136119406,48.62683608975756ZM20.666394796886323,48.46145664187455L20.642136432386565,48.54353947773122L20.59634876939316,48.52742709626837L20.60271659007435,48.436223322895415ZM20.558141845305954,48.316742208300084L20.451405041506746,48.380891691924774L20.36801691353861,48.3529214694734L20.437153252363146,48.133102898643415L20.55541277929973,48.23465318732172ZM20.7146082963298,48.12732598135608L20.65032363040524,48.353529520555995L20.622729740786667,48.230396658017334ZM20.256731666395808,47.85002062039996L20.27098345553935,47.993845639842064L20.388030064250984,48.0722926772587L20.31707434808908,48.20090482360727L20.344061778595062,48.357785874687124L20.281899719564308,48.46419277223637L20.29615150870802,48.533507250255404L20.121794513865552,48.47179312136597L20.204576182721098,48.353833546051085L20.13271077789051,48.32312681551728L20.097536149365737,48.41433400790267L19.988676738672837,48.34410471493867L19.9128693496109,48.45233618945222L19.79127429755556,48.36386637012761L19.739422043437287,48.360218074339954L19.606304268244457,48.44078357686867L19.619039909606897,48.512226658028894L19.500780382670257,48.67760334847692L19.408901827127295,48.64446792775139L19.19603467864141,48.76849592339091L19.07352993791733,48.741441223601235L19.087781727061042,48.57393996495845L19.04532958918628,48.53137919774443L19.102943204873384,48.458112479181295L19.186028103285253,48.46632087191754L19.440740930533252,48.33741612525711L19.555664932351192,48.190567410403744L19.70818939914369,48.205769476211415L19.853133127030105,48.0586102049012L20.139078598571643,47.86826520122254ZM17.86273431982039,49.62774138462274L17.802088408570853,49.92312062239503L17.778436503183514,49.81676282831346L17.821495100170637,49.73805586195481L17.763275025371115,49.68852116994024ZM19.09263339996096,49.44965008553034L19.216351058909993,49.53474612288708L19.058671689661196,49.528060086584844L19.035929472942655,49.46818905580918ZM17.968864664507066,49.17337634464836L18.086820961887383,49.411356137468246L18.12381496774958,49.64020133260058L18.04709789001896,49.91977800062624L17.977355092082007,49.999999999999986L17.99827793146312,49.547510335774945L17.934296495094827,49.20893767281905Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#e7a4a4"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M24.944054146872304,21.53562573672893L25.043210211765313,21.563441537629878L25.034113325077897,21.63266898597398L25.082933283633736,21.674697858217343L25.05018449155898,21.733721053040327L24.938292785303588,21.72105141311483L24.894324499647666,21.690149255075617L24.888259908522684,21.61103586625849ZM25.577500689873716,20.73330514290697L26.07146163700122,21.09047886246691L26.26158656876845,21.335022471141833L26.163643422100506,21.356042681293182L25.856168652065264,21.164064001932744L25.797038888597058,21.082130660890897L25.638449830679463,21.01565200138665L25.417395484174904,20.760831723792407L25.46864127918076,20.630306328971713ZM25.160863279589364,20.419639051374027L25.235760979982558,20.43356104562225L25.136908144645815,20.59071262782261L25.08566234963996,20.454289020216123ZM26.9262657560634,19.102428821404033L27.012079720481438,19.187918485029336L26.968414664381783,19.230970463996883L26.613636083571976,19.265348853675953L26.699753277546336,19.156325278704905ZM26.087836033038514,18.794794932462622L26.23914758160612,18.744598441255704L26.283722326374573,18.788907813179797L26.261283339212184,18.858931423020174L26.391368818842466,18.926471929326887L26.464143912341854,18.912840247566358L26.464750371454443,19.11203126368477L26.420175626686046,19.13185538644614L26.38045255481751,19.03830706396205L26.008693118857877,18.870704848947533L25.96836358787698,18.756063282266574ZM25.754283521166087,18.63862022603368L25.76459332607857,18.67363759878763L25.872543048102727,18.675806778281903L25.813716514190617,18.761330870167072L25.757012587172312,18.743358991524055L25.720321810866324,18.6578334419532ZM25.531409797324102,18.085624620274245L25.661495276954327,18.123140862168192L25.74336725714113,18.16995675618393L25.71274107196018,18.239091616160984L25.740638191134906,18.3627788930795L25.74639955270368,18.511246324690056L25.621772205085904,18.572300947442024L25.62662387798582,18.755753423336202L25.71183138329144,18.78054185038573L25.75307060294108,18.852424999847365L25.795522740815727,19.148581702755443L25.692424691691542,19.29910673522548L25.496841627911806,19.423289397689324L25.424976223081103,19.380864523530605L25.38980159455639,19.26937507910445L25.43498279843726,19.174599894665413L25.493506102793106,19.15818372855199L25.405266301924996,18.876901336290587L25.31308451682571,18.7743447981821L25.179360282520463,18.4040047357498L25.139030751539565,18.462586037735356L25.078991299402503,18.4628959830097L25.13326938997085,18.26234222155764L25.18481841453297,18.241571705403587L25.188457169207936,18.143293657189133L25.248496621345055,18.142053496445726L25.27700019963231,18.197549245232636L25.47591878853069,18.089345299706046ZM23.687167636225638,18.27319232694041L23.71567121451301,18.205609834589254L23.68656117711322,18.129031719503892L23.857885876393198,17.87414410762606L23.876382879324296,17.707906256023072L23.867285992636823,17.6430786502738L23.92247377187391,17.59747975864302L24.007074818066997,17.656106534516184L24.050436644610443,17.634083110314307L24.112598703641197,17.704804549476535L24.18749640403439,18.09523634826838L24.371556744676695,18.3633988425847L24.41491857122014,18.603911592285293L24.51134557010687,18.71980916997044L24.476474171138364,18.80192140138459L24.87734364449784,19.208980102072715L24.732399916611428,19.19132553953964L24.5774496133688,19.298487334167127L24.52953934348176,19.23871344122422L24.48193230315087,19.342773604726638L24.65325700243079,20.132806488952887L24.856117575560518,20.349098224581255L24.861575707572968,20.513995770563604L24.952544574447245,20.601848500417958L24.93798955574738,20.727428592797878L24.860969248460435,20.808151094684476L24.87734364449784,20.854231408893895L24.965886674922103,20.955972416242773L25.518370926405396,21.397154597139085L25.98322183613311,21.59898294761834L26.25855427320596,21.622470567089024L26.385000998161217,21.68304163884612L26.421995004023472,21.53748014489367L26.287967540162015,21.485246475764455L26.23581205648742,21.376753384168786L26.591803555522176,21.49080994086858L26.61211993579076,21.445374167816645L26.573609782147344,21.386954037156876L26.64304935052803,21.360370322552093L26.663062501240347,21.300709219645398L26.56117737034117,21.30689186534015L26.553899860991237,21.24011747934088L26.265225323443417,21.071927218222342L26.18183719547534,20.92535832479755L26.33830364649907,20.771965875965215L26.39197527795494,20.759903872705145L26.44049200695457,20.610200330820334L26.523273675810174,20.633090207433796L26.470208503466836,20.824542299190384L26.513873559566548,20.85979802817051L26.496892704416666,20.97576289380512L26.55147402454122,20.989059422442907L26.625462036265674,20.935872350606466L26.597564917090892,21.10470157997638L26.601810130878334,21.14984204354245L26.79739319465807,21.15880808195967L27.029667034743852,20.900928291011624L28.086118808710694,21.315856640799296L27.345329002797655,21.516463339625957L27.283773402879433,21.48246473286106L27.272857138854476,21.59898294761834L27.04664788989362,21.58909327683756L26.950524120563102,21.507191094521993L27.15672021881153,21.82982027546327L27.274070057079484,21.927456133013017L27.231314689648514,21.946302591602752L27.227675934973547,22.068333555666143L27.272553909298153,22.186026957463866L27.17461076263021,22.186026957463866L27.13973936366176,22.247494530006307L27.20887570248624,22.396362075873135L27.19068192911135,22.450715523438987L27.338657952560197,22.592145950996347L27.3377482638914,22.645255067758697L27.60549996205816,22.815373036292144L27.556376773946,22.863532558005012L27.449639970146848,22.716886742494168L27.39445219090976,22.716269247069953L27.655532838839065,23.071583397652404L27.734372523463378,23.278979847763758L27.734372523463378,23.601420681967028L27.777127890894405,23.62023985548408L27.814121896756546,23.756284297875027L27.677668596445073,23.803171271094342L27.499369617371485,23.947522147111897L27.39354250224102,23.896014341205223L27.21251445716115,23.698598432109797L27.268915154623244,23.582292689443427L27.227979164529813,23.537556655242106L27.26739900684197,23.48819078138922L27.248295544798395,23.370629941147662L27.163088039492777,23.186088080078726L26.93445295408202,22.950893758644916L26.899581555113627,22.82988284676197L26.687017636183896,22.718739226784187L26.706424327783793,22.66933862750352L26.65699791011542,22.6267289099381L26.523880134922706,22.61684817055511L26.488099047285516,22.57763314968195L26.31252913421804,22.590910826097932L26.295851508624423,22.480361772347685L26.137868909819417,22.227726425855522L26.100571674400896,22.148032780024565L25.98140245879563,22.025083575732808L25.903169233283734,22.007783122511313L25.847071765377905,22.056285512433547L25.756406128059837,21.9901734617768L25.624804500648395,21.960514467831167L25.59781707014224,21.853921048920206L25.352807588694134,21.786252188220757L25.29398105478208,21.682732611036165L25.244554637113822,21.714253011043922L25.105069041239858,21.625251963226944L25.127204798845867,21.543661483320705L25.02744227484044,21.54706120494989L24.92313130749119,21.45835600521675L24.76029703578621,21.479992066708647L24.74180003285511,21.51677241314311L24.794258746085973,21.60021915034848L24.476474171138364,21.659864317784198L24.148076561722178,21.817151714128556L24.034062248573036,21.91602452175269L23.81452404984975,21.825185452425472L23.769342845968822,21.761531958650437L23.476726324189826,21.73990131354379L23.371202438615626,21.593420018510415L23.391215589327942,21.54427961529167L23.45580348480877,21.54644307451023L23.44276461389012,21.469792261182057L23.65017363036344,21.40179118457347L23.95795162995489,21.16004477124507L24.143831347934736,21.12943630746716L24.234496985252747,20.90556694649704L24.31303344032085,20.82887201071013L24.36306631710181,20.83227391499944L24.562288135556514,20.55266421141495L24.538939459725384,20.143018652570262L24.45828039776353,20.132187566864317L24.389750518051585,20.06657982715256L24.344872543726922,20.095670540079517L24.074998238666467,19.57903931604818L23.715367984956742,18.944750500046737L23.69778067069433,18.598643217449734Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#faeded"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M26.089655410376054,7.095715098919392L26.160307896981692,7.103558318648183L26.150301321625534,7.283932339898904L26.03143533557642,7.351680328507612L26.064184127651174,7.208964145350244L26.022944908001534,7.1565765787398306ZM26.260373650543443,10.333910518454601L25.232425454863858,10.374855587257677L25.140243669764573,10.427675087798498L24.639914901955876,10.45861524358569L24.10471473517873,9.94468239664976L23.985242290017197,9.964695055517268L23.993732717592138,9.89089614332277L23.959164548179842,9.747658715235843L23.792994751356105,9.566233094625773L23.5837663575453,9.49396527701412L23.636225070776106,9.46393015697707L23.910041360067737,8.822936171161608L24.048010808160427,8.762505774253476L24.134431231690996,8.211863184778814L24.066204581535317,7.954588462462453L23.616818379176266,7.702566278667739L23.51644939605825,7.6981771756527095L23.4054673784716,7.570883380889178L22.921816236256575,7.397156273573557L22.908777365337926,7.2246484159551585L22.78263386993882,7.261975813827512L22.77020145813276,7.3341165538142405L22.66043235877106,7.456114570175309L22.532166256478263,7.51820453371618L22.567947344115566,7.095401368618724L22.754736750764096,6.975861656072418L22.82963445115729,7.0175926621254945L22.92666790915655,6.994374161192617L22.94395199386264,6.95703496362141L23.02824981049946,6.952014441424055L23.24991061611655,7.013827543138795L23.572243634407812,7.269503829591571L23.89548634136787,7.421618190187964L23.91944147631142,7.4821427319470075L24.031029953010545,7.497821963684935L24.494061485400778,7.757741652748166L25.357659261594165,8.073677674391156L25.384040232987672,8.103760761457679L25.71698628574768,8.01883600743814L25.957144094295813,7.803822904264408L25.987770279476763,7.721062965327896L26.076919769013557,7.724511455893229L26.06024214342,7.591891299590799L26.12907525268821,7.330352840588382L26.186385638819047,7.285500641463642L26.396220491742383,7.3008698435368515L26.43927908872962,7.5122466021177985L26.63455892295309,7.691593478890063L26.710366312015026,7.955215290986494L26.599384294428376,8.237868412067904L26.48021507882305,8.39137729343728L26.3398197942804,8.44431587435426L26.18729532748779,8.661674738583372L26.24490894317489,8.731193038760324L26.211553691987604,8.816987250688456L26.259463961874758,8.86708215499096L26.222469956012446,9.073380253962895L26.255521977643525,9.227367778214933L26.17728875213163,9.30372555278801L26.19578575506273,9.40448263114908L26.13665599159441,9.435771302586637L26.15909497875674,9.49396527701412L26.09875229706347,9.567797267693528L26.119978366000794,9.737337220814283L26.19366314816898,9.863376335825983L26.17637906346289,10.136035030989397ZM23.916409180748985,6.078614843089397L24.110476096747448,6.149600823073499L24.01981045942938,6.240366121423911L23.699296818475602,6.282761752825081L23.536462546770565,6.276795090429417L23.484610292652235,6.231258630737628L23.505229902477083,6.14991490688741L23.591347096451443,6.170330100891363ZM25.43164727331856,5.77041514818027L25.51776446729292,5.772614736183137L25.6587662109481,5.909606141508895L25.648759635591944,5.967726394130715L25.55961014605515,5.990030924780228L25.539900224899043,6.08929453653942L25.35856895026285,6.190430726485694L25.310052221263277,6.331435564599801L25.242432030220016,6.375082572165773L25.18906362832041,6.348078217550864L25.15874067269567,6.17661159844986L25.28276156120097,6.138293726922356L25.226967322851408,6.029926268524996L25.28943261143837,5.947934548623948L25.27700019963231,5.867191496829243ZM23.31237590470363,5.246117643865553L23.40425446024659,5.454870751487455L23.406680296696607,5.743705399018047L23.245058943216577,5.572742576509121L23.24263310676662,5.445440277348638ZM23.891544357136638,4.549050197091972L24.130792477016087,4.630237627420371L24.240561576377672,4.563526069757252L24.233587296584005,4.772453435364405L24.294536437389752,4.923766454068009L24.199322356728032,4.970004131126139L24.202657881846733,5.017182738395007L23.872440895093064,4.894198132209475L23.83302105278085,4.747284305251512L23.699903277588135,4.661388790831019L23.80178840848731,4.638104195455931L23.835750118787075,4.558805704851288ZM25.59084279034863,3.9783057483683493L25.65997912917311,4.041916668776146L25.66665017941051,4.172901556939216L25.55900368694256,4.289069881755445L25.386162839881422,4.16754922599673L25.35493019558794,4.08348148660675Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f2cccc"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M30.396728027317977,37.879782947213684L30.381566549505578,39.11914519568934L29.874263501903215,39.120976607866126L29.77146868233524,39.069085911244066L29.323598627757463,39.045887257686374L29.300553181482712,39.452738410644116L29.221107037745753,39.61997100309141L29.221410267301962,39.78932505574225L28.95092950312909,39.78169681202186L28.60069936566299,40.03829459717731L28.46000085156402,40.02487057468525L27.96694959310537,39.94920618860151L27.692830074257472,39.991005020086845L27.355335578153813,40.15025958868305L27.05180279234986,40.40314906110413L26.767676698145806,40.541019814190236L26.519634921135207,40.90974728034787L26.379542866148824,41.21010875301661L26.345884385405327,41.42079313712328L26.19548252550652,41.71224044285245L26.185475950150362,41.9890172292791L26.124223579788293,42.15665094574933L25.900743396833718,42.36998413066671L25.383737003431406,42.38065024000749L25.602668743042273,42.06795909875143L25.70425064438524,42.028031334730315L25.719715351753905,41.97560596645931L25.874665654996477,41.92805626629768L25.879820557452604,41.87075137474522L25.795219511259518,41.830819927610875L25.772780524097186,41.73357914288616L25.855865422509055,41.606153420834495L25.84949760182792,41.46378111063743L25.956234405627015,41.312861981167025L25.905898299289902,41.22962311096895L25.991712263707996,41.225354360883365L26.116642840882093,41.07533268580376L26.002022068620477,41.008246287532614L26.089655410376054,40.87498179191663L26.091778017269746,40.79081025894871L26.03598377892024,40.62337172477136L25.94137615737094,40.58158617605024L25.995957477495494,40.50106267285999L26.059635684307523,40.518448702237365L26.050842027176316,40.3839318086705L26.11209439753833,40.36776477060018L26.168495095000424,40.208222624505034L26.369233061236343,40.056294847366885L26.36832337256766,39.89672756257678L26.72977300361481,39.65964084488034L27.083338666199666,39.556192399016794L27.230101771423506,39.57816421312298L27.452369036153073,39.52292903794489L27.588822336464546,39.431375537579974L27.688281630913707,39.28152355371136L27.762269642638216,39.407876102837506L27.865064462206192,39.43503776125567L28.148280867741505,39.407876102837506L28.28806969317168,39.32822003262325L28.44969104665165,39.32883043656143L28.702281267006015,39.122808018275364L28.698945741887258,39.01353076576021L28.614041466137962,38.980563204103056L28.522162910594886,38.838918228441486L28.6628614246938,38.776945192904265L28.654067767562594,38.51315517281874L28.740488191093164,38.46918652834364L28.80841161169269,38.27986512598563L28.908174135698175,38.20290956512065L29.269017307632907,38.14916090623291L29.53191733289964,38.21359803067973L29.623189429330182,38.19099948713489L29.71719059176695,38.05815104729356L29.776926814347803,37.837937202372316L29.838785643822234,37.81166857520362L29.90549614619681,37.86848163717379L29.97160018945874,37.8437406847265L29.98979396283363,37.75393734055382L29.921264083121685,37.714837886788835L29.86274077876584,37.62533358921836L29.863347237878372,37.55965353010649L30.03740100316452,37.59111916163449L30.08470481393914,37.691316711954535L30.23571313295048,37.63694190719916L30.255423054106586,37.69467689864481L30.187499633507116,37.77165400084285L30.19659652019459,37.815944889405685L30.269978072806452,37.879477507330485Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#faebeb"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M31.96776035823723,32.78137707892588L31.914391956337624,32.93425560102516L31.850107290413064,32.884319015991395ZM31.711531383207898,32.639207676380494L31.76975145800742,32.70477884450746L31.886798066719052,32.642271813019995L31.697279594064298,32.87267712271672L31.64997578328962,32.86991981915757L31.5765942306777,32.92016323361989L31.545361586384217,32.87788534913911L31.618439909439815,32.82243213996219L31.55627785040906,32.72714592929164ZM33.07788376365994,31.463953732345438L33.29166060081451,31.580172067845538L33.30682207862691,31.654681863119684L33.089103257241106,31.741451869805857L32.90261708014879,31.752489382772474L32.69247899766913,31.86684540679041L32.58210343919495,31.85396930080922L32.66943355139432,31.688409330638095L32.70521463903151,31.489712684542305L32.88290715899268,31.548281941872602L32.912926885061154,31.674611824084458L32.99843761992304,31.50013879767868ZM33.45964977497573,31.168306387107243L33.40506845485112,31.337912285133214L33.2686151545397,31.429914418199267L33.258305349627335,31.338832335310926L33.36110016919531,31.215233697325097ZM31.936224484387424,29.74226716259038L31.960179619330972,29.814724111825292L31.86102355443802,29.96392439550467L31.854958963313095,30.14257533032282L31.69515698717055,30.373375811000457L31.741247879720163,30.439662572458907L31.875578573137886,30.431070019675943L31.88255285293161,30.67102813953813L31.83919102638822,30.816456182215497L31.913482267668826,30.96156265996214L31.844649158400614,31.092544699049334L31.834945812600722,31.2676800652304L31.761564259988802,31.347419442176246L31.84950083130059,31.882173957794443L31.859810636213012,31.974448472276293L31.84616530618183,32.1405894107633L31.742157568388905,32.39804057559476L31.81220359588218,32.48905735342481L31.669685704445783,32.60611460441805L31.643911192164637,32.65881804347605L31.39647587426657,32.778313223867265L31.331584749229535,32.90423257438588L31.035935931888048,32.97316211313233L31.008038812713266,33.06322535371872L30.793655516446222,33.27427119472963L30.779403727302565,33.40198735482916L30.658718363915966,33.40658126463467L30.57987867929154,33.67698546361589L30.610808094028812,33.819365200080334L30.556833233016732,33.93785202712911L30.56107844680423,34.047452056600754L30.455554561230088,34.09918797507843L30.41219273468664,34.225918529970194L30.340630559412148,34.26632324716796L30.34548223231218,34.404977098980424L30.260881186119036,34.48608249453984L30.262397333900253,34.5931965424265L30.13109893604502,34.97568869278256L29.783597864585204,35.4278317209342L29.63107339779259,35.449548593599395L29.61894421554274,35.1929041946952L29.758733040972913,34.319888526002L29.84030179160351,34.22255142385988L29.839392102934767,34.0642893756262L29.900644473296836,34.06949360158855L29.932180347146527,33.95683358329214L29.90701229397797,33.861923512575935L29.825140313791167,33.82732583549689L29.834843659591,33.69841980114205L29.875476420128223,33.67055510497961L29.93612233137776,33.73669467254421L29.972509878127482,33.50703135331559L30.071059483908016,33.467832093104334L30.07803376370174,33.413625233184305L30.283926632393843,33.1955535674108L30.314856047131116,33.067820274804255L30.48102584395491,32.85398863406006L30.47799354839242,32.65391547556517L30.73937742587782,32.39436301396988L30.763939019933957,32.267481604683844L30.88007593997679,32.139363346480216L30.84975298435205,31.99743956466049L30.970135118182384,31.805529608554565L30.963464067944926,31.72397563798392L31.14327919479973,31.453220701175304L31.237583586792823,31.410901121411896L31.38798544669163,30.97720751262429L31.546271275052902,30.618253109300568L31.44741843971616,30.494285436641903L31.545058356827894,30.397006170996676L31.54930357061545,30.267494657054854L31.645427339945854,30.339924364593827L31.577200689790175,30.02531904622743L31.71880889255783,29.894238189398116L31.744886634395186,29.763452001462298ZM30.92859266897642,29.67564026605198L30.9901482688947,29.725994530045647L31.04412312990678,29.955635910540757L31.16602141151833,30.088552713965292L31.16359557506837,30.133674019939633L30.900695549801583,30.176338407386275L30.888263137995466,30.0919291885876L30.80002333712747,29.898536118049186Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f9e9e9"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M22.69257469173334,26.802636458812934L22.75837550543912,26.917099058592107L22.669832475014744,26.90540711191079L22.653761308533603,26.847868871399292ZM22.863596161457053,26.60938060674801L22.967907128806246,26.80602125258749L22.998230084430986,26.911253098589853L23.063121209467965,27.014630354540188L23.012481873574586,27.056471163259225L22.91059674267541,26.991555796224247L22.87542211415075,26.87279217014168L22.763227178339037,26.833406981573383L22.778388656151435,26.63615506253386ZM22.323544321779934,22.90829441977754L22.29746657994258,23.177446609673446L22.035476243344647,23.585686388198212L22.599483217965258,23.85283242228251L23.02461105582455,24.120535035048555L23.382725161753,24.253747113446963L23.396976950896658,25.522226328754094L23.35240220612826,26.29820149471996L23.385454227759283,26.88356134656673L23.282962637747573,26.790635754065406L23.128922023173743,26.775250070177904L22.98731382040603,26.776173216439894L22.990649345524787,26.708166320502443L22.931822811612733,26.639540298407283L23.024307826268284,26.568448451775545L22.978216933718613,26.433332189170017L22.91999685891909,26.41117051482943L22.871176900363196,26.461649319262968L22.775053131032678,26.419788989883727L22.424822993566693,25.97062634711328L22.40632599063548,25.860389126782366L22.464546065435115,25.745214690008062L22.435739257591536,25.643889316462598L22.241975571149283,25.407944614623425L22.21741397709326,25.323535683102506L22.01637278130096,25.27208652219609L21.996662860144966,24.99847626450415L21.927526521320488,24.944856264158645L22.023650290651005,24.73929103151169L21.97058511830761,24.659767699164156L21.942991228689095,24.514886164898115L21.851112673146076,24.27132259934656L21.59761276412297,23.864861829087445L21.463282070705247,23.83124087314843L21.348964527999897,23.741477499255787L21.203414341001007,23.756901243794857L21.206749866119765,23.628569557685026L21.14852979132013,23.629186570322112L21.079999911608184,23.54465282929202L21.094858159864373,23.46566691271027L21.032392871277295,23.29286668689823L21.05543831755216,23.220653321829204L21.01814108213364,23.16726193736889L20.939301397509325,23.130534652962957L20.804061015422803,23.180841480680677L20.81649342722892,23.255526144955496L20.776163896248022,23.290706522750916L20.664878649105106,23.26879606092176L20.557535386193422,23.150595918099654L20.524483364562457,23.072200703750134L20.60938764031181,22.93391594881726L20.722189035235942,22.858593212107685L20.90776552365952,22.823399762449725L21.064838433795785,22.891007285045866L21.314396358587658,22.879276582441605L21.487540435205062,22.940398414622678L21.6537102320288,22.928976902931808L21.900842320370657,23.016024507137644ZM20.549348188174804,22.34355028938677L20.777983273585505,22.432186228659397L20.8671327631223,22.427245032798055L20.90018478475332,22.512168875163013L20.793144751397904,22.495802223597906ZM20.502044377400125,21.868134084777374L20.639104136824074,21.957733897373032L20.632129857030407,22.01365294869587L20.56420643643088,22.057830140499952L20.40986259230084,21.95711599190055L20.47657309467536,21.934562211594283ZM19.898314330911035,21.77883617619313L20.03598054944746,21.806645970162684L20.23307976100847,21.945684679898093L20.294938590483014,21.912316947374073L20.493250720268975,22.180158020937455L20.41319811741954,22.1758335220481L20.388030064250984,22.280543564417727L20.29099660625178,22.258922809003863L20.234595908789686,22.183246938666684L20.147569026146584,22.175524628642208L19.923179154523268,22.027246113846886L19.90437892203596,21.86936999249857L19.849797601911405,21.829202300156474ZM19.72638317251858,21.67160755340823L19.79582274089927,21.737120200508308L19.764590096605787,21.773274135201063L19.67362122973151,21.713943991793762Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#e9acac"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M22.10643195950655,47.34003784362824L22.159193902293623,47.444961237459324L22.076715462994287,47.51886147358151L22.055489394056963,47.447394197610976ZM22.047302196038345,47.46442486033523L21.968462511413918,47.44100767276717L22.067012117194338,47.32969735636197ZM22.029411652219665,47.182189207846704L22.07823161077556,47.22233652347123L22.046695736925756,47.3248312315903L21.926010373539157,47.3981263479144L21.886590531226943,47.303845972278665L21.94390091735778,47.200438059061156ZM22.198613744605836,47.12592116619932L22.364783541429574,47.26917433156416L22.294737513936354,47.389610830295474L22.21983981354316,47.423976869600295L22.095515695481595,47.31175347964552L22.086418808794235,47.25366319596368L22.114012698412807,47.16454853845007ZM22.872086589031937,46.834829882090965L22.77353698325146,46.91209221339288L22.68772301883331,46.83817593363089L22.85965417722582,46.79923980811699ZM22.247433703161732,46.77733799392701L22.313840975979986,46.80775713290956L22.228633470674424,46.8862369507874L22.037598850238396,46.88654113176091L22.073683167431795,46.77855476598847ZM22.40390015418558,46.61033086805858L22.4469587511727,46.73140445170981L22.315357123761203,46.79832723603003L22.308686073523745,46.65322438879554ZM23.096779690211463,46.32800752570601L23.228987776735437,46.375773372288975L23.275078669285108,46.4770828191849L23.14135443497986,46.542186570439014L23.073127784824123,46.517544681713616L23.046746813430673,46.437228809510785ZM19.61115594114449,46.05508678570834L19.604181661350765,46.145759236579146L19.54747773433246,46.115636856480585ZM24.427654212582468,45.943111107874635L24.46070623421349,46.01644354751646L24.380653631364112,46.07729878286865L24.343659625501914,46.00244664332742ZM19.99292195246028,46.00488089291595L19.952289191923114,46.01218362808446L19.890127132892303,45.94676256441204L19.921056547629576,45.90081469646849L19.975941097310397,45.930026679922456ZM24.33668534570819,45.78578931568886L24.335169197926973,45.827478998769756L24.230251771465305,45.881948449398166L24.292717060052325,45.7510981177247ZM24.698134976755455,45.706364041794956L24.74604524664261,45.75961880604474L24.859756330235427,45.77696440603546L24.674483071368115,45.907509138317025L24.628998637930977,45.87981838063699L24.730883768830154,45.78426778169285ZM23.918835017198944,45.706364041794956L23.967654975754783,45.76479206736469L23.945822447704984,45.8223058629263L23.8242273956497,45.81926283701271L23.80542716316228,45.75961880604474L23.87486673154308,45.69662590861593ZM22.98731382040603,45.59224297295034L23.118005759148843,45.63363146769683L23.27598835795385,45.88225274479284L23.498558852239626,45.81135095289125L23.612269935832558,45.864299255480915L23.84302762813701,45.838433840559446L23.91913824675521,45.884991401740606L23.93975785658,45.995143880960484L23.825440313874594,46.052044031721735L23.817253115855976,46.16310226887872L23.721735805637934,46.12293928330777L23.516752625614515,46.30944858990076L23.50432021380834,46.24738169895423L23.3684733726094,46.197787991474826L23.396067262227973,46.11381124660679L23.36877660216561,46.06360647808644L23.24354279543536,46.01187934785961L23.20291003489814,46.06999622920944L23.07070194837422,46.14332511765047L22.909990283562934,46.19991780170188L22.879667327938137,46.24281789965772L22.725626713364306,46.08490558799489L22.469397738335033,46.20600296432257L22.284730938580196,46.11137709813724L22.266233935649097,46.006402297757845L22.408751827085496,45.78852807462344L22.645270880958662,45.703016562673945L22.7059167922082,45.603198816119885ZM24.98104815273456,45.58615637312582L25.128417717070874,45.74622914032955L25.267296853832363,45.80952513004273L25.528983960874086,45.70910288510828L25.41315027038746,45.81439398810866L25.244554637113822,45.876166830123964L25.0037903694531,45.70818993766115L24.94223476953482,45.63271849341182ZM25.197554055895353,45.41816047981908L25.230302847970165,45.50337717433742L25.1311467830771,45.506116234961624L25.120836978164732,45.46289960111718ZM21.005405440771256,45.34298480157362L21.03148318260861,45.37402927981921L20.990243962958857,45.46472567094166L20.87562319069724,45.4044646725377ZM25.1311467830771,45.33202783571627L25.172386002726853,45.41633437646172L25.092939858989894,45.4753777187474L25.061100755583936,45.4044646725377ZM22.546721275178243,45.241326676068674L22.626773878027564,45.28119906528933L22.609186563765206,45.329288586812595L22.539140536271987,45.34450659862262ZM21.605193503029113,44.8940142688211L21.64309719756011,44.94119803710086L21.629451867529042,45.02338696615145L21.536966852873434,45.109530217230215L21.500579306123768,45.05808814013365ZM22.23348514357434,44.82552009354147L22.27320821544282,44.8946230973871L22.17101985498732,44.9287172571302L22.184665185018503,44.84408981402157ZM21.42628806484305,44.668737333285776L21.371706744718438,45.10770388949754L21.23464698529449,45.14331703897247L21.069386877139493,45.09765906303466L21.075148238708266,45.042868386692234L21.194014224757325,45.062958441544765L21.3043897832315,44.73419155285928ZM21.773485906746657,44.53691023434834L21.774395595415342,44.66295292239394L21.648858559128882,44.639510695407914L21.645523034010125,44.60145465080936Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f6dcdc"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M29.733868217360566,32.491508907515275L29.47794247188756,32.39712118603445L29.106486265484136,32.40662151763356L29.324205086869995,32.84295925429382L29.061001832046998,33.1609410395765L28.777482196955418,33.6310537490689L28.688332707418624,33.939382806268824L27.917523175436997,34.92153328610574L27.64795209993281,35.19351602866454L27.54303467347114,35.43823138563557L27.313489899391698,35.219212849577985L27.257089201929602,35.061966472544356L27.14004259321797,34.99588177351487L27.094558159780775,34.8135230492829L27.026937968737514,34.82484457277898L27.07090625439355,34.70428157999808L26.98903427420663,34.66939619418138L26.919897935382153,34.70611763205437L26.88563299552618,34.60727385800662L26.836813036970284,34.55800271450014L26.891394357094896,34.44751968670235L26.860161712801357,34.30886953005162L26.898065407332354,34.228061230144775L26.822258018270418,34.16347285530358L26.992673028881654,33.97214112328531L27.049073726343636,33.73669467254421L27.218275818729865,33.70423764200274L27.695862369819963,33.73148934508525L28.043969900392256,33.45741962308924L28.18254580759742,33.46875083710135L28.313237746340235,33.369217069103684L28.231668995709583,32.970098644229346L28.2340948321596,32.75165742367015L28.303231170984077,32.526749555926244L28.0949124658419,32.06211925695539L28.190429776059887,31.971382966302087L28.272604985803014,31.98303185521415L28.352051129539916,31.933370164261433L28.35781249110869,31.883093665789225L28.46576221313279,31.79633201861585L28.54247929086347,31.576492473444354L28.549150341100926,31.44432755827652L28.601305824775523,31.424701119612934L28.616770532144187,31.234556264582046L28.563402130244583,31.189469872574996L28.541569602194784,31.045613396240853L28.585234658294382,31.000521094384943L28.571892557819467,30.92045576338129L28.835399042198674,30.83271620243277L28.90119985590451,30.887937532370252L29.107395954152878,30.689437573058015L29.189571163896005,30.68176700470145L29.30904360905754,30.587262206994957L29.461264846293886,30.60505904546809L29.680803045017285,30.754482332169665L29.956438711646342,30.742823584301384L30.139286134063752,30.846521734781604L30.210241850225657,30.793753202891367L30.27664912304391,30.84958961275725L30.33274659094974,31.10082653488159L30.431599426286482,31.078128056416737L30.40279261844296,31.155730835773745L30.4397866243051,31.229035557422428L30.358824332787037,31.364900181341582L30.25845534966902,31.501365394322782L30.197506208863274,31.834654930924273L30.125034344920095,32.0608931278925L29.997981160852305,32.20434336141541L29.800881949291295,32.3097766038877Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f6dddd"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M25.208167090364043,28.25697438444253L25.34674299756921,28.20349170904221L25.48198337965573,28.076845964466678L25.64299827402317,28.05624951527608L26.173649997456664,28.270498397900056L26.223986103793777,28.390056989942323L26.11088147931332,28.618694492636962L26.137868909819417,28.768639853574975L26.108152413307153,28.884774582479082L26.152120698963074,28.961270577429815L26.091778017269746,29.144659060514037L26.18395980236903,29.24540469055642L26.19457283683772,29.37562583444739L26.260980109655975,29.413399933692077L26.23581205648742,29.545754634217367L26.28948368794329,29.638487468454336L26.294335360843206,29.939058792674402L26.336484269161588,30.067372823550343L26.40713675576734,30.166823440702665L26.653965614552988,30.508707975785697L26.632436316059398,30.725948911928207L26.664275419465355,30.798661985758365L26.577551766378576,30.819217330765618L26.529641496491422,30.927511508516623L26.47506017636681,30.919228673725L26.291909524393247,31.106961197399563L26.214585987550038,31.34619271573458L25.905898299289902,31.548588581014073L25.78521293590336,31.751569593192194L25.748218930041162,31.903633661650815L25.71637982663509,32.150091374684735L25.724870254210146,32.21016690354638L25.773993442322194,32.23254135377096L25.564461818955067,32.41949283861622L25.414666418168736,32.2950654356267L25.422550386631087,32.11729401647786L25.555971391380126,31.97475502252435L25.61692053218593,31.618807250053344L25.57810714898625,31.469780201860537L25.45014427624966,31.32288471631029L25.53171302688031,31.1818019788833L25.634204616891964,30.812161051641993L25.846162076709106,30.49950211670003L25.78218064034087,30.013347301398156L25.841916862921664,29.906824942946322L25.83949102647165,29.7926190033132L25.764290096522245,29.67564026605198L25.858897718071546,29.54514048868905L25.84009748558418,29.161245743405757L25.90923382440866,29.129915172743445L25.942285846039624,29.057422066467225L25.919543629321083,28.932700290092285L25.991712263707996,28.612548833927427L25.98534444302686,28.43123921319686L25.87557534366516,28.318138712825785L25.81735526886564,28.349795526989183L25.433466650656044,28.24160602018764L25.332187978869285,28.276338270248097ZM23.967654975754783,27.934508713844437L24.205386947852958,27.952032703670604L24.25996826797757,28.003066153439953L24.212057998090415,28.06116809948653L23.974629255548507,28.01167401053805ZM24.332440131920748,27.649480475557027L24.402486159413968,27.725432568184964L24.418557325895108,27.8176761488403L24.32789168857704,27.86225822130092L24.28816861670856,27.825977752877698L24.281194336914893,27.682998339547765ZM23.72446487164416,27.1675273001403L23.823014477424692,27.182293046262892L23.894576652699186,27.401606042050965L23.94703536592999,27.433592493505998L23.830595216330835,27.57936693273777L23.730226233212875,27.361621869063725L23.807852999612237,27.313639233592696L23.693232227350677,27.259195243750973Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#e7a5a5"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M29.434277415787903,25.676228100415692L29.863953696990848,25.859465310041656L29.74417802227299,25.86716376196229L29.80906914730997,26.036517695437183L29.697177441054578,26.087935170627652L29.770558993666555,26.17598654989694L29.851218055628408,25.961388964768823L29.9421869225028,25.916124804040138L30.065298122339243,25.93552393092567L30.343056395862163,26.146123662270533L30.400366781993,26.10671587820658L30.445244756317607,26.2597219983165L30.564717201479198,26.34776135575973L30.456161020342563,26.435178977838724L30.598375682222695,26.414556351320286L30.689344549096973,26.474576494149744L30.745745246559068,26.452107748373933L30.82246232428969,26.503508264658933L31.09021402245645,26.9247910705906L31.083542972218993,26.830022260332548L31.14085335834983,26.775250070177904L31.209989697174308,26.799251656069643L31.306719925617244,26.92848321995033L31.361604475298122,26.842945693225076L31.42892143678506,26.88386903599043L31.501393300728296,27.058317049926757L31.904991840093942,27.624879661303915L31.89437880562531,27.688225818857156L31.78521616537614,27.5009460041313L31.724570254126604,27.563990652059154L31.78582262448856,27.676540836256592L31.82221017123834,27.674388328072588L31.959573160218497,27.97662738394034L31.9149984154501,28.15615466862016L31.960179619330972,28.381758925342574L31.898017560300218,28.364855300598293L31.78855169049484,28.183204613001948L31.502909448509513,27.939735191352824L31.459244392409857,27.94895833635539L31.323700780767126,27.836431549954774L30.90281815669539,27.73650214070598L30.87158551240185,27.66024318612017L30.93101850542638,27.58520987185529L30.98923858022596,27.578444361010447L30.68509933530953,27.380383826787153L30.65811190480349,27.323174385977637L30.53621362319194,27.296721854933807L30.578059301954113,27.232433798405957L30.34487577319959,26.878945996336434L30.23116468960677,26.836791693853208L30.015568475114662,26.908176266821272L29.831811364028567,27.193367244964584L29.734171446916832,27.23950871715047L29.670190010548538,27.29395353555737L29.615305460867717,27.456351604334657L29.198364821027212,27.815216404227378L29.145299648683874,27.73650214070598L29.30874037950133,27.466808359468104L29.291153065238973,27.408680036682675L29.338456876013595,27.346243012713096L29.373631504538366,27.12076798855614L29.441858154694046,27.103540446022727L29.569214568318046,27.02755192613934L29.530401185118365,26.918945145682848L29.577401766336777,26.867561394610732L29.510994493518524,26.770326612171786L29.425786988212906,26.78909719401939L29.39061235968819,26.701703938040204L29.522820446212222,26.498275972116325L29.500987918162366,26.365922556676374L29.547078810712037,26.33606417277113L29.5919567850367,26.173523658186213L29.474910176325068,26.119646693749402ZM30.609291946247595,25.391617790956133L30.702080190459412,25.526846660761088L30.918586093620206,25.643273331440213L30.949515508357536,25.773239397923753L31.04988449147544,26.007575194083586L31.064136280619095,26.251410272735924L31.11720145296249,26.270188537688142L31.096278613581376,26.380389767125585L31.142369506131047,26.386238166877874L31.107194877606332,26.485656824746897L30.92101193007022,26.288043021819583L30.791229679996206,26.100866179771778L30.79547489378365,26.042675588126066L30.637189065422376,25.855154156198985L30.567143037929213,25.658672865189104L30.531968409404385,25.678076005461747L30.470412809486163,25.585061364949205L30.54106529609186,25.542247642725272L30.525297359166984,25.449838870775054ZM28.70197803744975,23.957391651371587L28.75140445511812,24.022775048332157L28.85086374956734,24.02894310789202L29.270836684970448,24.71124270047732L29.438522629575345,24.72326349330337L29.55132402449948,24.783982085939705L29.587711571249258,25.006796398031327L29.881541011253148,25.392541956563626L29.804823933522528,25.383916383927165L29.72901654446065,25.30443504840892L29.509478345737307,24.96457883741133L29.31905018441381,24.93622753794532L29.23232653132692,24.803399065389712L29.162280503833642,24.73836637160892L29.041898370003366,24.680419609414145L28.98883319766003,24.56051031128048L28.949110125791606,24.580239137388723L28.907870906141852,24.45322916818469L28.670138934043734,24.428257185836465L28.607976875012923,24.32836406695673L28.549150341100926,24.368137322823515L28.550363259325934,24.24480510055475L28.593118626756848,24.187759652312053L28.49729808698254,24.098639961765166L28.61980282770662,24.05022266814796Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f3d2d2"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M29.158338519602466,30.123851818683733L29.17835167031484,30.161912464887735L29.06524704583444,30.292354426010633L29.04098868133468,30.178793872177515ZM29.215648905733246,29.64186503680631L29.303888706601356,29.702352817324623L29.1698612427399,29.840512960046L29.178654899871105,29.668271195549615ZM29.500987918162366,29.183361006418764L29.55465954961818,29.228204743967922L29.477336012775083,29.30007451093889L29.45125827093773,29.201790118137218ZM29.427909595106712,29.171381950178876L29.339669794238603,29.18428246792196L29.292972442576456,29.132372498462907L29.316321118407586,29.05312150645176L29.374844422763317,29.032232878325686ZM29.31055975683887,28.939458907132803L29.29448859035773,29.025167534293224L29.185022720552297,29.08906148233052L29.213526298839554,28.988918668801105ZM25.773993442322194,32.23254135377096L25.724870254210146,32.21016690354638L25.71637982663509,32.150091374684735L25.748218930041162,31.903633661650815L25.78521293590336,31.751569593192194L25.905898299289902,31.548588581014073L26.214585987550038,31.34619271573458L26.291909524393247,31.106961197399563L26.47506017636681,30.919228673725L26.529641496491422,30.927511508516623L26.577551766378576,30.819217330765618L26.664275419465355,30.798661985758365L26.632436316059398,30.725948911928207L26.653965614552988,30.508707975785697L26.40713675576734,30.166823440702665L26.659726976121647,29.902220046323002L26.86834891082009,30.01119851581545L27.0569576948061,30.004752139214013L27.18340441976136,30.049876150276894L27.347451609691348,29.97589656453745L27.383839156441127,29.86660833085734L27.483298450890345,29.916034690471534L27.583667434008362,29.87489734608056L27.658868363957765,29.948268326956025L27.998788696511383,29.897922129055004L28.05973783731713,29.9252443770488L28.054582934860946,30.040053360473678L28.26623716512188,30.00935669696819L28.334767044833825,29.858012262847843L28.38176762605218,29.86906434052178L28.38146439649597,29.74625853381778L28.558247227788343,29.661823226622936L28.522769369707362,29.496315042264037L28.64769994688146,29.4238413710793L28.762623948699286,29.42998335595704L28.866025227379737,29.379925377911306L28.86481230915473,29.216533228182044L29.009452807484934,28.926556063493983L29.167132176733674,28.760036883190793L29.20958431460832,28.873714562540407L29.133776925546385,29.040219744680087L29.216861823958254,29.156945511684278L29.10406042903412,29.32249464779329L29.176532292977356,29.39159549932618L29.120131595515318,29.54452634288687L29.017336775947342,29.585366442411186L29.045233895122124,29.686079715341982L28.997323625235026,29.898229123585963L29.09223447634048,29.991245348795772L29.08131821231558,30.09377089858252L29.030072417309725,30.121703202973997L28.91878717016681,30.082413648313164L28.807805152580215,30.08333450987905L28.744430175324396,30.311996401928212L28.570982869150725,30.496126620034417L28.543085749976,30.423704932834L28.48516890473269,30.394551087083435L28.430284355051754,30.534484062840235L28.326883076371416,30.50042270530264L28.201346040084843,30.59063748661103L28.05306678707973,30.638504224683842L27.98726597337395,30.761232090001116L28.079144528917027,30.92045576338129L28.044576359504788,30.931499523012604L28.05973783731713,31.0413189522315L27.986356284705266,31.071993271093525L27.99727254873011,31.14284845005502L27.889626056262216,31.2676800652304L27.71860458653856,31.225355074276216L27.695862369819963,31.27994794722563L27.53242163900245,31.293749190287066L27.468440202634213,31.378700616262662L27.503918060715193,31.435127698108126L27.44600121547188,31.557481088110464L27.069086877056066,31.555334625837162L26.51296387089775,31.64854951290193L26.42563375869844,31.71723037006732L26.311619445549354,31.707112410071964L26.115733152213295,31.873283417615674L25.97139588343947,31.903633661650815L25.918027481539866,32.05384286611196ZM29.797849653728804,28.7723268240643L29.730835921798075,28.838076104511984L29.71385506664825,28.75942238320369Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fcf3f3"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M23.92247377187391,17.59747975864302L23.867285992636823,17.6430786502738L23.876382879324296,17.707906256023072L23.857885876393198,17.87414410762606L23.68656117711322,18.129031719503892L23.71567121451301,18.205609834589254L23.687167636225638,18.27319232694041L23.59589553979515,17.646490731104798L23.79117537401862,16.764555175080112L23.50462344336455,15.87346092671239L24.009500654517012,15.466939609681418L24.06832718842901,15.419376881732411L25.183302266751696,14.451144370942409L25.879820557452604,13.641726507606279L26.082074671469798,13.51028708638092L26.508112197997832,13.530533679400548L26.421388544910997,13.581615473097727L26.3759041114738,13.733910149909462L26.287664310605805,13.806467355450877L26.359832944992718,13.948140430390154L26.364381388336426,14.051190525033462L26.264315634774675,14.118120455454957L26.227928088024953,14.216483425635452L26.275838357912107,14.257880022913831L26.404407689761115,14.188780948764908L26.309496838655605,14.325418020460937L26.306161313536904,14.411000854738262L25.895891723933744,14.786853289097706L25.903472462839943,14.877683212949762L25.779754803890853,15.004582087960074L25.65027578337316,15.069580274161702L25.765199785190987,14.836002039293142L25.964724833201956,14.637525392072291L25.970789424326995,14.524892068928793L26.073584243894913,14.458301566910542L26.08025529413237,14.346892244893326L25.96654421053944,14.339111784023196L25.89831756038376,14.408200082062905L25.87557534366516,14.48599630438747L25.920150088433616,14.569386907236947L25.739122043353746,14.601123235662932L25.48895765944934,14.769432883157215L25.29034230010717,14.782187139519586L25.014706633478056,14.967260601791992L24.95497041089726,14.920917771171766L24.89887294299143,14.94642215154218L24.666295873349497,15.144524976687293L24.623540505918527,15.25366655532676L24.332743361476957,15.475954508616084L24.32789168857704,15.820945761508511L24.38368592692666,15.932187619169326L24.468590202675898,15.898008484399618L24.583210974937515,15.939955440650841L24.589578795618763,16.079765873954493L24.5010357651945,16.071067129847286L24.520442456794285,16.25372486007602L24.420376703232535,16.302490079422512L24.258755349752562,16.573606371817164L24.146560413940847,16.64036493485993L24.091372634703873,16.971918937508285L24.027694427891788,16.99178390155579L23.95946777773611,17.136413985393467L23.876382879324296,17.071860605298397L23.81604019763097,17.13268986300757L23.783291405556213,17.295917813619106Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f7e1e1"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M37.069597642104384,36.00399768367745L37.31005868020878,36.28222377650532L37.44196353717649,36.51180254058474L37.50291267798224,37.10654777978175L37.65179839009983,37.27796554538453L37.72063149936804,37.51627281874956L37.850413749442055,37.71331054712181L37.78976783819252,37.7970068495361L37.812510054911115,38.036161406332674L37.88771098486052,38.04226966658509L37.939866468535115,38.36048177851626L38.14060443477109,38.34124403464761L37.99414455910352,38.50460579594204L38.11058470870262,38.61879779283022L38.35650387881941,38.64871859979908L38.59817783514882,38.632842313134674L38.62395234742985,38.73817284196973L38.6946048340356,38.82670695493407L38.69369514536692,38.899973404822035L38.636081529679814,38.90088921737002L38.48264737421846,39.076106500369406L38.43928554767513,39.2332998476198L38.51812523229944,39.24398241927732L38.70309526161054,39.4206940119818L38.90413645740273,39.399330782522455L38.722198723654174,39.576943563339015L38.86047140130313,39.61936069148715L38.87684579734048,39.77376340687565L38.30586454292609,39.77650958923586L38.01931261227202,39.90160935452272L37.95047950300375,39.97483477472912L37.80614223422987,39.89093041883102L37.75368352099906,39.78200194234398L36.82701399710618,39.78200194234398L35.93673201996302,39.82075310512225L35.917628557919386,39.69839444507622L35.95583548200659,39.54001854277669L35.89670571853827,39.47165961429525L35.90822844167576,39.31112864327348L35.84879544865112,39.1832435710303L35.881847470282196,39.05412891717303L35.82362739548262,39.01139399679745L35.78299463494545,38.8605930432405L35.622282970134165,38.74946880670912L35.57164363424084,38.64566547826033L35.52009460967872,38.00103851172394L35.514333248110006,37.76279569248929L36.106237341905455,37.760962933596076L36.28635569831653,37.63663642611055L36.82519461976864,37.644578917491835L36.71906427508196,37.30668632350155L36.81488481485627,37.1346602146609L36.81124606018125,37.00142773001313L36.88978251524941,36.76855207909158L37.04382312982324,36.49957541865979L37.10689487752279,36.22260773539466Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#e39595"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M34.27018237882572,28.46842505435808L34.35417696590639,28.47364942843668L34.383893462418655,28.52712125979898L34.419371320499636,28.68199313994358L34.28079541329441,28.65833331514405L34.29140844776316,28.543715531508752ZM33.96755928169057,28.367928702865306L34.03730207962758,28.517902131050292L34.19498144887632,28.616236232531726L34.13615491496432,28.696434646457085L34.19164592375762,28.72716074002075L34.324763698950335,28.75419912199299L34.26775654237582,28.821485466925893L34.29171167731937,28.919797382012035L34.243498177876006,28.972637083285555L34.14646471987675,28.914574741377535L34.1901297759764,28.860196637442627L34.06944441258986,28.835003779605785L34.05579908255868,28.730847824090063L34.13858075141434,28.734842153765904L34.01819861758395,28.603023007280107L33.92055870047221,28.43154653844259ZM34.02668904515889,28.32766657104817L34.10977394357076,28.37008008023387L34.067018576139844,28.453981090285374L34.01183079690276,28.413721557195757ZM33.69465268106768,27.77247760537015L33.76075672432967,27.80568485030539L33.740137114504876,27.866562617166963L33.66796848011785,27.806299791357397ZM33.107600260172205,27.74757161966219L33.1597557438468,27.86994463260018L33.11032932617843,27.897615341161135L33.009657113504204,27.86225822130092L33.027850886879094,27.770632733771272ZM32.75464105669988,27.648865460847198L32.77495743696852,27.715285377821388L32.691266079444176,27.827822546645415L32.59423262144492,27.841043492795976L32.59696168745114,27.744804258693208ZM33.029973493772786,27.557840089006746L33.07060625431001,27.595665592318753L33.039980069128944,27.663010725938214L32.96993404163578,27.630414884912476L32.96872112341077,27.570141186091313ZM32.42684990639623,27.27426753807469L32.40016570544634,27.32071370821231L32.280996489841016,27.43236225994155L32.1882082456292,27.385612520745376L32.25704135489747,27.290570026055413ZM32.8289322979806,26.656466342649317L33.04483174202886,26.654004386571863L33.21160799796519,26.494890359547995L33.69101392639277,26.780481223502562L33.91206827289727,26.631538817276535L34.302324711788,26.852792030622346L34.26654362415081,26.986017840525406L34.344776849662765,27.09923352437866L34.49426902089283,26.746016759825437L34.69985866002867,26.82140656582358L35.09799906738192,26.65862055030984L35.24324602482454,26.644156514624534L35.221110267218535,26.95125123934988L35.12013482498804,27.016476301296784L35.12801879345051,27.544001216007423L35.409112592092015,27.543386151573856L35.59711491696555,27.97754967552165L35.63380569327154,28.51974596188178L35.44883566396044,28.65433875815183L35.40517060786084,28.76218763093791L35.479158619585235,29.23741902802226L35.64441872774023,29.294239072573326L35.70930985277727,29.37624005576813L35.53525608749112,29.62528416742426L35.54708204018476,30.237416818029672L35.494016867841424,30.335627790998466L35.41305457632325,30.297264945692405L35.369995979336124,30.038211579695037L35.23536205636208,29.752399082475137L34.99429455914526,29.7201608982121L34.80022764314674,29.77665398359101L34.71441367872865,29.728450788724828L34.697432823578765,29.60931721603992L34.76838853974073,29.51566118111017L34.73169776343474,29.304681418373796L34.669535704403984,29.27273987417213L34.657406522154076,29.20516876159875L34.600702595135715,29.221140417392945L34.48547536376162,29.15540971135043L34.49669485734279,29.07278109822446L34.44029415988069,29.038376625846524L34.410880892924695,29.146502035257235L34.2956536615506,29.16953900910238L34.235917438969864,29.09182605648872L34.348415604337674,28.89337675763644L34.419371320499636,28.82578676292296L34.61950282762308,28.84299180981678L34.65073547191662,28.76403112627353L34.73715589544719,28.700429078316667L34.7038006442599,28.532652706561507L34.869667211527485,28.402657655943763L34.90271923315839,28.337809054848243L34.892409428246026,28.265887954232902L34.76838853974073,28.205643352540008L34.50154653024276,28.325822474780736L34.43180373230581,28.284329632930415L34.41482287715593,28.20871712291106L34.345080079218974,28.16783539416084L34.34720268611267,28.10236052365618L34.094006006645884,27.94834346203131L34.102496434220825,27.90161217316323L34.170116625264086,27.872404274722072L34.14100658786424,27.821365757116475L33.98181107083428,27.846577802827554L34.019411535808956,27.790926178581756L33.90873274777857,27.688840815049296L33.89842294286615,27.591360305806695L33.830196292710355,27.50002337686444L33.67858151458654,27.36685063866384L33.55334770785635,27.32563505906797L33.34775806872034,27.33240188596357L33.116090687747146,27.10784735326073L33.109722867065955,27.050010539056977L32.92899805154235,26.923868031588647Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f6dede"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M23.66624479684458,12.833489952500166L23.74781354747529,12.809176027428855L23.82149832964342,12.73342475253088L24.011926490966914,12.671073422449211L24.06832718842901,12.635531302854282L24.163541269090786,12.617759735789193L24.23298083747153,12.57785042217425L24.430989737701225,12.35270492741548L24.354575889526814,11.945932462133655L24.33122721369574,11.823616134396389L24.317581883664616,11.174005292880459L24.483448450932087,10.807321541632803L24.697225288086656,10.65673198714903L24.639914901955876,10.45861524358569L25.140243669764573,10.427675087798498L25.232425454863858,10.374855587257677L26.260373650543443,10.333910518454601L26.258857502762226,10.465178169760549L26.44049200695457,10.758898182950631L26.45262118920448,10.834812357189179L26.429272513373462,10.906034670738507L26.551170794984955,10.98318584938427L26.623642658928134,11.007548013875905L26.659726976121647,10.976314351198006L26.754334597670947,10.999115031068875L26.804670704008004,10.941643724179329L26.91807855804467,11.005049360485344L27.027847657406312,11.221781954009174L26.98721489686909,11.380394978248603L26.932633576744536,11.47280244752293L26.950524120563102,11.61233251198042L27.041492987437493,11.685678719455176L27.1482297912367,11.683181923735866L27.228888853198555,11.601720234234378L27.286502468885544,11.739358184526225L27.231011460092247,11.928459695468696L27.097590455343322,12.118458270074782L27.128823099636804,12.19800272314059L27.067570729274735,12.347714936277804L27.09789368489953,12.39543062935757L26.9841826013066,12.585333548507123L27.006924818025198,12.671696956337463L26.953859645681916,12.706302434920943L26.58907448951595,13.442379974545638L26.508112197997832,13.530533679400548L26.082074671469798,13.51028708638092L25.932279270683466,13.499696388806L25.157224524914454,13.84974992899641L24.890988974529023,14.026285173044407L24.302117176296008,13.27944536048863L23.876079649767973,13.260751258500719L23.890937898024163,13.163224358890417L23.864860156186808,13.020187431930047Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#edbcbc"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M26.504473443322865,42.82797066651231L26.52994472604763,42.85874347283625L26.51053803444779,42.95380134259564L26.40076893508615,42.97665118970645L26.287057851493216,43.07079010568682L26.35862002676771,42.86331365534957L26.41562718334228,42.887992479086066ZM28.524588747044845,41.603104864305166L28.639209519306405,41.72077594868338L28.486078593401373,41.69547417040863L28.46909773825149,41.76406262710989L28.41087766345197,41.85215743530356L28.251075687309424,41.88751626298615L28.20195249919732,41.98170200542733L28.124628962354166,41.92226488439414L28.13797106282908,41.79698429785992L28.070654101342086,41.772293092688926L28.115228846110483,41.53786469553576L28.220449502128417,41.50067079506071L28.345986538414934,41.70035164519439L28.384799921614615,41.670781781555576L28.37297396892103,41.52262137345815L28.40996797478323,41.47932973454259L28.503665907663787,41.52353597590553ZM29.010665725709828,40.67644117463513L28.971245883397728,40.762447327377544L28.90271600368567,40.753602891339014L28.87754795051717,40.835336213493164L28.890890050992084,40.91615138470946L28.79688888855526,40.917066255122506L28.82266340083629,41.06283038671204L28.70410064434344,41.3024954173884L28.726842861062096,41.36499891560669L28.691061773424792,41.431768873986854L28.63314492818148,41.34152221204787L28.564311818913268,41.36469402504881L28.474252640707732,41.189069629695624L28.379645019158488,41.18053195337803L28.336283192615042,41.34335157508208L28.336586422171365,41.410427110455316L28.236520668609614,41.49792695660064L28.152526081528947,41.50371950024763L28.163745575110113,41.36743803846368L28.108557795873025,41.33450963885291L28.045486048173586,41.34152221204787L28.072776708235835,41.18236145841469L28.176481216472496,41.18053195337803L28.144035653954006,41.05764648430936L28.07368639690452,41.02044397748822L28.067318576223386,40.95091617259236L28.095822154510643,40.87986119444017L28.053673246192204,40.76793695794966L28.146461490404022,40.55627042208352L28.01091787876129,40.50197773079037L27.941781539936812,40.541019814190236L27.862941855312386,40.437007580365744L27.78349571157554,40.42267116016592L27.721940111657204,40.49099700809488L27.67888151467008,40.42053593986024L27.562744594627247,40.51112828715925L27.33077398409779,40.58433123868063L27.27710235264192,40.71212502158381L27.228585623642346,40.720054679950124L27.14641041389916,40.83655608894778L27.169455860174025,40.899378687859766L26.990550421987848,41.03447123132555L26.998434390450257,41.08234613739326L27.160055743930343,41.11222927202404L27.15338469369283,41.18632538043904L27.042705905662444,41.197607270757366L26.9632597619256,41.291214098034764L26.767676698145806,41.41591501333718L26.728256855833706,41.6156039180282L26.876232879282497,41.63694359446664L26.71643090313995,41.86922728745586L26.648810712096747,41.80033740233923L26.564512895459927,41.8469754888212L26.531764103385115,42.121296557858855L26.491737801960426,42.132878231532295L26.487189358616718,42.23223424726061L26.431698349823364,42.24899631527474L26.47172465124811,42.34011874668665L26.414111035561064,42.42605680759666L26.462627764560636,42.48700373734286L26.305251624868106,42.61590091478006L26.32708415291802,42.71462556705707L26.24460571361857,42.97116724765408L26.15848851964421,43.06073662310294L26.139991516713167,43.10978500748335L26.011118955307893,43.16797145934193L25.49441579146179,42.934911959590444L25.371911050737708,42.59121906148981L25.383737003431406,42.38065024000749L25.900743396833718,42.36998413066671L26.124223579788293,42.15665094574933L26.185475950150362,41.9890172292791L26.19548252550652,41.71224044285245L26.345884385405327,41.42079313712328L26.379542866148824,41.21010875301661L26.519634921135207,40.90974728034787L26.767676698145806,40.541019814190236L27.05180279234986,40.40314906110413L27.355335578153813,40.15025958868305L27.692830074257472,39.991005020086845L27.96694959310537,39.94920618860151L28.46000085156402,40.02487057468525L28.45969762200781,40.28936802962459L28.973974949403896,40.35495306254816Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#e9acac"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M31.204834794718067,21.43671952597648L31.26244841040517,21.454337833522807L31.236673898124025,21.700965106779492L31.162079427287154,21.533462256665004ZM30.672666923503357,21.42806481726094L30.772429447508898,21.536243873124207L30.61202101225382,21.647193847225488L30.537729770973158,21.625870050323613ZM30.536820082304416,22.832970016998686L30.394605420424227,22.846244755161308L30.36185662834947,22.891933388087267L30.49042596019848,23.088867844616146L30.478600007504838,23.22404806716689L30.192957765519566,23.338846377942204L30.106234112432674,23.307987724245578L29.88972820927188,23.39624131149008L29.551930483611955,23.63936723222853L29.438825859131555,23.552674539737808L29.352102206044776,23.379578555830108L29.343005319357303,23.224665292531675L29.28690785145153,23.108312540688623L28.860870324923496,22.879585286663634L28.823573089505032,22.90150307617332L28.721384729049532,22.83605717899821L28.640725667087736,22.839144332761087L28.559156916457084,22.750231004804043L28.37327719847724,22.668412346051518L28.18042320070373,22.44175973502356L28.294740743409136,22.317297909412716L28.217113977009717,22.179540236386764L27.95482041085546,22.006856305075345L27.885380842474717,21.9157155576848L27.74346941015085,21.95526227346202L27.664326495970215,21.914788664975255L27.614596848745634,21.85762881462461L27.65613929795154,21.819005658805203L27.62308727632046,21.721978464766188L27.432962344553232,21.651520365403435L27.457523938609256,21.589711383810517L27.345329002797655,21.516463339625957L28.086118808710694,21.315856640799296L28.53823407707597,21.577349179760176L28.894528805666994,21.863808397119307L28.85450250424236,22.051342688508797L29.08768603299677,22.20579578446184L29.423361151762947,22.1928225304178L29.554962779174502,22.12949857490667L29.693235456823345,21.97318142473125L29.7041517208483,21.89408786342166L29.5767953072243,21.680569413992735L29.608027951517784,21.58662084554637L29.5040202137248,21.521099433444583L29.518575232424723,21.477210310768612L29.41972239708798,21.46051963016093L29.405167378388057,21.366243523183265L29.516149395974765,21.324203091202463L29.585892193911718,21.262376052023093L29.4897684245812,21.13561990338043L29.650783318948697,21.151697091900445L29.766313779879056,21.148296167548537L29.711429230198235,21.079657107637367L29.75266844984793,21.036678240424415L29.806643310860068,21.123252677175387L29.75600397496669,21.318329669642523L29.9227802309029,21.32605784949014L29.97705832147119,21.408591478063933L29.952799956971376,21.531607841862808L30.061356138108067,21.613199196954305L30.074395009026716,21.452792379034534L30.28119756638762,21.575803894691646L30.293629978193792,21.62463387579063L30.360643710124464,21.642249234656155L30.366708301249503,21.567768378075556L30.48163230306733,21.62494291955123L30.541368525648124,21.69076730654149L30.666299102822222,21.724141582321487L30.727854702740444,21.68984022921549L30.776068202183808,21.73835625159299L30.84277870455827,21.696329754476913L30.89008251533295,21.601146301504002L30.930108816757638,21.607018241067507L31.018651847181957,21.779763180360717L31.06686534662532,21.82271353903289L31.148130867699763,21.83352812020857L31.28367447934238,21.944757811709287L31.344320390591918,21.899031372822797L31.441657078147443,21.989864517920772L31.569619950884032,21.991718179794987L31.590846019821356,22.120849175895394L31.655130685745803,22.11683336114845L31.63875628970851,22.206104669663496L31.55627785040906,22.17799577354451L31.542329290821726,22.228344184295032L31.36281739352313,22.171509006744024L31.25092568726768,22.294751266534334L31.14782763814344,22.32532811315896L30.98984503933849,22.254289736715407L30.759087347033926,22.22247546561144L30.708448011140547,22.26602681665816L30.414012112024068,22.1758335220481L30.443728608536333,22.233903995196236L30.38459884506807,22.363316389590338L30.336688575180915,22.53162327075851L30.38975374752431,22.59060204466607L30.326681999824757,22.699905497897497L30.37671487660566,22.743747473674567L30.435844640073867,22.71256426758446L30.48557428729856,22.73911635772ZM29.62531203622393,20.96463079366719L29.709913082417017,21.018434908843105L29.679590126792277,21.08553178762284L29.595595539711667,20.983802674369386Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f8e6e6"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M36.88705344924318,31.138554295920883L36.9865127436924,31.218607497513972L36.93496371913034,31.323498089513578L36.95709947673646,31.37624721519203L37.241528800496724,31.424701119612934L37.26790977189029,31.466713641862697L37.23394806159058,31.532949902694966L37.06050075541691,31.553494798521015L36.90736982951182,31.409367780196206L36.81124606018125,31.381460687515187L36.77576820210027,31.257865684804017ZM36.736954818900585,30.580204778218565L36.75727119916917,30.659675536789678L36.719367504638285,30.679619238152767L36.65114085448249,30.637276892573453L36.65538606826999,30.587262206994957ZM37.10598518885405,30.49766093769859L37.321278173789835,30.78240157786704L37.28034218369652,30.78700359889178L37.0971915317229,30.559032281226806ZM35.24324602482454,26.644156514624534L35.28751754003679,26.47549985873499L35.37302827489856,26.38316006511952L35.66958678090879,26.717705968049287L35.75843304088937,26.664467667007656L35.8060400812202,26.696780196067643L35.863653696907306,26.667545086059313L35.943706299756684,26.70939724677926L36.029520264174835,26.64877271409081L36.108663178355414,26.684778495274614L36.34214993666615,26.937713546819303L36.327898147522546,27.00109333059754L36.15930251424879,27.01986053012825L36.19478037232983,27.103540446022727L36.12655372217404,27.10784735326073L36.128069869955254,27.208747918874337L36.20145142256723,27.249659619870144L36.28999445299155,27.339476258107986L36.344575773116105,27.34101415998473L36.07257886116196,27.662395717596183L36.05408185823086,27.851497169946747L36.124734344836554,27.92620779515864L36.103811505455496,28.067008894454048L36.18447056741735,28.088527390020765L36.217219359492105,28.1662984624733L36.18113504229865,28.227466967963764L36.114727769480396,28.199495790428536L36.032855789293535,28.270191035486633L36.11533422859287,28.32766657104817L36.18113504229865,28.26865422235293L36.273013597841725,28.531423498145593L36.108663178355414,28.715177647018038L36.13898613398021,28.78707460513923L36.21570321171089,28.781544206149185L36.20266434079224,28.92379115242295L36.34305962533489,29.081996433936183L36.363982464715946,29.204861612539062L36.4303897375342,29.25339030638309L36.45495133159022,29.35167098814908L36.549255723583315,29.372247612262107L36.60838548705158,29.474511924625162L36.699354353925855,29.502763785448558L36.642043967795075,29.672262780282722L36.43797047644034,29.80275055510741L36.3976409454595,29.987868630754626L36.590494943232954,30.049262227937795L36.65720544560753,29.984491904537073L36.56108167627701,29.905903964841023L36.59807568213921,29.88287931402278L36.79790395970639,29.990324426504493L37.09415923616041,30.49766093769859L37.063229821423135,30.55412267155907L36.95861562451768,30.508707975785697L36.90979566596178,30.39363042951478L36.81791711041882,30.3417657492663L36.908279518180564,30.247238224010758L36.79851041881892,30.240179095401935L36.78243925233778,30.163447146678266L36.546829887133356,30.25122815057955L36.473448334521436,30.20948681938728L36.509532651714835,30.144416973684528L36.387634370103285,30.138892036335655L36.33214336130999,30.34851747247688L36.22419363928577,30.270256875307666L36.18113504229865,30.21224915170467L36.099566291668,30.258287223680696L36.091985552761855,30.31782756076285L36.01769431148114,30.346982992769732L36.00859742479372,30.290512976711383L35.91308011457568,30.293275149756397L35.87214412448225,30.231585325738017L35.74145218573955,30.240179095401935L35.681715963158695,30.15915003343011L35.58377281649069,30.180635467949216L35.54708204018476,30.237416818029672L35.53525608749112,29.62528416742426L35.70930985277727,29.37624005576813L35.64441872774023,29.294239072573326L35.479158619585235,29.23741902802226L35.40517060786084,28.76218763093791L35.44883566396044,28.65433875815183L35.63380569327154,28.51974596188178L35.59711491696555,27.97754967552165L35.409112592092015,27.543386151573856L35.12801879345051,27.544001216007423L35.12013482498804,27.016476301296784L35.221110267218535,26.95125123934988Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f9e9e9"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M35.23263299035591,31.75708832203818L34.94031969813312,32.05844086672628L34.597063840460805,32.0572147346229L34.45575886724936,32.4247026276108L34.47607524751794,32.851844038705394L34.316879730487926,32.886157201525194L34.09825122043338,33.09600215584071L34.05003772098996,33.07517211985538L34.14434211298294,32.69037794376844L34.06853472392112,32.56842438829084L33.96846897035937,32.510814756296185L33.930868505384694,32.1795164263969L34.070354101258545,32.018591054320176L34.08430266084599,31.759847678689688L34.18406518485148,31.64180389801009L34.12038697803945,31.285775154775756L33.89114543351616,30.96616410491942L33.821099406022995,30.78823080199254L33.729524080036185,30.74773254239146L33.55213478963134,30.556884329089115L33.478146777906886,30.569465145329588L33.37959717212641,30.667346224250416L33.418107325769824,30.814001823469L33.31379635842063,31.004508905995273L33.194323913258984,31.01033722613093L33.10941963750969,30.913093209682067L33.01996691841663,30.757857215078317L33.00662481794177,30.865542472156413L32.885636224998905,30.83425015705508L32.98843104456688,30.652311637902322L32.97448248497949,30.49674034729972L32.8668359925116,30.400995673246257L32.964172680067065,30.258901054448643L32.91110750772367,29.97497563210873L32.9226302308611,29.85248619104315L32.86016494227408,29.712177993746096L32.87350704274894,29.662437320198137L32.78405432365594,29.632346413917148L32.782234946318454,29.485874155840918L32.707640475481526,29.32525874881251L32.624858806625866,29.08322514064284L32.622736199732174,28.94498865961131L32.702485573025285,28.867877293296807L33.07363854987244,29.239876159931264L33.172188155652975,29.401422892940374L33.204330488615255,29.347678473033902L33.15096208671565,29.228819031507015L33.199175586159015,29.200254368341916L33.37565518789518,29.293624814454454L33.42022993266352,29.555887995891958L33.520598915781534,29.662130273444653L33.59034171371843,29.640022727820373L33.716485209117536,29.696212046620616L33.90145523842864,29.654454082427904L34.17800059372644,29.446259482966283L34.22014950204493,29.27089707000016L34.36357708215007,29.290553519720383L34.41239704070591,29.34061476392663L34.4860818228741,29.30068876616025L34.519740303617596,29.344300181920744L34.60373489069815,29.28441090955115L34.64649025812918,29.388524424375866L34.7156265969536,29.46437796347002L34.66559372017281,29.51627533979218L34.66650340884149,29.73796874994065L34.711381383166156,29.820864357242122L34.80477608649045,29.82669756522565L34.79658888847172,29.92401642235931L34.83934425590263,29.959012706662783L34.80235025004043,30.122624038681998L34.89999016715217,30.397926826362948L34.88482868933977,30.803570751751053L34.78809846089678,31.08058196322709L34.85966063617127,31.40599442383057L34.90696444694589,31.466713641862697L35.13105108901294,31.532029975223857L35.09890875605066,31.600409671517433Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#e7a5a5"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M35.52009460967872,38.00103851172394L35.57164363424084,38.64566547826033L35.622282970134165,38.74946880670912L35.78299463494545,38.8605930432405L35.82362739548262,39.01139399679745L35.881847470282196,39.05412891717303L35.84879544865112,39.1832435710303L35.90822844167576,39.31112864327348L35.89670571853827,39.47165961429525L35.95583548200659,39.54001854277669L35.917628557919386,39.69839444507622L35.93673201996302,39.82075310512225L36.05590123556834,40.04531166342235L36.04528820109971,40.3339050778606L36.122308508386595,40.49374219440058L36.08561773208061,40.82710203505776L35.98009384650646,40.93139917146134L35.89094435696967,40.879251269762975L35.75327813843319,40.91249189896092L35.69202576807106,40.84753493516013L35.54495943329101,40.863393164137825L35.53889484216603,41.059476098414535L35.54556589240349,41.08935956508142L35.493713638285215,41.09576310862461L35.38697683448595,41.18876471329145L35.34937636951122,41.249442192570456L35.31480820009904,41.42658589432082L35.22535548100592,41.50189027766762L35.04917910882608,41.513475327050784L34.928190515883216,41.6616363790919L34.80689869338414,41.67901260990701L34.711684612722365,41.6616363790919L34.552792325248674,41.58328913923553L34.41451964759966,41.59182516675833L34.29595689110687,41.45859821033051L34.29353105465685,41.36408424379917L34.22560763405738,41.31438647147931L34.13736783318933,41.361950008019775L34.17254246171399,41.24883237750139L34.24925953944472,41.17504342855034L34.1934653010951,40.98568036988499L34.181032889288986,40.92590998133372L34.03305686584008,40.834421306422634L34.03093425894633,40.752992928812134L33.95755270633441,40.68803086912577L33.954520410772034,40.55840549796375L33.8963003359724,40.528209214185516L33.7504469194173,40.27686087113749L33.661297429880506,40.245135043065815L33.61914852156201,40.170699379145944L33.639768131386916,40.10968445342344L33.561231676318755,40.06575254004811L33.4372107878134,39.825329963287025L33.36231308742026,39.4948530940194L33.2501181516086,39.355382819458896L33.44661090405708,39.29220585541762L33.49118564882548,39.20888231610836L33.44752059272588,39.13623830727941L33.461165922757004,39.05870760137859L33.53848945960016,38.88928889214581L33.5797286792498,38.84380271559267L33.561838135431174,38.729319200264726L33.611264553099545,38.65390889492991L33.61945175111828,38.480178787377895L34.22227210893868,38.48811760051476L34.214691370032426,38.32872412508221L34.37934501907495,37.96286068218425L34.86815106374621,38.008063144937246Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f4d4d4"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M38.87684579734048,39.77376340687565L38.90625906429648,40.051413439838825L38.90413645740273,40.13195511949273L38.97782123957097,40.18076666106474L38.94537567705248,40.22744157272698L38.97509217356475,40.29607915542707L39.10123566896374,40.300044810037804L39.09668722562003,40.35312281182662L39.18219796048186,40.370510125913356L39.2016046520817,40.42145103455592L39.331386902155714,40.576401047542056L39.42842036015497,40.56633575997478L39.54122175507911,40.635876720707046L39.48391136894833,40.70114544336579L39.51332463590427,40.77373155189633L39.48724689406703,40.88565546977979L39.51605370191055,40.978056692919225L39.50331806054811,41.064050126554434L39.578215760941305,41.09393352678734L39.628551867278475,41.35280325848161L39.6161194554723,41.4573787025099L39.503621290104434,41.46256160583796L39.48239522116711,41.50006105349114L39.488459812292035,41.59975144702419L39.56638980824766,41.62017672402858L39.49907284676067,41.68632887485071L39.54061529596663,41.830515104521815L39.483001680279585,41.874713996595275L39.53000226149794,41.948478382458674L39.64735209976578,41.94573512446988L39.52666673637924,42.113372218951305L39.51514401324181,42.20754805626973L39.432362344386206,42.19383338400124L39.44267214929857,42.26118682875649L39.400220011423926,42.309033932122134L39.425084835036216,42.377298039838685L39.37929717204287,42.4467789542376L39.29317997806851,42.46750090451799L39.22737916436279,42.56135669617446L39.24921169241264,42.62930822538262L39.18189473092565,42.65398965224875L39.16339772799455,42.767947235299516L39.202817570306706,42.84229073818601L39.06788041777645,42.813650502705926L39.020576607001885,42.85447796070295L38.92172377166514,42.84899371882039L38.842884087040716,42.80603335673966L38.77132191176622,42.89317195064833L38.7510055314977,43.01168716960039L38.66670771486076,43.043980718971845L38.69308868625433,43.11679183240963L38.85925848307812,43.25875152179324L38.87290381310925,43.42842131931032L38.75919272951637,43.4262891020407L38.68520471779186,43.36780465356192L38.676714290217035,43.297133945962145L38.72310841232286,43.24382484841827L38.652152696160954,43.17863373575645L38.61121670606747,43.09516199838194L38.54693204014302,43.02204552845844L38.40956905116275,42.9739092203577L38.35013605813822,43.1308054169898L38.36408461772561,43.20330909711707L38.603635967161324,43.57493036214671L38.47840216043102,43.93796478144914L38.51600262540575,44.192847123236916L38.4574793210499,44.30703283716091L38.45960192794365,44.41634151845153L38.50266052493083,44.56400692046775L38.458085780162435,44.57831628407898L38.412601346725296,44.68517716293108L38.442924302350036,44.89310102569006L38.39592372113162,45.05139146010761L38.378639636425476,44.84652517678873L38.317084036507254,44.743020127230295L38.22399256273923,44.692483718289054L38.267354389282616,44.59597453126523L38.147881944121025,44.45409600722826L38.06540350482169,44.25344235635398L38.09299739444026,44.04942209281144L38.01991907138455,43.87340239029284L38.09299739444026,43.789346796083464L38.063584127484205,43.743663137154044L38.10573303580259,43.625185994752144L38.03932576298433,43.550868186897006L38.05418401124052,43.30078938114906L37.8819496232918,43.20635541938144L37.741251109192945,43.04306675697438L37.78158064017384,42.78744741104888L37.66119850634351,42.681413136289414L37.63724337139996,42.59914166182379L37.667263097468435,42.53576006020354L38.70855339362299,42.00059961595068L38.69157253847311,41.46774449632737L38.56027414061788,40.86034351430152L38.258560732151466,39.864690500766805L38.30586454292609,39.77650958923586Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#faebeb"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M35.75600720443941,47.1815809107555L35.67110292869006,47.140520550872125L35.716284132570934,46.99391491604746L35.650483318865156,46.80654037384886L35.50220406586004,46.72805826937939L35.43973877727302,46.578996873402936L35.33542780992383,46.55952702368175L35.30601454296777,46.47312786759326L35.32724061190521,46.36238685191604L35.407899673867064,46.401329270244865L35.450958270854244,46.29210651642842L35.43094512014187,46.21513068199412L35.60469565587181,46.12172221357727L35.58377281649069,46.067866313897575L35.66139958289011,45.93945964622035L35.60499888542802,45.61689355409892L35.50675250920375,45.57428746176936L35.48825550627265,45.25593647994779L35.54890141752219,45.206628050792524L35.554662779090904,45.10222489826666L35.36726691332984,44.98929411195195L35.009152807401335,44.832826229826026L34.98610736112653,44.80086172301982L35.02370782610126,44.714098816402874L35.1419673530379,44.51986047855277L35.251736452399484,44.4184728360152L35.31450497054283,44.419690730917736L35.41911916744817,44.45318259916618L35.476732783135276,44.51407571265959L35.58650188249692,44.51407571265959L35.702032343427334,44.462012195927215L35.823020936370085,44.27932427281378L35.87790548605096,44.27079849604134L35.934306183513,44.32256167235906L35.991919799200105,44.45044237290181L36.0844048138556,44.542999403720245L36.127766640399045,44.61271930212962L36.11624391726161,44.69674586547029L36.07864345228688,44.72262302781478L36.07864345228688,44.87300959113608L36.16688325315499,44.94150244558044L36.30697530814143,45.157318650845625L36.32516908151621,45.44950838226354L36.40977012770941,45.54354976819535L36.39915709324072,45.69540863937539L36.23510990331073,46.15062746769106L36.258155349585536,46.32496508608423L36.2050901772422,46.36177837212118L36.200844963454756,46.44665996455105L35.97584863271891,46.924563488491906L35.714161525677184,47.121358842806075ZM35.087689262469496,46.00792370171456L35.076772998444596,46.132980087111065L35.01006249607008,46.19413688423492L35.04614681326359,46.256205021975376L35.00308821627641,46.300929690755964L34.54885034101744,46.29971270293524L34.24319494831968,46.20843702544896L33.68980100816776,45.91846364235545L33.5763931541311,45.91359497958887L33.49937284684415,45.82382737454154L33.31743511309554,45.80009169145867L33.039373610016526,45.605937769579334L32.81498373839315,45.51007265065834L32.94931443181093,45.222151179367785L33.39809417505751,45.41846483025064L33.512714947319125,45.54507144490678L33.65735544564927,45.5246809015038L33.790776450398255,45.52102884664913L33.79289905729195,45.64671739670828L34.1510131632204,45.84025964302026L34.82630538498404,45.863994957981575L34.93546802523315,45.69693022583601L34.93516479567694,45.993622469565594Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fcf5f5"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M38.90625906429648,40.051413439838825L38.87684579734048,39.77376340687565L38.86047140130313,39.61936069148715L38.722198723654174,39.576943563339015L38.90413645740273,39.399330782522455L38.70309526161054,39.4206940119818L38.51812523229944,39.24398241927732L38.43928554767513,39.2332998476198L38.48264737421846,39.076106500369406L38.636081529679814,38.90088921737002L38.69369514536692,38.899973404822035L38.6946048340356,38.82670695493407L38.62395234742985,38.73817284196973L38.59817783514882,38.632842313134674L38.35650387881941,38.64871859979908L38.11058470870262,38.61879779283022L37.99414455910352,38.50460579594204L38.14060443477109,38.34124403464761L37.939866468535115,38.36048177851626L37.88771098486052,38.04226966658509L37.812510054911115,38.036161406332674L37.78976783819252,37.7970068495361L37.850413749442055,37.71331054712181L37.72063149936804,37.51627281874956L37.65179839009983,37.27796554538453L37.50291267798224,37.10654777978175L37.44196353717649,36.51180254058474L37.31005868020878,36.28222377650532L37.069597642104384,36.00399768367745L37.04685542538573,35.73031302250438L37.56264890056303,35.20881180381957L37.56416504834425,35.271522993933345L37.65877266989355,35.33667891991435L37.49684808685731,35.412843853924116L37.49260287306981,35.46055985686723L37.56204244145056,35.53182543175929L37.60479780888147,35.51316821645853L37.654830685662375,35.60859308151548L37.717599203805605,35.59635943033774L37.8710333592669,35.90186805926019L37.95957638969122,36.006443826404265L38.1712306199521,35.93795048978602L38.322238938963494,35.779854781803344L38.439892006787545,35.78444190761006L38.39167850734418,35.84193282026945L38.41047873983155,35.895140740911486L38.33831010544458,36.103063633687285L38.35589741970699,36.23147384281667L38.292219212894906,36.40572935948451L38.38743329355674,36.49468454553856L38.40987228071907,36.44760917966818L38.531770562330564,36.658215582847234L38.650030089267204,36.77955477952115L38.74524416992898,36.856877347978816L38.75525074528514,36.92227794641043L38.80073517872228,36.9730075637174L38.74524416992898,37.088518916385446L38.82954198656586,37.21166154121904L38.80589008117852,37.25841070614835L38.7240181009916,37.318602254214525L38.7325085285666,37.384902251689724L38.583319586892685,37.416982006372116L38.53540931700553,37.448450155553886L38.53207379188683,37.517189323553225L38.456266402824895,37.542851266959886L38.45535671415621,37.605477081415444L38.130294629858724,37.79120321685585L38.06297766837167,37.91002124039413L38.191850229776946,37.998289734812616L38.15728206036471,38.049904963067064L38.2473412385703,38.15954429300408L38.29707088579488,38.12381297885794L38.476582783093534,38.1797001107266L38.49507978602463,38.1509932728915L38.44444045013125,38.07281066038085L38.60636503316755,38.096021473210754L38.6879337837982,38.16046047135754L38.76465086152882,38.13144793377146L38.87987809290291,38.19252642454104L38.99965376762077,38.20016109246346L39.01633139321439,38.27314691199611L38.91353657364641,38.335136772330365L38.86896182887807,38.46735447882098L38.946588595277376,38.45972091960859L38.96751143465849,38.525063167732654L38.89503957071531,38.64871859979908L38.7816317166787,38.68810341918726L38.837425955028266,38.756185293933584L38.81498696786588,38.81754844763269L38.95325964551489,38.83037034533217L38.99449886516453,38.88562561668136L38.76707669797878,39.08129561473727L38.856226187515574,39.215291948425545L38.996924701614546,39.15516264419304L39.14702333195709,39.02299357069468L39.197662667850466,39.03062483048889L39.112455162544904,39.4322910941533L39.18492702648808,39.47654247535391L39.07303532023269,39.60929052223452L39.094867848282604,39.734095896300026L39.04604788972665,39.74660650614742L39.07394500890149,39.82288897360128L39.17643659891314,39.81220960783095L39.04574466017044,39.916254657351445L38.98691812625839,39.916254657351445Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f5d8d8"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M31.81220359588218,41.921350454236865L31.804622856975925,41.81466424367254L31.87527534358162,41.81131116180724L31.886191607606577,41.86983692250243ZM34.790827526903,43.67665881330299L34.43241019141823,43.87187967091021L34.17102631393283,43.893502193313296L34.10704487756453,43.821933925449045L34.00910173089653,43.48964556907907L33.76773100412339,43.48446746194529L33.85718372321651,43.227070302194306L33.7352854416049,43.22036844905532L33.743472639623576,43.18076618500989L33.43417849225091,43.24687111626033L33.50543743796919,43.44822038489231L33.29651227371454,43.66873999261655L32.60393596724481,43.66630342696061L32.55178048357021,43.576453276180594L32.050238797536565,43.587722808784065L31.87193981846292,43.584676994589614L31.77945480380737,43.4524847766287L31.65755652219582,43.529242473180474L31.62632387790228,43.47197903787044L31.619349598108613,43.26728100539295L31.672414770452008,43.23011659252893L31.616014072989913,43.09729452644986L31.751557684632644,42.69695295954314L31.948656896193597,42.38278345561298L32.09845229697993,42.36419393516309L32.26189302779744,42.22949135105348L32.26795761892242,42.14080249871917L32.316777577478206,42.1517745129095L32.32344862771572,42.061253724589236L32.37742348872786,42.04022309714115L32.41199165814004,41.91129169665761L32.39592049165884,41.775036574117905L32.52388336439543,41.764672292322324L32.48355383341453,41.56652184145353L32.37408796360904,41.582679421658526L32.34922313999681,41.54243767057191L32.33800364641564,41.480244355881744L32.504779902351856,41.27352974435546L32.855313269374165,41.094848317909154L33.08303866611618,40.83808093223843L33.062419056291276,41.23999003883695L33.222524261990145,41.472317624335034L33.024818591316546,41.92317931415989L32.982669682998164,41.90275695608266L32.74402802223125,42.30171979350875L32.87866194520518,42.32091935486723L33.004198981491754,42.13805948645016L33.170672007871644,42.08594158984126L33.28984122347708,42.117334392048804L33.04634788981019,42.56135669617446L33.267099006758485,42.73869665039376L33.363222776089,42.70883628013755L33.52454090001277,42.91815511535337L33.64371011561815,42.90657758595993L33.799570107529405,42.9909703084836L33.82413170158543,42.915108402907336L33.92541037337219,42.83528305504457L33.867493528128875,42.676537875113866L33.802602403091896,42.64180132780648L33.948455819646995,42.510772580132695L33.9572494767782,42.437332117634384L33.848390066085244,42.383392945402704L33.84444808185401,42.298672228485486L33.90994566600358,42.2788629515794L34.15586483612043,42.491879418416104L34.15404545878289,42.56684165081036L34.24107234142599,42.57049827963323L34.234704520744856,42.64880962258455L34.15343899967041,42.64515312373789L34.14191627653304,42.82461914707339L34.19649759665754,42.824314463237755L34.216510747369966,43.49299610276833L34.302931170900536,43.531679183472974L34.46879773816801,43.48599043584366Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f6dddd"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M27.54303467347114,35.43823138563557L27.64795209993281,35.19351602866454L27.917523175436997,34.92153328610574L28.688332707418624,33.939382806268824L28.777482196955418,33.6310537490689L29.061001832046998,33.1609410395765L29.324205086869995,32.84295925429382L29.106486265484136,32.40662151763356L29.47794247188756,32.39712118603445L29.733868217360566,32.491508907515275L29.719919657773175,32.812628047186585L29.580130832343002,33.098452729689164L29.56860810920557,33.267226590502965L29.406683526169388,33.65003902172854L29.26992699630165,33.80283144355614L29.253552600264243,33.897132755442186L29.173499997414922,33.954690515825824L29.173499997414922,34.1083716891178L29.114067004390392,34.153677232420684L29.203519723483396,34.55739064111182L29.18653886833357,34.78322993532063L29.090718328559262,34.71590987444067L29.037653156215868,34.79699960279399L29.132564007321378,34.93285405676174L29.07889237586562,35.04360987994083L29.182293654546072,35.046363381977514L29.27417221008909,35.25500418066982L29.40880613306308,35.30088936391273L29.50583959106234,35.55751699189389L29.623795888442658,35.643458494570496L29.664125419423613,35.74529803029314L29.578917914117994,36.081966741415414L29.32905675976997,36.43446452873722L29.17471291563993,36.493156144833804L29.101634592584105,36.58332946322092L28.94122615732914,36.519138772007175L28.76323040781176,36.60594847038294L28.539143765744768,36.49254478417133L28.345986538414934,36.035797262890654L28.30444408920897,35.71716280304051L28.092486629391942,35.61256899880065L27.72861116189472,35.56179887997961Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f6dcdc"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M23.385454227759283,26.88356134656673L23.35240220612826,26.29820149471996L23.396976950896658,25.522226328754094L23.382725161753,24.253747113446963L23.02461105582455,24.120535035048555L22.599483217965258,23.85283242228251L22.035476243344647,23.585686388198212L22.29746657994258,23.177446609673446L22.323544321779934,22.90829441977754L22.391770971935614,22.86692834608644L22.512153105765947,22.896255192493257L22.577044230802983,23.003369055201787L22.827208614707274,23.1978156875479L22.96851358791872,23.158311697374437L23.068276111924206,23.182693224338827L23.205335871348154,23.160163476802644L23.258097814135226,23.098127264197856L23.452771189246278,23.350572453103744L23.570727486626595,23.380812842148913L23.799362572037353,23.708470009891457L23.90609937583656,23.70106633428857L23.988881044692107,23.74487074031338L23.994642406260823,24.002728634044395L24.07378532044146,24.031410322769574L24.193560995159316,23.981139810213435L24.33971764127068,24.079828380634645L24.339414411714472,24.17326659140415L24.18143181290941,24.27995607690901L24.125637574559846,24.392185629010974L24.16323803953452,24.638190699805136L24.11441808097868,24.746996503264555L24.148986250390976,24.915579980569504L24.094101700710098,25.144224476596975L24.31485281765839,25.466164923484065L24.31303344032085,25.583213321200688L24.24996169262141,25.69316712700271L24.185980256253174,25.840988831428618L24.054681858397885,25.933984328690507L23.977964780667207,25.93644769135571L24.00070699738575,26.059609636919312L23.892757275361646,26.160593397504122L23.903067080274013,26.30435810512423L24.023449214104403,26.42071239444158L23.81452404984975,26.41363294226734L23.85576326949939,26.644464261776747L23.76479440262517,26.60691855951365L23.759639500168873,26.521359453147205L23.695658063800636,26.525668323058504L23.658057598825906,26.62138301872323L23.487642588214783,26.652157916387758Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fdf9f9"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M19.586897576644617,14.074538705262398L19.616310843600615,14.1576536182816L19.68453749375641,14.184423183155594L19.612368859369383,14.299274840914407L19.6724083115065,14.411000854738262L19.597207381557098,14.47012638330466L19.50987726935773,14.326040468477338L19.423153616270838,14.240450093647475L19.50441913734528,14.212125785511603L19.513819253588963,14.090103843160385ZM19.27942280660949,15.760969424879583L19.263654869684615,15.731756839234407L19.357049573008908,15.659343207262332L19.201189581097537,15.299993642307228L19.05048449164252,15.297817250872505L19.026529356698973,15.402278608147434L18.966186675005645,15.373366306569196L18.927373291805964,15.427770471086724L18.858540182537695,15.270456490243141L18.88795344949375,15.125556112756144L18.932528194262204,15.088239242648719L18.876733955912584,15.011424205787463L18.89644387706869,14.829158691103629L18.956180099649487,14.745479315559002L18.924947455355948,14.651214738483027L18.870062905675127,14.628813889248569L18.96103177254946,14.415357596092157L18.92828298047465,14.38579360825431L18.947689672074546,14.1990527467266L19.056245853211237,14.044341617710131L19.178447364378997,14.045898191850625L19.26092580367839,13.935375145476812L19.387372528633648,14.012586953707668L19.358565720790125,14.407266489366442L19.400714629108563,14.382370351192407L19.55414878456986,14.46141337471854L19.54141314320748,14.518046527718859L19.629349714519265,14.55756330346081L19.707279710475007,14.564719712457396L19.762164260155828,14.606412522720163L19.838881337886505,14.60454571881828L19.95501825792934,14.708459004745151L19.887398066886078,14.825425935459592L19.96441837417302,14.91376398379019L19.912566120054635,14.945178050889517L20.0553872410473,15.03785921106109L20.29615150870802,15.05216491588586L20.603626278743093,14.94922137221316L20.612116706318034,14.978768212076425L20.900791243865797,14.65525928114873L20.877745797591047,14.511823266426589L21.132761854395255,14.502488299457369L21.17218169670747,14.422826249844327L21.605193503029113,14.576232085582362L21.949662278926496,14.533604505916784L22.169503707206104,14.626636001319334L22.286550315917623,14.830714001732687L22.414816418210535,15.225682692513075L22.21983981354316,15.71715022366324L22.1127997801878,15.804165182665997L21.872945201195876,15.61831682549498L21.476320941623896,15.682031309437562L21.401120011674436,15.504863801255773L21.279524959619152,15.8728394616912L21.07696761604575,15.99992098335835L20.80860945876651,15.888997426012729L20.705511409642327,15.999610290365268L20.68489179981742,16.099959094905635L20.578458225574536,16.191600123454563L20.600290753624336,16.247823175760686L20.388030064250984,16.345662402975883L20.18213719555888,16.009241728124202L20.06903257107848,15.707205170745205L19.87708826197371,15.747917099336846L19.705460333137466,15.641005868044545L19.590233101763374,15.805718951878873L19.494412561989066,15.805718951878873L19.4646960654768,15.748849414000361L19.35371404789015,15.79919310484479ZM19.416785795589703,13.831689813020233L19.501993300895265,13.934441093555122L19.502599760007797,14.010407673492686L19.349772063658975,13.961528229261681L19.35492696611516,13.84788165696807Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#faeded"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M25.48986734811814,27.227512092952402L25.56658442584876,27.324097138934313L25.54444866824275,27.429901789317142L25.41133089304992,27.3342473780732L25.4258859117499,27.26842319990247ZM27.341083789010156,25.97062634711328L27.670694316651407,26.038365066423246L27.802902403175437,26.290505689434283L27.7531727559508,26.51366500617266L27.60671288028317,26.653081151814753L27.388387599784778,26.56506302650792L27.323496474747856,26.41424854837755L27.0460414307812,26.30374244543664L26.969930812163,26.191995228380733L26.981453535300375,26.122417565457717L27.081519288862125,26.0272807996228ZM26.54601589252883,25.602001637428955L26.58391958705971,25.62356164908425L26.614242542684508,25.804958909919634L26.675798142602787,25.861312942838367L26.678223979052746,25.97062634711328L26.599990753540794,26.056222845473243L26.506899279772824,26.020199133345123L26.438672629617145,25.894877795355754L26.477789242373035,25.85577003623237L26.42411761091722,25.76430851562216L26.494466867966707,25.75137402063573ZM26.034770860695232,25.450762992734326L26.150301321625534,25.49635215023836L26.175772604350414,25.582289298291734L26.07631330990114,25.57243301100405L26.05326786362633,25.62356164908425L26.106333035969612,25.7372075145584L26.10724272463841,25.87055106574755L26.023854596670276,25.993103692390378L25.951382732727097,26.563216427102205L25.80916807084691,26.824791309878094L25.824329548659307,26.972788182968984L25.758528734953586,27.04631873922407L25.729115467997588,27.223205585299375L25.634811076004553,27.090619637865544L25.581745903661158,27.04539578760945L25.55809399827382,26.94540543510942L25.649972553816838,26.942944035877247L25.737909125128738,26.807252084463812L25.584171740111174,26.67462312164418L25.46378960628084,26.642925525271238L25.445292603349742,26.546289140697382L25.50745466238044,26.31882602125738L25.64481765136071,26.270188537688142L25.700611889710217,26.161824856635754L25.73154130444749,26.008190998953268L25.65997912917311,25.773239397923753L25.688785937016576,25.688547415408493L25.806742234396893,25.61493768945244L25.915298415533584,25.609701684671066L26.043564517826383,25.504668909574214ZM25.942285846039624,24.94762977031602L25.867994604758962,25.113412349795865L25.777935426553427,25.105709196839697L25.779148344778434,25.05394274984942ZM24.786374777623507,24.603974953941332L24.88431792429151,24.66747367705952L24.820942947035746,24.771037260322267L24.714206143236538,24.665624246842214ZM25.93106635245846,24.565442548048196L25.985041213470538,24.580239137388723L25.955324716958273,24.699838248257805L25.85950417718408,24.737749931281733L25.842826551590463,24.63942368157116L25.782483869897135,24.598426363289498Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#eebebe"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M35.54556589240349,41.08935956508142L35.54859818796598,41.103996206777396L35.582256668709476,41.29029939378005L35.513120329885,41.41286618018374L35.529191496366195,41.67291570309722L35.49644270429138,41.724434012071725L35.555572467759646,41.809787031937454L35.56739842045329,42.38948783393002L35.6413864321778,42.4510452541646L35.65654790999008,42.64180132780648L35.72992946260206,42.74966566494067L35.6186442154592,42.76154870280884L35.55284340175342,42.95745733379784L35.27963357157432,43.18655425142673L35.265078552874456,43.314801828322636L35.21625859431856,43.36963231522932L35.15773528996277,43.33277418872804L35.08465696690706,43.377856774632924L35.145909337269075,43.567924944637454L34.790827526903,43.67665881330299L34.46879773816801,43.48599043584366L34.302931170900536,43.531679183472974L34.216510747369966,43.49299610276833L34.19649759665754,42.824314463237755L34.14191627653304,42.82461914707339L34.15343899967041,42.64515312373789L34.234704520744856,42.64880962258455L34.24107234142599,42.57049827963323L34.15404545878289,42.56684165081036L34.15586483612043,42.491879418416104L33.90994566600358,42.2788629515794L33.84444808185401,42.298672228485486L33.848390066085244,42.383392945402704L33.9572494767782,42.437332117634384L33.948455819646995,42.510772580132695L33.802602403091896,42.64180132780648L33.867493528128875,42.676537875113866L33.92541037337219,42.83528305504457L33.82413170158543,42.915108402907336L33.799570107529405,42.9909703084836L33.64371011561815,42.90657758595993L33.52454090001277,42.91815511535337L33.363222776089,42.70883628013755L33.267099006758485,42.73869665039376L33.04634788981019,42.56135669617446L33.28984122347708,42.117334392048804L33.170672007871644,42.08594158984126L33.004198981491754,42.13805948645016L32.87866194520518,42.32091935486723L32.74402802223125,42.30171979350875L32.982669682998164,41.90275695608266L33.024818591316546,41.92317931415989L33.222524261990145,41.472317624335034L33.062419056291276,41.23999003883695L33.08303866611618,40.83808093223843L33.25163429938982,40.75695768195971L33.37868748345761,40.74689329345789L33.470869268556896,40.77373155189633L33.59125140238723,40.92834962320998L33.71405937266752,40.95671024646332L33.870829053247576,40.87528675491629L34.1934653010951,40.98568036988499L34.24925953944472,41.17504342855034L34.17254246171399,41.24883237750139L34.13736783318933,41.361950008019775L34.22560763405738,41.31438647147931L34.29353105465685,41.36408424379917L34.29595689110687,41.45859821033051L34.41451964759966,41.59182516675833L34.552792325248674,41.58328913923553L34.711684612722365,41.6616363790919L34.80689869338414,41.67901260990701L34.928190515883216,41.6616363790919L35.04917910882608,41.513475327050784L35.22535548100592,41.50189027766762L35.31480820009904,41.42658589432082L35.34937636951122,41.249442192570456L35.38697683448595,41.18876471329145L35.493713638285215,41.09576310862461Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f8e6e6"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M34.790827526903,43.67665881330299L35.145909337269075,43.567924944637454L35.24051695881832,43.64041475853392L35.156522371737765,43.679399937236454L35.15076101016905,43.81279739304749L35.19412283671244,43.8386841419842L35.30935006808659,44.018665274293596L35.31905341388648,44.331087264516206L34.27473082216949,44.328651384141295L34.04973449143375,43.92273796260918L34.00637266489031,43.90842466278194L33.79562812329817,44.08809593950678L33.71496906133632,44.038763834768545L33.62551634224326,44.331391749388764L33.63097447425565,44.48058469044055L33.69192361506151,44.518033711871865L33.70465925642384,44.65442850234598L33.553954166968765,44.90862611289477L33.40264261840122,44.78442267159831L33.28165402545835,44.73206051288812L33.05635446516635,44.78442267159831L33.02178629575411,44.88853480495678L32.935062642667276,44.8943186831229L32.92930128109856,45.11470480520384L32.94931443181093,45.222151179367785L32.81498373839315,45.51007265065834L32.73311175820635,45.5246809015038L32.30919683857206,45.23128238655904L32.25613166622867,45.04195519851993L32.074193932480114,44.898276065624096L31.988986427174552,44.693397036169245L31.91560487456252,44.721405285149274L31.854655733756772,44.5792296448455L31.873759195800403,44.49306776212758L31.807958382094625,44.279019781310424L31.940166468618656,44.215684703741886L31.854352504200563,44.1867570647304L31.90559829920636,43.961109356963995L31.79370659295097,43.68366390135709L31.87193981846292,43.584676994589614L32.050238797536565,43.587722808784065L32.55178048357021,43.576453276180594L32.60393596724481,43.66630342696061L33.29651227371454,43.66873999261655L33.50543743796919,43.44822038489231L33.43417849225091,43.24687111626033L33.743472639623576,43.18076618500989L33.7352854416049,43.22036844905532L33.85718372321651,43.227070302194306L33.76773100412339,43.48446746194529L34.00910173089653,43.48964556907907L34.10704487756453,43.821933925449045L34.17102631393283,43.893502193313296L34.43241019141823,43.87187967091021Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f2cfcf"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M35.4033512305233,36.43966126323817L35.49583624517891,36.85351556864528L35.44398399106052,36.95650531972973L35.554662779090904,37.106853352143105L35.48158445603525,37.16521669951248L35.514333248110006,37.76279569248929L35.52009460967872,38.00103851172394L34.86815106374621,38.008063144937246L34.37934501907495,37.96286068218425L34.214691370032426,38.32872412508221L34.22227210893868,38.48811760051476L33.61945175111828,38.480178787377895L33.611264553099545,38.65390889492991L33.561838135431174,38.729319200264726L33.5797286792498,38.84380271559267L33.53848945960016,38.88928889214581L33.461165922757004,39.05870760137859L33.365345382982696,38.88409924979777L33.1782527467779,38.76503880842692L32.72401487151893,38.737256949945234L32.49174103143315,38.779082228255064L32.54238036732653,38.6233775393586L32.60484565591355,38.56841983650431L32.607271492363566,38.36567288132085L32.70339526169403,38.121369786541266L33.10941963750969,37.871841493483345L33.196143290596524,37.88192102495162L33.17370430343419,37.974466827306586L33.29802842149576,38.02547190153768L33.39566833860749,38.12472917513362L33.47390156411939,38.13144793377146L33.49937284684415,38.191610262250265L33.730130539148604,38.21970569727887L33.7689439223484,38.3003249899314L33.875074267035075,38.33330458968288L33.99363702352787,38.27223079000184L34.03063102939012,38.21054418974292L33.997275778202834,38.073726882281385L34.08551557907094,37.961944404407376L34.05792168945237,37.81747214202126L33.997275778202834,37.78906503168434L33.99212087574671,37.65985284047655L34.04609573675873,37.58500937358865L34.10492227067084,37.58409290358168L34.064592739689886,37.434090972082664L34.140400128751764,37.25932734407063L34.10674164800827,36.7957530727257L34.22560763405738,36.708035979182604L34.37934501907495,36.69703282486677L34.8526863563776,36.969951604361256L35.015520628082584,37.245577725300166L35.273568980449284,37.192717082525846L35.34786022173,36.94367013334002L35.29964672228664,36.69122557633947L35.34058271238007,36.63620857037964L35.348163451286325,36.48062320777406Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#c52424"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M33.2501181516086,39.355382819458896L33.36231308742026,39.4948530940194L33.4372107878134,39.825329963287025L33.561231676318755,40.06575254004811L33.639768131386916,40.10968445342344L33.61914852156201,40.170699379145944L33.661297429880506,40.245135043065815L33.7504469194173,40.27686087113749L33.8963003359724,40.528209214185516L33.954520410772034,40.55840549796375L33.95755270633441,40.68803086912577L34.03093425894633,40.752992928812134L34.03305686584008,40.834421306422634L34.181032889288986,40.92590998133372L34.1934653010951,40.98568036988499L33.870829053247576,40.87528675491629L33.71405937266752,40.95671024646332L33.59125140238723,40.92834962320998L33.470869268556896,40.77373155189633L33.37868748345761,40.74689329345789L33.25163429938982,40.75695768195971L33.08303866611618,40.83808093223843L32.855313269374165,41.094848317909154L32.504779902351856,41.27352974435546L32.33800364641564,41.480244355881744L32.34922313999681,41.54243767057191L32.29221598342218,41.56164405698788L32.13574953239845,41.46500061472619L32.189421163854206,41.421098019481576L32.10178782209863,41.26255317317269L31.78794523138231,40.85363426860104L31.70182803740795,40.86705273791969L31.66574372021455,40.799959507256744L31.49017380714713,40.713954945500085L31.187550710011863,40.69138576829897L31.259416114842622,40.609951642929985L31.253654753273906,40.55657543306224L31.750041536851313,40.70938013260971L31.790674297388534,40.6227617229878L31.77460313090745,40.52942927484591L31.88497868938157,40.310111436267434L31.818268187007106,40.082837289254016L32.085716655617546,40.06697288418576L32.166678947135665,39.88299745746087L32.13423338461723,39.77040695651147L32.39652695077143,39.72829826932946L32.59423262144492,39.52537040504822L32.58392281653249,39.37430498262333L32.65214946668823,39.142342952692175L32.753428138474874,39.128912706875205L32.79739642413085,39.17897041326365L33.16096866207181,39.28732252490737Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#faeded"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M37.30217471174632,41.72230014253023L37.24001265271551,41.71285012298233L36.94648644226777,41.9106820734628L36.81063960106877,41.90976763834408L36.642043967795075,42.08136978432809L36.5098358812711,42.08777030932586L36.50255837192117,41.480244355881744L36.42887358975298,41.47170787451135L36.40279584791574,41.393353542544816L36.381266549422094,41.24090476527594L36.31213021059767,41.12351156727283L35.54859818796598,41.103996206777396L35.53889484216603,41.059476098414535L35.54495943329101,40.863393164137825L35.69202576807106,40.84753493516013L35.75327813843319,40.91249189896092L35.89094435696967,40.879251269762975L35.98009384650646,40.93139917146134L36.08561773208061,40.82710203505776L36.122308508386595,40.49374219440058L36.04528820109971,40.3339050778606L36.05590123556834,40.04531166342235L35.93673201996302,39.82075310512225L36.82701399710618,39.78200194234398L36.912524731968006,40.439752840606715L36.986815973248724,40.466595186946236L37.01956476532342,40.56725078819643L37.10992717308528,40.61025664578149L37.15207608140366,40.717919774981524L37.13843075137254,40.823137418747024L37.20817354930955,40.82923682525741L37.408305056432994,40.488251818033945L37.569016721244225,40.306755899845434L37.64300473296868,40.50990821538582L37.5183773853509,40.71974969366372L37.62450773003752,40.85424420094109L37.56750057346301,41.171689322867664L37.36464000033328,41.21590209723294L37.46591867212004,41.34182710599856L37.309148991539985,41.41926872466419L37.28610354526518,41.507987680060026L37.335833192489815,41.58664258274992ZM37.19756051484086,42.46811037067328L37.13266938980382,42.72894636967061L37.185128103034685,43.013210460664546L37.10052705684154,43.153958105320974L36.97226095454886,42.93369328424336L36.93829924424904,42.61559620222778L36.8885695970244,42.59274264069112L36.83914317935603,42.6326600402952L36.79274905725015,42.53972146384905L36.92465391421797,42.223700780982654L37.00258391017354,42.31086246292862L37.08991402237291,42.329147686398045ZM36.96195114963638,43.01808498512507L36.94315091714901,43.138116817889966L36.863098314299634,43.109480362427604L36.80669761683754,42.98853301812807L36.8558208049497,42.94283333316547L36.916769945755505,42.95075467870023Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#faeded"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M22.286550315917623,14.830714001732687L22.730781615820547,14.767877474600127L23.18229042507329,14.877683212949762L23.250820304785293,15.445800902795469L23.50462344336455,15.87346092671239L23.79117537401862,16.764555175080112L23.59589553979515,17.646490731104798L23.382118702640525,17.631291375054985L23.086773114855305,17.41971784920787L22.71471044933935,17.48207762167077L22.515185401328495,17.58848382057979L22.40177754729183,17.609577620435893L22.3499252931735,17.619503965034674L22.25167891694923,17.75319011070131L22.190426546587105,17.628809826254226L22.005153287719793,17.630360794954846L21.95875916561397,17.434920331913226L21.98938535079492,17.31391473800668L21.859603100720904,17.21616901166759L21.869912905633385,17.0805507215126L21.937533096676646,16.970677364369834L21.807447617046364,16.562117243320927L21.904784304601833,16.38945401406211L21.73133699842822,16.342556542423004L21.601554748354204,16.20651041181462L21.476320941623896,15.682031309437562L21.872945201195876,15.61831682549498L22.1127997801878,15.804165182665997L22.21983981354316,15.71715022366324L22.414816418210535,15.225682692513075Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f2cfcf"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M32.04963233842403,26.63338531739018L32.09329739452369,26.680470164838404L32.04660004286154,26.73770822305739L32.00263175720568,26.66077475432388ZM32.58725834165119,26.41147831852144L32.50326375457064,26.282194166948983L32.49204426098936,26.112257672614632L32.59605199878234,26.252641642950294ZM32.18032427716679,26.050372911410605L32.331332596178186,26.257567111766882L32.30009995188465,26.354225541960957L32.168801554029415,26.198152358131658ZM33.04422528291644,25.741827045152412L33.0888000276849,25.854538275861394L33.000560226816845,25.81512130102214ZM33.23889865802744,25.737515483798916L33.32683522933928,25.858233553322478L33.265279629421,25.86470026251999L33.177646287665425,25.74398282021982ZM32.8474293009117,25.711337825808414L32.914443032842485,25.727968401848322L32.90625583482375,25.78001450723692L32.84530669401801,25.792948704377984ZM32.834996889105525,25.592145507093115L32.94021754512352,25.66945242503195L32.948404743142135,25.743366884867847L32.848338989580384,25.697170863142937L32.8692618289615,25.644813293422303ZM35.75843304088937,26.664467667007656L35.66958678090879,26.717705968049287L35.37302827489856,26.38316006511952L35.28751754003679,26.47549985873499L35.24324602482454,26.644156514624534L35.09799906738192,26.65862055030984L34.69985866002867,26.82140656582358L34.49426902089283,26.746016759825437L34.344776849662765,27.09923352437866L34.26654362415081,26.986017840525406L34.302324711788,26.852792030622346L33.91206827289727,26.631538817276535L33.69101392639277,26.780481223502562L33.21160799796519,26.494890359547995L33.04483174202886,26.654004386571863L32.8289322979806,26.656466342649317L32.75737012270611,26.45734023163788L32.74736354734995,26.3680772580961L32.68368534053798,26.161209127220822L32.61060701748232,26.08824305334739L32.60241981946359,25.930289275582375L32.5384383830953,25.836369668968516L32.598781064788625,25.731356084485768L32.73341498776256,25.81789284783585L32.74706031779374,25.878249449220483L32.8255967728619,25.81419745071325L32.93657879044849,25.869011383349566L32.93566910177975,25.782170216098194L33.09061940502232,25.883176389703607L33.148839479821845,25.95369109399457L33.18401410834662,25.873938360330854L33.29620904415822,25.927210056307196L33.43751401736972,25.928133822887055L33.46298530009443,25.894569865034235L33.753175985423525,25.93244472455742L33.975140020596825,25.942913995237298L34.16890370703902,25.855462096253696L34.292014906875636,25.907502873111575L34.37631272351251,25.885331920044848L34.45242334213066,25.767080175613735L34.574018394185885,25.780938382920624L34.6483096354666,25.727968401848322L34.6710518521852,25.789253233200412L34.75019476636584,25.826823345608084L34.82266663030907,25.784325921224053L34.75080122547837,25.547483932891403L34.81235682539659,25.602001637428955L34.830853828327804,25.691935205592173L34.990959034026446,25.760304995838695L34.923945302095774,25.857925613952467L35.00460436405763,25.877633580291572L35.00126883893893,25.744906722675424L35.07283101421342,25.732895937176565L35.119831595431776,25.792024837612466L35.22201995588722,25.726120571061628L35.59165678495316,26.01096211711667L35.5698242569033,26.07007784351422L35.66412864889634,26.083624804613706L35.67565137203377,26.20861940952026L35.80391747432651,26.27788446704251L35.686870865614935,26.30343461548012L35.706277557214776,26.406861255273597L35.646238105077714,26.432408793824635L35.64957363019647,26.58568320410547L35.670799699133795,26.63338531739018ZM34.97731370399538,25.42550340997893L35.0473597314886,25.67468817744159L34.93637771390189,25.61154968888588L34.956390864614264,25.561960619739686L34.86390584995877,25.523458418978187L34.89331911691471,25.42427122197406ZM32.840455021117975,25.38884528997326L32.925662526423594,25.42334708016211L32.93809493822977,25.55826446048149L32.85410035114916,25.508673255209622Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f5dbdb"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M36.94648644226777,41.9106820734628L36.83974963846862,42.002428408122725L36.83914317935603,42.056986657410164L36.74574847603179,42.101180871390625L36.79365874591889,42.442207909365266L36.74847754203802,42.53423644151387L36.614146848620294,42.6832413564582L36.53833945955836,42.70213287636615L36.471932186740105,42.68415546597561L36.368227678503445,42.7435717746701L36.25542628357931,42.886469102809926L36.263613481597986,43.0689622031024L36.165367105373775,43.14024930536034L36.15111531623006,43.2188452978522L36.05256571044964,43.287690711216115L35.9688743529253,43.42537529403162L35.96614528691907,43.57310286397862L35.91035104856945,43.660212001607945L35.94704182487544,43.93735571059223L35.86941505847602,44.040590968137536L35.954622563781584,44.04485427382995L36.136863527086405,44.113066118656356L36.14474749554887,44.1532614638859L35.94097723375046,44.25740078529272L35.934306183513,44.32256167235906L35.87790548605096,44.27079849604134L35.823020936370085,44.27932427281378L35.702032343427334,44.462012195927215L35.58650188249692,44.51407571265959L35.476732783135276,44.51407571265959L35.41911916744817,44.45318259916618L35.31450497054283,44.419690730917736L35.31905341388648,44.331087264516206L35.30935006808659,44.018665274293596L35.19412283671244,43.8386841419842L35.15076101016905,43.81279739304749L35.156522371737765,43.679399937236454L35.24051695881832,43.64041475853392L35.145909337269075,43.567924944637454L35.08465696690706,43.377856774632924L35.15773528996277,43.33277418872804L35.21625859431856,43.36963231522932L35.265078552874456,43.314801828322636L35.27963357157432,43.18655425142673L35.55284340175342,42.95745733379784L35.6186442154592,42.76154870280884L35.72992946260206,42.74966566494067L35.65654790999008,42.64180132780648L35.6413864321778,42.4510452541646L35.56739842045329,42.38948783393002L35.555572467759646,41.809787031937454L35.49644270429138,41.724434012071725L35.529191496366195,41.67291570309722L35.513120329885,41.41286618018374L35.582256668709476,41.29029939378005L35.54859818796598,41.103996206777396L36.31213021059767,41.12351156727283L36.381266549422094,41.24090476527594L36.40279584791574,41.393353542544816L36.42887358975298,41.47170787451135L36.50255837192117,41.480244355881744L36.5098358812711,42.08777030932586L36.642043967795075,42.08136978432809L36.81063960106877,41.90976763834408Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f1caca"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M22.3499252931735,13.362006556954164L22.518520926447195,13.356398854680187L23.08404404884908,13.243614673423345L23.459442239483735,13.208094215961275L23.55738538615168,13.101213195080405L23.531914103426914,13.013954391928543L23.60923764027001,12.987463510977669L23.66624479684458,12.833489952500166L23.864860156186808,13.020187431930047L23.890937898024163,13.163224358890417L23.876079649767973,13.260751258500719L23.80118194937478,13.75633184980007L24.01950722987317,13.828575965412064L23.97857123977974,14.105668728686041L23.54101099011433,14.286202985250029L23.57861145508906,14.61325743961266L23.5980181466889,15.11031856257948L24.009500654517012,15.466939609681418L23.50462344336455,15.87346092671239L23.250820304785293,15.445800902795469L23.18229042507329,14.877683212949762L22.730781615820547,14.767877474600127L22.286550315917623,14.830714001732687L22.169503707206104,14.626636001319334L21.949662278926496,14.533604505916784L21.919642552858022,14.40415450719427L22.061857214738097,14.154852109104219L22.181936119012278,14.161700228234182L22.32081525577371,13.809892666559847L22.29807303905511,13.585353057520358Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#e29393"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M28.46000085156402,40.02487057468525L28.60069936566299,40.03829459717731L28.95092950312909,39.78169681202186L29.221410267301962,39.78932505574225L29.221107037745753,39.61997100309141L29.300553181482712,39.452738410644116L29.323598627757463,39.045887257686374L29.77146868233524,39.069085911244066L29.874263501903215,39.120976607866126L30.381566549505578,39.11914519568934L30.423412228267807,39.63828026177181L30.54076206653565,39.70083559083899L30.642647197434883,39.67917031494152L30.64628595210985,39.734095896300026L30.67115077572214,39.8500448120071L30.74786785345276,39.918390421533516L30.60019505956018,40.29973975996363L30.43068973761774,40.22896687810502L30.114421310451405,40.35190264374624L30.001013456414796,40.339700921893204L30.022845984464652,40.44219306877247L30.068633647458,40.49648737695145L30.061356138108067,40.54803510818085L30.177796287707167,40.60446158371517L30.165060646344784,40.786235619350606L30.120485901576387,40.906392741479564L29.881541011253148,40.975312162267386L29.893366963946846,41.1305248548201L29.79481735816637,41.059476098414535L29.73659728336679,41.13814796640715L29.87244412456573,41.19486303283158L29.868805369890765,41.3265823537366L29.914896262440436,41.426281012763525L29.96492913922134,41.40067080304067L30.081975747932916,41.50006105349114L30.041039757839428,41.573838496928516L30.088950027726582,41.68449981098994L29.997981160852305,41.68785309352522L29.976451862358658,41.73144528256276L29.870624747228305,41.679317454785505L29.851218055628408,41.60828740777872L29.71749382132316,41.557375986292826L29.689596702148435,41.47871998676121L29.57831145500552,41.40067080304067L29.628647561342575,41.20919401297364L29.396373721256907,41.182971293067084L29.26810761896411,41.28755527859826L29.316624347963796,41.34731518947399L29.25142999337055,41.405853847033256L29.230507153989436,41.31743544875005L29.066156734503124,41.25919920928152L29.0273433513035,41.11954752462798L29.129531711758943,41.06679453855472L29.24657832047052,41.07197841789677L29.309953297726338,41.02288350677944L29.252036452483026,40.872542086277875L29.138628598446417,40.86369812887053L29.10072490391542,40.80514406302182L29.1546997649275,40.72615439603835L29.134383384658918,40.65265159363126L29.06494381627823,40.58768631014962L29.010665725709828,40.67644117463513L28.973974949403896,40.35495306254816L28.45969762200781,40.28936802962459Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f9e9e9"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M20.96416622112156,9.225177088366856L21.229795312394515,9.284010861229312L21.16733002380755,9.690732611903506L21.178246287832394,9.78143731098389L21.24010511730694,9.847426966060077L21.14185874108273,10.047555180836326L21.096677537201856,10.34359997862996L21.03481870772731,10.478616392652896L21.08121282983319,10.543617050131573L21.210995079907207,10.484866660330454L21.39384250232456,10.55830404730672L21.372919662943445,10.701411595548201L21.251931070000637,10.929149479048213L21.30984791524395,11.084690548905087L21.48086938496766,11.075633668135133L21.687975171884773,11.247386713412517L21.685246105878548,11.425038943519617L21.641884279335102,11.440336023837936L21.72466594819076,11.544286950430582L21.912971502620564,11.55271488612793L22.04063114580083,11.45906679368538L22.22074950221196,11.458130264313844L21.985140137007477,11.70097144498638L22.0039403694949,12.132496023362116L21.969675429638812,12.248845205809182L21.8723387420834,12.31465556770435L21.654316691141275,12.32463587848656L21.569109185835714,12.370793420592463L21.499063158342437,12.885232873403382L21.378074565399686,13.108068901244643L21.231614689731998,12.93229775058866L21.28437663251907,12.764287123002362L21.203414341001007,12.682608732033017L21.242530953756955,12.625554324395502L21.155807300670062,12.533574029326857L21.187039944963658,12.299373008841123L21.093948471195574,12.355199912931539L21.05513508799595,12.309977260085475L20.993579488077614,12.335551720556055L20.862281090222382,12.293135157384711L20.973263107808975,12.107227914030823L20.910494589665745,11.495278526716419L20.841055021285058,11.386639020835041L20.937178790615576,11.150584443823902L20.89927509608458,11.145587917894574L20.912010737446963,10.99880269686507L20.965682368902833,10.98943262068235L21.02723796882111,10.7723320202943L20.978418010265216,10.655169722976758L20.927172215259418,10.638609556092753L20.94051431573422,10.553616733857787L20.90352030987208,10.45986532846257L20.790718914947888,10.423612159780596L20.798299653854144,10.380794029613021L20.683678881592527,10.331409995580373L20.661239894430082,10.246388059914814L20.759486270654406,9.91122272637952L20.94051431573422,9.755477949142026L20.91110104877822,9.626295351970924L20.838932414391365,9.56216623168465L20.922017312803177,9.5299435016085L20.938998167953002,9.471439032897251L21.006921588552473,9.46799747270559L20.95203703887165,9.341901952592885Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f9e8e8"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M22.909080594894192,22.678601401082837L22.95183596232505,22.79931941683943L22.895435264863067,22.825252075960627L22.835699042282215,22.711020522620736ZM22.134935537793808,22.32254843363019L22.22074950221196,22.396362075873135L22.431190814247827,22.418289060995306L22.48941088904735,22.47727365716704L22.363267393648357,22.521432914162467L22.168594018537306,22.4408332701601ZM21.502095453904985,20.676084769175574L21.68403318765354,20.735470179786745L21.654923150253808,20.81062525435054L21.75832442893426,20.921956706835523L21.937229867120323,20.931852293703507L22.157980984068672,21.085222594713805L22.177994134781045,21.170865743882025L22.29837626861132,21.094807534889448L22.346286538498475,21.118305748185826L22.518824156003404,21.07099962787796L22.804163168432467,20.911751790231698L22.779904803932652,20.882991973481566L22.976700785937396,20.875569963911886L23.23929758164786,20.951643202155815L23.305401624909905,21.27474173382626L23.385757457315492,21.395609063725317L23.440945236552636,21.38633581841146L23.44276461389012,21.469792261182057L23.45580348480877,21.54644307451023L23.391215589327942,21.54427961529167L23.371202438615626,21.593420018510415L23.476726324189826,21.73990131354379L23.769342845968822,21.761531958650437L23.81452404984975,21.825185452425472L24.034062248573036,21.91602452175269L23.960680695961116,22.09675407476864L24.072875631772774,22.336446763696117L23.93217711767386,22.427245032798055L23.81391759073722,22.386170517347374L23.51614616650204,22.606041014742146L23.439125859215096,22.604497127056185L23.357557108584444,22.51155126990583L23.264465634816474,22.510933664316454L23.20685201912937,22.458127157504975L22.889673903294295,22.537490404763354L22.76049811233281,22.492096534242783L22.812047136894876,22.391111890385247L22.836002271838538,22.223093226894832L22.759891653220336,22.086559839851112L22.65285161986486,22.034351567222018L22.540656684053317,22.064626479046325L22.32536369911736,22.341388351455848L22.265627476536622,22.227417546510345L22.42967466646661,22.095209499595114L22.352351129623457,21.910772121133533L22.392680660604412,21.884818725098093L22.382977314804464,21.741446373377954L22.28897615236764,21.66604498338004L22.013643715294847,21.58353029878372L21.867790298739635,21.55787843256678L21.76165995405296,21.605163947676203L21.733156375765702,21.69262145890469L21.808963764827638,21.798921096088677L21.795015205240247,21.8502132710587L21.598522452791713,21.791196169177496L21.593367550335472,21.884818725098093L21.669174939397465,22.01210826053795L21.61277424193537,22.07636551352737L21.504218060798678,21.942286159499552L21.492392108105037,21.871223851548606L21.495727633223794,21.50626386579689L21.52938611396729,21.43424675888243L21.478746778073912,21.258975465499425L21.509676192811185,21.19003406582042L21.497850240117543,21.00173735937905L21.337138575306255,20.936181585148333L21.46722405493648,20.910514824249887L21.35502911912488,20.83134612395945L21.423558998836825,20.648556070590274Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fdf7f7"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M20.388030064250984,16.345662402975883L20.41744333120704,16.405293062827994L20.291906294920466,16.47796314659989L20.18213719555888,16.690974299355965L20.113000856734402,17.146655251859997L20.483547374469026,17.367593341028176L20.64152997327409,17.54443360974019L20.742505415504525,17.74450568968461L20.67397553579258,17.85119494868305L20.702782343636102,18.01368886834308L20.79799642429782,18.270402310605576L20.855610039984924,18.3677384788403L20.950520891090434,18.42229237199065L20.83468720060381,18.63118275800872L20.784957553379172,18.66434106465732L20.657297910198906,18.695019316041112L20.489005506481476,18.827018583183758L20.44109523659438,18.819272603002254L20.42835959523194,18.74088008769322L20.35588773128876,18.736541991976125L20.29615150870802,18.642648832610448L20.227015169883543,18.680764886072453L20.264918864414426,18.835694013605924L20.157878831059065,19.068664706760252L19.966237751510505,19.002682192692397L19.98109599976658,18.937005381458277L19.869204293511245,18.924303264417325L19.858288029486346,18.84065137045885L19.872539818630003,18.718259821172985L19.835545812767805,18.642029047986526L19.774899901518154,18.58686675476182L19.817048809836592,18.21398038069433L19.780661263086927,17.948880413664924L19.651788701681596,17.537918981895615L19.666040490825253,17.437092096775842L19.511393417138947,17.25340658030509L19.515941860482656,17.18855027186507L19.402534006446047,17.068756974401715L19.33188151984035,17.022201375949614L19.337642881409067,16.969746183521018L19.283668020396988,16.92846297525015L19.365843230140058,16.87320913849019L19.31793296025296,16.80149882972463L19.444379685208276,16.78163014093387L19.454689490120643,16.722332204609565L19.521399992495162,16.68942190254407L19.399198481327346,16.492869181692548L19.389798365083664,16.418957923925717L19.326120158271635,16.336965969208904L19.390708053752405,16.26863422351356L19.416785795589703,16.115181406969953L19.365843230140058,16.073863163004916L19.31520389424668,16.090017867928267L19.21968658402875,15.984386215060972L19.343404242977783,15.922555436348425L19.27942280660949,15.760969424879583L19.35371404789015,15.79919310484479L19.4646960654768,15.748849414000361L19.494412561989066,15.805718951878873L19.590233101763374,15.805718951878873L19.705460333137466,15.641005868044545L19.87708826197371,15.747917099336846L20.06903257107848,15.707205170745205L20.18213719555888,16.009241728124202Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#efc3c3"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M32.49174103143315,38.779082228255064L32.72401487151893,38.737256949945234L33.1782527467779,38.76503880842692L33.365345382982696,38.88409924979777L33.461165922757004,39.05870760137859L33.44752059272588,39.13623830727941L33.49118564882548,39.20888231610836L33.44661090405708,39.29220585541762L33.2501181516086,39.355382819458896L33.16096866207181,39.28732252490737L32.79739642413085,39.17897041326365L32.753428138474874,39.128912706875205L32.65214946668823,39.142342952692175L32.58392281653249,39.37430498262333L32.59423262144492,39.52537040504822L32.39652695077143,39.72829826932946L32.13423338461723,39.77040695651147L32.166678947135665,39.88299745746087L32.085716655617546,40.06697288418576L31.818268187007106,40.082837289254016L31.88497868938157,40.310111436267434L31.77460313090745,40.52942927484591L31.790674297388534,40.6227617229878L31.750041536851313,40.70938013260971L31.253654753273906,40.55657543306224L31.259416114842622,40.609951642929985L31.187550710011863,40.69138576829897L31.062923362394088,40.681016061971015L31.031387488544397,40.593176415049385L30.947392901463786,40.59470144153394L30.95467041081372,40.495267296281234L30.900392320245373,40.41504536289642L30.81245574893353,40.39338794010267L30.813062208046006,40.347632049587986L30.60019505956018,40.29973975996363L30.74786785345276,39.918390421533516L30.82428170162717,39.835704135404L30.984386907325984,39.77864550617312L31.100523827368818,39.60135641258093L31.24425463703028,39.51499457351095L31.28670677490493,39.43442739112777L31.34917206349195,39.45975758855295L31.441353848591234,39.426797748168326L31.54111637259672,39.308687003753946L31.800377643188483,39.17286588551362L32.216408594360246,39.211934524664116L32.417753019708755,39.13227027723614L32.54753526978277,38.92622652111426Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#faebeb"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M35.31905341388648,44.331087264516206L35.31450497054283,44.419690730917736L35.251736452399484,44.4184728360152L35.1419673530379,44.51986047855277L35.02370782610126,44.714098816402874L34.98610736112653,44.80086172301982L35.009152807401335,44.832826229826026L35.36726691332984,44.98929411195195L35.554662779090904,45.10222489826666L35.54890141752219,45.206628050792524L35.48825550627265,45.25593647994779L35.50675250920375,45.57428746176936L35.2759948168993,45.55085380812969L35.20928431452484,45.80952513004273L35.087689262469496,46.00792370171456L34.93516479567694,45.993622469565594L34.93546802523315,45.69693022583601L34.82630538498404,45.863994957981575L34.1510131632204,45.84025964302026L33.79289905729195,45.64671739670828L33.790776450398255,45.52102884664913L33.65735544564927,45.5246809015038L33.512714947319125,45.54507144490678L33.39809417505751,45.41846483025064L32.94931443181093,45.222151179367785L32.92930128109856,45.11470480520384L32.935062642667276,44.8943186831229L33.02178629575411,44.88853480495678L33.05635446516635,44.78442267159831L33.28165402545835,44.73206051288812L33.40264261840122,44.78442267159831L33.553954166968765,44.90862611289477L33.70465925642384,44.65442850234598L33.69192361506151,44.518033711871865L33.63097447425565,44.48058469044055L33.62551634224326,44.331391749388764L33.71496906133632,44.038763834768545L33.79562812329817,44.08809593950678L34.00637266489031,43.90842466278194L34.04973449143375,43.92273796260918L34.27473082216949,44.328651384141295Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fbf2f2"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M26.082074671469798,13.51028708638092L25.879820557452604,13.641726507606279L25.183302266751696,14.451144370942409L24.06832718842901,15.419376881732411L24.009500654517012,15.466939609681418L23.5980181466889,15.11031856257948L23.57861145508906,14.61325743961266L23.54101099011433,14.286202985250029L23.97857123977974,14.105668728686041L24.01950722987317,13.828575965412064L23.80118194937478,13.75633184980007L23.876079649767973,13.260751258500719L24.302117176296008,13.27944536048863L24.890988974529023,14.026285173044407L25.157224524914454,13.84974992899641L25.932279270683466,13.499696388806Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f9e7e7"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M31.253351523717697,34.75293625464397L31.359481868404373,34.80923920896274L31.352204359054383,34.875025509501285L31.137214603674806,35.03534934598302L30.997425778244633,35.052176315482974L30.978928775313534,34.96192053976377L30.892508351782965,34.92581683021119ZM31.213021992736685,33.93570893383318L31.32976537189211,33.94856744985685L31.249409539486464,34.015307585621535ZM33.6188452920058,33.19616617150104L33.57487700634988,33.31684442208251L33.57942544969359,33.396168382828975L33.44539798583213,33.38453037316188L33.42174608044479,33.49570041891057L33.36928736721393,33.49600666146857L33.33866118203298,33.302449289670804L33.49088241926927,33.32235741595056L33.50695358575041,33.23721008963602ZM32.63031693863843,33.13214772283294L32.77920265075596,33.23659750189243L32.866229533399064,33.19157163487314L32.936275560892284,33.264163709053406L32.94264338157342,33.33859000577401L33.00905065439167,33.35053463269676L33.20402725905893,33.490800529764364L33.27862172989586,33.43016312033774L33.40688783218866,33.54010495926091L33.45115934740079,33.67882270407537L33.40142970017621,33.69597017745595L33.42902358979467,33.87968131627575L33.49543086261292,33.93356583761996L33.443275378938324,34.05449313910442L33.305002701289425,34.124290000608816L33.55668323297499,34.260201386286504L33.53818623004389,34.41875000300908L33.478146777906886,34.483634089884816L33.324106163333,34.5154630588439L33.25496982450858,34.39273441802563L33.21615644130884,34.39640723215697L33.1030518168285,34.51668723734676L32.98509551944812,34.55218800789825L32.95750162982961,34.72753808519167L32.52873503729535,34.89399594748353L32.313138822803296,34.858196709721L31.924095302137573,34.922757157000945L31.303384400498487,34.77649805527782L31.27488082221123,34.68163676630306L31.35281081816686,34.52923501317014L31.25759673750514,34.454558998660644L31.101433516037616,34.46159827967957L31.09385277713136,34.29693219847015L31.158440672612187,34.174492858739356L31.102039975150092,34.1313307412036L31.249409539486464,34.08939195470399L31.262145180848847,34.02020583298068L31.359481868404373,33.98316246002733L31.62723356657108,33.79640160226049L31.826455385025724,33.76302724016164L31.878610868700434,33.69841980114205L31.935618025274948,33.45496961998042L32.04660004286154,33.460175871957944L32.209434314566636,33.19310314860843L32.591200325882426,33.188508602824ZM32.53570931708907,33.02983517939563L32.46081161669588,33.118057179419935L32.34619084443426,33.09018202724235Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f5d8d8"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M38.30586454292609,39.77650958923586L38.258560732151466,39.864690500766805L38.56027414061788,40.86034351430152L38.69157253847311,41.46774449632737L38.70855339362299,42.00059961595068L37.667263097468435,42.53576006020354L37.63724337139996,42.59914166182379L37.460157310551324,42.44251264598739L37.485931822832356,42.32091935486723L37.32006525556494,42.05302437315507L37.373736887020755,41.76406262710989L37.30217471174632,41.72230014253023L37.335833192489815,41.58664258274992L37.28610354526518,41.507987680060026L37.309148991539985,41.41926872466419L37.46591867212004,41.34182710599856L37.36464000033328,41.21590209723294L37.56750057346301,41.171689322867664L37.62450773003752,40.85424420094109L37.5183773853509,40.71974969366372L37.64300473296868,40.50990821538582L37.569016721244225,40.306755899845434L37.408305056432994,40.488251818033945L37.20817354930955,40.82923682525741L37.13843075137254,40.823137418747024L37.15207608140366,40.717919774981524L37.10992717308528,40.61025664578149L37.01956476532342,40.56725078819643L36.986815973248724,40.466595186946236L36.912524731968006,40.439752840606715L36.82701399710618,39.78200194234398L37.75368352099906,39.78200194234398L37.80614223422987,39.89093041883102L37.95047950300375,39.97483477472912L38.01931261227202,39.90160935452272Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fcf5f5"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M36.68479933522599,34.496182124222244L36.75272275582546,34.549433665847914L36.77607143165659,34.692041179606434L36.731193457331926,34.6761285203401ZM37.90347892178539,34.48149173274422L38.02719658073448,34.49403978384743L38.02568043295321,34.55402423330879L37.91621456314789,34.543006849366805L37.73215422250547,34.61308836547024L37.709108776230664,34.537804169572745L37.756412587005286,34.518217459162244L37.83252320562343,34.55892082414566ZM37.63724337139996,34.4019164375313L37.6272367960438,34.476594905671035L37.691521461968364,34.476594905671035L37.69667636442449,34.619208876957785L37.768238539698984,34.63114380745721L37.783400017511326,34.69663134062739L37.712444301349365,34.81719490340373L37.698495741761974,34.987620997987975L37.62420450048131,34.96681589638739L37.471680033688756,34.85146514096765L37.53990668384449,34.80709728455671L37.52990010848828,34.72294801199611L37.5890298719566,34.719887955956224L37.52626135381337,34.5206658110324L37.5705328690255,34.498018413694425L37.54991325920065,34.4135469198717ZM36.95679624718014,34.299380889162165L37.025629356448405,34.333050004698535L36.98196430034869,34.41936212932437L36.9046407635056,34.38385841569472L36.8894792856932,34.29876871684198ZM37.56264890056303,35.20881180381957L37.04685542538573,35.73031302250438L37.02502289733593,35.52723761136382L36.861885396074626,35.3905147389856L36.48284845076506,35.32077254646934L36.26452317026673,35.328419860538034L36.15354115268008,35.378585362209456L35.964932368694065,34.71621588105883L35.99495209476254,34.37620664997291L36.112908392142856,34.29693219847015L36.28574923920411,34.29448350401462L36.31485927660384,34.38110378425672L36.43736401732792,34.37008521100573L36.56926887429563,34.52158394202081L36.55713969204578,34.57391654079052L36.618998521520325,34.65256525584469L36.590494943232954,34.69999745041572L36.62718571953894,34.79393968680482L36.764548708519214,34.89032426709363L36.86461446208085,34.87930917614821L36.94102831025526,34.934689849987706L37.023506749554656,34.91327213347962L37.025932586004615,34.99312818632188L37.3443236200647,35.06808529093177L37.433169880045284,35.13508485517393L37.43286665048902,35.196575195091754ZM36.34305962533489,33.937239715056535L36.45737716804024,34.08694294013506L36.326078770185006,34.01194003174495ZM36.70268987904467,33.92989195160948L36.73301283466935,34.08633068590058L36.77819403855028,34.12582059905202L36.86946613498088,34.1203104377352L36.5729076289706,34.262344040273824L36.53409424577086,34.15520780248455L36.66296680717619,33.94244436008357ZM37.72184441759305,33.78078616356096L37.756412587005286,33.83528643051814L37.72851546783045,33.91611480269039L37.654830685662375,33.99724516709668L37.53384209271951,34.03520662098922L37.73215422250547,33.84814576794075ZM37.99960269111591,33.467832093104334L38.17911458841451,34.03857412524471L38.11604284071507,34.109902302945045L38.18608886820823,34.16224840575184L38.24248956567027,34.1371469815758L38.26159302771396,34.25530388062415L38.3082903793761,34.318664196879745L38.158191749033506,34.43619551122159L37.96776358770995,34.41599543169176L37.725483172268014,34.23938688309137L37.656043603887326,34.16775842129125L37.68788270729334,34.107147196990645L37.689702084630824,34.03000228210871L37.761870719017736,33.889172473889175L37.87770440950436,33.73546989117124L37.92197592471649,33.646058257903206L37.901053085335434,33.57409654310865Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f4d6d6"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M22.431494043804094,8.988863399797872L22.611612400215222,9.109375695441962L22.681355198152175,9.40948889326505L22.852679897432097,9.395721603966066L22.953048880550057,9.4705004269045L23.022488448930744,9.90934644588711L22.9278808273815,9.962818887879777L23.013391562243385,10.205124500721034L22.98458475439986,10.293901314157381L22.644361192289978,10.51111730943282L22.63344492826502,10.769520303447578L22.39207420149188,11.272678512470918L22.393287119716888,11.379458368174966L22.34022194737355,11.450013636212674L22.22074950221196,11.458130264313844L22.04063114580083,11.45906679368538L21.912971502620564,11.55271488612793L21.72466594819076,11.544286950430582L21.641884279335102,11.440336023837936L21.685246105878548,11.425038943519617L21.687975171884773,11.247386713412517L21.48086938496766,11.075633668135133L21.30984791524395,11.084690548905087L21.251931070000637,10.929149479048213L21.372919662943445,10.701411595548201L21.39384250232456,10.55830404730672L21.210995079907207,10.484866660330454L21.08121282983319,10.543617050131573L21.03481870772731,10.478616392652896L21.096677537201856,10.34359997862996L21.14185874108273,10.047555180836326L21.24010511730694,9.847426966060077L21.382319779187128,9.548714166983103L21.71102061815958,9.437022826331301L21.824125242640037,9.255533303686093L21.993024105469942,9.196697622803676L22.144638883593757,9.045521896558803L22.376609494123215,9.074945303921453Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f9e8e8"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M28.894528805666994,21.863808397119307L28.53823407707597,21.577349179760176L28.086118808710694,21.315856640799296L27.029667034743852,20.900928291011624L26.79739319465807,21.15880808195967L26.601810130878334,21.14984204354245L26.597564917090892,21.10470157997638L26.62576526582194,21.03729665318871L26.740689267639766,20.977927455847343L26.70460495044631,20.880517975825946L26.69095962041513,20.746295300409777L26.771315452820772,20.59164062151563L26.833477511851584,20.562563113273015L26.849548678332667,20.472232323295174L26.923839919613386,20.478728964031305L27.10547442380573,20.308566128981866L27.14974593901792,20.34538542342417L27.267702236398236,20.29340488222286L27.533028098114983,20.38808187543418L27.563654283295932,20.466354377062565L27.61580976697053,20.46140450314762L27.650681165939034,20.38622554262122L27.78379894113175,20.48336939812402L27.707385092957338,20.315063741717864L27.765908397313126,20.29433312787146L27.849902984393736,20.3119696452368L27.875980726231035,20.3967447202431L27.96027854286791,20.346004224492958L28.082480054035784,20.398291649597795L28.066712117110853,20.47687278489336L28.189216857834936,20.47687278489336L28.303534400540286,20.523585670958056L28.455755637776633,20.681652287436066L28.456058867332843,20.76175957409913L28.52701458349486,20.771347314903664L28.680448738956215,20.9782366786512L28.788398460980318,21.010086165530147L28.846921765336106,21.05461207071643L28.862992931817246,21.148296167548537L28.812656825480133,21.1603539433517L28.806895463911417,21.25526572292334L28.887857755429536,21.382008277627655L28.969426506060188,21.41693723633785L29.005207593697378,21.692312433722755L28.96518129227269,21.756278840110504L28.91969685883555,21.749480650399626ZM28.57007318048204,19.83537375667057L28.533382404176052,19.92235264798459L28.5464212750947,19.968470291969055L28.41633579546442,19.981469541670954Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fefafa"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M22.567947344115566,7.095401368618724L22.532166256478263,7.51820453371618L22.47515909990375,7.766832708253197L22.525798435797128,8.298022080306033L22.5776506899154,8.396076114981625L22.4578750151976,8.607183536262617L22.47000419744751,8.929383679299484L22.431494043804094,8.988863399797872L22.376609494123215,9.074945303921453L22.144638883593757,9.045521896558803L21.993024105469942,9.196697622803676L21.824125242640037,9.255533303686093L21.71102061815958,9.437022826331301L21.382319779187128,9.548714166983103L21.24010511730694,9.847426966060077L21.178246287832394,9.78143731098389L21.16733002380755,9.690732611903506L21.229795312394515,9.284010861229312L20.96416622112156,9.225177088366856L20.92110762413438,9.181049171359987L21.03148318260861,9.097794714802731L21.05665123577711,8.99418507224761L21.13003278838903,8.928131431135135L21.05513508799595,8.826380264460155L21.066051352020793,8.664493156122226L21.042399446633453,8.648208839773275L21.169755860257567,8.501009819545438L21.20068527499484,8.2914429769152L21.365035694481037,8.047667491089534L21.4393269357617,7.83767693803474L21.42325576928056,7.6304567300650845L21.323796474831283,7.377084432079116L21.51240525881741,7.208964145350244L21.7853118594403,7.263857824027028L21.959668854282654,7.21837474251484L22.00788235372613,7.13053843968158L21.98908212123871,6.971782574983571L22.18709102146846,6.8795273244749495L22.38267408524814,7.155008038797334L22.50972726931593,7.169752199634587Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f7e2e2"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M35.75600720443941,47.1815809107555L35.714161525677184,47.121358842806075L35.97584863271891,46.924563488491906L36.200844963454756,46.44665996455105L36.2050901772422,46.36177837212118L36.258155349585536,46.32496508608423L36.23510990331073,46.15062746769106L36.39915709324072,45.69540863937539L36.40977012770941,45.54354976819535L36.32516908151621,45.44950838226354L36.30697530814143,45.157318650845625L36.16688325315499,44.94150244558044L36.07864345228688,44.87300959113608L36.07864345228688,44.72262302781478L36.11624391726161,44.69674586547029L36.127766640399045,44.61271930212962L36.0844048138556,44.542999403720245L35.991919799200105,44.45044237290181L35.934306183513,44.32256167235906L35.94097723375046,44.25740078529272L36.14474749554887,44.1532614638859L36.136863527086405,44.113066118656356L36.13716675664273,44.05825318444802L36.055598006012076,43.9772495181421L36.082585436518116,43.94070559834972L36.185986715198624,44.06068934184614L36.2487552333418,44.047899487466424L36.24238741266066,44.131032304175335L36.35549203714106,44.18066699061943L36.353066200691046,44.28937247064522L36.45161580647152,44.241871526392885L36.58018513832059,44.34539801167672L36.540765296008374,44.567660383039666L36.65296023182003,44.619112729633365L36.81579450352501,45.07878685524096L36.91100858418679,45.217889937962454L36.94072508069905,45.35150685322576L36.912524731968006,45.49942074822998L36.948002590048986,45.55754915969649L36.90858274773677,45.794614195196345L36.786987695681546,46.11137709813724L36.335782115984955,46.63010456132045L36.28908476432281,46.77399186796231L36.033159018849744,47.1721522889149L35.787239848732895,47.226290394635186ZM36.273316827397935,47.62955619044903L36.20812247280469,47.72838715249914L36.14747656155515,47.587285910883075L36.24269064221687,47.48905831702339L36.294846125891524,47.48875420157407ZM36.079249911399415,47.63472589413515L36.055598006012076,47.798935185225815L36.013752327249904,47.76487772888697L35.84091148018871,47.79437394195621L35.83302751172624,47.735685304618784L35.775110666483044,47.72686670182048L35.900647702769504,47.606748563041016L35.98585520807518,47.58667770087297Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f7e1e1"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M22.532166256478263,7.51820453371618L22.66043235877106,7.456114570175309L22.77020145813276,7.3341165538142405L22.78263386993882,7.261975813827512L22.908777365337926,7.2246484159551585L22.921816236256575,7.397156273573557L23.4054673784716,7.570883380889178L23.51644939605825,7.6981771756527095L23.616818379176266,7.702566278667739L24.066204581535317,7.954588462462453L24.134431231690996,8.211863184778814L24.048010808160427,8.762505774253476L23.910041360067737,8.822936171161608L23.636225070776106,9.46393015697707L23.5837663575453,9.49396527701412L23.792994751356105,9.566233094625773L23.959164548179842,9.747658715235843L23.993732717592138,9.89089614332277L23.8603117128431,9.97001084233176L23.831201675443367,10.04255252410006L23.420022397171522,9.949685603591227L23.339969794322144,10.095704315678837L23.022488448930744,9.90934644588711L22.953048880550057,9.4705004269045L22.852679897432097,9.395721603966066L22.681355198152175,9.40948889326505L22.611612400215222,9.109375695441962L22.431494043804094,8.988863399797872L22.47000419744751,8.929383679299484L22.4578750151976,8.607183536262617L22.5776506899154,8.396076114981625L22.525798435797128,8.298022080306033L22.47515909990375,7.766832708253197Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f1cbcb"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M32.13938828707336,23.719266953653516L32.36529430647789,23.794534336628118L32.40562383745879,23.906192707518926L32.06661319357397,23.87041382184357L31.924095302137573,23.809032012178143ZM31.67696321379566,23.58167565225569L31.75762227575757,23.560387671304916L31.835855501269464,23.64800530069538L31.882856082487876,23.584760834961976L32.04841942019908,23.64923930531311L31.948050437081122,23.670217186375716L31.963818374005996,23.714331220174593L31.8170552687821,23.780036483553786L31.726996090576563,23.75011482097876L31.724570254126604,23.712480314805056L31.598729988283708,23.72667051522253L31.489870577590807,23.63350564974263L31.509883728303237,23.58877156040048ZM31.306113466504826,23.355509712789065L31.535961470140535,23.436354381993887L31.399204940272796,23.581058614744727L31.475922018003416,23.709703951314616L31.359785097960582,23.759060551980184L31.35250758861065,23.664355757147135L31.258809655730147,23.604814325627572L31.329158912779576,23.474306255854366L31.262145180848847,23.410435324003004ZM31.038361768338063,23.190408791280035L31.16389880462458,23.230837528238695L31.224544715874174,23.309222086014053L31.141459817462305,23.324342912022104ZM31.565374737096533,24.083220654902043L31.458334703741116,24.321272572766873L31.31581681230466,24.3225058791162L31.045639277687997,24.49114859490313L30.939812162557587,24.373070347966014L30.747261394340285,24.36690406337121L30.621421128497502,24.415308546395657L30.455554561230088,24.351796532263755L30.171731696582242,24.481591778795078L30.083795125270456,24.370912151959843L29.9479482840714,24.305547805627853L29.689899931704645,24.429798681243142L29.61894421554274,24.28026441424265L29.58983417814295,23.992859506046784L29.656544680517413,23.93302616412069L29.638350907142524,23.8697969350429L29.707790475523325,23.839260637310993L29.551930483611955,23.63936723222853L29.88972820927188,23.39624131149008L30.106234112432674,23.307987724245578L30.192957765519566,23.338846377942204L30.478600007504838,23.22404806716689L30.49042596019848,23.088867844616146L30.36185662834947,22.891933388087267L30.394605420424227,22.846244755161308L30.536820082304416,22.832970016998686L30.609595175803804,22.930211666375143L30.768790692833875,22.972810200361813L30.978928775313534,23.454559092438835L31.183608725780687,23.556068323853644L31.237886816349032,23.62270792153018L31.34401716103571,23.70476817788972L31.32733953544215,23.755667351633505L31.145401801693538,23.714022736147655L31.064136280619095,23.74425378811808L31.00197422158834,23.928399749338404L31.009858190050807,24.001186588190627L31.097794761362593,24.095247731360224L31.06777503529412,24.17172476607037L30.996516089575834,24.245421793243388L31.14964701548098,24.299381173981423L31.25001599859894,24.19022653879469L31.258809655730147,24.106349540444548L31.31157159851722,24.110666882742358L31.331584749229535,24.029868314070114L31.380404707785488,24.005812719757394Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f9e8e8"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M27.4281106716532,28.904436616698277L27.427504212540782,28.956048096813646L27.231617919204723,29.123464671617704L26.879568404401198,29.127457842586708L26.804670704008004,29.26260442046633L26.74432802231479,29.24786180809275L26.686107947515154,29.417392257370146L26.599990753540794,29.512283303458126L26.51599616646024,29.578303955372945L26.28948368794329,29.638487468454336L26.23581205648742,29.545754634217367L26.260980109655975,29.413399933692077L26.19457283683772,29.37562583444739L26.18395980236903,29.24540469055642L26.091778017269746,29.144659060514037L26.152120698963074,28.961270577429815L26.108152413307153,28.884774582479082L26.137868909819417,28.768639853574975L26.11088147931332,28.618694492636962L26.223986103793777,28.390056989942323L26.173649997456664,28.270498397900056L25.64299827402317,28.05624951527608L25.48198337965573,28.076845964466678L25.34674299756921,28.20349170904221L25.208167090364043,28.25697438444253L25.319755567063225,28.094368064094468L25.33249120842561,27.837046476602772L25.515945089955437,27.784469207482672L25.55688108004881,27.71959025606695L25.92621467955854,28.025200529666492L26.178804899912848,28.06116809948653L26.2822061785933,28.118345297906515L26.35649741987396,28.098671702167962L26.40713675576734,28.18228246489722L26.465963289679394,28.156769446216245L26.62121682247823,28.341497211615767L26.786173701076905,28.33166210419536L26.845303464545225,28.368850722162932L26.950220891006893,28.547710418050734L27.18340441976136,28.738529216791534L27.14337811833667,28.769561597143245L26.940214315650735,28.565840907195074L26.8577358763514,28.59810642511728L26.955375793463134,28.681685872161765L26.960530695919374,28.778164506705387L27.026937968737514,28.792297738905674L27.054531858356086,28.892455098630812L27.142771659224195,28.894912854582913L27.187043174436383,28.769561597143245L27.398394175140936,28.857738818345062Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fefafa"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M36.15354115268008,35.378585362209456L36.26452317026673,35.328419860538034L36.48284845076506,35.32077254646934L36.861885396074626,35.3905147389856L37.02502289733593,35.52723761136382L37.04685542538573,35.73031302250438L37.069597642104384,36.00399768367745L37.10689487752279,36.22260773539466L37.04382312982324,36.49957541865979L36.88978251524941,36.76855207909158L36.81124606018125,37.00142773001313L36.81488481485627,37.1346602146609L36.71906427508196,37.30668632350155L36.82519461976864,37.644578917491835L36.28635569831653,37.63663642611055L36.106237341905455,37.760962933596076L35.514333248110006,37.76279569248929L35.48158445603525,37.16521669951248L35.554662779090904,37.106853352143105L35.44398399106052,36.95650531972973L35.49583624517891,36.85351556864528L35.4033512305233,36.43966126323817L35.44550013884174,36.45677980672197L35.49977822941014,36.62917849343062L35.62652818392161,36.746852104340135L35.81180144278892,36.75327043499955L36.07591438628066,36.79728120579678L36.35549203714106,36.674415010222454L36.33032398397245,36.636819880066454L36.40188615924694,36.50202085000167L36.35397588935979,36.28894955794797L36.387331140547076,36.12935794340052L36.31000760370392,35.97464369451572L36.31152375148514,35.820221058168286L36.178709205848634,35.5480356290326Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fefcfc"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M21.476320941623896,15.682031309437562L21.601554748354204,16.20651041181462L21.73133699842822,16.342556542423004L21.904784304601833,16.38945401406211L21.807447617046364,16.562117243320927L21.937533096676646,16.970677364369834L21.869912905633385,17.0805507215126L21.859603100720904,17.21616901166759L21.98938535079492,17.31391473800668L21.95875916561397,17.434920331913226L21.873854889864617,17.447640603614488L21.865667691845942,17.39613804268115L21.737098359996935,17.46656559427722L21.61277424193537,17.423130671050124L21.555160626248323,17.461291451603216L21.290137994087843,17.461601696039622L21.026025050596104,17.55901381783289L20.80982237699152,17.647731484970954L20.742505415504525,17.74450568968461L20.64152997327409,17.54443360974019L20.483547374469026,17.367593341028176L20.113000856734402,17.146655251859997L20.18213719555888,16.690974299355965L20.291906294920466,16.47796314659989L20.41744333120704,16.405293062827994L20.388030064250984,16.345662402975883L20.600290753624336,16.247823175760686L20.578458225574536,16.191600123454563L20.68489179981742,16.099959094905635L20.705511409642327,15.999610290365268L20.80860945876651,15.888997426012729L21.07696761604575,15.99992098335835L21.279524959619152,15.8728394616912L21.401120011674436,15.504863801255773Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fefbfb"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M23.687167636225638,18.27319232694041L23.69778067069433,18.598643217449734L23.43427418631518,18.75668299985456L23.203516494010614,18.802231246769068L23.188961475310748,18.872563798960392L22.99580424798097,19.009497477944528L22.874209195925744,18.995557074945147L22.831757058050982,18.942581872547727L22.77474990147641,19.020959449901994L22.673774459245976,19.046051443025533L22.61949636867763,19.156325278704905L22.54854065251567,19.106765418976316L22.454842719635167,19.099950757708612L22.522462910678428,19.23313850328723L22.484255986591222,19.252960372461224L22.39844202217307,19.219510754519845L22.342041324711033,19.154776568021013L22.30353117106756,19.165307756248993L22.165258493418662,19.067115868433383L22.168290788981096,18.989361281487653L22.099760909269094,18.951875959158272L22.04821188470703,19.024986599856923L21.9126682730643,19.02157901242788L21.859603100720904,18.9989647459241L21.691917156116006,18.97665979176601L21.602464437022945,18.984404620667675L21.497850240117543,18.891772757893612L21.592457861666787,18.79510477993714L21.754079215146817,18.547197699521476L21.86384831450846,18.417643003202826L22.08884464524425,18.4294213640732L22.123716044212756,18.3407704477157L22.210136467743325,18.346660077046984L22.2216591908807,18.240641672628044L22.308382843967536,18.187318407495987L22.308382843967536,17.992603307872194L22.38328054436073,17.957253025340663L22.42967466646661,17.850884821431002L22.354473736517207,17.75070885500177L22.38904190592939,17.70325369270845L22.40177754729183,17.609577620435893L22.515185401328495,17.58848382057979L22.71471044933935,17.48207762167077L23.086773114855305,17.41971784920787L23.382118702640525,17.631291375054985L23.59589553979515,17.646490731104798Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fcf5f5"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M29.009452807484934,28.926556063493983L28.86481230915473,29.216533228182044L28.866025227379737,29.379925377911306L28.762623948699286,29.42998335595704L28.64769994688146,29.4238413710793L28.522769369707362,29.496315042264037L28.558247227788343,29.661823226622936L28.38146439649597,29.74625853381778L28.38176762605218,29.86906434052178L28.334767044833825,29.858012262847843L28.26623716512188,30.00935669696819L28.054582934860946,30.040053360473678L28.05973783731713,29.9252443770488L27.998788696511383,29.897922129055004L27.658868363957765,29.948268326956025L27.583667434008362,29.87489734608056L27.483298450890345,29.916034690471534L27.383839156441127,29.86660833085734L27.347451609691348,29.97589656453745L27.18340441976136,30.049876150276894L27.0569576948061,30.004752139214013L26.86834891082009,30.01119851581545L26.659726976121647,29.902220046323002L26.40713675576734,30.166823440702665L26.336484269161588,30.067372823550343L26.294335360843206,29.939058792674402L26.28948368794329,29.638487468454336L26.51599616646024,29.578303955372945L26.599990753540794,29.512283303458126L26.686107947515154,29.417392257370146L26.74432802231479,29.24786180809275L26.804670704008004,29.26260442046633L26.879568404401198,29.127457842586708L27.231617919204723,29.123464671617704L27.427504212540782,28.956048096813646L27.4281106716532,28.904436616698277L27.47177572775297,29.006121641018126L27.58306097489583,29.007657610067028L27.67979120333888,28.932700290092285L27.754385674175808,28.918875741012236L27.73952742591962,28.861732772107402L27.872645201112334,28.816569683280626L27.852632050400018,28.718557504568857L28.08642203826696,28.731462337119552L28.19194592384116,28.724395420338936L28.20073958097231,28.768639853574975L28.344470390633717,28.9259416392998L28.50487882588874,29.01349427658898L28.440594159964235,29.066637506360436L28.359631868446115,29.098276707661412L28.38328377383351,29.162167219865374L28.294740743409136,29.20301871672809L28.398445251645796,29.297924615491134L28.455452408220424,29.209161693080063L28.466368672245324,29.113635277763294L28.540659913525985,29.12469334085629L28.682874575406117,29.114556786454187Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f3d1d1"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M30.171731696582242,24.481591778795078L30.455554561230088,24.351796532263755L30.621421128497502,24.415308546395657L30.747261394340285,24.36690406337121L30.939812162557587,24.373070347966014L31.045639277687997,24.49114859490313L31.31581681230466,24.3225058791162L31.458334703741116,24.321272572766873L31.565374737096533,24.083220654902043L31.663621113320744,24.111283644652403L31.81553912100088,24.286739479920506L31.945927830187372,24.345013497260332L32.004147904986894,24.44058909376622L32.073587473367695,24.262072375762607L32.14757548509209,24.214895123696373L32.31374528191577,24.239254852060043L32.341035941978134,24.278722726780813L32.34861668088428,24.390952394252004L32.27159637359739,24.437506128638155L32.22489902193519,24.390644085364492L32.17941458849805,24.65113694562755L32.10178782209863,24.723879941001528L32.12968494127341,24.7787425303083L32.19366637764176,24.76641407483195L32.22035057859148,25.033297185911827L32.14575610775461,25.272702692558703L32.160007896898264,25.462468477637508L32.03416763105548,25.56904489411813L32.08177467138631,25.696246925179835L32.005967282324434,25.733819847875004L32.04872264975535,25.785249793705972L31.99353487051826,25.877325645713043L31.716079826551663,25.85115092856431L31.49896746427828,25.626025626525035L31.474405870222256,25.557648432864752L31.369185214204265,25.507133123808963L31.232731913892792,24.977213443148884L31.33370735612334,24.87890658960187L31.318545878310886,24.83175346153042L31.548697111502918,24.926982406295608L31.589026642483873,24.83082887209936L31.70364741474549,24.817268146235023L31.733060681701545,24.86873646180684L31.79886149540721,24.827438704829916L31.874062425356612,24.666857200634624L31.81553912100088,24.532457831100004L31.64876286506467,24.587020846878403L31.565374737096533,24.57838957364229L31.507154662297012,24.51149511210466L31.39859848116032,24.51673582603611L31.39010805358538,24.640040171982513L31.19300884202437,24.786447751347367L31.12902740565613,24.87120195514489L31.027142274756898,24.795693951998487L31.024716438306996,24.86781190051601L30.94041862167012,24.926057889269607L30.922831307407705,24.84562221854533L30.862185396158168,24.8077139075221L30.813971896714804,24.86349727186103L30.753325985465267,24.728195066105094L30.692680074215673,24.848087758772984L30.5016454537797,24.742681445118976L30.405521684449184,24.61877107106315L30.319707720031147,24.640964907010122Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f2cfcf"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M23.993732717592138,9.89089614332277L23.985242290017197,9.964695055517268L24.10471473517873,9.94468239664976L24.639914901955876,10.45861524358569L24.697225288086656,10.65673198714903L24.483448450932087,10.807321541632803L24.317581883664616,11.174005292880459L23.895183111811605,11.095308845732596L23.685045029331945,11.167447515987305L23.407589985365348,11.464373775325612L23.1422641236486,11.520563455381584L22.91271934956916,11.442209118106106L22.821750482694824,11.315766626478194L22.39207420149188,11.272678512470918L22.63344492826502,10.769520303447578L22.644361192289978,10.51111730943282L22.98458475439986,10.293901314157381L23.013391562243385,10.205124500721034L22.9278808273815,9.962818887879777L23.022488448930744,9.90934644588711L23.339969794322144,10.095704315678837L23.420022397171522,9.949685603591227L23.831201675443367,10.04255252410006L23.8603117128431,9.97001084233176Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f6dede"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M24.317581883664616,11.174005292880459L24.33122721369574,11.823616134396389L24.354575889526814,11.945932462133655L24.2790717300212,11.911298620034643L24.036488085023052,11.875727372852012L23.85182128526816,11.905370174236836L23.626824954532424,11.970580980594299L23.499771770464633,12.071664219863777L23.29205952443499,12.130936283517407L22.56339890077186,12.119394126922401L22.597360611071508,12.252276193135685L22.49244318460984,12.488671877118577L22.395712956166847,12.581903789722759L22.283821249911455,12.583150976194219L22.22954315934311,12.642390413707972L22.177994134781045,12.594063786698811L22.114315927969017,12.463413465113689L22.06246367385063,12.416013113266928L21.969675429638812,12.248845205809182L22.0039403694949,12.132496023362116L21.985140137007477,11.70097144498638L22.22074950221196,11.458130264313844L22.34022194737355,11.450013636212674L22.393287119716888,11.379458368174966L22.39207420149188,11.272678512470918L22.821750482694824,11.315766626478194L22.91271934956916,11.442209118106106L23.1422641236486,11.520563455381584L23.407589985365348,11.464373775325612L23.685045029331945,11.167447515987305L23.895183111811605,11.095308845732596Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fefdfd"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M35.23263299035591,31.75708832203818L35.36180878131739,31.895049817553918L35.27902711246185,32.02686764197209L35.36089909264865,32.21169941085097L35.322995398117655,32.34839273193906L35.43033866102945,32.48323489643536L35.50644927964754,32.45442872465963L35.562849977109636,32.525830245149834L35.5925664736219,32.74798072479194L35.55072079485973,32.86961345178699L35.44762274573549,32.90637709591037L35.18017427712499,32.816917345563354L35.20321972339991,33.13337298136014L35.17138061999384,33.166760899685926L35.27660127601183,33.254362447488376L35.424880529016946,33.271208327284235L35.521004298347464,33.535817679690865L35.63047016815284,33.68127235465815L35.6034827376468,33.75445389470058L35.681715963158695,33.86345436562917L35.663522189783805,33.92285031278679L35.55587569731591,33.9274426895053L35.53252702148484,33.82181463066544L35.45580994375422,33.77772429458376L35.34209886016134,33.54684208897763L35.188967934256254,33.47303830189022L35.13256723679416,33.31715070003635L35.15015455105652,33.11897613184975L35.0321982536762,32.997363301353985L34.85450573371503,32.53532976276193L34.80416962737792,32.49855710325704L34.684393952660116,32.52092724485766L34.74018819100968,32.884319015991395L34.711381383166156,33.01084227788673L34.85207989726507,33.3946370707702L34.864512309071245,33.648814172402865L34.58675403554838,33.41485026792058L34.49153995488655,33.38912433480712L34.44453937366819,33.292341988762544L34.10461904111452,33.254975028163514L34.0421537525275,33.178094248186945L34.05003772098996,33.07517211985538L34.09825122043338,33.09600215584071L34.316879730487926,32.886157201525194L34.47607524751794,32.851844038705394L34.45575886724936,32.4247026276108L34.597063840460805,32.0572147346229L34.94031969813312,32.05844086672628Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fcf5f5"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M24.074998238666467,19.57903931604818L24.344872543726922,20.095670540079517L24.389750518051585,20.06657982715256L24.45828039776353,20.132187566864317L24.538939459725384,20.143018652570262L24.562288135556514,20.55266421141495L24.36306631710181,20.83227391499944L24.31303344032085,20.82887201071013L24.234496985252747,20.90556694649704L24.143831347934736,21.12943630746716L23.95795162995489,21.16004477124507L23.65017363036344,21.40179118457347L23.44276461389012,21.469792261182057L23.440945236552636,21.38633581841146L23.385757457315492,21.395609063725317L23.305401624909905,21.27474173382626L23.23929758164786,20.951643202155815L22.976700785937396,20.875569963911886L22.779904803932652,20.882991973481566L22.79264044529498,20.73485159825499L22.752310914314137,20.723717071322625L22.81113744822619,20.61050965665367L22.75837550543912,20.593496606550595L22.86511230923827,20.343219616923953L22.677413213920943,20.39643533410971L22.68923916661464,20.277005745589868L22.81962787580113,20.189745815113703L22.83812487873223,19.831659199829687L22.96972650614373,19.719287814175004L23.061908291242958,19.710619562537666L23.147722255661108,19.77315324435765L23.305401624909905,20.087933724374253L23.315711429822272,19.892947755533037L23.3608926337032,19.893566814133983L23.416686872052765,19.759222787556183L23.49764916357094,19.772224552833066L23.50644282070209,19.85642267093815L23.573153323076554,19.858898986845375L23.64319935056983,19.92916208811679L23.68231596332572,20.08514845723517L23.57770176642032,20.34445722116392L23.588011571332743,20.46171387092243L23.828169379880933,20.29309546683131L23.76418794351258,20.223165337255047L23.78723338978739,20.12630778945691L23.74144572679404,19.94587598690024L23.78905276712493,19.756127106061307L23.918531787642678,19.633530970182903ZM23.433667727202646,20.28690714057948L23.38393807997801,20.279481102759696L23.332085825859735,20.04862984963171L23.31055652736609,20.26865137368123L23.384544539090484,20.339816198036495Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fcf5f5"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M25.569919950967517,44.917454060059185L25.649972553816838,44.93267458443924L25.652398390266853,45.001165784050855L25.552939095817635,44.97924880649022ZM25.555668161823917,44.84896053714289L25.528680731317877,44.80177500042211L25.607823645498513,44.767983509873616L25.638753060235786,44.83739255396705ZM24.360943710208005,43.72691223744242L24.56895918579397,43.88467048293476L24.535907164162893,44.04272262194651L24.467680514007213,43.969940779636346L24.43311234459503,43.812492841351315L24.342143477720697,43.76163214997073ZM26.61272639490329,43.90598834772622L26.677617519940327,43.97024531086089L26.605145655997035,44.0734791269694L26.406227067098655,44.060080302732175L26.327993841586704,44.10393071782033L26.263102716549668,44.28510960400061L26.277354505693324,44.449833433308626L26.233689449593726,44.49306776212758L25.79885826593454,44.61819938387737L25.54930034114267,44.63281287477506L25.55475847315512,44.561571275692145L25.437711864443543,44.51164001761426L25.38767898766264,44.40111776661333L25.289129381882162,44.33656798629848L25.27305821540108,44.21781620007205L25.317329730613153,44.16909580680115L25.23121253663885,44.08017851059975L25.150553474676997,44.095404311896715L25.05867491913392,44.02445124108081L25.088088186089976,43.88923861315074L25.178450593851778,43.79970163420937L25.33491704487551,43.87127058287973L25.45438949003716,43.82558852839562L25.657553292723094,43.627622603696224L25.742457568472446,43.598383126811555L25.873149507215146,43.58193575837714L25.97685401545192,43.698892280642426L26.096326460613454,43.687927857635955L26.118765447775786,43.830765872777505L26.3953108030737,43.84264326652268L26.48870550639799,43.91451543934421ZM25.65815975183557,43.59807854697962L25.57204255786121,43.69127810349774L25.503209448593054,43.70559273586045L25.532016256436577,43.60812966022232L25.62116574597337,43.57097078095215Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f4d6d6"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M24.354575889526814,11.945932462133655L24.430989737701225,12.35270492741548L24.23298083747153,12.57785042217425L24.163541269090786,12.617759735789193L24.06832718842901,12.635531302854282L24.011926490966914,12.671073422449211L23.82149832964342,12.73342475253088L23.74781354747529,12.809176027428855L23.66624479684458,12.833489952500166L23.60923764027001,12.987463510977669L23.531914103426914,13.013954391928543L23.55738538615168,13.101213195080405L23.459442239483735,13.208094215961275L23.08404404884908,13.243614673423345L22.518520926447195,13.356398854680187L22.3499252931735,13.362006556954164L22.293524595711403,13.288169148211118L22.281698643017705,12.854997898906568L22.293524595711403,12.754311518621222L22.22954315934311,12.642390413707972L22.283821249911455,12.583150976194219L22.395712956166847,12.581903789722759L22.49244318460984,12.488671877118577L22.597360611071508,12.252276193135685L22.56339890077186,12.119394126922401L23.29205952443499,12.130936283517407L23.499771770464633,12.071664219863777L23.626824954532424,11.970580980594299L23.85182128526816,11.905370174236836L24.036488085023052,11.875727372852012L24.2790717300212,11.911298620034643Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f7e2e2"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M22.3499252931735,13.362006556954164L22.29807303905511,13.585353057520358L22.32081525577371,13.809892666559847L22.181936119012278,14.161700228234182L22.061857214738097,14.154852109104219L21.919642552858022,14.40415450719427L21.949662278926496,14.533604505916784L21.605193503029113,14.576232085582362L21.17218169670747,14.422826249844327L21.04118652840856,13.612138649288575L21.123968197264105,13.47571113680727L21.312576981250118,13.301877794843861L21.261331186244263,13.269163650158667L21.378074565399686,13.108068901244643L21.499063158342437,12.885232873403382L21.569109185835714,12.370793420592463L21.654316691141275,12.32463587848656L21.8723387420834,12.31465556770435L21.969675429638812,12.248845205809182L22.06246367385063,12.416013113266928L22.114315927969017,12.463413465113689L22.177994134781045,12.594063786698811L22.22954315934311,12.642390413707972L22.293524595711403,12.754311518621222L22.281698643017705,12.854997898906568L22.293524595711403,13.288169148211118Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fdf7f7"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M21.95875916561397,17.434920331913226L22.005153287719793,17.630360794954846L22.190426546587105,17.628809826254226L22.25167891694923,17.75319011070131L22.3499252931735,17.619503965034674L22.40177754729183,17.609577620435893L22.38904190592939,17.70325369270845L22.354473736517207,17.75070885500177L22.42967466646661,17.850884821431002L22.38328054436073,17.957253025340663L22.308382843967536,17.992603307872194L22.308382843967536,18.187318407495987L22.2216591908807,18.240641672628044L22.210136467743325,18.346660077046984L22.123716044212756,18.3407704477157L22.08884464524425,18.4294213640732L21.86384831450846,18.417643003202826L21.754079215146817,18.547197699521476L21.592457861666787,18.79510477993714L21.497850240117543,18.891772757893612L21.398694175224477,18.841580872281384L21.37019059693722,18.788288114504546L21.291957371425326,18.80904782223957L21.210691850350997,18.75854215043539L21.14852979132013,18.680455005019L21.043309135302252,18.639240012664132L20.950520891090434,18.42229237199065L20.855610039984924,18.3677384788403L20.79799642429782,18.270402310605576L20.702782343636102,18.01368886834308L20.67397553579258,17.85119494868305L20.742505415504525,17.74450568968461L20.80982237699152,17.647731484970954L21.026025050596104,17.55901381783289L21.290137994087843,17.461601696039622L21.555160626248323,17.461291451603216L21.61277424193537,17.423130671050124L21.737098359996935,17.46656559427722L21.865667691845942,17.39613804268115L21.873854889864617,17.447640603614488Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fbf0f0"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M32.761615336493605,21.451246922414548L32.82256447729935,21.52697179145376L32.73220206953755,21.53840734782738L32.6797433563068,21.419410041655745ZM32.37560411139032,21.054302869200214L32.57058071605758,21.308437521415343L32.612426394819806,21.53408039425159L32.746150629125054,21.568695556002872L32.821048329518135,21.546752139772558L32.83075167531803,21.651829401779743L32.914443032842485,21.69138535766824L32.94719182491724,21.671916584270747L33.02542505042908,21.832910146929073L32.99055365146057,21.934871170521497L33.039373610016526,21.989555573980553L33.01693462285414,22.03280690722712L32.94082400423599,22.041148046239165L32.94446275891096,22.133205440073326L32.914746262398694,22.23761052074392L33.009657113504204,22.39728857669582L32.894429882130055,22.46121532422854L32.856526187599115,22.413347805207508L32.78496401232468,22.472950281950347L32.81164821327451,22.610055113032644L32.73796343110632,22.72831034824126L32.70187911391281,22.64124109218718L32.61879421550094,22.61715694494449L32.39804309855265,22.703610518038822L32.37863640695281,22.854271267160584L32.26795761892242,22.808889870650198L32.0760133098176,22.62117100446983L31.892256198731502,22.590910826097932L31.94077292773119,22.545827859444444L31.817661727894574,22.402538733866578L32.0356837788367,22.273130780109398L32.159098208229466,21.99264500959626L32.135446302842126,21.71796123543791L32.19639544364793,21.58723895387906L32.13483984372965,21.43146488937566L32.12816879349225,21.35264237998065L32.1706209313669,21.314929253571393L32.12998817082968,21.173029925787155L32.26522855291614,21.201782229103898Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fdf8f8"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M23.433667727202646,20.28690714057948L23.384544539090484,20.339816198036495L23.31055652736609,20.26865137368123L23.332085825859735,20.04862984963171L23.38393807997801,20.279481102759696ZM23.69778067069433,18.598643217449734L23.715367984956742,18.944750500046737L24.074998238666467,19.57903931604818L23.918531787642678,19.633530970182903L23.78905276712493,19.756127106061307L23.74144572679404,19.94587598690024L23.78723338978739,20.12630778945691L23.76418794351258,20.223165337255047L23.828169379880933,20.29309546683131L23.588011571332743,20.46171387092243L23.57770176642032,20.34445722116392L23.68231596332572,20.08514845723517L23.64319935056983,19.92916208811679L23.573153323076554,19.858898986845375L23.50644282070209,19.85642267093815L23.49764916357094,19.772224552833066L23.416686872052765,19.759222787556183L23.3608926337032,19.893566814133983L23.315711429822272,19.892947755533037L23.305401624909905,20.087933724374253L23.147722255661108,19.77315324435765L23.061908291242958,19.710619562537666L22.96972650614373,19.719287814175004L22.933642188950273,19.602570141878324L22.982462147506112,19.53073758507429L22.958810242118773,19.420502413758165L23.037346697186933,19.395419231899623L23.050992027218115,19.32388248303905L22.96517806280002,19.26906536999536L23.048869420324365,19.073001442066015L22.99580424798097,19.009497477944528L23.188961475310748,18.872563798960392L23.203516494010614,18.802231246769068L23.43427418631518,18.75668299985456Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f8e4e4"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M20.862281090222382,12.293135157384711L20.993579488077614,12.335551720556055L21.05513508799595,12.309977260085475L21.093948471195574,12.355199912931539L21.187039944963658,12.299373008841123L21.155807300670062,12.533574029326857L21.242530953756955,12.625554324395502L21.203414341001007,12.682608732033017L21.28437663251907,12.764287123002362L21.231614689731998,12.93229775058866L21.378074565399686,13.108068901244643L21.261331186244263,13.269163650158667L21.312576981250118,13.301877794843861L21.123968197264105,13.47571113680727L21.04118652840856,13.612138649288575L21.17218169670747,14.422826249844327L21.132761854395255,14.502488299457369L20.877745797591047,14.511823266426589L20.829532298147626,14.377079839129827L20.67185292889883,14.282779374703466L20.663059271767622,14.080453487398444L20.595439080724418,13.946272350547979L20.616968379218065,13.700276611288103L20.538128694593638,13.598745947713837L20.588464800930694,13.375402600156107L20.459592239525477,13.232086250355131L20.55329017240598,13.251715643292151L20.552077254180972,13.153252989692312L20.642742891499097,13.029225266564005L20.653355925967674,12.87619365326691L20.600290753624336,12.664838060680779L20.633342775255358,12.558206929897423L20.82589354347266,12.421626438901107Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fffefe"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M21.37019059693722,18.788288114504546L21.307118849237725,18.83848252969551L21.27740235272546,18.91655799635395L21.27740235272546,19.115128807217616L21.38444238608082,19.348347970281203L21.373526122055978,19.460138836749202L21.44053985398665,19.69266367660093L21.476624171180106,19.7093812351834L21.465101448042788,19.87839977643015L21.327435229506307,20.050796241974687L21.10304535788299,20.014895468107667L21.13427800217653,20.10464517729602L21.042399446633453,20.07926842538258L20.971140500915283,19.979922020119396L20.798299653854144,19.940614231769786L20.752815220417006,19.73724325652877L20.810125606547786,19.542813221503536L20.731589151479568,19.422360403851584L20.674278765348788,19.443727058252932L20.625458806792892,19.39170315496581L20.566025813768363,19.42483771896135L20.371352438657425,19.219510754519845L20.388939752919725,19.08694082855633L20.350126369719987,19.006089840789542L20.46899235576916,18.94660932008542L20.510838034531275,18.883407608952453L20.489005506481476,18.827018583183758L20.657297910198906,18.695019316041112L20.784957553379172,18.66434106465732L20.83468720060381,18.63118275800872L20.950520891090434,18.42229237199065L21.043309135302252,18.639240012664132L21.14852979132013,18.680455005019L21.210691850350997,18.75854215043539L21.291957371425326,18.80904782223957Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#f2cdcd"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M30.64628595210985,39.734095896300026L30.642647197434883,39.67917031494152L30.54076206653565,39.70083559083899L30.423412228267807,39.63828026177181L30.381566549505578,39.11914519568934L30.396728027317977,37.879782947213684L30.492548567092285,37.860540133798466L30.543187902985665,37.786621388382166L30.651137625009767,37.81777759238928L30.79729427112113,37.818083042705574L31.09021402245645,38.142747608455345L31.08081390621271,38.2331424921297L31.192705612468103,38.32200608970463L31.189370087349403,38.389490694951974L31.255474130611447,38.47285062194523L31.282764790673696,38.71466480456094L31.33401058567955,38.78701976677377L31.28670677490493,38.823043557380814L31.283977708898703,38.91340527751445L31.338862258579525,39.29403710114089L31.103859352487575,39.46799746037054L31.019561535850755,39.62302255822661L30.873708119295543,39.610511151601216Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fbefef"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M22.558243998315618,19.889542926896198L22.555211702753127,19.977136475759245L22.68863270750211,20.180771879906153L22.68923916661464,20.277005745589868L22.677413213920943,20.39643533410971L22.86511230923827,20.343219616923953L22.75837550543912,20.593496606550595L22.81113744822619,20.61050965665367L22.752310914314137,20.723717071322625L22.79264044529498,20.73485159825499L22.779904803932652,20.882991973481566L22.804163168432467,20.911751790231698L22.518824156003404,21.07099962787796L22.346286538498475,21.118305748185826L22.29837626861132,21.094807534889448L22.177994134781045,21.170865743882025L22.157980984068672,21.085222594713805L21.937229867120323,20.931852293703507L21.75832442893426,20.921956706835523L21.654923150253808,20.81062525435054L21.68403318765354,20.735470179786745L21.502095453904985,20.676084769175574L21.505734208579952,20.536578305525858L21.60428381436043,20.47563533038833L21.719814275290787,20.491412770684555L21.833222129327453,20.388700652338457L21.94875259025781,20.332699924288065L22.254711212511666,20.028513142828537L22.32536369911736,19.840326479261932L22.363267393648357,19.939995200073866Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fffefe"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M36.20994185014217,32.245720667330176L36.302426864797724,32.2984367578106L36.28999445299155,32.369232767968796L36.22631624617952,32.355748071899114ZM36.727251473100694,32.21782942431112L36.84520777048107,32.46270289437594L36.74089680313182,32.72745232541924L36.75909057650671,32.895960820216345L36.74332263958178,32.92537129762374L36.78850384346276,33.0583240893569L36.74847754203802,33.09538951176624L36.78334894100652,33.29356711967363L36.896453565486866,33.48314442199786L36.81791711041882,33.68494682332616L36.83914317935603,33.77956141668835L36.77091652920035,33.822426987714074L36.92495714377418,33.99510215456692L36.90555045217428,34.07500393982112L36.83368504734369,34.0707181228551L36.80214917349389,34.11755534988875L36.728161161769435,34.024185647769464L36.72391594798199,33.85457539714835L36.5729076289706,33.80313762581703L36.530758720652216,33.73761325794456L36.5240876704147,33.530917917127496L36.57017856296443,33.50611263198549L36.44069954244662,33.40841882473833L36.32516908151621,33.47303830189022L36.21449029348594,33.25129954045751L36.25724566091685,33.223733102947705L36.290600912104026,33.09937169387196L36.37186643317841,33.10120962058423L36.42493160552175,33.040556874443766L36.33365950909126,32.91985687635944L36.358827562259705,32.81599821121672L36.337904722878704,32.678121750046586L36.47253864585264,32.68149221322141L36.4455512153466,32.49273468306129L36.539855607339575,32.56352152668456L36.58655295900178,32.54360348732358L36.63506968800141,32.3097766038877Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#ffffff"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M25.213321992820283,1.5121373509197014L25.348259145350482,1.6580710621436054L25.265174246938614,1.8143981704647487L25.198160515007885,1.7291327372448748ZM25.69363760991655,1.0915552741985906L25.789761379247068,1.1699380620331894L25.5708296396362,1.335211124234192L25.624198041535806,1.3996675080586698L25.601152595261055,1.4764394242624803L25.530196879099094,1.5377251177348654L25.424976223081103,1.539620474248828L25.4595443924934,1.3412146419619475L25.579926526323675,1.228403900421938L25.550513259367676,1.154135722669082ZM25.269419460726056,-1.4210854715202004e-14L25.329155683306794,0.07754539664219351L25.283368020313446,0.16331086215895851L25.3094457621508,0.23957385489941174L25.250619228238747,0.2642548434411367L25.21605105882645,0.3822695239290539L25.07717192206502,0.46199026851540026L25.01986153593424,0.36012339182025244L25.119320830383458,0.2335616978181605L25.18481841453297,0.030702596018770123Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fdf7f7"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M25.29003907055096,22.686629077981976L25.348259145350482,22.723987916122418L25.36675614828158,22.791601251218466L25.430131125537343,22.823399762449725L25.471067115630774,22.76782897724533L25.677566443435467,22.83358745005758L25.71183138329144,22.75239217375745L25.82918122155928,22.86538480728401L25.859807406740288,22.94595478505037L25.946227830270857,22.93762021942812L26.069945489219947,23.04318696305004L26.03962253359515,23.134238297133408L25.98867996814556,23.145040525401186L26.139081828044425,23.302741672202956L25.825239237328105,23.594016334602472L25.844342699371623,23.704151204761715L25.76792885119721,23.83370849867098L25.62814002576704,23.807489714704772L25.53383563377406,23.681631465035856L25.27578728140719,23.569334840615817L25.136908144645815,23.382972840079518L25.15115993378953,23.20398806519573L25.107798107246083,23.067879554188174L25.264264558269815,22.808272424407733Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fefdfd"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M33.039980069128944,28.427858630823287L33.161575121184285,28.431853863617604L33.37474549922638,28.52466283167672L33.51453432465661,28.851901480061002L33.61945175111828,28.929628180280247L33.583973893037296,29.098583880763456L33.49846315817547,29.147730683700132L33.29984779883324,29.158174150704376L33.20281434083404,29.17813937946589L33.08849679812863,29.101348435558457L33.02724442776656,28.9385372795236L32.97872769876693,28.952361627782665L32.93354649488606,28.88108791922368L32.94628213624844,28.772019576908896L32.82741615019938,28.622074592927056L32.793757669455886,28.53972063304645L32.8810877816552,28.467503103870712ZM32.72522778974394,28.099593908504517L32.80891914726823,28.133100302753924L32.80194486747456,28.22377849478778L32.731595610425074,28.265887954232902L32.6330460046446,28.17736433083728Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#ffffff"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M22.39844202217307,19.219510754519845L22.484255986591222,19.252960372461224L22.522462910678428,19.23313850328723L22.454842719635167,19.099950757708612L22.54854065251567,19.106765418976316L22.61949636867763,19.156325278704905L22.673774459245976,19.046051443025533L22.77474990147641,19.020959449901994L22.831757058050982,18.942581872547727L22.874209195925744,18.995557074945147L22.99580424798097,19.009497477944528L23.048869420324365,19.073001442066015L22.96517806280002,19.26906536999536L23.050992027218115,19.32388248303905L23.037346697186933,19.395419231899623L22.958810242118773,19.420502413758165L22.982462147506112,19.53073758507429L22.933642188950273,19.602570141878324L22.96972650614373,19.719287814175004L22.83812487873223,19.831659199829687L22.81962787580113,20.189745815113703L22.68923916661464,20.277005745589868L22.68863270750211,20.180771879906153L22.555211702753127,19.977136475759245L22.558243998315618,19.889542926896198L22.617676991340147,19.808133376567213L22.60585103864645,19.62702927017117L22.478797854578715,19.519590723174325L22.52883073135962,19.500702720616566L22.50305621907853,19.393870868078693Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fffefe"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M27.82352201300023,32.209553900183295L27.890535744930958,32.27514383105073L27.754688903732017,32.30456641502285L27.76530193820065,32.22978287805468ZM27.684642876238797,31.35447309909791L27.84717391838757,31.469780201860537L27.872341971556125,31.54153586447009L27.887806678924733,31.77579052681257L27.757721199294508,32.03606379625763L27.750443689944575,32.130167832131164L27.645223033926584,32.28249953137365L27.58548681134579,32.33276251448899L27.445697985915615,32.35053804316108L27.32865137720404,32.4167347077053L27.24344387189842,32.41949283861622L27.224946868967322,32.28311250476521L27.12063590161813,32.191776692943264L27.14671364345537,32.11208315462629L27.26709577728576,32.08235024020665L27.26679254772955,32.00908824851143L27.227675934973547,31.883400234993424L27.38717468155977,31.69699438031219L27.52938934343996,31.5930505753161L27.545157280364833,31.46242044702077Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#ffffff"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M30.548039575885582,35.80370769891926L30.63536968808495,35.821750064692054L30.719970734278036,35.99941115651509L30.79517166422744,36.041912497998936L30.70450602690937,36.143727917147785L30.843081934114593,36.27947231281665L30.78001018641504,36.352843160107746L30.65720221613475,36.33816924277616L30.60413704379141,36.410620486148005L30.498916387773534,36.43354745630829L30.411586275574166,36.41367743322242L30.085917732164148,36.1321096499222L30.13989259317617,36.03671454956682L30.23237760783178,36.06881926984089L30.41219273468664,36.02968200566458L30.509832651798376,35.95323942213933Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g fill="#fffefe"
                                                                                                    stroke="#000000"
                                                                                                    stroke-opacity="0.4"
                                                                                                    stroke-width="5"
                                                                                                    focusable="true"
                                                                                                    tabindex="0">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            shape-rendering="auto">
                                                                                                            <path
                                                                                                                d="M33.90054554975984,35.93581002818771L34.10886425490207,36.100006129344905L34.19316207153889,36.35253745478134L34.099160909102125,36.477872063010494L34.00061130332159,36.40786922911799L33.799570107529405,36.35926295933813L33.67342661213041,36.20334672216687L33.697078517517696,36.01041880077968Z">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                                <g transform="translate(0,-40)">
                                                                                    <g transform="translate(20,20)">
                                                                                        <g>
                                                                                            <g>
                                                                                                <g fill-opacity="1"
                                                                                                    fill="url(&quot;#gradient-id-811&quot;)"
                                                                                                    style="pointer-events: none;">
                                                                                                    <path
                                                                                                        d="M0,0 L20,0 a0,0 0 0 1 0,0 L20,20 a0,0 0 0 1 -0,0 L0,20 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g aria-hidden="true"
                                                                                            transform="translate(0,20)">
                                                                                            <g>
                                                                                                <g fill="#000000">
                                                                                                    <g></g>
                                                                                                </g>
                                                                                                <g stroke="#000000"
                                                                                                    stroke-opacity="0.15"
                                                                                                    fill="none"
                                                                                                    display="none">
                                                                                                    <path
                                                                                                        transform="translate(-0.5,-0.5)"
                                                                                                        d=" M0,0  L0,0 ">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g stroke="#000000"
                                                                                                    stroke-opacity="0"
                                                                                                    fill="none"
                                                                                                    style="pointer-events: none;">
                                                                                                    <path
                                                                                                        d=" M0,0  L0.0001,0 "
                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g></g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                            <g></g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                            <g></g>
                                                                                                        </g>
                                                                                                        <g fill="#000000"
                                                                                                            aria-label="L"
                                                                                                            fill-opacity="0"
                                                                                                            opacity="0"
                                                                                                            stroke-opacity="0"
                                                                                                            font-size="10"
                                                                                                            transform="translate(0,0)"
                                                                                                            style="pointer-events: none;">
                                                                                                            <g transform="translate(0,2)"
                                                                                                                style="user-select: none;">
                                                                                                                <text
                                                                                                                    x="0"
                                                                                                                    y="0"
                                                                                                                    dy="0">
                                                                                                                    <tspan>
                                                                                                                        L
                                                                                                                    </tspan>
                                                                                                                </text>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g fill="#000000"
                                                                                                            font-size="10"
                                                                                                            transform="translate(0,0)"
                                                                                                            display="none">
                                                                                                            <g
                                                                                                                transform="translate(0,2)">
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g fill="#000000"
                                                                                                            font-size="10"
                                                                                                            transform="translate(0,0)"
                                                                                                            display="none">
                                                                                                            <g
                                                                                                                transform="translate(0,2)">
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g fill="#000000"
                                                                                                            font-size="10">
                                                                                                            <g
                                                                                                                transform="translate(0,2)">
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g fill="#000000"
                                                                                                            font-size="10"
                                                                                                            transform="translate(0,0)"
                                                                                                            display="none">
                                                                                                            <g
                                                                                                                transform="translate(0,2)">
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g fill="#000000"
                                                                                                            font-size="10"
                                                                                                            transform="translate(0,0)"
                                                                                                            display="none">
                                                                                                            <g
                                                                                                                transform="translate(0,2)">
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                                <g transform="translate(-30,0)">
                                                                                    <g transform="translate(5,5)">
                                                                                        <g role="button"
                                                                                            focusable="true"
                                                                                            tabindex="0"
                                                                                            aria-label="Press ENTER to zoom out">
                                                                                            <g fill="#d9d9d9"
                                                                                                stroke="#ffffff"
                                                                                                fill-opacity="1"
                                                                                                stroke-opacity="1">
                                                                                                <path
                                                                                                    d="M3,0 L27,0 a3,3 0 0 1 3,3 L30,9 a3,3 0 0 1 -3,3 L3,12 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z">
                                                                                                </path>
                                                                                            </g>
                                                                                            <g
                                                                                                transform="translate(10,6)">
                                                                                                <g fill="#000000"
                                                                                                    transform="translate(5,0)"
                                                                                                    style="pointer-events: none;">
                                                                                                    <g></g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g
                                                                                            transform="translate(0,14)">
                                                                                            <g fill="#000000"
                                                                                                fill-opacity="0.05">
                                                                                                <rect width="30"
                                                                                                    height="0">
                                                                                                </rect>
                                                                                            </g>
                                                                                            <g>
                                                                                                <g role="slider"
                                                                                                    focusable="true"
                                                                                                    tabindex="0"
                                                                                                    aria-valuemin="0"
                                                                                                    aria-valuemax="100"
                                                                                                    aria-live="polite"
                                                                                                    aria-label="Use arrow keys to zoom in and out"
                                                                                                    visibility="hidden"
                                                                                                    style="touch-action: none; user-select: none; -webkit-user-drag: none;">
                                                                                                    <g fill="#d9d9d9"
                                                                                                        stroke="#ffffff"
                                                                                                        fill-opacity="1"
                                                                                                        stroke-opacity="1">
                                                                                                        <path
                                                                                                            d="M0,0 L30,0 a0,0 0 0 1 0,0 L30,0 a0,0 0 0 1 -0,0 L0,0 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                    <g>
                                                                                                        <g fill="#000000"
                                                                                                            transform="translate(15,0)"
                                                                                                            style="pointer-events: none;">
                                                                                                            <g></g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g role="button"
                                                                                            focusable="true"
                                                                                            tabindex="0"
                                                                                            aria-label="Press ENTER to zoom in"
                                                                                            transform="translate(0,15)">
                                                                                            <g fill="#d9d9d9"
                                                                                                stroke="#ffffff"
                                                                                                fill-opacity="1"
                                                                                                stroke-opacity="1">
                                                                                                <path
                                                                                                    d="M3,0 L27,0 a3,3 0 0 1 3,3 L30,9 a3,3 0 0 1 -3,3 L3,12 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z">
                                                                                                </path>
                                                                                            </g>
                                                                                            <g
                                                                                                transform="translate(10,6)">
                                                                                                <g fill="#000000"
                                                                                                    transform="translate(5,0)"
                                                                                                    style="pointer-events: none;">
                                                                                                    <g></g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g></g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                                <g fill="#000000" font-size="20">
                                                                                    <g></g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g></g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <g role="tooltip" visibility="hidden"
                                                                            opacity="0">
                                                                            <g fill="#ffffff" fill-opacity="0.9"
                                                                                stroke-width="1" stroke-opacity="1"
                                                                                stroke="#ffffff"
                                                                                filter="url(&quot;#filter-id-620&quot;)"
                                                                                style="pointer-events: none;">
                                                                                <path
                                                                                    d="M3,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <g fill="#ffffff"
                                                                                    transform="translate(12,0)"
                                                                                    style="pointer-events: none;">
                                                                                    <g transform="translate(0,7)"></g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                        <g visibility="hidden" display="none"
                                                                            style="pointer-events: none;">
                                                                            <g fill="#ffffff" opacity="1">
                                                                                <rect width="0" height="0">
                                                                                </rect>
                                                                            </g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g stroke-opacity="1"
                                                                                            fill="#f3f3f3"
                                                                                            fill-opacity="0.8">
                                                                                            <g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d=" M53,0  a53,53,0,0,1,-106,0 a53,53,0,0,1,106,0 M42,0  a42,42,0,0,0,-84,0 a42,42,0,0,0,84,0 L42,0 ">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g stroke-opacity="1"
                                                                                            fill="#000000"
                                                                                            fill-opacity="0.2">
                                                                                            <g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d=" M50,0  a50,50,0,0,1,-100,0 a50,50,0,0,1,100,0 M45,0  a45,45,0,0,0,-90,0 a45,45,0,0,0,90,0 L45,0 ">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g fill="#000000"
                                                                                            fill-opacity="0.4">
                                                                                            <g></g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                        <g opacity="0"
                                                                            aria-labelledby="id-635-title"
                                                                            filter="url(&quot;#filter-id-635&quot;)"
                                                                            transform="translate(0,0)"
                                                                            aria-hidden="true"
                                                                            style="cursor: pointer;"
                                                                            visibility="hidden">
                                                                            <g fill="#ffffff" opacity="0">
                                                                                <rect width="66" height="21">
                                                                                </rect>
                                                                            </g>
                                                                            <g>
                                                                                <g shape-rendering="auto"
                                                                                    fill="none"
                                                                                    stroke-opacity="1"
                                                                                    stroke-width="1.7999999999999998"
                                                                                    stroke="#3cabff">
                                                                                    <path
                                                                                        d=" M15,15  C17.4001,15 22.7998,15.0001 27,15 C31.2002,14.9999 33.2999,6 36,6 C38.7001,6 38.6999,10.5 40.5,10.5 C42.3001,10.5 42.2999,6 45,6 C47.7001,6 50.9999,14.9999 54,15 C57.0002,15.0001 58.7999,15 60,15">
                                                                                    </path>
                                                                                </g>
                                                                                <g shape-rendering="auto"
                                                                                    fill="none"
                                                                                    stroke-opacity="1"
                                                                                    stroke-width="1.7999999999999998"
                                                                                    stroke="url(&quot;#gradient-id-638&quot;)">
                                                                                    <path
                                                                                        d=" M6,15  C8.2501,15 9.7498,15.0001 15,15 C20.2502,14.9999 20.7748,3.6 27,3.6 C33.2252,3.6 33.8998,14.9999 39.9,15 C45.9002,15.0001 45.9748,15 51,15 C56.0252,15 57.7499,15 60,15">
                                                                                    </path>
                                                                                </g>
                                                                            </g>
                                                                            <title id="id-635-title">Chart created
                                                                                using amCharts library</title>
                                                                        </g>
                                                                        <g role="tooltip" visibility="hidden"
                                                                            opacity="0">
                                                                            <g fill="#ffffff" fill-opacity="0.9"
                                                                                stroke-width="1" stroke-opacity="1"
                                                                                stroke="#ffffff"
                                                                                filter="url(&quot;#filter-id-653&quot;)"
                                                                                transform="translate(10,6)"
                                                                                style="pointer-events: none;">
                                                                                <path
                                                                                    d="M3,0 L3,0 L-10,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <g fill="#ffffff"
                                                                                    transform="translate(22,6)"
                                                                                    style="pointer-events: none;">
                                                                                    <g transform="translate(0,7)"></g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div role="alert"
                                                        style="z-index: -100000; opacity: 0; position: absolute; top: 0px;">
                                                        Zoom level changed to 1</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- DIRECT CHAT -->
                            <div class="card">
                                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">
                                        Health Data
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-sm" data-card-widget="collapse"
                                            fdprocessedid="tztfn">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm" data-card-widget="remove"
                                            fdprocessedid="1hftmn">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card card-primary card-outline card-outline-tabs">
                                    <div class="card-header p-0 border-bottom-0 ui-sortable-handle"
                                        style="cursor: move;">
                                        <ul class="nav nav-tabs ui-sortable-handle" id="custom-tabs-four-tab"
                                            role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="custom-tabs-four-home-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-home"
                                                    role="tab" aria-controls="custom-tabs-four-home"
                                                    aria-selected="true">Maternal</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-profile-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-profile"
                                                    role="tab" aria-controls="custom-tabs-four-profile"
                                                    aria-selected="false">Mortality</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-messages-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-messages"
                                                    role="tab" aria-controls="custom-tabs-four-messages"
                                                    aria-selected="false">FP and FIC</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-settings-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-settings"
                                                    role="tab" aria-controls="custom-tabs-four-settings"
                                                    aria-selected="false">NHTS, 4ps/CCT, PhilHealth</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-four-tabContent">
                                            <div class="tab-pane fade show active" id="custom-tabs-four-home"
                                                role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">#</th>
                                                            <th>Indicator</th>
                                                            <th>Value/Percentage/Ratio</th>
                                                            <th style="width: 40px">National Target</th>
                                                            <th style="width: 40px">National Data</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1.</td>
                                                            <td>Proportion of Pregnant Women with 4 or more Prenatal
                                                                Visits</td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-secondary"
                                                                        style="width: 51%">51%</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-info">95%</span>
                                                                <small class="text-danger mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-44%
                                                                </small>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-info">86.5%</span>
                                                                <small class="text-danger mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-35.5%
                                                                </small>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.</td>
                                                            <td>Livebirths</td>
                                                            <td>
                                                                138,842 </td>
                                                            <td><span class="badge bg-info"></span></td>
                                                            <td><span class="badge bg-info"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.</td>
                                                            <td>Total Deliveries <small>(facility and non-facility
                                                                    deliveries)</small></td>
                                                            <td>
                                                                138,506 </td>
                                                            <td><span class="badge bg-info"></span></td>
                                                            <td><span class="badge bg-info"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.</td>
                                                            <td>Facility-based Deliveries</td>
                                                            <td>
                                                                <div class="progress progress">
                                                                    <div class="progress-bar bg-secondary"
                                                                        style="width: 73%">73%</div>
                                                                </div>
                                                            </td>
                                                            <td><span class="badge bg-info">90%</span>
                                                                <small class="text-danger mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-17%
                                                                </small>
                                                            </td>
                                                            <td><span class="badge bg-info">77.7%</span>
                                                                <small class="text-danger mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-4.7%
                                                                </small>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5.</td>
                                                            <td>Deliveries Attended by Skilled Birth Attendant</td>
                                                            <td>
                                                                <div class="progress progress">
                                                                    <div class="progress-bar bg-secondary"
                                                                        style="width: 72%">72%</div>
                                                                </div>
                                                            </td>
                                                            <td><span class="badge bg-info">90%</span>
                                                                <small class="text-danger mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-18%
                                                                </small>
                                                            </td>
                                                            <td><span class="badge bg-info">84.4%</span>
                                                                <small class="text-danger mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-12.4%
                                                                </small>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>6.</td>
                                                            <td>Low Birth Weight Deliveries <small>(facility and
                                                                    non-facility deliveries)</small></td>
                                                            <td>
                                                                <div class="progress progress">
                                                                    <div class="progress-bar bg-secondary"
                                                                        style="width: 9%">9%</div>
                                                                </div>
                                                            </td>
                                                            <td><span class="badge bg-info">15%</span>
                                                                <small class="text-success mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-6%
                                                                </small>
                                                            </td>
                                                            <td><span class="badge bg-info">21.4%</span>
                                                                <small class="text-success mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-12.4%
                                                                </small>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>7.</td>
                                                            <td>Below 15 Years Old Pregnancy <small>(10-14 years
                                                                    old)</small></td>
                                                            <td>
                                                                6 per 1,000 females
                                                            </td>
                                                            <td><span class="badge bg-info">37 per 1,000
                                                                    females</span>
                                                                <small class="text-success mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-31 </small>
                                                            </td>
                                                            <td><span class="badge bg-info">57 per 1,000
                                                                    females</span>
                                                                <small class="text-success mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-51 </small>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>8.</td>
                                                            <td>15 - 19 Years Old Pregnancy</td>
                                                            <td>
                                                                33 per 1,000 females
                                                            </td>
                                                            <td><span class="badge bg-info">37 per 1,000
                                                                    females</span>
                                                                <small class="text-success mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-4 </small>
                                                            </td>
                                                            <td><span class="badge bg-info">57 per 1,000
                                                                    females</span>
                                                                <small class="text-success mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-24 </small>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-four-profile"
                                                role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">#</th>
                                                            <th>Indicator</th>
                                                            <th>Ratio</th>
                                                            <th style="width: 40px">National Target</th>
                                                            <th style="width: 40px">National Data</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1.</td>
                                                            <td>Fetal Deaths</td>
                                                            <td>
                                                                8 per 1,000 livebirths
                                                            </td>
                                                            <td><span class="badge bg-info">18 per 1,000
                                                                    livebirths</span>
                                                                <small class="text-success mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-10 </small>
                                                            </td>
                                                            <td><span class="badge bg-info">5.01 per 1,000
                                                                    livebirths</span>
                                                                <small class="text-success mr-1">
                                                                    <i class="fas fa-arrow-down"></i>2.99 </small>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.</td>
                                                            <td>Neonatal Deaths</td>
                                                            <td>
                                                                5 per 1,000 livebirths
                                                            </td>
                                                            <td><span class="badge bg-info">10 per 1,000
                                                                    livebirths</span>
                                                                <small class="text-success mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-5 </small>
                                                            </td>
                                                            <td><span class="badge bg-info">14 per 1,000
                                                                    livebirths</span>
                                                                <small class="text-success mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-9 </small>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.</td>
                                                            <td>Infant Deaths</td>
                                                            <td>
                                                                8 per 1,000 livebirths
                                                            </td>
                                                            <td><span class="badge bg-info">15 per 1,000
                                                                    livebirths</span>
                                                                <small class="text-success mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-7 </small>
                                                            </td>
                                                            <td><span class="badge bg-info">21 per 1,000
                                                                    livebirths</span>
                                                                <small class="text-success mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-13 </small>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.</td>
                                                            <td>Under 5 Deaths</td>
                                                            <td>
                                                                15 per 1,000 livebirths
                                                            </td>
                                                            <td><span class="badge bg-info">25.5 per 1,000
                                                                    livebirths</span>
                                                                <small class="text-success mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-10.5 </small>
                                                            </td>
                                                            <td><span class="badge bg-info">27 per 1,000
                                                                    livebirths</span>
                                                                <small class="text-success mr-1">
                                                                    <i class="fas fa-arrow-down"></i>-12 </small>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5.</td>
                                                            <td>Maternal Deaths</td>
                                                            <td>
                                                                232 per 100,000 livebirths
                                                            </td>
                                                            <td><span class="badge bg-info">90 per 100,000
                                                                    livebirths</span>
                                                                <small class="text-danger mr-1">
                                                                    <i class="fas fa-arrow-up"></i>142 </small>
                                                            </td>
                                                            <td><span class="badge bg-info">114 per 100,000
                                                                    livebirths</span>
                                                                <small class="text-danger mr-1">
                                                                    <i class="fas fa-arrow-up"></i>118 </small>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>6.</td>
                                                            <td>Total Mortality</td>
                                                            <td>
                                                                3 per 1,000 population
                                                            </td>
                                                            <td><span class="badge bg-info"></span>
                                                            </td>
                                                            <td><span class="badge bg-info"></span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-four-messages"
                                                role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-12">
                                                        <div class="info-box bg-gradient-info">
                                                            <span class="info-box-icon"><i
                                                                    class="fas fa-users"></i></span>

                                                            <div class="info-box-content">
                                                                <span class="info-box-text">Fully Immunized
                                                                    Children</span>
                                                                <span class="info-box-number">130,571</span>

                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width: 58%">
                                                                    </div>
                                                                </div>
                                                                <span class="progress-description">
                                                                    58%
                                                                </span>
                                                            </div>
                                                            <!-- /.info-box-content -->
                                                        </div>
                                                        <!-- /.info-box -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-md-6 col-sm-6 col-12">
                                                        <div class="info-box bg-gradient-success">
                                                            <span class="info-box-icon"><i
                                                                    class="fas fa-baby"></i></span>

                                                            <div class="info-box-content">
                                                                <span class="info-box-text">Contraceptive Prevalence
                                                                    Rate</span>
                                                                <span class="info-box-number">831,418</span>

                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width: 29%">
                                                                    </div>
                                                                </div>
                                                                <span class="progress-description">
                                                                    29%
                                                                </span>
                                                            </div>
                                                            <!-- /.info-box-content -->
                                                        </div>
                                                        <!-- /.info-box -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-four-settings"
                                                role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                                                <div class="card-footer bg-transparent">
                                                    <div class="row">
                                                        <div class="col-4 text-center">
                                                            <div style="display:inline;width:120px;height:120px;">
                                                                <canvas width="150" height="150"
                                                                    style="width: 120px; height: 120px;"></canvas><input
                                                                    type="text" class="knob" value="47"
                                                                    data-skin="tron" data-thickness="0.2"
                                                                    data-anglearc="250" data-angleoffset="-125"
                                                                    data-width="120" data-height="120"
                                                                    data-fgcolor="#4b94c0" data-readonly="true"
                                                                    readonly="readonly"
                                                                    style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none; font: bold 24px Arial; text-align: center; color: rgb(75, 148, 192); padding: 0px; appearance: none;">
                                                            </div>
                                                            <div>NHTS Households</div>
                                                        </div>
                                                        <!-- ./col -->
                                                        <div class="col-4 text-center">
                                                            <div style="display:inline;width:120px;height:120px;">
                                                                <canvas width="150" height="150"
                                                                    style="width: 120px; height: 120px;"></canvas><input
                                                                    type="text" class="knob" value="33"
                                                                    data-skin="tron" data-thickness="0.2"
                                                                    data-anglearc="250" data-angleoffset="-125"
                                                                    data-width="120" data-height="120"
                                                                    data-fgcolor="#4b94c0" data-readonly="true"
                                                                    readonly="readonly"
                                                                    style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none; font: bold 24px Arial; text-align: center; color: rgb(75, 148, 192); padding: 0px; appearance: none;">
                                                            </div>

                                                            <div>Registered in 4ps/CCT</div>
                                                        </div>
                                                        <!-- ./col -->
                                                        <div class="col-4 text-center">
                                                            <div style="display:inline;width:120px;height:120px;">
                                                                <canvas width="150" height="150"
                                                                    style="width: 120px; height: 120px;"></canvas><input
                                                                    type="text" class="knob" value="96"
                                                                    data-skin="tron" data-thickness="0.2"
                                                                    data-anglearc="250" data-angleoffset="-125"
                                                                    data-width="120" data-height="120"
                                                                    data-fgcolor="#4b94c0" data-readonly="true"
                                                                    readonly="readonly"
                                                                    style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none; font: bold 24px Arial; text-align: center; color: rgb(75, 148, 192); padding: 0px; appearance: none;">
                                                            </div>
                                                            <div>4ps Households enrolled in PhilHealth</div>
                                                        </div>
                                                        <!-- ./col -->
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            <!--/.direct-chat -->

                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable ui-sortable">

                            <!-- Barangay Description card -->
                            <div class="card">
                                <div class="card-header ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">Barangay Description</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Desciption</th>
                                                <th>Percentage</th>
                                                <th style="width: 40px"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Upland</td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-primary"
                                                            style="width: 70.67%"></div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-primary">70.67%</span></td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Island</td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-success" style="width: 9.08%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success">9.08%</span></td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>Landlocked</td>
                                                <td>
                                                    <div class="progress progress-xs progress-striped active">
                                                        <div class="progress-bar bg-warning" style="width: 7.39%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-warning">7.39%</span></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Lowland</td>
                                                <td>
                                                    <div class="progress progress-xs progress-striped active">
                                                        <div class="progress-bar bg-danger" style="width: 30.80%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-danger">30.80%</span></td>
                                            </tr>
                                            <tr>
                                                <td>5.</td>
                                                <td>Others</td>
                                                <td>
                                                    <div class="progress progress-xs progress-striped active">
                                                        <div class="progress-bar bg-secondary" style="width: 6.04%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-secondary">6.04%</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- solid sales graph -->
                            <!--   <div class="card">
                  <div class="card-header border-0">
                    <h3 class="card-title">
                      Population by Age Group
                    </h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-sm" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-sm" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                  </div>
                  <!-- /.card-footer -->




                            <div class="card">
                                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">
                                        Population by Age Group
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-sm" data-card-widget="collapse"
                                            fdprocessedid="t41ymt">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm" data-card-widget="remove"
                                            fdprocessedid="bde73d">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="chartdiv2">
                                        <div
                                            style="width: 100%; height: 100%; position: relative; left: 0.237499px; top: -0.262451px;">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" role="group"
                                                style="width: 100%; height: 100%; overflow: visible;">
                                                <defs>
                                                    <clipPath id="id-23">
                                                        <rect width="770" height="250"></rect>
                                                    </clipPath>
                                                    <linearGradient id="gradient-id-46" x1="1%"
                                                        x2="99%" y1="59%" y2="41%">
                                                        <stop stop-color="#474758" offset="0"></stop>
                                                        <stop stop-color="#474758" stop-opacity="1"
                                                            offset="0.75"></stop>
                                                        <stop stop-color="#3cabff" stop-opacity="1"
                                                            offset="0.755"></stop>
                                                    </linearGradient>
                                                    <filter id="filter-id-79" filterUnits="objectBoundingBox"
                                                        width="200%" height="200%" x="-50%"
                                                        y="-50%"></filter>
                                                    <filter id="filter-id-100" filterUnits="objectBoundingBox"
                                                        width="200%" height="200%" x="-50%"
                                                        y="-50%"></filter>
                                                    <clipPath id="id-133">
                                                        <path d="M0,0 L297,0 L297,180 L0,180 L0,0"></path>
                                                    </clipPath>
                                                    <filter id="filter-id-175" filterUnits="objectBoundingBox"
                                                        width="200%" height="200%" x="-50%"
                                                        y="-50%"></filter>
                                                    <filter id="filter-id-196" filterUnits="objectBoundingBox"
                                                        width="200%" height="200%" x="-50%"
                                                        y="-50%"></filter>
                                                    <clipPath id="id-229">
                                                        <path d="M0,0 L297,0 L297,180 L0,180 L0,0"></path>
                                                    </clipPath>
                                                    <filter id="filter-id-28" filterUnits="objectBoundingBox"
                                                        width="200%" height="200%" x="-50%"
                                                        y="-50%">
                                                        <feGaussianBlur result="blurOut" in="SourceGraphic"
                                                            stdDeviation="1.5"></feGaussianBlur>
                                                        <feOffset result="offsetBlur" dx="1"
                                                            dy="1"></feOffset>
                                                        <feFlood flood-color="#000000" flood-opacity="0.5">
                                                        </feFlood>
                                                        <feComposite in2="offsetBlur" operator="in"></feComposite>
                                                        <feMerge>
                                                            <feMergeNode></feMergeNode>
                                                            <feMergeNode in="SourceGraphic"></feMergeNode>
                                                        </feMerge>
                                                    </filter>
                                                    <filter id="filter-id-43" filterUnits="objectBoundingBox"
                                                        width="120%" height="120%" x="-10%"
                                                        y="-10%">
                                                        <feColorMatrix type="saturate" values="0">
                                                        </feColorMatrix>
                                                    </filter>
                                                    <filter id="filter-id-138" filterUnits="objectBoundingBox"
                                                        width="200%" height="200%" x="-50%"
                                                        y="-50%">
                                                        <feGaussianBlur result="blurOut" in="SourceGraphic"
                                                            stdDeviation="1.5"></feGaussianBlur>
                                                        <feOffset result="offsetBlur" dx="1"
                                                            dy="1"></feOffset>
                                                        <feFlood flood-color="#000000" flood-opacity="0.5">
                                                        </feFlood>
                                                        <feComposite in2="offsetBlur" operator="in"></feComposite>
                                                        <feMerge>
                                                            <feMergeNode></feMergeNode>
                                                            <feMergeNode in="SourceGraphic"></feMergeNode>
                                                        </feMerge>
                                                    </filter>
                                                    <filter id="filter-id-234" filterUnits="objectBoundingBox"
                                                        width="200%" height="200%" x="-50%"
                                                        y="-50%">
                                                        <feGaussianBlur result="blurOut" in="SourceGraphic"
                                                            stdDeviation="1.5"></feGaussianBlur>
                                                        <feOffset result="offsetBlur" dx="1"
                                                            dy="1"></feOffset>
                                                        <feFlood flood-color="#000000" flood-opacity="0.5">
                                                        </feFlood>
                                                        <feComposite in2="offsetBlur" operator="in"></feComposite>
                                                        <feMerge>
                                                            <feMergeNode></feMergeNode>
                                                            <feMergeNode in="SourceGraphic"></feMergeNode>
                                                        </feMerge>
                                                    </filter>
                                                    <clipPath id="id-445">
                                                        <rect width="297" height="180"></rect>
                                                    </clipPath>
                                                    <clipPath id="id-446">
                                                        <rect width="297" height="180"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g>
                                                    <g fill="#ffffff" fill-opacity="0">
                                                        <rect width="770" height="250"></rect>
                                                    </g>
                                                    <g>
                                                        <g clip-path="url(&quot;#id-23&quot;)">
                                                            <g>
                                                                <g role="region" opacity="1"
                                                                    aria-label="Chart">
                                                                    <g transform="translate(15,15)">
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g
                                                                                                    transform="translate(73,0)">
                                                                                                    <g fill="#ffffff"
                                                                                                        fill-opacity="0">
                                                                                                        <rect
                                                                                                            width="297"
                                                                                                            height="180">
                                                                                                        </rect>
                                                                                                    </g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(535,0)"
                                                                                                                    display="none">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(416,0)"
                                                                                                                    display="none">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(297,0)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(-297,0)"
                                                                                                                    display="none">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(594,0)"
                                                                                                                    display="none">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(891,0)"
                                                                                                                    display="none">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(0,180)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(0,154)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(0,129)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(0,103)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(0,77)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(0,51)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(0,26)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g role="group"
                                                                                                                    stroke-opacity="0"
                                                                                                                    fill-opacity="1"
                                                                                                                    stroke="#67b7dc"
                                                                                                                    aria-label="Series">
                                                                                                                    <g>
                                                                                                                        <g
                                                                                                                            clip-path="url(&quot;#id-133&quot;)">
                                                                                                                            <g>
                                                                                                                                <g>
                                                                                                                                    <g>
                                                                                                                                        <g stroke-opacity="1"
                                                                                                                                            fill="#67b7dc"
                                                                                                                                            fill-opacity="1"
                                                                                                                                            stroke="#67b7dc"
                                                                                                                                            role="menuitem"
                                                                                                                                            focusable="true"
                                                                                                                                            tabindex="0"
                                                                                                                                            transform="translate(279.125,156.857)">
                                                                                                                                            <g>
                                                                                                                                                <g>
                                                                                                                                                    <path
                                                                                                                                                        d="M0,0 L17.875,0 a0,0 0 0 1 0,0 L17.875,20.57 a0,0 0 0 1 -0,0 L0,20.57 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                                                                    </path>
                                                                                                                                                </g>
                                                                                                                                            </g>
                                                                                                                                        </g>
                                                                                                                                        <g stroke-opacity="1"
                                                                                                                                            fill="#67b7dc"
                                                                                                                                            fill-opacity="1"
                                                                                                                                            stroke="#67b7dc"
                                                                                                                                            role="menuitem"
                                                                                                                                            focusable="true"
                                                                                                                                            tabindex="0"
                                                                                                                                            transform="translate(242.408,131.143)">
                                                                                                                                            <g>
                                                                                                                                                <g>
                                                                                                                                                    <path
                                                                                                                                                        d="M0,0 L54.592,0 a0,0 0 0 1 0,0 L54.592,20.572 a0,0 0 0 1 -0,0 L0,20.572 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                                                                    </path>
                                                                                                                                                </g>
                                                                                                                                            </g>
                                                                                                                                        </g>
                                                                                                                                        <g stroke-opacity="1"
                                                                                                                                            fill="#67b7dc"
                                                                                                                                            fill-opacity="1"
                                                                                                                                            stroke="#67b7dc"
                                                                                                                                            role="menuitem"
                                                                                                                                            focusable="true"
                                                                                                                                            tabindex="0"
                                                                                                                                            transform="translate(226.982,105.428)">
                                                                                                                                            <g>
                                                                                                                                                <g>
                                                                                                                                                    <path
                                                                                                                                                        d="M0,0 L70.018,0 a0,0 0 0 1 0,0 L70.018,20.572 a0,0 0 0 1 -0,0 L0,20.572 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                                                                    </path>
                                                                                                                                                </g>
                                                                                                                                            </g>
                                                                                                                                        </g>
                                                                                                                                        <g stroke-opacity="1"
                                                                                                                                            fill="#67b7dc"
                                                                                                                                            fill-opacity="1"
                                                                                                                                            stroke="#67b7dc"
                                                                                                                                            role="menuitem"
                                                                                                                                            focusable="true"
                                                                                                                                            tabindex="0"
                                                                                                                                            transform="translate(224.589,79.715)">
                                                                                                                                            <g>
                                                                                                                                                <g>
                                                                                                                                                    <path
                                                                                                                                                        d="M0,0 L72.411,0 a0,0 0 0 1 0,0 L72.411,20.57 a0,0 0 0 1 -0,0 L0,20.57 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                                                                    </path>
                                                                                                                                                </g>
                                                                                                                                            </g>
                                                                                                                                        </g>
                                                                                                                                        <g stroke-opacity="1"
                                                                                                                                            fill="#67b7dc"
                                                                                                                                            fill-opacity="1"
                                                                                                                                            stroke="#67b7dc"
                                                                                                                                            role="menuitem"
                                                                                                                                            focusable="true"
                                                                                                                                            tabindex="0"
                                                                                                                                            transform="translate(19.616,54)">
                                                                                                                                            <g>
                                                                                                                                                <g>
                                                                                                                                                    <path
                                                                                                                                                        d="M0,0 L277.384,0 a0,0 0 0 1 0,0 L277.384,20.572 a0,0 0 0 1 -0,0 L0,20.572 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                                                                    </path>
                                                                                                                                                </g>
                                                                                                                                            </g>
                                                                                                                                        </g>
                                                                                                                                        <g stroke-opacity="1"
                                                                                                                                            fill="#67b7dc"
                                                                                                                                            fill-opacity="1"
                                                                                                                                            stroke="#67b7dc"
                                                                                                                                            role="menuitem"
                                                                                                                                            focusable="true"
                                                                                                                                            tabindex="0"
                                                                                                                                            transform="translate(236.763,28.285)">
                                                                                                                                            <g>
                                                                                                                                                <g>
                                                                                                                                                    <path
                                                                                                                                                        d="M0,0 L60.237,0 a0,0 0 0 1 0,0 L60.237,20.572 a0,0 0 0 1 -0,0 L0,20.572 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                                                                    </path>
                                                                                                                                                </g>
                                                                                                                                            </g>
                                                                                                                                        </g>
                                                                                                                                        <g stroke-opacity="1"
                                                                                                                                            fill="#67b7dc"
                                                                                                                                            fill-opacity="1"
                                                                                                                                            stroke="#67b7dc"
                                                                                                                                            role="menuitem"
                                                                                                                                            focusable="true"
                                                                                                                                            tabindex="0"
                                                                                                                                            transform="translate(255.516,2.572)">
                                                                                                                                            <g>
                                                                                                                                                <g>
                                                                                                                                                    <path
                                                                                                                                                        d="M0,0 L41.484,0 a0,0 0 0 1 0,0 L41.484,20.57 a0,0 0 0 1 -0,0 L0,20.57 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                                                                    </path>
                                                                                                                                                </g>
                                                                                                                                            </g>
                                                                                                                                        </g>
                                                                                                                                    </g>
                                                                                                                                </g>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g>
                                                                                                                        </g>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g
                                                                                                            clip-path="url(&quot;#id-445&quot;)">
                                                                                                            <g>
                                                                                                                <g fill="#67b7dc"
                                                                                                                    stroke="#67b7dc">
                                                                                                                    <g>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                            <g></g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                            <g></g>
                                                                                                        </g>
                                                                                                        <g role="button"
                                                                                                            focusable="true"
                                                                                                            tabindex="0"
                                                                                                            opacity="0"
                                                                                                            visibility="hidden"
                                                                                                            aria-hidden="true"
                                                                                                            transform="translate(257,-3)"
                                                                                                            aria-labelledby="id-65-title">
                                                                                                            <g fill="#6794dc"
                                                                                                                stroke="#ffffff"
                                                                                                                fill-opacity="1"
                                                                                                                stroke-opacity="0"
                                                                                                                transform="translate(0,8)">
                                                                                                                <path
                                                                                                                    d="M17,0 L18,0 a17,17 0 0 1 17,17 L35,17 a17,17 0 0 1 -17,17 L17,34 a17,17 0 0 1 -17,-17 L0,17 a17,17 0 0 1 17,-17 Z">
                                                                                                                </path>
                                                                                                            </g>
                                                                                                            <g
                                                                                                                transform="translate(9,9)">
                                                                                                                <g stroke="#ffffff"
                                                                                                                    style="pointer-events: none;"
                                                                                                                    transform="translate(0,8)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L11,0 "
                                                                                                                        transform="translate(2.5,7.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    style="pointer-events: none;"
                                                                                                                    transform="translate(17,8)">
                                                                                                                    <g
                                                                                                                        display="none">
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                            <title
                                                                                                                id="id-65-title">
                                                                                                                Zoom Out
                                                                                                            </title>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g
                                                                                                            aria-hidden="true">
                                                                                                            <g>
                                                                                                                <g fill="#000000"
                                                                                                                    transform="translate(0,90) rotate(-90)">
                                                                                                                    <g
                                                                                                                        display="none">
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    display="none"
                                                                                                                    transform="translate(73,0)">
                                                                                                                    <path
                                                                                                                        transform="translate(-0.5,-0.5)"
                                                                                                                        d=" M0,0  L297,0 ">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g
                                                                                                                    transform="translate(0,0)">
                                                                                                                    <g>
                                                                                                                        <g fill="#000000"
                                                                                                                            aria-label="L"
                                                                                                                            fill-opacity="0"
                                                                                                                            opacity="0"
                                                                                                                            stroke-opacity="0"
                                                                                                                            style="pointer-events: none;"
                                                                                                                            transform="translate(73,90)">
                                                                                                                            <g transform="translate(-63,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        50
                                                                                                                                        to
                                                                                                                                        59
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            transform="translate(73,167.143)">
                                                                                                                            <g transform="translate(-30,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        &lt;
                                                                                                                                        1
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            transform="translate(73,141.429)">
                                                                                                                            <g transform="translate(-47,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        1
                                                                                                                                        to
                                                                                                                                        4
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            transform="translate(73,115.715)">
                                                                                                                            <g transform="translate(-47,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        5
                                                                                                                                        to
                                                                                                                                        9
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            transform="translate(73,90)">
                                                                                                                            <g transform="translate(-63,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        10
                                                                                                                                        to
                                                                                                                                        14
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            transform="translate(73,64.285)">
                                                                                                                            <g transform="translate(-63,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        15
                                                                                                                                        to
                                                                                                                                        49
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            transform="translate(73,38.571)">
                                                                                                                            <g transform="translate(-63,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        50
                                                                                                                                        to
                                                                                                                                        59
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            transform="translate(73,12.857)">
                                                                                                                            <g transform="translate(-38,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        &gt;
                                                                                                                                        60
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            display="none"
                                                                                                                            transform="translate(73,-12.857)">
                                                                                                                            <g transform="translate(-10,0)"
                                                                                                                                display="none">
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0"
                                                                                                                    fill="none"
                                                                                                                    style="pointer-events: none;"
                                                                                                                    transform="translate(73,0)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g
                                                                                                    transform="translate(370,0)">
                                                                                                    <g></g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g>
                                                                                            <g
                                                                                                transform="translate(73,0)">
                                                                                            </g>
                                                                                        </g>
                                                                                        <g
                                                                                            transform="translate(0,180)">
                                                                                            <g
                                                                                                transform="translate(73,0)">
                                                                                                <g aria-hidden="true">
                                                                                                    <g>
                                                                                                        <g stroke="#000000"
                                                                                                            stroke-opacity="0"
                                                                                                            fill="none"
                                                                                                            style="pointer-events: none;">
                                                                                                            <path
                                                                                                                d=" M0,0  L297,0 "
                                                                                                                transform="translate(-0.5,-0.5)">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g fill="#000000"
                                                                                                                    aria-label="L"
                                                                                                                    fill-opacity="0"
                                                                                                                    opacity="0"
                                                                                                                    stroke-opacity="0"
                                                                                                                    style="pointer-events: none;"
                                                                                                                    transform="translate(148.5,0)">
                                                                                                                    <g transform="translate(-4,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                L
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    transform="translate(534.6,0)"
                                                                                                                    display="none">
                                                                                                                    <g transform="translate(-17.5,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                -40%
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    transform="translate(415.8,0)"
                                                                                                                    display="none">
                                                                                                                    <g transform="translate(-17.5,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                -20%
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    transform="translate(297,0)">
                                                                                                                    <g transform="translate(-11,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                0%
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    transform="translate(-297,0)"
                                                                                                                    display="none">
                                                                                                                    <g transform="translate(-19,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                100%
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    transform="translate(0,0)">
                                                                                                                    <g transform="translate(-15,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                50%
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    transform="translate(594,0)"
                                                                                                                    display="none">
                                                                                                                    <g transform="translate(-17.5,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                -50%
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    transform="translate(891,0)"
                                                                                                                    display="none">
                                                                                                                    <g transform="translate(-21.5,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                -100%
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g stroke="#000000"
                                                                                                            stroke-opacity="0.15"
                                                                                                            fill="none"
                                                                                                            transform="translate(297,-180)"
                                                                                                            opacity="1">
                                                                                                            <path
                                                                                                                transform="translate(-0.5,-0.5)"
                                                                                                                d=" M0,0  L0,180 ">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                        <g fill="#000000"
                                                                                                            transform="translate(148.5,40)">
                                                                                                            <g
                                                                                                                display="none">
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g role="region" opacity="1"
                                                                    aria-label="Chart" transform="translate(385,0)">
                                                                    <g transform="translate(0,15)">
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g fill="#ffffff"
                                                                                                        fill-opacity="0">
                                                                                                        <rect
                                                                                                            width="297"
                                                                                                            height="180">
                                                                                                        </rect>
                                                                                                    </g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(-238,0)"
                                                                                                                    display="none">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(-119,0)"
                                                                                                                    display="none">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(594,0)"
                                                                                                                    display="none">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(297,0)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(-297,0)"
                                                                                                                    display="none">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(-594,0)"
                                                                                                                    display="none">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(0,180)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(0,154)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(0,129)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(0,103)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(0,77)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(0,51)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    transform="translate(0,26)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L297,0 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g role="group"
                                                                                                                    stroke-opacity="0"
                                                                                                                    fill-opacity="1"
                                                                                                                    stroke="#a367dc"
                                                                                                                    aria-label="Series">
                                                                                                                    <g>
                                                                                                                        <g
                                                                                                                            clip-path="url(&quot;#id-229&quot;)">
                                                                                                                            <g>
                                                                                                                                <g>
                                                                                                                                    <g>
                                                                                                                                        <g stroke-opacity="1"
                                                                                                                                            fill="#a367dc"
                                                                                                                                            fill-opacity="1"
                                                                                                                                            stroke="#a367dc"
                                                                                                                                            role="menuitem"
                                                                                                                                            focusable="true"
                                                                                                                                            tabindex="0"
                                                                                                                                            transform="translate(0,156.857)">
                                                                                                                                            <g>
                                                                                                                                                <g>
                                                                                                                                                    <path
                                                                                                                                                        d="M0,0 L15.745,0 a0,0 0 0 1 0,0 L15.745,20.57 a0,0 0 0 1 -0,0 L0,20.57 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                                                                    </path>
                                                                                                                                                </g>
                                                                                                                                            </g>
                                                                                                                                        </g>
                                                                                                                                        <g stroke-opacity="1"
                                                                                                                                            fill="#a367dc"
                                                                                                                                            fill-opacity="1"
                                                                                                                                            stroke="#a367dc"
                                                                                                                                            role="menuitem"
                                                                                                                                            focusable="true"
                                                                                                                                            tabindex="0"
                                                                                                                                            transform="translate(0,131.143)">
                                                                                                                                            <g>
                                                                                                                                                <g>
                                                                                                                                                    <path
                                                                                                                                                        d="M0,0 L55.205,0 a0,0 0 0 1 0,0 L55.205,20.572 a0,0 0 0 1 -0,0 L0,20.572 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                                                                    </path>
                                                                                                                                                </g>
                                                                                                                                            </g>
                                                                                                                                        </g>
                                                                                                                                        <g stroke-opacity="1"
                                                                                                                                            fill="#a367dc"
                                                                                                                                            fill-opacity="1"
                                                                                                                                            stroke="#a367dc"
                                                                                                                                            role="menuitem"
                                                                                                                                            focusable="true"
                                                                                                                                            tabindex="0"
                                                                                                                                            transform="translate(0,105.428)">
                                                                                                                                            <g>
                                                                                                                                                <g>
                                                                                                                                                    <path
                                                                                                                                                        d="M0,0 L69.586,0 a0,0 0 0 1 0,0 L69.586,20.572 a0,0 0 0 1 -0,0 L0,20.572 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                                                                    </path>
                                                                                                                                                </g>
                                                                                                                                            </g>
                                                                                                                                        </g>
                                                                                                                                        <g stroke-opacity="1"
                                                                                                                                            fill="#a367dc"
                                                                                                                                            fill-opacity="1"
                                                                                                                                            stroke="#a367dc"
                                                                                                                                            role="menuitem"
                                                                                                                                            focusable="true"
                                                                                                                                            tabindex="0"
                                                                                                                                            transform="translate(0,79.715)">
                                                                                                                                            <g>
                                                                                                                                                <g>
                                                                                                                                                    <path
                                                                                                                                                        d="M0,0 L73.401,0 a0,0 0 0 1 0,0 L73.401,20.57 a0,0 0 0 1 -0,0 L0,20.57 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                                                                    </path>
                                                                                                                                                </g>
                                                                                                                                            </g>
                                                                                                                                        </g>
                                                                                                                                        <g stroke-opacity="1"
                                                                                                                                            fill="#a367dc"
                                                                                                                                            fill-opacity="1"
                                                                                                                                            stroke="#a367dc"
                                                                                                                                            role="menuitem"
                                                                                                                                            focusable="true"
                                                                                                                                            tabindex="0"
                                                                                                                                            transform="translate(0,54)">
                                                                                                                                            <g>
                                                                                                                                                <g>
                                                                                                                                                    <path
                                                                                                                                                        d="M0,0 L273.994,0 a0,0 0 0 1 0,0 L273.994,20.572 a0,0 0 0 1 -0,0 L0,20.572 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                                                                    </path>
                                                                                                                                                </g>
                                                                                                                                            </g>
                                                                                                                                        </g>
                                                                                                                                        <g stroke-opacity="1"
                                                                                                                                            fill="#a367dc"
                                                                                                                                            fill-opacity="1"
                                                                                                                                            stroke="#a367dc"
                                                                                                                                            role="menuitem"
                                                                                                                                            focusable="true"
                                                                                                                                            tabindex="0"
                                                                                                                                            transform="translate(0,28.285)">
                                                                                                                                            <g>
                                                                                                                                                <g>
                                                                                                                                                    <path
                                                                                                                                                        d="M0,0 L60.855,0 a0,0 0 0 1 0,0 L60.855,20.572 a0,0 0 0 1 -0,0 L0,20.572 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                                                                    </path>
                                                                                                                                                </g>
                                                                                                                                            </g>
                                                                                                                                        </g>
                                                                                                                                        <g stroke-opacity="1"
                                                                                                                                            fill="#a367dc"
                                                                                                                                            fill-opacity="1"
                                                                                                                                            stroke="#a367dc"
                                                                                                                                            role="menuitem"
                                                                                                                                            focusable="true"
                                                                                                                                            tabindex="0"
                                                                                                                                            transform="translate(0,2.572)">
                                                                                                                                            <g>
                                                                                                                                                <g>
                                                                                                                                                    <path
                                                                                                                                                        d="M0,0 L45.215,0 a0,0 0 0 1 0,0 L45.215,20.57 a0,0 0 0 1 -0,0 L0,20.57 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0 Z">
                                                                                                                                                    </path>
                                                                                                                                                </g>
                                                                                                                                            </g>
                                                                                                                                        </g>
                                                                                                                                    </g>
                                                                                                                                </g>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g>
                                                                                                                        </g>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g
                                                                                                            clip-path="url(&quot;#id-446&quot;)">
                                                                                                            <g>
                                                                                                                <g fill="#a367dc"
                                                                                                                    stroke="#a367dc">
                                                                                                                    <g>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                            <g></g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                            <g></g>
                                                                                                        </g>
                                                                                                        <g role="button"
                                                                                                            focusable="true"
                                                                                                            tabindex="0"
                                                                                                            opacity="0"
                                                                                                            visibility="hidden"
                                                                                                            aria-hidden="true"
                                                                                                            transform="translate(257,-3)"
                                                                                                            aria-labelledby="id-161-title">
                                                                                                            <g fill="#6794dc"
                                                                                                                stroke="#ffffff"
                                                                                                                fill-opacity="1"
                                                                                                                stroke-opacity="0"
                                                                                                                transform="translate(0,8)">
                                                                                                                <path
                                                                                                                    d="M17,0 L18,0 a17,17 0 0 1 17,17 L35,17 a17,17 0 0 1 -17,17 L17,34 a17,17 0 0 1 -17,-17 L0,17 a17,17 0 0 1 17,-17 Z">
                                                                                                                </path>
                                                                                                            </g>
                                                                                                            <g
                                                                                                                transform="translate(9,9)">
                                                                                                                <g stroke="#ffffff"
                                                                                                                    style="pointer-events: none;"
                                                                                                                    transform="translate(0,8)">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L11,0 "
                                                                                                                        transform="translate(2.5,7.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    style="pointer-events: none;"
                                                                                                                    transform="translate(17,8)">
                                                                                                                    <g
                                                                                                                        display="none">
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                            <title
                                                                                                                id="id-161-title">
                                                                                                                Zoom Out
                                                                                                            </title>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <g></g>
                                                                                                </g>
                                                                                                <g
                                                                                                    transform="translate(297,0)">
                                                                                                    <g>
                                                                                                        <g
                                                                                                            aria-hidden="true">
                                                                                                            <g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0"
                                                                                                                    fill="none"
                                                                                                                    style="pointer-events: none;">
                                                                                                                    <path
                                                                                                                        d=" M0,0  L0,180 "
                                                                                                                        transform="translate(-0.5,-0.5)">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g stroke="#000000"
                                                                                                                    stroke-opacity="0.15"
                                                                                                                    fill="none"
                                                                                                                    display="none"
                                                                                                                    transform="translate(-297,0)">
                                                                                                                    <path
                                                                                                                        transform="translate(-0.5,-0.5)"
                                                                                                                        d=" M0,0  L297,0 ">
                                                                                                                    </path>
                                                                                                                </g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <g fill="#000000"
                                                                                                                            aria-label="L"
                                                                                                                            fill-opacity="0"
                                                                                                                            opacity="0"
                                                                                                                            stroke-opacity="0"
                                                                                                                            style="pointer-events: none;"
                                                                                                                            transform="translate(0,90)">
                                                                                                                            <g transform="translate(10,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        50
                                                                                                                                        to
                                                                                                                                        59
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            transform="translate(0,167.143)">
                                                                                                                            <g transform="translate(10,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        &lt;
                                                                                                                                        1
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            transform="translate(0,141.429)">
                                                                                                                            <g transform="translate(10,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        1
                                                                                                                                        to
                                                                                                                                        4
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            transform="translate(0,115.715)">
                                                                                                                            <g transform="translate(10,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        5
                                                                                                                                        to
                                                                                                                                        9
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            transform="translate(0,90)">
                                                                                                                            <g transform="translate(10,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        10
                                                                                                                                        to
                                                                                                                                        14
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            transform="translate(0,64.285)">
                                                                                                                            <g transform="translate(10,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        15
                                                                                                                                        to
                                                                                                                                        49
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            transform="translate(0,38.571)">
                                                                                                                            <g transform="translate(10,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        50
                                                                                                                                        to
                                                                                                                                        59
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            transform="translate(0,12.857)">
                                                                                                                            <g transform="translate(10,-10)"
                                                                                                                                style="user-select: none;">
                                                                                                                                <text
                                                                                                                                    x="0"
                                                                                                                                    y="20"
                                                                                                                                    dy="-5.4">
                                                                                                                                    <tspan>
                                                                                                                                        &gt;
                                                                                                                                        60
                                                                                                                                    </tspan>
                                                                                                                                </text>
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                        <g fill="#000000"
                                                                                                                            display="none"
                                                                                                                            transform="translate(0,-12.857)">
                                                                                                                            <g transform="translate(10,0)"
                                                                                                                                display="none">
                                                                                                                            </g>
                                                                                                                        </g>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    transform="translate(73,90) rotate(90)">
                                                                                                                    <g
                                                                                                                        display="none">
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g>
                                                                                            <g></g>
                                                                                        </g>
                                                                                        <g
                                                                                            transform="translate(0,180)">
                                                                                            <g>
                                                                                                <g aria-hidden="true">
                                                                                                    <g>
                                                                                                        <g stroke="#000000"
                                                                                                            stroke-opacity="0"
                                                                                                            fill="none"
                                                                                                            style="pointer-events: none;">
                                                                                                            <path
                                                                                                                d=" M0,0  L297,0 "
                                                                                                                transform="translate(-0.5,-0.5)">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g fill="#000000"
                                                                                                                    aria-label="L"
                                                                                                                    fill-opacity="0"
                                                                                                                    opacity="0"
                                                                                                                    stroke-opacity="0"
                                                                                                                    style="pointer-events: none;"
                                                                                                                    transform="translate(148.5,0)">
                                                                                                                    <g transform="translate(-4,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                L
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    transform="translate(-237.6,0)"
                                                                                                                    display="none">
                                                                                                                    <g transform="translate(-17.5,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                -40%
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    transform="translate(-118.8,0)"
                                                                                                                    display="none">
                                                                                                                    <g transform="translate(-17.5,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                -20%
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    display="none">
                                                                                                                    <g transform="translate(-11,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                0%
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    transform="translate(594,0)"
                                                                                                                    display="none">
                                                                                                                    <g transform="translate(-19,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                100%
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    transform="translate(297,0)">
                                                                                                                    <g transform="translate(-15,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                50%
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    transform="translate(-297,0)"
                                                                                                                    display="none">
                                                                                                                    <g transform="translate(-17.5,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                -50%
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                                <g fill="#000000"
                                                                                                                    transform="translate(-594,0)"
                                                                                                                    display="none">
                                                                                                                    <g transform="translate(-21.5,10)"
                                                                                                                        style="user-select: none;">
                                                                                                                        <text
                                                                                                                            x="0"
                                                                                                                            y="20"
                                                                                                                            dy="-5.4">
                                                                                                                            <tspan>
                                                                                                                                -100%
                                                                                                                            </tspan>
                                                                                                                        </text>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g stroke="#000000"
                                                                                                            stroke-opacity="0.15"
                                                                                                            fill="none"
                                                                                                            transform="translate(0,-180)">
                                                                                                            <path
                                                                                                                transform="translate(-0.5,-0.5)"
                                                                                                                d=" M0,0  L0,180 ">
                                                                                                            </path>
                                                                                                        </g>
                                                                                                        <g fill="#000000"
                                                                                                            transform="translate(148.5,40)">
                                                                                                            <g
                                                                                                                display="none">
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <g role="tooltip" visibility="hidden"
                                                                    opacity="0">
                                                                    <g fill="#ffffff" fill-opacity="0.9"
                                                                        stroke-width="1" stroke-opacity="1"
                                                                        stroke="#ffffff"
                                                                        filter="url(&quot;#filter-id-28&quot;)"
                                                                        style="pointer-events: none;"
                                                                        transform="translate(0,6)">
                                                                        <path
                                                                            d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3">
                                                                        </path>
                                                                    </g>
                                                                    <g>
                                                                        <g fill="#ffffff"
                                                                            style="pointer-events: none;"
                                                                            transform="translate(12,6)">
                                                                            <g transform="translate(0,7)"
                                                                                display="none"></g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g visibility="hidden" display="none"
                                                                    style="pointer-events: none;">
                                                                    <g fill="#ffffff" opacity="1">
                                                                        <rect width="770" height="250"></rect>
                                                                    </g>
                                                                    <g>
                                                                        <g transform="translate(233.5,125)">
                                                                            <g>
                                                                                <g stroke-opacity="1" fill="#f3f3f3"
                                                                                    fill-opacity="0.8">
                                                                                    <g>
                                                                                        <g>
                                                                                            <path
                                                                                                d=" M53,0  a53,53,0,0,1,-106,0 a53,53,0,0,1,106,0 M42,0  a42,42,0,0,0,-84,0 a42,42,0,0,0,84,0 L42,0 ">
                                                                                            </path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                                <g stroke-opacity="1" fill="#000000"
                                                                                    fill-opacity="0.2">
                                                                                    <g>
                                                                                        <g>
                                                                                            <path
                                                                                                d=" M50,0  a50,50,0,0,1,-100,0 a50,50,0,0,1,100,0 M45,0  a45,45,0,0,0,-90,0 a45,45,0,0,0,90,0 L45,0 ">
                                                                                            </path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                                <g fill="#000000"
                                                                                    fill-opacity="0.4">
                                                                                    <g transform="translate(-19,-10)"
                                                                                        style="user-select: none;">
                                                                                        <text x="19px"
                                                                                            y="20"
                                                                                            dy="-5.4"
                                                                                            text-anchor="middle">
                                                                                            <tspan>100%</tspan>
                                                                                        </text></g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g opacity="0.3" aria-labelledby="id-43-title"
                                                                    filter="url(&quot;#filter-id-43&quot;)"
                                                                    style="cursor: pointer;"
                                                                    transform="translate(0,229)">
                                                                    <g fill="#ffffff" opacity="0">
                                                                        <rect width="66" height="21"></rect>
                                                                    </g>
                                                                    <g>
                                                                        <g shape-rendering="auto" fill="none"
                                                                            stroke-opacity="1"
                                                                            stroke-width="1.7999999999999998"
                                                                            stroke="#3cabff">
                                                                            <path
                                                                                d=" M15,15  C17.4001,15 22.7998,15.0001 27,15 C31.2002,14.9999 33.2999,6 36,6 C38.7001,6 38.6999,10.5 40.5,10.5 C42.3001,10.5 42.2999,6 45,6 C47.7001,6 50.9999,14.9999 54,15 C57.0002,15.0001 58.7999,15 60,15">
                                                                            </path>
                                                                        </g>
                                                                        <g shape-rendering="auto" fill="none"
                                                                            stroke-opacity="1"
                                                                            stroke-width="1.7999999999999998"
                                                                            stroke="url(&quot;#gradient-id-46&quot;)">
                                                                            <path
                                                                                d=" M6,15  C8.2501,15 9.7498,15.0001 15,15 C20.2502,14.9999 20.7748,3.6 27,3.6 C33.2252,3.6 33.8998,14.9999 39.9,15 C45.9002,15.0001 45.9748,15 51,15 C56.0252,15 57.7499,15 60,15">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                    <title id="id-43-title">Chart created using
                                                                        amCharts library</title>
                                                                </g>
                                                                <g role="tooltip" visibility="hidden"
                                                                    opacity="0">
                                                                    <g fill="#000000" fill-opacity="1"
                                                                        stroke-width="1" stroke-opacity="1"
                                                                        stroke="#000000"
                                                                        style="pointer-events: none;"
                                                                        transform="translate(-25,15)">
                                                                        <path
                                                                            d="M0,0 L20,0 a0,0 0 0 1 0,0 L20,0 L20,0 L25,0 L20,10 L20,10 a0,0 0 0 1 -0,0 L0,10 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0">
                                                                        </path>
                                                                    </g>
                                                                    <g>
                                                                        <g fill="#ffffff"
                                                                            style="pointer-events: none;"
                                                                            transform="translate(-15,15)">
                                                                            <g transform="translate(0,5)"
                                                                                display="none"></g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g role="tooltip" visibility="hidden"
                                                                    opacity="0">
                                                                    <g fill="#000000" fill-opacity="1"
                                                                        stroke-width="1" stroke-opacity="1"
                                                                        stroke="#000000"
                                                                        style="pointer-events: none;"
                                                                        transform="translate(88,195)">
                                                                        <path
                                                                            d="M0,0 L20,0 a0,0 0 0 1 0,0 L20,10 a0,0 0 0 1 -0,0 L0,10 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0">
                                                                        </path>
                                                                    </g>
                                                                    <g>
                                                                        <g fill="#ffffff"
                                                                            style="pointer-events: none;"
                                                                            transform="translate(98,195)">
                                                                            <g transform="translate(0,5)"
                                                                                display="none"></g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g role="tooltip" visibility="hidden"
                                                                    opacity="0">
                                                                    <g fill="#ffffff" fill-opacity="0.9"
                                                                        stroke-width="1" stroke-opacity="1"
                                                                        stroke="#ffffff"
                                                                        filter="url(&quot;#filter-id-138&quot;)"
                                                                        style="pointer-events: none;"
                                                                        transform="translate(6,0)">
                                                                        <path
                                                                            d="M3,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,8 L0,8 L-6,0 L0,-2 L0,3 a3,3 0 0 1 3,-3">
                                                                        </path>
                                                                    </g>
                                                                    <g>
                                                                        <g fill="#ffffff"
                                                                            style="pointer-events: none;"
                                                                            transform="translate(18,0)">
                                                                            <g transform="translate(0,7)"
                                                                                display="none"></g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g role="tooltip" visibility="hidden"
                                                                    opacity="0">
                                                                    <g fill="#000000" fill-opacity="1"
                                                                        stroke-width="1" stroke-opacity="1"
                                                                        stroke="#000000"
                                                                        style="pointer-events: none;"
                                                                        transform="translate(5,15)">
                                                                        <path
                                                                            d="M0,0 L20,0 a0,0 0 0 1 0,0 L20,0 L20,0 L677,0 L20,10 L20,10 a0,0 0 0 1 -0,0 L0,10 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0">
                                                                        </path>
                                                                    </g>
                                                                    <g>
                                                                        <g fill="#ffffff"
                                                                            style="pointer-events: none;"
                                                                            transform="translate(15,15)">
                                                                            <g transform="translate(0,5)"
                                                                                display="none"></g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g role="tooltip" visibility="hidden"
                                                                    opacity="0">
                                                                    <g fill="#000000" fill-opacity="1"
                                                                        stroke-width="1" stroke-opacity="1"
                                                                        stroke="#000000"
                                                                        style="pointer-events: none;"
                                                                        transform="translate(385,195)">
                                                                        <path
                                                                            d="M0,0 L20,0 a0,0 0 0 1 0,0 L20,10 a0,0 0 0 1 -0,0 L0,10 a0,0 0 0 1 -0,-0 L0,0 a0,0 0 0 1 0,-0">
                                                                        </path>
                                                                    </g>
                                                                    <g>
                                                                        <g fill="#ffffff"
                                                                            style="pointer-events: none;"
                                                                            transform="translate(395,195)">
                                                                            <g transform="translate(0,5)"
                                                                                display="none"></g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g role="tooltip" visibility="hidden"
                                                                    opacity="0">
                                                                    <g fill="#ffffff" fill-opacity="0.9"
                                                                        stroke-width="1" stroke-opacity="1"
                                                                        stroke="#ffffff"
                                                                        filter="url(&quot;#filter-id-234&quot;)"
                                                                        style="pointer-events: none;"
                                                                        transform="translate(6,0)">
                                                                        <path
                                                                            d="M3,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,8 L0,8 L-6,0 L0,-2 L0,3 a3,3 0 0 1 3,-3">
                                                                        </path>
                                                                    </g>
                                                                    <g>
                                                                        <g fill="#ffffff"
                                                                            style="pointer-events: none;"
                                                                            transform="translate(18,0)">
                                                                            <g transform="translate(0,7)"
                                                                                display="none"></g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></div>
                                    </div>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->

                            <!-- Calendar -->
                            <div class="card">
                                <div class="card-header ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">Barangays with Barangay Health Board Meetings: <b>4,757
                                            <sup>(74 %)</sup></b></h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            fdprocessedid="n9wc3o"><i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"
                                            fdprocessedid="lnj71r"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="donutChart"
                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 770px;"
                                        width="962" height="312" class="chartjs-render-monitor"></canvas>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->
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

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3 control-sidebar-content">
                <h5>Customize AdminLTE</h5>
                <hr class="mb-2">
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>No Navbar
                        border</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Body small
                        text</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Navbar small
                        text</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar nav small
                        text</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Footer small
                        text</span></div>
                <div class="mb-1"><input type="checkbox" value="1" checked="checked"
                        class="mr-1"><span>Sidebar nav flat style</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar nav
                        legacy style</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar nav
                        compact</span></div>
                <div class="mb-1"><input type="checkbox" value="1" checked="checked"
                        class="mr-1"><span>Sidebar nav child indent</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Main Sidebar
                        disable hover/focus auto expand</span></div>
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Brand small
                        text</span></div>
                <h6>Navbar Variants</h6>
                <div class="d-flex">
                    <div class="d-flex flex-wrap mb-3">
                        <div class="bg-primary elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-secondary elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-info elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-success elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-danger elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-indigo elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-purple elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-pink elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-navy elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-lightblue elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-teal elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-cyan elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-dark elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-gray-dark elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-gray elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-light elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-warning elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-white elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                        <div class="bg-orange elevation-2"
                            style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                        </div>
                    </div>
                </div>
                <h6>Accent Color Variants</h6>
                <div class="d-flex"></div>
                <div class="d-flex flex-wrap mb-3">
                    <div class="bg-primary elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-warning elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-info elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-danger elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-success elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-indigo elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-lightblue elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-navy elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-purple elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-fuchsia elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-pink elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-maroon elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-orange elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-lime elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-teal elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-olive elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                </div>
                <h6>Dark Sidebar Variants</h6>
                <div class="d-flex"></div>
                <div class="d-flex flex-wrap mb-3">
                    <div class="bg-primary elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-warning elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-info elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-danger elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-success elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-indigo elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-lightblue elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-navy elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-purple elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-fuchsia elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-pink elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-maroon elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-orange elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-lime elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-teal elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-olive elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                </div>
                <h6>Light Sidebar Variants</h6>
                <div class="d-flex"></div>
                <div class="d-flex flex-wrap mb-3">
                    <div class="bg-primary elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-warning elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-info elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-danger elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-success elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-indigo elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-lightblue elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-navy elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-purple elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-fuchsia elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-pink elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-maroon elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-orange elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-lime elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-teal elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-olive elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                </div>
                <h6>Brand Logo Variants</h6>
                <div class="d-flex"></div>
                <div class="d-flex flex-wrap mb-3">
                    <div class="bg-primary elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-secondary elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-info elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-success elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-danger elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-indigo elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-purple elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-pink elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-navy elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-lightblue elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-teal elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-cyan elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-dark elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-gray-dark elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-gray elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-light elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-warning elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-white elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div>
                    <div class="bg-orange elevation-2"
                        style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;">
                    </div><a href="javascript:void(0)">clear</a>
                </div>
            </div>
        </aside>
        <!-- /.control-sidebar -->
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
    <div hidden="" style="width: 1px; height: 1px; position: absolute; z-index: -1000000;">
        <div style="width: 100%; height: 100%; position: relative;"><svg version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group"
                style="width: 100%; height: 100%; overflow: visible;">
                <defs>
                    <clipPath id="id-120">
                        <path></path>
                    </clipPath>
                    <clipPath id="id-216">
                        <path></path>
                    </clipPath>
                    <filter id="filter-id-221" filterUnits="objectBoundingBox" width="200%" height="200%"
                        x="-50%" y="-50%">
                        <feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur>
                        <feOffset result="offsetBlur" dx="1" dy="1"></feOffset>
                        <feFlood flood-color="#000000" flood-opacity="0.5"></feFlood>
                        <feComposite in2="offsetBlur" operator="in"></feComposite>
                        <feMerge>
                            <feMergeNode></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                        </feMerge>
                    </filter>
                    <filter id="filter-id-125" filterUnits="objectBoundingBox" width="200%" height="200%"
                        x="-50%" y="-50%">
                        <feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur>
                        <feOffset result="offsetBlur" dx="1" dy="1"></feOffset>
                        <feFlood flood-color="#000000" flood-opacity="0.5"></feFlood>
                        <feComposite in2="offsetBlur" operator="in"></feComposite>
                        <feMerge>
                            <feMergeNode></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                        </feMerge>
                    </filter>
                    <clipPath id="id-605"></clipPath>
                    <filter id="filter-id-665" filterUnits="objectBoundingBox" width="200%" height="200%"
                        x="-50%" y="-50%"></filter>
                    <filter id="filter-id-610" filterUnits="objectBoundingBox" width="200%" height="200%"
                        x="-50%" y="-50%">
                        <feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur>
                        <feOffset result="offsetBlur" dx="1" dy="1"></feOffset>
                        <feFlood flood-color="#000000" flood-opacity="0.5"></feFlood>
                        <feComposite in2="offsetBlur" operator="in"></feComposite>
                        <feMerge>
                            <feMergeNode></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                        </feMerge>
                    </filter>
                    <filter id="filter-id-593" filterUnits="objectBoundingBox" width="200%" height="200%"
                        x="-50%" y="-50%">
                        <feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur>
                        <feOffset result="offsetBlur" dx="1" dy="1"></feOffset>
                        <feFlood flood-color="#000000" flood-opacity="0.5"></feFlood>
                        <feComposite in2="offsetBlur" operator="in"></feComposite>
                        <feMerge>
                            <feMergeNode></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                        </feMerge>
                    </filter>
                </defs>
            </svg></div>
    </div>
</body>
@endsection
