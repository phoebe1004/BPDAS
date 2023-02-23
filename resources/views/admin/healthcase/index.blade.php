@extends('layouts.admin')

@section('title', 'BarangayCases')

@section('content')

    <h3 class="">Healthcase Page</h3>

   <div>
    <body class="h-screen bg-gray-100">
        <div class="container px-4 mx-auto col-md-12">
            <div class="p-6 m-20 bg-white rounded shadow">
                {!! $chart->container() !!}
            </div>
        </div>
        <script src="{{ $chart->cdn() }}"></script>
        {{ $chart->script() }}
    </body>
   </div>
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

        <body class="h-screen bg-gray-100">
            <div class="container px-1 col-md-3 mt-5 pt-5">
                <div class="p-6 bg-white">
                    {!! $chart3->container() !!}
                    <div class="mt-5">{!! $chart4->container() !!}</div>
                </div>
            </div>
            <script src="{{ $chart3->cdn() }}"></script>
            {{ $chart3->script() }}

            <script src="{{ $chart4->cdn() }}"></script>
            {{ $chart4->script() }}
        </body>

        <body class="h-screen bg-gray-100">
            <div class="container px-4 mx-auto col-md-5">
                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $chart5->container() !!}
                </div>
            </div>
            <script src="{{ $chart5->cdn() }}"></script>
            {{ $chart5->script() }}
        </body>
    </div>
</div>

    <body class="h-screen bg-gray-100">
        <div class="container px-4 mx-auto col-md-8">
            <div class="p-6 m-20 bg-white rounded shadow">
                {!! $chart6->container() !!}
            </div>
        </div>
        <script src="{{ $chart6->cdn() }}"></script>
        {{ $chart6->script() }}
    </body>
    <body class="h-screen bg-gray-100">
        <div class="container px-1 col-md-3 mt-5 pt-">
            <div class="p-6 bg-white">
                {!! $chart7->container() !!}
                <div class="mt-5">{!! $chart8->container() !!}</div>
            </div>
        </div>
        <script src="{{ $chart7->cdn() }}"></script>
        {{ $chart7->script() }}

        <script src="{{ $chart8->cdn() }}"></script>
        {{ $chart8->script() }}
    </body>
@endsection
