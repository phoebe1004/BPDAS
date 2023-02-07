@extends('layouts.admin')

@section('title', 'BarangayCases')

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
    <div class="card">
        <div class="card-header">
            <h3 class="">Barangay Cases Page</h3>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
            <a class="btn btn-outline-info me-md-2" href="{{ route('barangaycases.create') }}">Add Barangay Case</a>
            <a class="btn btn-outline-warning me-md-2" href="csv">Add CSV file</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Complainant's Age</th>
                        <th>Complainant's Name</th>
                        <th>Type of case</th>
                        <th>Specification</th>
                        <th>Date of filing</th>
                        <th>Case status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangaycase as $barangaycases)
                    <tr>
                    <td>{{ $barangaycases ->id }}</td>
                    <td>{{ $barangaycases->age }}</td>
                    <td>{{ $barangaycases->complainant }}</td>
                    <td>{{ $barangaycases->type_case }}</td>
                    <td>{{ $barangaycases->case_specification }}</td>
                    <td>{{ $barangaycases->date_filed }}</td>
                    <td>{{ $barangaycases->case_status }}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-primary me-md-2 edit-modal btn btn-sm glyphicon glyphicon-edit" type="button"
                                href="#"> </a>


                            <a href="#" onclick="return confirm('Delete {{ $barangaycases->name }}?');">
                                <form action="{{ route('barangaycases.destroy', $barangaycases->id) }}" method="post">
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
