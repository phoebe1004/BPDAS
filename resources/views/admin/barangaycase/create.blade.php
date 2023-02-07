@extends('layouts.admin')

@section('content')

<style>
    .btn {
        display: inline-block;
        padding: 8px 15px;
        font-size: 15px;
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
        <div class="card">
            <h2 class="text-center"><span class=""> Creating Barangay Case</span></h2>
        </div>
        <form action="{{ route('barangaycases.store') }}" method="post">
            @csrf
            @method('post')
            <div class="container">
                <div class="bg-light">
                    <div class="mt-3">
                        <div class="col-md-2 mt-3">
                            <label for="age" class="form-group">Complainant's Age</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="age" id="age">
                                <option disabled selected>--Select--</option>
                                <option value="Infancy" name="age">Infancy (less than 12 months)</option>
                                <option value="Toddler" name="age">Toddler (1-5 years old)</option>
                                <option value="Childhood" name="age">Childhood (3-11 years old)</option>
                                <option value="Adolescence" name="age">Adolescence (12-18 years old)</option>
                                <option value="Adulthood" name="age">Adulthood (19-59 years old)</option>
                                <option value="Old Age" name="age">Old Age (more than 60 years old)</option>
                            </select>
                            {{-- @error('age')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                        </div>

                        <div class="col-md-2 mt-3">
                            <label for="complainant" class="form-group">Complainant's Name</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="complainant">
                                <option disabled selected>--Select--</option>
                                <option value="Anonymous" name="complainant">Anonymous</option>
                            </select>
                            {{-- @error('complainant')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                        </div>

                        <div class="col-md-3 mt-3">
                            <label for="type_case" class="form-group">Type of Case:</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="type_case">
                                <option disabled selected>--Select Type of Crime--</option>
                                <option value="Crimes Against Person" name="type_case">Against person</option>
                                <option value="Crimes Against Property" name="type_case">Against property</option>
                                <option value="Other crimes" name="type_case">Other crimes</option>
                                <option value="Prefer not to say" name="type_case">Prefer not to say</option>
                            </select>
                            {{-- @error('type_case')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                        </div>

                        <div class="col-md-5 mt-3">
                            <label for="case_specification" class="form-group">Specifications</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="case_specification">
                                <option disabled selected>--Select Crime Specification--</option>
                                <option value="Category 1" name="case_specification">Against person (Murder, Homicide, Physical Injury & Rape)</option>
                                <option value="Category 2" name="case_specification">Against property (Theft & Robbery)</option>
                                <option value="Category 3" name="case_specification">Other crimes (Drug use, Human Trafficking, Illegal Recruitement etc.)</option>
                                <option value="Prefer not to say" name="case_specification">Prefer not to say</option>
                            </select>
                            {{-- @error('case_specification')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                        </div>

                        <div class="col-md-3 mt-4">
                            <label for="date_filed" class="form-group mb-4 fw-bold">Date of filing</label>
                            <input type="date" class="form-control" name="date_filed" id="date_filed">
                            {{-- @error('date_filed')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>
                        <div class="col-md-3 mt-3">
                            <label for="case_status" class="form-group">Case Status</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="case_status">
                                <option disabled selected>--Crime Status--</option>
                                <option value="Category 1" name="case_status">Active</option>
                                <option value="Category 2" name="case_status">Inactive</option>
                                <option value="Prefer not to say" name="case_status">Prefer not to say</option>
                            </select>
                            {{-- @error('case_status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                        </div>



                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="d-grid gap-2 col-3 mx-auto">
                    <input class="btn btn-success" type="submit" value="Create">
                </div>
                <div class="d-grid gap-2 col-3 mx-auto mt-3">
                    <a href="{{ route('barangaycases.index') }}" id="cancel" name="cancel"
                        class="btn btn-danger mt-3">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection
