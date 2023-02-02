@extends('layouts.admin')

@section('content')
    <div class="col-md-6 offset-md-3 mt-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('resident.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="file">Choose CSV file</label>
                        <input type="file" name="file" class="form-control"><br>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
