@extends('layouts.admin')

@section('title', 'Specification')

@section('content')
        <h3 class="">Specification Type Page</h3>

        <div class="pt-5">

            <body class="h-screen bg-gray-100">
                <div class="container px-4 mx-auto col-md-6">
                    <div class="p-6 m-20 bg-white rounded shadow">
                        {!! $chart->container() !!}
                    </div>
                </div>
                <script src="{{ $chart->cdn() }}"></script>
                {{ $chart->script() }}
            </body>

                <body class="h-screen bg-gray-100">
                <div class="container px-4 mx-auto col-md-6">
                    <div class="p-6 m-20 bg-white rounded shadow">
                        {!! $chart1->container() !!}
                    </div>
                </div>
                <script src="{{ $chart1->cdn() }}"></script>
                {{ $chart1->script() }}
            </body>

        <body class="h-screen bg-gray-100">
            <div class="container px-4 mx-auto col-md-8">
                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $chart2->container() !!}
                </div>
            </div>
            <script src="{{ $chart2->cdn() }}"></script>
            {{ $chart2->script() }}
        </body>
        <body class="h-screen bg-gray-100">
            <div class="container px-4 mx-auto col-md-4">
                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $chart3->container() !!}
                </div>
            </div>
            <script src="{{ $chart3->cdn() }}"></script>
            {{ $chart3->script() }}
        </body>
        <div>
@endsection
