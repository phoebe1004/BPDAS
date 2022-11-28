@extends('layouts.base')

@section('body')
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
        <symbol id="drop-down-arrow" viewBox="0 0 7 13">
            <line y1="-1" x2="8.35651" y2="-1"
                transform="matrix(-0.658169 0.75287 -0.658169 -0.75287 5.5 3.05176e-05)" stroke="black" stroke-width="2" />
            <line y1="-1" x2="8.35651" y2="-1"
                transform="matrix(0.658169 0.75287 -0.658169 0.75287 0 6.29138)" stroke="black" stroke-width="2" />
        </symbol>
        <symbol id="drop-down-sub-item-circle" viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="7" stroke="black" stroke-width="2" />
        </symbol>
        <symbol id="people-circle" viewBox="0 0 54 54">
            <circle cx="27" cy="27" r="27" fill="#3C3C3C" />
        </symbol>
    </svg>

    <div class='main w-100 h-100 d-flex'>
        <!-- Side Bar-->
        <div class="sidebar overflow-auto m-0 p-0 flex-shrink-0 d-flex flex-column align-items-stretch">
            <div class="logo d-flex justify-content-center align-items-center border-bottom">
                <span class="fw-semibold">BPDAS Admin</span>
            </div>
            <ul class="main-list list-unstyled flex-fill mt-2">
                <li class="user-select-none">
                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        data-bs-target="#home-collapse" aria-expanded="true">
                        <span>Dashboard</span>
                        <svg class="" width="6" height="12" fill="none">
                            <use xlink:href="#drop-down-arrow" />
                        </svg>
                    </div>
                    <div class="collapse show sub-items" id="home-collapse">
                        <a href="{{ route('populations.index') }}"><span>Population</span></a>

                    </div>

                    <div class="collapse show sub-items" id="home-collapse">
                        <a href="{{ route('healthcases.index') }}"><span>Health Cases</span></a>
                    </div>
                    <div class="collapse show sub-items" id="home-collapse">
                        <span>Barangay Cases</span>
                    </div>
                    <div class="collapse show sub-items" id="home-collapse">
                        <span>Employment Status</span>
                    </div>
                </li>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('residents.index') }}"><span class="mt-4 fw-semibold">Resident's Profile</span></a>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="mt-2 fw-semibold">Log-in User</span>
                </div>
            </ul>
            <!--Sidebar Footer
                                    <div class="d-flex justify-content-center align-items-center border-top">
                                        <span class="fw-bold">Login</span>
                                    </div>-->
        </div>
        <!--End Side Bar-->
        <!-- Top Bar-->
        <div class="content flex-fill d-flex flex-column">
            <div class="top-bar">
                <ul class="nav col-12 col-lg-auto my-2 justify-content-end my-md-0 text-small">
                    <li>
                        <a href={{ route('admin-logout') }} class="nav-link text-white mt-1">
                            <svg class="" width="25" height="30" fill="none">
                                <use xlink:href="#people-circle" />
                            </svg>
                            Profile
                        </a>
                    </li>
                </ul>
            </div>

            <!--End of Top Bar-->
            <!-- Sub Content-->
            <div class="sub-content flex-fill">
                @yield('content')
            </div>
        </div>
    </div>
    </div>
@endsection
