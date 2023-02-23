@extends('layouts.admin')

@section('title', 'Community Group')

@section('content')
            <h3 class="">Community Group Page</h3>
            <body class="h-screen bg-gray-100">
                <div class="container col-md-8">
                    <div class="bg-white rounded shadow">
                        {!! $chart3->container() !!}
                    </div>
                </div>
                <script src="{{ $chart3->cdn() }}"></script>
                {{ $chart3->script() }}

                <div class="container col-md-4">
                    <div class="bg-white rounded shadow">
                                {!! $chart8->container() !!}
                            </div>
                        </div>
                        <script src="{{ $chart8->cdn() }}"></script>
                        {{ $chart8->script() }}
            </body>
@endsection


