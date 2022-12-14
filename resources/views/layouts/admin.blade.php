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
        <div class="sidebar overflow-auto m-0 p-0 flex-shrink-0 d-flex flex-column align-items-stretch ">
            <div class="logo d-flex justify-content-center align-items-center border-bottom ">
                <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                <span class="fw-semibold text-white">BPDAS Admin</span>
            </div>
            <ul class="main-list list-unstyled flex-fill mt-2">
                <li class="user-select-none">
                    <div class="d-flex justify-content-between align-items-center " data-bs-toggle="collapse"
                        data-bs-target="#home-collapse" aria-expanded="true">
                        <a href="{{ route('dashboard.index') }}"><span class="text-white"><i class="fas fa-tachometer-alt"></i> Dashboard</span></a>
                        <svg class="" width="6" height="12" fill="none">
                            <use xlink:href="#drop-down-arrow" />
                        </svg>
                    </div>
                    <div class="collapse show sub-items text-white" id="home-collapse">
                        <a href="{{ route('populations.index') }}"><span><i class="fa-solid fa-users-rectangle"></i>
                                Population</span></a>

                    </div>

                    <div class="collapse show sub-items" id="home-collapse">
                        <a href="{{ route('healthcases.index') }}"><span><i class="fa-solid fa-kit-medical"></i> Health
                                Cases</span></a>
                    </div>
                    <div class="collapse show sub-items" id="home-collapse">
                        <a href="{{ route('barangaycases.index') }}"><span><i class="fa-solid fa-folder-open"></i> Barangay
                                Cases</span></a>
                    </div>
                    <div class="collapse show sub-items" id="home-collapse">
                        <a href="{{ route('employments.index') }}"><span><i class="fa fa-briefcase" aria-hidden="true"></i>
                                Employment Status</span></a>
                    </div>
                </li>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('residents.index') }}"><span class="mt-4 fw-semibold"><i class="fa fa-users"
                                aria-hidden="true"></i> Resident's Profile</span></a>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="mt-2 fw-semibold text-white"><i class="fa-solid fa-user"></i> Log-in User</span>
                </div>
            </ul>
            <!--Sidebar Footer
                                                        <div class="d-flex justify-content-center align-items-center border-top">
                                                            <span class="fw-bold">Login</span>
                                                        </div>-->
        </div>
        <!--End Side Bar-->
        <!-- Top Bar-->
        <div class=" content flex-fill d-flex flex-column bg-light">
            <div class="top-bar dropdown d-flex mb-3 list-unstyled">
                <li class="nav-item">
                    <a class="nav-link mt-3" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <button class="btn btn-secondary d-flex ms-auto p-2" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="mt-3">Super Admin  <i class="fa-solid fa-caret-down"></i></span>
                </button>
                <ul class="dropdown-menu nav col-12 col-lg-auto my-2 my-md-0 text-small">
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user-tie"></i> SuperAdmin's
                            Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-wrench"></i> Settings</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('admin-logout') }}"><i
                                class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
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
