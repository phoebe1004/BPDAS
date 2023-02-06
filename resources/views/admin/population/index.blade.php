@extends('layouts.admin')

@section('title', 'Population')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="">Population Page</h3>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
            <a class="btn btn-outline-info me-md-2" href="{{ route('populations.create') }}">Add Population</a>
            <a class="btn btn-outline-warning me-md-2" href="csv">Add CSV file</a>

        </div>
        <div class="card">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">Barangays with Barangay Health Board Meetings: <b>4,757
                        <sup>(74 %)</sup></b></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" fdprocessedid="n9wc3o"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" fdprocessedid="lnj71r"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 864px;" width="1080" height="312" class="chartjs-render-monitor"></canvas>
            </div>
            <!-- /.card-body -->
        </div>
        </div>

@endsection
