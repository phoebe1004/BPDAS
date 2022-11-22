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
    </svg>

    <div class='main w-100 h-100 d-flex'>
        <!-- Side Bar-->
        <div class="sidebar overflow-auto m-0 p-0 flex-shrink-0 d-flex flex-column align-items-stretch">
            <div class="logo d-flex justify-content-center align-items-center border-bottom">
                <span class="fw-semibold">BPDAS</span>
            </div>
            <ul class="main-list list-unstyled flex-fill mt-5">
                <li class="user-select-none">
                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        data-bs-target="#home-collapse" aria-expanded="true">
                        <span>Dashboard</span>
                        <svg class="" width="6" height="12" fill="none">
                            <use xlink:href="#drop-down-arrow" />
                        </svg>
                    </div>
                    <div class="collapse show sub-items" id="home-collapse">
                        <span>Population</span>
                        <ul class="list-unstyled mt-2">
                            <li>
                                <div class="d-flex align-items-center">
                                    <svg class="" width="12" height="12" fill="none">
                                        <use xlink:href="#drop-down-sub-item-circle" />
                                    </svg>
                                    <span>Size</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <svg class="" width="12" height="12" fill="none">
                                        <use xlink:href="#drop-down-sub-item-circle" />
                                    </svg>
                                    <span>Age</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <svg class="" width="12" height="12" fill="none">
                                        <use xlink:href="#drop-down-sub-item-circle" />
                                    </svg>
                                    <span>Sex</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <svg class="" width="12" height="12" fill="none">
                                        <use xlink:href="#drop-down-sub-item-circle" />
                                    </svg>
                                    <span>Birthrate</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <svg class="" width="12" height="12" fill="none">
                                        <use xlink:href="#drop-down-sub-item-circle" />
                                    </svg>
                                    <span>Mortality</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mt-3 user-select-none">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Health Cases</span>
                    </div>
                </li>
                <li class="mt-3 user-select-none">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Crime Cases</span>
                    </div>
                </li>
                <li class="mt-3 user-select-none">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Employment Status</span>
                    </div>
                </li>
                <li class="mt-3 user-select-none">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>BPDAS Certification</span>
                        <svg class="" width="6" height="12" fill="none">
                            <use xlink:href="#drop-down-arrow" />
                        </svg>
                    </div>
                </li>
            </ul>
        </div>


        <!-- Top Bar-->
        <div class="content flex-fill d-flex flex-column">
            <div class="top-bar"></div>

            <!-- Sub Content-->
            <div class="sub-content flex-fill">
                @yield('content')
            </div>
        </div>
    </div>
    </div>
@endsection
