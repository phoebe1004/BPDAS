@extends('home.view')

@section('title', 'Community Group')

@section('content')
    <div class="row mb-5">
        <div class="col-md-3">
            <div class="card bg-primary">
                <div class="card-header border-0 pb-0">
                    <h5>Most Common Community Group</h5>
                </div>
                <div class="card-body py-0">
                    <div class="row py-3 px-2">
                        <div class="col-md-3">
                            <h2 class="p-0 m-0 text-nowrap">{{ $groupType }}</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center justify-content-end text-end h-100">
                                <small class="fw-bold">{{$groupTypeText}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 class="mb-3">Community Group Page</h3>

    <div class="row">
        <div class="col-md-8">
            <div class="bg-white rounded shadow">
                {!! $chart3->container() !!}
                <script src="{{ $chart3->cdn() }}"></script>
                {{ $chart3->script() }}
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-white rounded shadow">
                {!! $chart8->container() !!}
                <script src="{{ $chart8->cdn() }}"></script>
                {{ $chart8->script() }}
            </div>
        </div>
    </div>
@endsection
