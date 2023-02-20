@extends('layouts.admin')

@section('title', 'Resident')

@section('content')
    <style>
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;


        }
    </style>

    <div class="wrapper">
        <div class="card-header">
            <h2 class=""><span class="text"> Barangay Cabantian Resident's Profile </span></h2>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
            <a class="btn btn-outline-info me-md-2" href="{{ route('residents.create') }}">Add Resident</a>
            <a class="btn btn-outline-warning me-md-2" href="csv">Add CSV file</a>
            {{-- <a class="btn btn-outline-danger me-md-2" href="#">Backup
                Page</a> --}}
        </div>

        <div class="card-body">
            <table class="table table-bordered" id="table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Suffix</th>
                        <th>Relationship to HH</th>
                        <th>Sitio/Purok</th>
                        <th>View more</th>
                        {{-- <th>Contact Number</th>
                        <th>Birthday</th>
                        <th>Age</th>
                        <th>Sex</th>
                        <th>Civil Status</th>
                        <th>Services Acquired</th>
                        <th>Nutritional Status</th>
                        <th>Employment Status</th>
                        <th>PWD</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resident as $residents)
                        <tr>
                            <td>{{ $residents->id }}</td>
                            <td>{{ $residents->lastname }}</td>
                            <td>{{ $residents->firstname }}</td>
                            <td>{{ $residents->middlename }}</td>
                            <td>{{ $residents->suffix }}</td>
                            <td>{{ $residents->relationship }}</td>
                            <td>{{ $residents->purok }}</td>
                            <td><a class="d-flex justify-content-center btn btn-success me-md-2 edit-modal btn-sm glyphicon glyphicon-eye-open"
                                    href="{{ route('residents.show', $residents->id) }}"></a></td>
                            {{-- <td>{{ $residents->contactnumber }}</td>
                            <td>{{ $residents->birthdate }}</td>
                            <td>{{ $residents->age }}</td>
                            <td>{{ $residents->sex }}</td>
                            <td>{{ $residents->civil_status }}</td>
                            <td>{{ $residents->services_acquired }}</td>
                            <td>{{ $residents->nutritional_status }}</td>
                            <td>{{ $residents->employment_status }}</td>
                            <td>{{ $residents->pwd_status }}</td> --}}

                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a class="btn btn-primary me-md-2 edit-modal btn btn-sm glyphicon glyphicon-edit"
                                        type="button" href="{{ route('residents.edit', $residents->id) }}"> </a>

                                    <a href="#" onclick="return confirm('Delete {{ $residents->name }}?');">
                                        <form action="{{ route('residents.destroy', $residents->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type=submit
                                                class="btn btn-danger delete-modal btn btn-sm  glyphicon glyphicon-trash">
                                            </button>
                                        </form>
                                    </a>
                                    {{-- - <a class="btn btn-warning btn-sm text-uppercase glyphicon glyphicon-trash resident-done" href="#"
                                      data-id="{{ $resident->id }}">Backup</a> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>

@endsection
