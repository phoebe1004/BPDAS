@extends('layouts.admin')

@section('title', 'BarangayCases')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="">Barangay Cases Page</h3>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
            <a class="btn btn-outline-info me-md-2" href="#">Add Barangay Case</a>
            <a class="btn btn-outline-warning me-md-2" href="#">Completed Barangay Case</a>
        </div>
            <div class="card-body">
                <table class="table table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>PWD</th>
                            <th>Immunization</th>
                            <th>Maternal</th>
                            <th>Nutritional Status</th>
                            <th>Family Planning</th>

                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach ($healthcase as $healthcases)
                            <tr>
                                <td>{{ $healthcases>id }}</td>
                                <td>{{ $healthcases->name }}</td>
                                <td>{{ $healthcases->description }}</td>
                                <td>
                                    <img src="{{ asset('assets/uploads/category/'.$healthcases->image) }}" class="cate-image" alt="Image here">
                                </td>
                                <td>
                                    <a href="{{ url('edit-category/'.$healthcases->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ url('delete-category/'.$healthcases->id) }}" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>
        </div>

    @endsection


