@extends('layouts.admin')

@section('title', 'Pet')

@section('content')
            <h3 class="">Pet Page</h3>
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
                        {!! $chart6->container() !!}
                    </div>
                </div>
                <script src="{{ $chart6->cdn() }}"></script>
                {{ $chart6->script() }}
            </body>

            <body class="h-screen bg-gray-100">
                <div class="container px-4 mx-auto col-md-12 mt-5">
                    <div class="p-6 m-20 bg-white rounded shadow">
                        {!! $charts->container() !!}
                    </div>
                </div>
                <script src="{{ $charts->cdn() }}"></script>
                {{ $charts->script() }}
            </body>
        </div>
@endsection


