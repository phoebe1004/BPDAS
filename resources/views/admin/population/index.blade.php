@extends('layouts.admin')

@section('title', 'Population')
@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="">Population of Residents Page</h3>
            <div class="row">
                <div class="col-md-2">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Specification Type</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('depart')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Health Cases</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('employee')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card bg-secondary text-white mb-4">
                        <div class="card-body">Attainment</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('depart')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Facility Structure</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('employee')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Pets/Animals</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('depart')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body">Community Group</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('employee')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <body class="h-screen bg-gray-100">
                <div class="container px-4 mx-auto col-md-5">
                    <div class="p-6 m-20 bg-white rounded shadow">
                        {!! $chart->container() !!}
                    </div>
                </div>
                <script src="{{ $chart->cdn() }}"></script>
                {{ $chart->script() }}
            </body>

            <body class="h-screen bg-gray-100">
                <div class="container px-4 mx-auto col-md-4">
                    <div class="p-6 m-20 bg-white rounded shadow">
                        {!! $chart2->container() !!}
                    </div>
                </div>
                <script src="{{ $chart2->cdn() }}"></script>
                {{ $chart2->script() }}
            </body>

            <body class="h-screen bg-gray-100 pt-5">
                <div class="container px-4 mx-auto col-md-3">
                    <div class="p-6 m-20 bg-white rounded shadow">
                        {!! $chart3->container() !!}
                    </div>
                </div>
                <script src="{{ $chart3->cdn() }}"></script>
                {{ $chart3->script() }}

        </div>
    </div>

    <body class="h-screen bg-gray-100 pt-5">
        <div class="container px-4 mx-auto col-md-6">
            <div class="p-6 m-20 bg-white rounded shadow">
                {!! $chart4->container() !!}
            </div>
        </div>
        <script src="{{ $chart4->cdn() }}"></script>
        {{ $chart4->script() }}
    </body>

    {{-- <body class="h-screen bg-gray-100 pt-5">
        <div class="container px-4 mx-auto col-md-6">
            <div class="p-6 m-20 bg-white rounded shadow">
                {!! $chart5->container() !!}
            </div>
        </div>
        <script src="{{ $chart5->cdn() }}"></script>
        {{ $chart5->script() }}
    </body> --}}


@endsection
