@extends('home.view')

@section('title', 'BarangayCases')

@section('content')
    <!-- Cards -->
    <div class="row mb-5">
        <div class="col-md-3">
            <div class="card bg-primary">
                <div class="card-header border-0 pb-0">
                    <h5>Total Health cases</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$totalHealthCases}}</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center justify-content-end text-end h-100">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-primary">
                <div class="card-header border-0 pb-0">
                    <h5>Most Common Health Case</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$residentHealthMedicalCount}}</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center justify-content-end text-end h-100">
                                <small class="fw-bold">{{$residentHealthMedicalCountText}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary">
                <div class="card-header border-0 pb-0">
                    <h5>Purok with most health cases</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$residentHealthPurokCount}}</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center justify-content-end text-end h-100">
                                {{$residentHealthMedicalCountText}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary">
                <div class="card-header border-0 pb-0">
                    <h5>Most Common Type of Covid-19 Vaccination</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$covidVaccineCount}}</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center justify-content-end text-end h-100">
                                <small class="fw-bold">{{$covidVaccineCountText}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary">
                <div class="card-header border-0 pb-0">
                    <h5>Most Common Type of Measles-Rubella-Tetanus-Diphtheria Vaccine</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$mrtdCount}}</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center justify-content-end text-end h-100">
                                <small class="fw-bold">{{$mrtdCountText}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3 class="">Healthcase Page</h3>

    <div class="row mt-5 g-5">
        <div class="col-md-12">
            <div class="bg-white rounded shadow">
                {!! $chart->container() !!}
            </div>
            <script src="{{ $chart->cdn() }}"></script>
            {{ $chart->script() }}
        </div>

        <div class="col-md-12">
            <div class="bg-white rounded shadow">
                {!! $chart2->container() !!}
            </div>
            <script src="{{ $chart2->cdn() }}"></script>
            {{ $chart2->script() }}
        </div>
        <div class="col-6">
            <div class="bg-white rounded shadow">
                {!! $chart3->container() !!}
            </div>
            <script src="{{ $chart3->cdn() }}"></script>
            {{ $chart3->script() }}
        </div>
        <div class="col-6">
            <div class="bg-white rounded shadow">
                {!! $chart4->container() !!}
            </div>
            <script src="{{ $chart4->cdn() }}"></script>
            {{ $chart4->script() }}
        </div>
        <div class="col-6">
            <div class="bg-white rounded shadow">
                {!! $chart5->container() !!}
            </div>
            <script src="{{ $chart5->cdn() }}"></script>
            {{ $chart5->script() }}
        </div>
        <div class="col-6">
            <div class="bg-white rounded shadow">
                {!! $chart6->container() !!}
            </div>
            <script src="{{ $chart6->cdn() }}"></script>
            {{ $chart6->script() }}
        </div>
        <div class="col-6">
            <div class="bg-white rounded shadow">
                {!! $chart7->container() !!}
            </div>
            <script src="{{ $chart7->cdn() }}"></script>
            {{ $chart7->script() }}
        </div>
        <div class="col-6">
            <div class="bg-white rounded shadow">
                {!! $chart8->container() !!}
            </div>
            <script src="{{ $chart8->cdn() }}"></script>
            {{ $chart8->script() }}
        </div>
    </div>
@endsection
