@extends('layouts.admin')

@section('title', 'Resident')

@section('content')
    <div class="wrapper">
        <div class="card-header">
            <h2 class=""><span class="text"> Deleted Resident's Profile </span></h2>
        </div>

        <div class="card-body">
            @if (!$residents->isEmpty())
            <table class="table table-bordered" id="table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Suffix</th>
                        <th>Name of Purok</th>
                        <th>Address</th>
                        <th>Email Address</th>
                        <th>Contact Number</th>
                        <th>Birthday</th>
                        <th>Age</th>
                        <th>Sex</th>
                        <th>Civil Status</th>
                        <th>Services Acquired</th>
                        <th>Nutritional Status</th>
                        <th>Employment Status</th>
                        <th>PWD</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($residents as $resident)
                        <tr>
                            <td>{{ $resident->id }}</td>
                            <td>{{ $resident->lastname }}</td>
                            <td>{{ $resident->firstname }}</td>
                            <td>{{ $resident->middlename }}</td>
                            <td>{{ $resident->suffix }}</td>
                            <td>{{ $resident->purok }}</td>
                            <td>{{ $resident->address }}</td>
                            <td>{{ $resident->emailaddress }}</td>
                            <td>{{ $resident->contactnumber }}</td>
                            <td>{{ $resident->birthdate }}</td>
                            <td>{{ $resident->age }}</td>
                            <td>{{ $resident->sex }}</td>
                            <td>{{ $resident->civil_status }}</td>
                            <td>{{ $resident->services_acquired }}</td>
                            <td>{{ $resident->nutritional_status }}</td>
                            <td>{{ $resident->employment_status }}</td>
                            <td>{{ $resident->pwd_status }}</td>
                        </tr>
                    @endforeach

            </table>
            @else
            <p>No Resident's Profile</p>
        @endif
    </tbody>
    <div class="d-grid gap-2 col-3 mx-auto">
        <a href="{{ route('residents.index') }}" id="cancel" name="cancel"
            class="btn btn-danger btn-md mt-3">Back to homepage</a>
    </div>
        </div>

    </div>

@endsection
