@extends('layouts.admin')

@section('title', 'Population')
@section('content')
    <h3 class="">Population Page</h3>

    <div class="pt-5">

        <body class="h-screen bg-gray-100">
            <div class="container px-4 mx-auto col-md-5">
                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $chart->container() !!}
                </div>
            </div>
            <script src="{{ $chart->cdn() }}"></script>
            {{ $chart->script() }}
        </body>
    </div>

    <div>

        <body class="h-screen bg-gray-100">
            <div class="container px-4 mx-auto col-md-4">
                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $chart2->container() !!}
                </div>
            </div>
            <script src="{{ $chart2->cdn() }}"></script>
            {{ $chart2->script() }}
        </body>
    </div>

    <div class="">

        <body class="h-screen bg-gray-100 pt-5">
            <div class="container col-md-3 mb-5">
                <div class="p-6 bg-white rounded shadow mb-5">
                    <div class="mb-6">
                    <div class="mb-6">
                    <span>{!! $chart3->container() !!} </span>
                </div>
                </div>
                </div>
            </div>
            <script src="{{ $chart3->cdn() }}"></script>
            {{ $chart3->script() }}

            <div class="mt-1">
                <div class="container col-md-3 mt-5 px-1">
                    <div class="p-6 bg-white rounded shadow mt-5">
                        <div class="mt-5">
                            <div class="mt-5">
                                {!! $chart4->container() !!}
                            </div>
                        </div>
                        <script src="{{ $chart4->cdn() }}"></script>
                        {{ $chart4->script() }}
        </body>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div>
        <h1 class="text-center"><b>Social Economic Status (National Household Targeting System)</b></h1>
    </div>
    <div class="pt-5">

        <body class="h-screen bg-gray-100">
            <div class="container px-4 mx-auto col-md-3">
                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $chart6->container() !!}
                </div>
            </div>
            <script src="{{ $chart6->cdn() }}"></script>
            {{ $chart6->script() }}
        </body>

        <body class="h-screen bg-gray-100">
            <div class="container px-4 mx-auto col-md-3">
                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $chart7->container() !!}
                </div>
            </div>
            <script src="{{ $chart7->cdn() }}"></script>
            {{ $chart7->script() }}
        </body>
        </body>

        <body class="h-screen bg-gray-100">
            <div class="container px-4 mx-auto col-md-3">
                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $chart8->container() !!}
                </div>
            </div>
            <script src="{{ $chart8->cdn() }}"></script>
            {{ $chart8->script() }}
        </body>

        <body class="h-screen bg-gray-100">
            <div class="container px-4 mx-auto col-md-3">
                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $chart9->container() !!}
                </div>
            </div>
            <script src="{{ $chart9->cdn() }}"></script>
            {{ $chart9->script() }}
        </body>
    </div>
    <div class="pt-5">

        <body class="h-screen bg-gray-100">
            <div class="container px-4 mx-auto col-md-12">
                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $chart5->container() !!}
                </div>
            </div>
            <script src="{{ $chart5->cdn() }}"></script>
            {{ $chart5->script() }}
        </body>
    </div>




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
