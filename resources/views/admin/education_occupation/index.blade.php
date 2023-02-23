@extends('layouts.admin')

@section('title', 'Education and Occoupation')

@section('content')
            <h3 class="">Education and Occupation Page</h3>

            <body class="h-screen bg-gray-100">
                <div class="container px-4 mx-auto col-md-12">
                    <div class="p-6 m-20 bg-white rounded shadow">
                        {!! $chart->container() !!}
                    </div>
                </div>
                <script src="{{ $chart->cdn() }}"></script>
                {{ $chart->script() }}
            </body>

@endsection


