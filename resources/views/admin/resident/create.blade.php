@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card header">
            <h4 class="ml-5 btn btn-success" style="width: 20rem"> Creating Resident Profile</h4>
        </div>
        <form action="{{ route('residents.store') }}" method="post">
            @csrf
            @method('post')
            <div class="col-md-7 offset-md-2 pt-5">
                <div class="container">
                    <div class="card bg-light" style="width: 80rem;">
                        <div class="card-body center">

                            <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                <label for="name" class="form-group mb-4">Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                <label for="age" class="form-group mb-4"><b>Age</b></label>
                                <input type="number" class="form-control" name="age" id="age"
                                    value="{{ old('age') }}">
                                @error('age')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                <label class="mb-4"><b>Sex: </b></label>
                                <input type="radio" value="Male" id="male" name="sex">
                                <label for="male">Male</label>
                                <input type="radio" value="Female" id="female" name="sex">
                                <label for="female">Female</label>

                                @error('sex')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width: 18 rem">
                                <label for="birthdate" class="form-label fw-bold"><b>Birthday</b></label>
                                <input type="date" class="form-control" name="birthdate" id="birthdate">
                                @error('birthdate')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                <label for="civilStatus" class="form-group mb-4"><b>Civil Status</b></label>
                                <select class="form-select" aria-label="Default select example" class="form-control"
                                    name="civil_status">
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="widowed">Widowed</option>
                                    <option value="separated">Separated</option>
                                    <option value="divorced">Divorced</option>
                                    <option value="others">Others</option>
                                </select>
                                @error('civilStatus')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                <label for="servicesAcquired" class="form-group mb-4"><b>Services Acquired</b></label>
                                <select class="form-select" aria-label="Default select example" class="form-control"
                                    name="services_acquired">
                                    <option value="immunization">Immunization</option>
                                    <option value="tbdots">TB DOTS</option>
                                    <option value="family planning">Family Planning</option>
                                    <option value="barangay nutrition">Barangay Nutrition</option>
                                    <option value="others">Others</option>
                                </select>
                                @error('servicesAcquired')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                <label for="nutritionalStatus" class="form-group mb-4"><b>Nutritional Status</b></label>
                                <select class="form-select" aria-label="Default select example" class="form-control"
                                    name="nutritional_status">
                                    <option value="underweight">Underweight</option>
                                    <option value="normal">Normal</option>
                                    <option value="overweight">Overweight</option>
                                </select>
                                @error('nutritionalStatus')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                <label for="employmentStatus" class="mb-4"><b>Employment Status: </b></label>
                                <input class="form-check-input" type="radio" name="employment_status"
                                    value="1">Employed
                                <input class="form-check-input" type="radio" name="employment_status"
                                    value="0">Unemployed<br>
                                @error('employmentStatus')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                <label for="pwdStatus" class="mb-4"><b>Person with Disability: </b></label>
                                <input class="form-check-input" type="radio" name="pwd_status" value="1">Yes
                                <input class="form-check-input" type="radio" name="pwd_status" value="0">No<br>
                                @error('pwdStatus')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror


                                <div class="pt-4">
                                    <div class="row">
                                        <div class=" col-md-3 offset-md-3">
                                            <input type="submit" value="Create" class="btn btn-success">
                                        </div>
                                        <div class=" col-md-5">
                                            <a href="{{ route('residents.index') }}" id="cancel" name="cancel"
                                                class="btn btn-primary">Cancel</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        <div class="pt-5"></div>

    </div>
    </div>
    </form>
    </div>
    </div>
@endsection
