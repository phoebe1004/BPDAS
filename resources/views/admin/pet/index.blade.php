@extends('layouts.admin')

@section('title', 'Pet')

@section('content')
    <!-- Cards -->
    <div class="row mb-5">
        <div class="col-md-3">
            <div class="card bg-primary">
                <div class="card-header border-0 pb-0">
                    <h5>Total Pets</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$petsanimalsTotal}}</h2>
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
                    <h5>Total Unvaccinated Pets</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$unvaccinatedPetsTotal}}</h2>
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
                    <h5>Most Common Pet Type</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{$mostPetCountByType}}</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center justify-content-end text-end h-100">
                                <small class="fw-bold">{{$mostPetCountByTypeText}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3 class="">Pet Page</h3>
    <div class="h-screen bg-gray-100">
        <div class="container px-4 mx-auto col-md-12">
            <div class="p-6 m-20 bg-white rounded shadow">
                {!! $chart->container() !!}
            </div>
        </div>
        <script src="{{ $chart->cdn() }}"></script>
        {{ $chart->script() }}
    </div>

    <div class="h-screen bg-gray-100">
        <div class="container px-4 mx-auto col-md-12 mt-5">
            <div class="p-6 m-20 bg-white rounded shadow">
                {!! $charts->container() !!}
            </div>
        </div>
        <script src="{{ $charts->cdn() }}"></script>
        {{ $charts->script() }}
    </div>
@endsection


