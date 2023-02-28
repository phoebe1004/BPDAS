@extends('layouts.admin')

@section('title', 'Specification')

@section('content')
        <!-- Cards -->
        <div class="row mb-5">
            <div class="col-md-3">
                <div class="card bg-primary">
                    <div class="card-header border-0 pb-0">
                        <h5>Backyard Gardening</h5>
                    </div>
                    <div class="card-body py-0">
                        <div class="row py-3 px-2">
                            <div class="col-md-3">
                                <h2 class="p-0 m-0 text-nowrap">{{$backyardGardening}}</h2>
                            </div>
                            <div class="col-md-9">
                                <div class="d-flex align-items-center justify-content-end text-end h-100">
                                    <small class="fw-bold">{{$backyardGardeningText}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card bg-primary">
                    <div class="card-header border-0 pb-0">
                        <h5>Most Installed Type of Water Source</h5>
                    </div>
                    <div class="card-body py-0">
                        <div class="row py-3 px-2">
                            <div class="col-md-3">
                                <h2 class="p-0 m-0 text-nowrap">{{$waterSource}}</h2>
                            </div>
                            <div class="col-md-9">
                                <div class="d-flex align-items-center justify-content-end text-end h-100">
                                    {{$waterSourceText}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-primary">
                    <div class="card-header border-0 pb-0">
                        <h5>Most Installed Type of Sanitary & Unsanitary Toilet</h5>
                    </div>
                    <div class="card-body py-0">
                        <div class="row py-3 px-2">
                            <div class="col-md-3">
                                <h2 class="p-0 m-0 text-nowrap">{{$sanitaryToilet}}</h2>
                            </div>
                            <div class="col-md-9">
                                <div class="d-flex align-items-center justify-content-end text-end h-100">
                                    <small class="fw-bold">{{$sanitaryToiletText}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-primary">
                    <div class="card-header border-0 pb-0">
                        <h5>Most Installed Type of Waste Management</h5>
                    </div>
                    <div class="card-body py-0">
                        <div class="row py-3 px-2">
                            <div class="col-md-3">
                                <h2 class="p-0 m-0 text-nowrap">{{$wasteManagement}}</h2>
                            </div>
                            <div class="col-md-9">
                                <div class="d-flex align-items-center justify-content-end text-end h-100">
                                    <small class="fw-bold">{{$wasteManagementText}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="">Specification Type Page</h3>

        <div class="row mt-5">
            <div class="col-md-6">
                <div class="bg-white rounded shadow">
                    {!! $chart->container() !!}
                </div>
                <script src="{{ $chart->cdn() }}"></script>
                {{ $chart->script() }}
            </div>
            <div class="col-md-6">
                <div class="bg-white rounded shadow">
                    {!! $chart1->container() !!}
                </div>
                <script src="{{ $chart1->cdn() }}"></script>
                {{ $chart1->script() }}
            </div>
            <div class="col-md-6">
                <div class="bg-white rounded shadow">
                    {!! $chart2->container() !!}
                </div>
                <script src="{{ $chart2->cdn() }}"></script>
                {{ $chart2->script() }}
            </div>
            <div class="col-md-6">
                <div class="bg-white rounded shadow">
                    {!! $chart3->container() !!}
                </div>
                <script src="{{ $chart3->cdn() }}"></script>
                {{ $chart3->script() }}
            </div>
        </div>
@endsection
