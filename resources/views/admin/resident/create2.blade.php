@extends('layouts.admin')

@section('content')
    <style>
        .btn1 {
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
.form-control2 {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

.container-form form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 2 - 10px);
    flex-direction: column;
    margin: 4px 0;
}


    </style>
    <div class="wrapper">
        <div class="card">
            <h2 class="text-center"><span class=""> Creating Resident's Profile </span></h2>
        </div>
        <form action="{{ route('residents.store') }}" method="post">
            @csrf
            @method('post')
            <div class="container">
                <div class="bg-light">
                    <div class="row">
                        <div class="col-md-4 mb-3 mt-4">
                            <label for="lastname" class="form-group">Lastname</label>
                            <input type="text" class="form-control2" name="lastname" id="lastname"
                                value="{{ old('name') }}" placeholder="Input lastname">
                            @error('lastname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3 mt-4">
                            <label for="firstname" class="form-group">Firstname</label>
                            <input type="text" class="form-control2" name="firstname" id="firstname"
                                value="{{ old('firstname') }}" placeholder="Input firstname">
                            @error('firstname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-2 mb-3 mt-4">
                            <label for="middlename" class="form-group">Middle name</label>
                            <input type="text" class="form-control2" name="middlename" id="middlename"
                                value="{{ old('middlename') }}" placeholder="Input middlename">
                            @error('middlename')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-2 mb-3 mt-4">
                            <label for="suffix" class="form-group">Suffix</label>
                            <select class="form-select form-select-lg" aria-label=".form-select-lg" name="suffix">
                                <option disabled selected>--Select--</option>
                                <option value="Jr." name="suffix">Jr.</option>
                                <option value="Sr." name="suffix">Sr.</option>
                                <option value="III" name="suffix">III</option>
                                <option value="IV" name="suffix">IV</option>
                                <option value="None" name="suffix">None</option>
                            </select>
                            @error('suffix')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-3 mb-3 mt-4">
                            <label for="relationship" class="form-group">Relationship</label>
                            <select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="relationship">
                                <option disabled selected>--Select--</option>
                                <option value="Single" name="rhh">Head</option>
                                <option value="Spouse/Husband" name="rhh">Spouse/Husband</option>
                                <option value="Son" name="rhh">Son</option>
                                <option value="Daughter" name="rhh">daughter</option>
                                <option value="Others" name="rhh">Others specify</option>
                            </select>
                            @error('relationship')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-2 mb-4 mt-4">
                            <label for="sex" class="form-group">Sex</label>
                            <select class="form-select form-select-lg" aria-label=".form-select-lg" name="sex">
                                <option disabled selected>--Select--</option>
                                <option value="Male" id="male" name="sex">Male</option>
                                <option value="Female" id="female" name="sex">Female</option>
                            </select>

                            @error('sex')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-3 mb-4 mt-4">
                            <label for="birthdate" class="form-group fw-bold">Birthday</label>
                            <input type="date" class="form-control2" name="birthdate" id="birthdate">

                            @error('birthdate')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-2 mb-4 mt-4">
                            <label for="civilStatus" class="form-group">Civil Status</label>
                            <select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="civil_status">
                                <option disabled selected>--Select--</option>
                                <option value="S" name="civil_status">Single</option>
                                <option value="M" name="civil_status">Married</option>
                                <option value="W" name="civil_status">Widow/widower</option>
                                <option value="S" name="civil_status">Separated</option>
                                <option value="L" name="civil_status">Lived in</option>
                                <option value="Others" name="civil_status">Others</option>
                            </select>
                            @error('civil_status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-2 mb-4 mt-4">
                            <label for="membership_type" class="form-group">Membership Type: </label>
                            <select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="membership_type">
                                <option disabled selected>--Select--</option>
                                <option value="Member" name="membership_type">Member</option>
                                <option value="Independent" name="membership_type">Independent</option>
                            </select>
                            @error('civil_status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-2 mb-4 mt-4">
                            <label for="education" class="form-group">Education: </label>
                            <select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="education">
                                <option disabled selected>--Select--</option>
                                <option value="N" name="education">None</option>
                                <option value="EL" name="education">Elementary Level</option>
                                <option value="EG" name="education">Elementary Graduate</option>
                                <option value="JHSL" name="education">Junior Highschool Level</option>
                                <option value="JHSG" name="education">Junior Highschool Graduate</option>
                                <option value="SHSL" name="education">Senior Highschool Level</option>
                                <option value="SHSG" name="education">Senior Highschool Graduate</option>
                                <option value="V" name="education">Vocational</option>
                                <option value="CL" name="education">College Level</option>
                                <option value="CG" name="education">College Graduate</option>
                                <option value="PG" name="education">Post Graduate</option>
                            </select>
                            @error('education')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-2 mb-3 mt-4">
                            <label for="occupation" class="form-group">Occupation</label>
                            <input type="text" class="form-control2" name="occupation" id="occupation"
                                value="{{ old('occupation') }}" placeholder="Input occupation">
                            @error('occupation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-3 mb-3 mt-4">
                            <label for="contactnumber" class="form-group">Contact Number</label>
                            <input type="number" class="form-control2" name="contactnumber" id="contactnumber"
                                value="{{ old('contactnumber') }}" placeholder="Input Contact Number">
                            @error('contactnumber')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-2 mb-4 mt-4">
                            <label for="registered_voter" class="form-group">Registered voter: </label>
                            <select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="registered_voter">
                                <option disabled selected>--Select--</option>
                                <option value="Yes" name="registered_voter">Yes</option>
                                <option value="No" name="registered_voter">No</option>
                            </select>
                            @error('registered_voter')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-3 mb-3 mt-4">
                            <label for="purok" class="form-group">Name of Purok</label>
                            <select class="form-select form-select-lg" aria-label=".form-select-lg" name="purok">
                                <option disabled selected>--Select--</option>
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
                                <option value="Deca Homes Phase 1-A (B14-20)" name="purok">Deca Homes Phase 1-A (B14-20)
                                </option>
                                <option value="Deca Homes Phase 2-A (B21-32)" name="purok">Deca Homes Phase 2-A (B21-32)
                                </option>
                                <option value="Deca Homes Phase 2-B (B2 33-41)" name="purok">Deca Homes Phase 2-B (B2
                                    33-41)</option>
                                <option value="Deca Homes Phase 1-B (B1-13)" name="purok">Deca Homes Phase 1-B (B1-13)
                                </option>
                                <option value="Dela Peña Village" name="purok">Dela Peña Village</option>
                                <option value="Diho Phase 2" name="purok">Diho Phase 2</option>
                                <option value="Diho Phase 1" name="purok">Diho Phase 1</option>
                                <option value="Dragon Compound Purok 5" name="purok">Dragon Compound Purok 5</option>
                                <option value="Emilia Homes (Victors)" name="purok">Emilia Homes (Victors)</option>
                                <option value="Emilia Homes Phase 1A" name="purok">Emilia Homes Phase 1A</option>
                                <option value="Emilia Homes Beside Emily" name="purok">Emilia Homes Beside Emily
                                </option>
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
                                <option value="Purok 32 Mountain View Village" name="purok">Purok 32 Mountain View
                                    Village</option>
                                <option value="Purok 33 KM 11, San Roque" name="purok">Purok 33 KM 11, San Roque
                                </option>
                                <option value="Purok 34 Amakan" name="purok">Purok 34 Amakan</option>
                                <option value="Purok 36 Arendain Compound" name="purok">Purok 36 Arendain Compound
                                </option>
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

                        <div class="col-md-3 mb-3 mt-4">
                            <label for="group_community" class="form-group">Group Community</label>
                            <select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="group_community">
                                <option disabled selected>--Select--</option>
                                <option value="women" name="group_community">Women</option>
                                <option value="pwd" name="group_community">PWD</option>
                                <option value="youth" name="group_community">Youth</option>
                                <option value="senior_citizen" name="group_community">Senior Citizen</option>
                                <option value="Others" name="group_community">Others</option>
                            </select>
                            @error('group_community')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="{{ route('residents.create') }}">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                </a>
                              </li>
                            </ul>
                          </nav>

                        {{-- <div class="pt-4">
                                <div class="row">
                                    <div class=" col-md-3 offset-md-3">
                                        <input type="submit" value="Create" class="btn btn-success">
                                    </div>
                                    <div class=" col-md-5">
                                        <a href="{{ route('residents.index') }}" id="cancel" name="cancel"
                                            class="btn btn-primary">Cancel</a>
                                    </div>
                                </div>
                            </div> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="mt-5">
                <div class="d-grid gap-2 col-3 mx-auto">
                    <input class="btn1 btn-success" type="submit" value="Create">
                </div>
                <div class="d-grid gap-2 col-3 mx-auto mt-3">
                    <a href="{{ route('residents.index') }}" id="cancel" name="cancel"
                        class="btn1 btn-danger mt-3">Cancel</a>
                </div>
            </div>
            <div class="pt-5"></div> --}}

    </div>
    </div>
    </form>
    </div>
    </div>
@endsection
