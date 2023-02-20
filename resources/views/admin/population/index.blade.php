@extends('layouts.admin')

@section('title', 'Population')
@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="">Population of Residents Page</h3>

            <body class="h-screen bg-gray-100">
                <div class="container px-4 mx-auto col-md-4">
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
                <div class="container px-4 mx-auto col-md-4">
                    <div class="p-6 m-20 bg-white rounded shadow">
                        {!! $chart3->container() !!}
                    </div>
                </div>
                <script src="{{ $chart3->cdn() }}"></script>
                {{ $chart3->script() }}
            </body>
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


@endsection
