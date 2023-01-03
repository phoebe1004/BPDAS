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
                                    <label class="form-group mb-4" required>Name</label>
                                    <input type="text" value="{{ $resident->name }}" class="form-control" name="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                    <label class="form-group mb-4">Age</label required>
                                    <input type="number" value="{{ $resident->age }}" class="form-control" name="age">
                                    @error('age')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                    <label class="form-group mb-4" class="form-control">Sex</label required>
                                    <input type="radio" id="male" value="Male" name="sex" {{$resident->sex === 'Male' ? 'checked'  : '' }}> Male
                                    <input type="radio" id="female" value="Female" name="sex" {{$resident->sex === 'Female' ? 'checked'  : '' }}>
                                    Female<br>
                                    @error('sex')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-7 offset-md-1 mt-3" style="width: 18 rem">
                                    <label class="form-label fw-bold"><b>Birthday</b></label required>
                                    <input type="date" value="{{ $resident->birthdate }}" class="form-control"
                                        name="birthdate">
                                    @error('birthdate')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                    <label class="form-group mb-4">Civil Status</label required>
                                    <select class="form-select" aria-label="Default select example"
                                        value="{{ $resident->civil_status }}" id = "selected" class="form-control" name="civil_status">
                                        <option value="Single" selected >Single</option>
                                        <option value="Married" selected>Married</option>
                                        <option value="Widowed"selected>Widowed</option>
                                        <option value="Separated" selected>Separated</option>
                                        <option value="Divorced" selected>Divorced</option>
                                        <option value="Others" selected>Others</option>
                                    </select>
                                    @error('civil_status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                    <label class="form-group mb-4">Services Acquired</label required>
                                    <select class="form-select" aria-label="Default select example"
                                        value="{{ $resident->services_acquired }}" class="form-control"
                                        name="services_acquired">
                                        <option value="immunization">Immunization</option>
                                        <option value="tbdots">TB DOTS</option>
                                        <option value="family planning">Family Planning</option>
                                        <option value="barangay nutrition">Barangay Nutrition</option>
                                    </select>
                                    @error('services_acquired')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                    <label class="form-group mb-4"><b>Nutritional Status</b></label required>
                                    <select class="form-select" value="{{ $resident->nutritional_status }}"
                                        aria-label="Default select example" class="form-control" name="nutritional_status">
                                        <option value="underweight" {{$resident->nutritional_status === '' ? 'checked'  : '
                                        ' }}>Underweight</option>
                                        <option value="normal">Normal</option>
                                        <option value="Overweight">Overweight</option>
                                    </select>
                                    @error('nutritional_status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                    <label class="form-group mb-4" class="form-control">Employment Status</label required>
                                    <input type="radio" id="employed" value="1" name="employment_status" {{$resident->employment_status === '1' ? 'checked'  : '' }}> Employed
                                    <input type="radio" id="unemployed" value="0" name="employment_status" {{$resident->employment_status === '0' ? 'checked'  : '' }}>
                                    Unemployed<br>
                                    @error('employment_status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-7 offset-md-1 mt-3" style="width:18 rem">
                                    <label class="form-group mb-4" value="{{ $resident->pwd_status }}"
                                        class="form-control"><b>Person With Disability</b></label required><br>
                                    <input type="radio" name="pwd_status" value="1" {{$resident->pwd_status === '1' ? 'checked'  : '' }}> Yes<br>
                                    <input type="radio" name="pwd_status" value="0" {{$resident->pwd_status === '0' ? 'checked'  : '' }}> No<br>
                                    @error('pwd_status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
