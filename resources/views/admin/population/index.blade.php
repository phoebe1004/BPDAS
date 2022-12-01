@extends('layouts.admin')

@section('title', 'Population')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="">Population Page</h3>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
            <a class="btn btn-outline-info me-md-2" href="#">Add Population</a>
            <a class="btn btn-outline-warning me-md-2" href="#">Completed Population</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Age Group</th>
                        <th>Sex Category</th>
                    </tr>


{{--
                    <th colspan="5" scope="colgroup">Age Group</th>
                    <col>
                    <colgroup span="5"></colgroup>
                    <colgroup span="2"></colgroup>
                    <tr>

                        <td rowspan="2 "></td>
                        <th colspan="5" scope="colgroup">Age Group</th>

                        <th colspan="2" scope="colgroup">Sex Category</th>
                    </tr>
                    <tr>
                        <th scope="col">Newborn</th>
                        <th scope="col">Infant</th>
                        <th scope="col">Toddler</th>
                        <th scope="col">Kids</th>
                        <th scope="col">Adult</th>

                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                    </tr>
                    <tr>

                    </tr>
                    <tr>

                    </tr> --}}
                </thead>

            </table>
        </div>
    </div>

@endsection
