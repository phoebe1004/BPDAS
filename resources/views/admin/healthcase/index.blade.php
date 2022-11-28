@extends('layouts.admin')

@section('title', 'Healthcase')

@section('content')
    <div class="card">
        <div class="card-header bg-success">
            <h3 class="mt-4">Health Case Page</h3>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-success table-bordered table-striped">
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
