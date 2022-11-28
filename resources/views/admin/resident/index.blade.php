@extends('layouts.admin')

@section('title', 'Resident')

@section('content')
    <div class="card">
        <div class="card-header bg-success">
            <h3 class="">Residents Page</h3>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
            <a class="btn btn-outline-info me-md-2" href="{{route('residents.create')}}">Add Resident</a>
            <a class="btn btn-outline-warning me-md-2" href="#">Completed Resident</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered" id="table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Sex</th>
                        <th>Birthday</th>
                        <th>Civil Status</th>
                        <th>Employment Status</th>
                        <th>PWD</th>
                        <th>Services Acquired</th>
                        <th>Nutritional Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resident as $residents)
                        <tr class="residents{{ $residents->id }}">
                            <td>{{ $residents->id }}</td>
                            <td>{{ $residents->name }}</td>
                            <td>{{ $residents->age }}</td>
                            <td>{{ $residents->sex }}</td>
                            <td>{{ $residents->birthdate }}</td>
                            <td>{{ $residents->civil_status }}</td>
                            <td>{{ $residents->employment_status }}</td>
                            <td>{{ $residents->pwd_status }}</td>
                            <td>{{ $residents->services_acquired }}</td>
                            <td>{{ $residents->nutritional_status }}</td>

                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a
                                        class="btn btn-primary me-md-2 edit-modal btn btn-sm btn-info glyphicon glyphicon-edit"
                                        type="button" href="{{route('residents.edit', $residents->id)}}"> Edit</a>
                                    <button
                                        class="btn btn-primary delete-modal btn btn-sm btn-danger glyphicon glyphicon-trash"
                                        type="button" href="#"> Delete</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>

@endsection
