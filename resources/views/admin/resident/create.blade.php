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
                                <label class="form-group mb-4"><b>Name</b></label required>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                <label class="form-group mb-4"><b>Age</b></label required>
                                <input type="number" class="form-control" name="age">
                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                <label class="mb-4"><b>Sex: </b></label required>
                                <input class="form-check-input" type="radio" name="sex" value="male"> Male
                                <input class="form-check-input" type="radio" name="sex" value="female"> Female<br>

                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width: 18 rem">
                                <label class="form-label fw-bold"><b>Birthday</b></label required>
                                <input type="date" class="form-control" name="birthdate">
                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                <label class="form-group mb-4"><b>Civil Status</b></label required>
                                <select class="form-select" aria-label="Default select example" class="form-control"
                                    name="civil_status">
                                    <option selected>--Select--</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="widowed">Widowed</option>
                                    <option value="separated">Separated</option>
                                    <option value="divorced">Divorced</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                <label class="form-group mb-4"><b>Services Acquired</b></label required>
                                <select class="form-select" aria-label="Default select example" class="form-control"
                                    name="services_acquired">
                                    <option selected>--Select--</option>
                                    <option value="immunization">Immunization</option>
                                    <option value="tbdots">TB DOTS</option>
                                    <option value="family planning">Family Planning</option>
                                    <option value="barangay nutrition">Barangay Nutrition</option>
                                </select>
                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                <label class="form-group mb-4"><b>Nutritional Status</b></label required>
                                <select class="form-select" aria-label="Default select example" class="form-control"
                                    name="nutritional_status">
                                    <option selected>--Select--</option>
                                    <option value="underweight">Underweight</option>
                                    <option value="normal">Normal</option>
                                    <option value="overweight">Overweight</option>
                                </select>
                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                <label class="mb-4"><b>Employment Status: </b></label required>
                                <input class="form-check-input" type="radio" name="employment_status"
                                    value="1">Employed
                                <input class="form-check-input" type="radio" name="employment_status"
                                    value="0">Unemployed<br>

                            </div>

                            <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                <label class="mb-4"><b>Person with Disability: </b></label required>
                                <input class="form-check-input" type="radio" name="pwd_status" value="1">Yes
                                <input class="form-check-input" type="radio" name="pwd_status" value="0">No<br>



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
