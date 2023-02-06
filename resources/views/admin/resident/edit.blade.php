@extends('layouts.admin')

@section('content')
    <div class="wrapper">
        <div class="card">
            <h2 class="text-center"><span class=""> Editing Resident's Profile </span></h2>
        </div>
        <div class="card-body">
            <form action="{{ route('residents.update', $resident->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="container">
                    <div class="bg-light">
                        <div class="mt-3">
                            <div class="col-md-4 mt-3">
                                <label class="form-group mb-4">Lastname</label>
                                <input type="text" name="lastname" value="{{ $resident->lastname }}"
                                    class="form-control">
                                @error('lastname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4 mt-3">
                                <label class="form-group">Firstname</label>
                                <input type="text" class="form-control" name="firstname"
                                    value="{{ $resident->firstname }}">
                                @error('firstname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-2 mt-3">
                                <label class="form-group">Middle name</label>
                                <input type="text" class="form-control" name="middlename"
                                    value="{{ $resident->middlename }}">
                                @error('middlename')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-2 mt-3">
                                <label class="form-group">Suffix</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="suffix">
                                    <option>{{ $resident->suffix }}</option>
                                    <option value="Jr." name="suffix">Jr.</option>
                                    <option value="Sr" name="suffix">Sr.</option>
                                    <option value="III" name="suffix">III</option>
                                    <option value="IV" name="suffix">IV</option>
                                    <option value="None" name="suffix">None</option>
                                </select>
                                @error('suffix')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-2 mt-4">
                                <label for="purok" class="form-group">Name of Purok</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="purok">
                                    <option>{{ $resident->purok }}</option>
                                    <option value="Antonio Village" name="purok">Antonio Village</option>
                                    <option value="Bacahoa Village" name="purok">Bacahoa Village</option>
                                    <option value="Camelon Compound" name="purok">Camelon Compound</option>
                                    <option value="CDE Phase 4" name="purok">CDE Phase 4</option>
                                    <option value="CDE Phase 3" name="purok">CDE Phase 3</option>
                                    <option value="CDE Phase 2" name="purok">CDE Phase 2</option>
                                    <option value="CDE Phase 1" name="purok">CDE Phase 1</option>
                                    <option value="Cecilia 1&2" name="purok">Cecilia 1&2</option>
                                    <option value="Celerina Heights" name="purok">Celerina Heights</option>
                                    <option value="Country Homes (Zone 11)" name="purok">Country Homes (Zone 11)</option>
                                    <option value="Country Homes B1-B19" name="purok">Country Homes B1-B19</option>
                                    <option value="CHS #15 (B55-B47)" name="purok">CHS #15 (B55-B47)</option>
                                    <option value="CHS Purok (14 B36-B46)" name="purok">CHS Purok (14 B36-B46)</option>
                                    <option value="Country Homes Sagingan" name="purok">Country Homes Sagingan</option>
                                    <option value="CHS #16 B56-62" name="purok">CHS #16 B56-62</option>
                                    <option value="Country Ville Village" name="purok">Country Ville Village</option>
                                    <option value="Chula Vista" name="purok">Chula Vista</option>
                                    <option value="D'Achievers" name="purok">D'Achievers</option>
                                    <option value="Dacudao/Binoling (Amsay)" name="purok">Dacudao/Binoling (Amsay)</option>
                                    <option value="Deca Homes Phase 1-A (B14-20)" name="purok">Deca Homes Phase 1-A (B14-20)</option>
                                    <option value="Deca Homes Phase 2-A (B21-32)" name="purok">Deca Homes Phase 2-A (B21-32)</option>
                                    <option value="Deca Homes Phase 2-B (B2 33-41)" name="purok">Deca Homes Phase 2-B (B2 33-41)</option>
                                    <option value="Deca Homes Phase 1-B (B1-13)" name="purok">Deca Homes Phase 1-B (B1-13)</option>
                                    <option value="Dela Peña Village" name="purok">Dela Peña Village</option>
                                    <option value="Diho Phase 2" name="purok">Diho Phase 2</option>
                                    <option value="Diho Phase 1" name="purok">Diho Phase 1</option>
                                    <option value="Dragon Compound Purok 5" name="purok">Dragon Compound Purok 5</option>
                                    <option value="Emilia Homes (Victors)" name="purok">Emilia Homes (Victors)</option>
                                    <option value="Emilia Homes Phase 1A" name="purok">Emilia Homes Phase 1A</option>
                                    <option value="Emilia Homes Beside Emily" name="purok">Emilia Homes Beside Emily</option>
                                    <option value="Emilia Homes Phase 1B" name="purok">Emilia Homes Phase 1B</option>
                                    <option value="Emilia Homes Phase 2B" name="purok">Emilia Homes Phase 2B</option>
                                    <option value="Emilia Homes Phase 2A" name="purok">Emilia Homes Phase 2A</option>
                                    <option value="Emilia Homes Phase 3B" name="purok">Emilia Homes Phase 3B</option>
                                    <option value="Emilia Homes Phase 3A" name="purok">Emilia Homes Phase 3A</option>
                                    <option value="Green Orchard Village" name="purok">Green Orchard Village</option>
                                    <option value="Greenland Phase 1" name="purok">Greenland Phase 1</option>
                                    <option value="Greenland Phase 2" name="purok">Greenland Phase 2</option>
                                    <option value="Holy Trinity Village" name="purok">Holy Trinity Village</option>
                                    <option value="Laverna Hills Phase 3" name="purok">Laverna Hills Phase 3</option>
                                    <option value="Laverna Hills Phase 1" name="purok">Laverna Hills Phase 1</option>
                                    <option value="Pag-ibig Subdivision" name="purok">Pag-ibig Subdivision</option>
                                    <option value="Pareñas Compound" name="purok">Pareñas Compound</option>
                                    <option value="Precilla 1/2" name="purok">Precilla 1/2</option>
                                    <option value="Pretige" name="purok">Pretige</option>
                                    <option value="Purok 32 Mountain View Village" name="purok">Purok 32 Mountain View Village</option>
                                    <option value="Purok 33 KM 11, San Roque" name="purok">Purok 33 KM 11, San Roque</option>
                                    <option value="Purok 34 Amakan" name="purok">Purok 34 Amakan</option>
                                    <option value="Purok 36 Arendain Compound" name="purok">Purok 36 Arendain Compound</option>
                                    <option value="Purok 36 Forestal" name="purok">Purok 36 Forestal</option>
                                    <option value="Purok 37 Forestal" name="purok">Purok 37 Forestal</option>
                                    <option value="Purok 39 Daitic Compound" name="purok">Purok 39 Daitic Compound</option>
                                    <option value="Ramonena 2" name="purok">Ramonena 2</option>
                                    <option value="Remedios Eights" name="purok">Remedios Eights</option>
                                    <option value="Sialza Compound" name="purok">Sialza Compound</option>
                                    <option value="Sta. Teresita Purok 1" name="purok">Sta. Teresita Purok 1</option>
                                    <option value="Suraya Cab Elem. School" name="purok">Suraya Cab Elem. School</option>
                                    <option value="Suraya Homes Phase 1" name="purok">Suraya Homes Phase 1</option>
                                    <option value="Suraya Homes Phase 2A" name="purok">Suraya Homes Phase 2A</option>
                                    <option value="Suraya Homes Phase 2B" name="purok">Suraya Homes Phase 2B</option>
                                    <option value="The Harmony Subdivision" name="purok">The Harmony Subdivision</option>
                                    <option value="Villa Park Subdivision" name="purok">Villa Park Subdivision</option>
                                </select>

                                @error('purok')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4 mt-3">
                                <label class="form-group mb-4">Home Address</label>
                                <input type="text" class="form-control" name="address"
                                    value="{{ $resident->address }}">
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4 mt-3">
                                <label class="form-group mb-4">Email Adress</label>
                                <input type="text" class="form-control" name="emailaddress"
                                    value="{{ $resident->emailaddress }}">
                                @error('emailaddress')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4 mt-3">
                                <label class="form-group mb-4">Contact Number</label>
                                <input type="number" class="form-control" name="contactnumber"
                                    value="{{ $resident->contactnumber }}">
                                @error('contactnumber')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4 mt-4">
                                <label class="form-label fw-bold">Birthday</label>
                                <input type="date" class="form-control" name="birthdate" value="{{ $resident->birthdate }}">

                                @error('birthdate')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-2 mt-4">
                                <label class="form-group">Sex</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg"  name="sex"x>
                                    <option>{{ $resident->sex }}</option>
                                    <option value="Male" name="sex">Male</option>
                                    <option value="Female" name="sex">Female</option>
                                </select>

                                @error('sex')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-4">
                                <label for="civilStatus" class="form-group">Civil Status</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg"
                                    name="civil_status">
                                    <option>{{ $resident->civil_status}}</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Others">Others</option>
                                </select>
                                @error('civil_status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-4">
                                <label for="servicesAcquired" class="form-group">Services Acquired</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg"
                                    name="services_acquired">
                                    <option>{{$resident->services_acquired}}</option>
                                    <option value="Immunization Services">Immunization Services</option>
                                    <option value="Maternal Check-up Services">Maternal Check-up Services</option>
                                    <option value="TB DOTS Services">TB DOTS Services</option>
                                    <option value="Family Planning">Family Planning</option>
                                    <option value="Barangay Nutrition">Barangay Nutrition
                                    </option>
                                    <option value="Others">Others</option>
                                </select>
                                @error('services_acquired')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <label for="nutritionalStatus" class="form-group">Nutritional Status</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg"
                                    name="nutritional_status">
                                    <option>{{ $resident->nutritional_status }}</option>
                                    <option value="Underweight" name="nutritional_status">Underweight</option>
                                    <option value="Normal" name="nutritional_status">Normal</option>
                                    <option value="Overweight" name="nutritional_status">Overweight</option>
                                    <option value="Obese1" name="nutritional_status">Obese 1</option>
                                    <option value="Obese2" name="nutritional_status">Obese 2</option>
                                    <option value="None" name="nutritional_status">Prefer not to say</option>
                                </select>
                                @error('nutritional_status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-2 mt-4">
                                <label for="employmentStatus" class="form-group">Employment Status </label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg"
                                    name="employment_status">
                                    <option>{{ $resident->employment_status }}</option>
                                    <option value="Employed" name="employment_status">Employed</option>
                                    <option value="Unemployed" name="employment_status">Unemployed</option>
                                    <option value="None" name="employment_status">Prefer not to say</option>
                                </select>

                                @error('employment_status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-2 mt-4">
                                <label for="pwdStatus" class="form-group">Person with Disability</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg"
                                    name="pwd_status">
                                    <option>{{ $resident->pwd_status }}</option>
                                    <option value="Yes" name="pwd_status">Yes</option>
                                    <option value="No" name="pwd_status">No</option>
                                </select>

                                @error('pwd_status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    </div>
                    <div class="mt-5">
                        <div class="d-grid gap-2 col-3 mx-auto">
                            <input class="btn btn-success" type="submit" value="Create">
                        </div>
                        <div class="d-grid gap-2 col-3 mx-auto">
                            <a href="{{ route('residents.index') }}" id="cancel" name="cancel"
                                class="btn btn-danger btn-md mt-3">Cancel</a>
                        </div>
                    </div>
                    <div class="pt-5"></div>

                    </div>
                    </div>
                    </form>
                    </div>
                    </div>

                            {{--
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
    </div> --}}
                        @endsection
