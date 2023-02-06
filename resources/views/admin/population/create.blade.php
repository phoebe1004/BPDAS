@extends('layouts.admin')

@section('title', 'Population')

@section('content')
    <div class="wrapper">
        <div class="card-header">
            <h2 class=""><span class="text"> Barangay Cabantian Population Resident's Profile </span></h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Crimes against Person</th>
                        <th>Crimes against Property</th>
                        <th>Other Crimes</th>
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
                            <td><a class="btn btn-success me-md-2 edit-modal btn btn-sm glyphicon glyphicon-eye-open"
                                href="{{ route('residents.show', $residents->id) }}"> View</a></td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a class="btn btn-primary me-md-2 edit-modal btn btn-sm glyphicon glyphicon-edit"
                                        type="button" href="{{ route('residents.edit', $residents->id) }}"> Edit</a>

                                        <a href="#" onclick="return confirm('Delete {{$residents->name}}?');">
                                            <form action="{{route('residents.destroy', $residents->id)}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type=submit class= "btn btn-danger delete-modal btn btn-sm  glyphicon glyphicon-trash"> Delete</button>
                                            </form>
                                            </a>
                                            <a class="btn btn-warning delete-modal btn btn-sm glyphicon glyphicon-trash resident-done" href="#"
                                                data-id="{{ $residents->id }}"> Backup</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>

@endsection
