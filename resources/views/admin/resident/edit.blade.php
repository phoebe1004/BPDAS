@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card header">
            <h4 class="ml-5"> Update Resident</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('residents.update', $resident->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="col-md-7 offset-md-2 pt-5">
                    <div class="container">
                        <div class="card bg-light" style="width: 80rem;">
                            <div class="card-body center">

                                <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                    <label for="name" class="form-group mb-4" required>Name</label>
                                    <input type="text" class="form-control" value="{{ $resident->name }}">
                                </div>

                                <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                    <label for="age" class="form-group mb-4">Age</label required>
                                    <input type="number" class="form-control" name="age" value="{{ $resident->age }}">
                                </div>

                                <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                    <label for="sex" class="mb-4" value="{{ $resident->sex}}">Sex</label required>
                                    <input class="form-check-input"  type="radio" name="sex" value="{{ $resident->sex}}" id="male"> Male
                                    <input class="form-check-input" type="radio"  name="sex"  value="{{ $resident->sex}}" id="female"> Female<br>

                                </div>

                                <div class="col-md-7 offset-md-1 mt-3" style="width: 18 rem">
                                    <label for="birthdate" class="form-label fw-bold"  required>Birthday</label>
                                    <input type="date" class="form-control" name="birthdate" value="{{ $resident->birthdate }}">
                                </div>

                                <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                    <label for="civil_status" class="form-group mb-4">Civil Status</label required>
                                    <select class="form-select" value="" aria-label="Default select example" class="form-control"
                                        name="civil_status" >
                                        <option selected value="{{  $resident->civil_status }}" >--Select--</option>
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                        <option value="widowed">Widowed</option>
                                        <option value="separated">Separated</option>
                                        <option value="divorced">Divorced</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>

                                <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                    <label for="servicesAcquired" class="form-group mb-4">Services Acquired</label required>
                                    <select class="form-select" value="{{ $resident->services_acquired }}" aria-label="Default select example" class="form-control"
                                        name="services_acquired">
                                        <option selected>--Select--</option>
                                        <option value="immunization">Immunization</option>
                                        <option value="tbdots">TB DOTS</option>
                                        <option value="family planning">Family Planning</option>
                                        <option value="barangay nutrition">Barangay Nutrition</option>
                                    </select>
                                </div>

                                <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                    <label for="nutritional_status" class="form-group mb-4">Nutritional Status</label required>
                                    <select class="form-select" value="{{ $resident->nutritional_status }}" aria-label="Default select example" class="form-control"
                                        name="nutritionalStatus">
                                        <option selected="selected">--Select--</option>
                                        <option value="underweight" <?php if($resident['id'] == 'underweight') { ?> selected="selected"<?php } ?>>Underweight</option>
                                        <option value="normal" <?php if($resident['id'] == 'normal') { ?> selected="selected"<?php } ?>>Normal</option>
                                        <option value="overweight" <?php if($resident['id'] == 'overweight') { ?> selected="selected"<?php } ?>>Overweight</option>
                                    </select>
                                </div>

                                <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                    <label for="employmentStatus" class="mb-4">Employment Status</label required>
                                    <input class="form-check-input" type="radio" name="employment_status">Employed
                                    <input class="form-check-input" type="radio" name="employment_status">Unemployed<br>

                                </div>

                                <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem" >
                                    <label for="pwdStatus" class="mb-4" value="{{ $resident->pwd_status }}">Person with Disability</label required>
                                    <input class="form-check-input" type="radio" name="pwd_status">Yes
                                    <input class="form-check-input" type="radio" name="pwd_status">No<br>



                                    <div class="pt-4">
                                        <div class="row">
                                            <div class=" col-md-3 offset-md-3">
                                                <input type="submit" value="Update" class="btn btn-success">
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
@endsection
