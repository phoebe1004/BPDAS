@extends('layouts.admin')

@section('title', 'Healthcase')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="">Healthcase Page</h3>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
        <a class="btn btn-outline-info me-md-2" href="#">Add Healthcase</a>
        <a class="btn btn-outline-warning me-md-2" href="#">Completed Healthcase</a>
    </div>
        <div class="card-body">
            <table class="table table-bordered" id="table" style="">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>PWD</th>
                        <th>Immunization</th>
                        <th>Maternity</th>
                        <th>Nutritional Status</th>
                        <th>Family Planning</th>

                    </tr>
                </thead>

            </table>
        </div>
    </div>

@endsection
