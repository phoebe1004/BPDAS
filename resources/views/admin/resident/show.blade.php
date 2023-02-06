@extends('layouts.admin')

@section('title', 'Resident')

@section('content')
<style>
    .list-group-item{

    }
</style>
    <div class="wrapper">
        <div class="card-header">
            <h2 class=""><span class="text"> Barangay Cabantian Resident's Profile </span></h2>
        </div>

        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="text-transform:uppercase">Full name: {{ $resident->lastname }} {{ $resident->firstname }} {{ $resident->middlename }}</li>
                        <li class="list-group-item" style="text-transform:uppercase">Suffix: {{ $resident->suffix }}</li>
                        <li class="list-group-item" style="text-transform:uppercase">Name of Purok: {{ $resident->purok }}</li>
                        <li class="list-group-item" style="text-transform:uppercase">Address: {{ $resident->address }}</li>
                        <li class="list-group-item" style="text-transform:uppercase">Email address: {{ $resident->emailaddress }}</li>
                        <li class="list-group-item" style="text-transform:uppercase">Contact number: {{ $resident->contactnumber }}</li>
                        <li class="list-group-item" style="text-transform:uppercase">Birthday: {{ $resident->birthdate }}</li>
                        <li class="list-group-item" style="text-transform:uppercase">Age: {{ $resident->age }}</li>
                        <li class="list-group-item" style="text-transform:uppercase">Sex: {{ $resident->sex }}</li>
                        <li class="list-group-item" style="text-transform:uppercase">Civil Status: {{ $resident->civil_status }}</li>
                        <li class="list-group-item" style="text-transform:uppercase">Services Acquired: {{ $resident->services_acquired }}</li>
                        <li class="list-group-item" style="text-transform:uppercase">Nutritional Status: {{ $resident->nutritional_status }}</li>
                        <li class="list-group-item" style="text-transform:uppercase">Employment Status: {{ $resident->employment_status }}</li>
                        <li class="list-group-item" style="text-transform:uppercase">PWD: {{ $resident->pwd_status }}</li>
                      </ul>
                </div>
            </div>
            <div class="d-grid gap-2 col-3 mx-auto">
                <a href="{{ route('residents.index') }}" id="cancel" name="cancel"
                    class="btn btn-danger btn-md mt-3">Back to homepage</a>
            </div>

        </div>
{{--
        <div class="card-body">
            <table class="table table-bordered">

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
                    <tr>
                            <td>{{ $resident->id }}</td>
                            <td>{{ $resident->lastname }}</td>
                            <td>{{ $resident->firstname }}</td>
                            <td>{{ $resident->middlename }}</td>
                            <td>{{ $resident->suffix }}</td>
                            <td>{{ $resident->purok }}</td>
                            <td>{{ $resident->address }}</td>
                            <td>{{ $resident->emailaddress }}</td>
                           <td><a class="btn btn-success me-md-2 edit-modal btn btn-sm btn-info glyphicon glyphicon-eye-open"
                                href="{{ route('residents.show', $residents->id) }}"> View</a></td>
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
                </tbody>
            </table>
            --}}
        </div>

    </div>

@endsection
