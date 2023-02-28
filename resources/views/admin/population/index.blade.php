@extends('home.view')

@section('title', 'Population')
@section('content')
    <!-- Cards -->
    <div class="row mb-5">
        <div class="col-md-3">
            <div class="card bg-primary">
                <div class="card-header border-0 pb-0">
                    <h5>Total Population</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$totalResident}}</h2>
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
                    <h5>Highest population by Purok</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$residentByPurok}}</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center justify-content-end text-end h-100">
                                <small class="fw-bold">{{$residentByPurokText}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary">
                <div class="card-header border-0 pb-0">
                    <h5>Highest population by Sex</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$residentBySex}}</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center justify-content-end text-end h-100">
                                <small class="fw-bold">{{$residentBySexText}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary">
                <div class="card-header border-0 pb-0">
                    <h5>Highest population by Civil Status</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$residentByCivil}}</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center justify-content-end text-end h-100">
                                <small class="fw-bold">{{$residentByCivilText}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3 class="">Population Page</h3>

    <div class="row">
        <div class="col-md-5">
            <div class="bg-white rounded shadow">
                {!! $chart->container() !!}
            </div>
            <script src="{{ $chart->cdn() }}"></script>
            {{ $chart->script() }}
        </div>

        <div class="col-md-4">
            <div class="bg-white rounded shadow">
                {!! $chart2->container() !!}
            </div>
            <script src="{{ $chart2->cdn() }}"></script>
            {{ $chart2->script() }}
        </div>

        <div class="col-md-3">
            <div class="row">
                <div class="col-12">
                    <div class="bg-white rounded shadow">
                        {!! $chart3->container() !!}
                    </div>
                    <script src="{{ $chart3->cdn() }}"></script>
                    {{ $chart3->script() }}
                </div>

                <div class="col-12 mt-4">
                    <div class="bg-white rounded shadow">
                        {!! $chart4->container() !!}
                    </div>
                    <script src="{{ $chart4->cdn() }}"></script>
                    {{ $chart4->script() }}
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-center mt-5"><b>Social Economic Status (National Household Targeting System)</b></h1>

    <div class="row">
        <div class="col-md-3">
            <div class="bg-white rounded shadow">
                {!! $chart9->container() !!}
            </div>
            <script src="{{ $chart9->cdn() }}"></script>
            {{ $chart9->script() }}
        </div>
        <div class="col-md-3">
            <div class="bg-white rounded shadow">
                {!! $chart6->container() !!}
            </div>
            <script src="{{ $chart6->cdn() }}"></script>
            {{ $chart6->script() }}
        </div>
        <div class="col-md-3">
            <div class="bg-white rounded shadow">
                {!! $chart7->container() !!}
            </div>
            <script src="{{ $chart7->cdn() }}"></script>
            {{ $chart7->script() }}
        </div>
        <div class="col-md-3">
            <div class="bg-white rounded shadow">
                {!! $chart8->container() !!}
            </div>
            <script src="{{ $chart8->cdn() }}"></script>
            {{ $chart8->script() }}
        </div>
        <div class="col-12 mt-5">
            <div class="bg-white rounded shadow">
                {!! $chart5->container() !!}
            </div>
            <script src="{{ $chart5->cdn() }}"></script>
            {{ $chart5->script() }}
        </div>
    </div>
@endsection
