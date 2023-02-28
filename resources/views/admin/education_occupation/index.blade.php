@extends('home.view')

@section('title', 'Education and Occoupation')

@section('content')
    <!-- Cards -->
    <div class="row mb-5">
        <div class="col-md-3">
            <div class="card bg-primary">
                <div class="card-header border-0 pb-0">
                    <h5>Total Case of Lack of Education</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$uneducatedTotal}}</h2>
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
                    <h5>Most Case of Lack of Education by Purok</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$mostUneducatedByPurok}}</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center justify-content-end text-end h-100">
                                <small class="fw-bold">{{$mostUneducatedByPurokText}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary">
                <div class="card-header border-0 pb-0">
                    <h5>Total Case of Unemployment</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$mostUnemployedTotal}}</h2>
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
                    <h5>Most Case of Unemployment by Purok</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$mostUnemployedByPurok}}</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center justify-content-end text-end h-100">
                                <small class="fw-bold">{{$mostUnemployedByPurokText}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3 class="">Education and Occupation Page</h3>

    <div class="h-screen bg-gray-100">
        <div class="container px-4 mx-auto col-md-12">
            <div class="p-6 m-20 bg-white rounded shadow">
                {!! $chart->container() !!}
            </div>
        </div>

        <div class="container px-4 mx-auto col-md-12 mt-5">
            <div class="p-6 m-20 bg-white rounded shadow">
                {!! $chart2->container() !!}
            </div>
        </div>

        <script src="{{ $chart->cdn() }}"></script>
        {{ $chart->script() }}
        <script src="{{ $chart2->cdn() }}"></script>
        {{ $chart2->script() }}
    </div>
@endsection


