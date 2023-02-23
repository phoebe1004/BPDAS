@extends('layouts.admin')

@section('content')
    <div class="wrapper">
        <div class="card">
            <h2 class="text-center"><span class=""> Editing Resident's Profile </span></h2>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="bg-light">
                    <form action="{{ route('residents.update', $resident->id) }}" method="post"
                        class="row gx-3 gy-2 align-items-center">
                        @csrf
                        @method('PUT')

                        <div class="">
                            <div class="col-md-2 offset-md-9 d-flex">
                                <button type="submit" class="btn btn-success btn-lg ms-auto px-5">Save</button>
                            </div>
                            <div class="col-md-1 d-flex">
                                <a href="{{ route('residents.index') }}" id="cancel" name="cancel"
                                        class="btn btn-danger btn-lg ">Cancel</a>
                            </div>
                        </div>


                        <div class="mb-4 row gx-3 gy-2 align-items-center">
                            <div class="col-12">
                                <h3><b>Resident's Information:</b></h3>
                            </div>
                            <div class="col-md-4">
                                <span>Lastname</span>
                                <input type="text" class="form-control" name="lastname" id="lastname"
                                    placeholder="lastname" value="{{ $resident->lastname }}">
                                @error('lastname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <span>Firstname</span>
                                <input type="text" class="form-control" name="firstname" id="firstname"
                                    placeholder="firstname" value="{{ $resident->firstname }}">
                                @error('firstname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <span>Middlename</span>
                                <input type="text" class="form-control" name="middlename" id="middlename"
                                    placeholder="middlename" value="{{ $resident->middlename }}">
                                @error('middlename')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mt-4">
                                <span>Suffix</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="suffix">
                                        <option selected>{{ $resident->suffix }}</option>
                                        <option value="Sr." name="suffix">Sr.</option>
                                        <option value="Jr." name="suffix">Jr.</option>
                                        <option value="III" name="suffix">III</option>
                                        <option value="IV" name="suffix">IV</option>
                                        <option value="None" name="suffix">None</option>
                                    </select>
                                    @error('suffix')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-4 mt-4">
                                <span>Relationship to HH Head</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="relationship">
                                        <option selected>{{ $resident->relationship }}</option>
                                        <option value="Head" name="relationship">Head</option>
                                        <option value="Spouse" name="relationship">Spouse</option>
                                        <option value="Son" name="relationship">Son</option>
                                        <option value="Daughter" name="relationship">Daughter</option>
                                        <option value="Others" name="relationship">Others</option>
                                    </select>
                                    @error('relationship')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-4 mt-4">
                                <span>Sex</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="sex">
                                        <option selected>{{ $resident->sex }}</option>
                                        <option value="Male" name="sex">Male</option>
                                        <option value="Female" name="sex">Female</option>
                                    </select>
                                    @error('sex')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-4 mt-4 ">
                                <span>Birthday</span>
                                <input type="date" class="form-control" name="birthdate" id="birthdate"
                                    value="{{ $resident->birthdate }}">
                                @error('birthdate')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mt-4">
                                <span>Civil Status</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="civil_status">
                                        <option selected>{{ $resident->civil_status }}</option>
                                        <option value="single"  name="civil_status">Single</option>
                                        <option value="married" name="civil_status">Married</option>
                                        <option value="widowed" name="civil_status">Widowed</option>
                                        <option value="live in" name="civil_status">Live in</option>
                                    </select>
                                    @error('civil_status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-4 mt-4">
                                <span>Membership Type</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="membership_type">
                                        <option selected>{{ $resident->membership_type }}</option>
                                        <option value="member"  name="membership_type" >Member</option>
                                        <option value="dependent"  name="membership_type" >Dependent</option>
                                    </select>
                                    @error('membership_type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-4 mt-4">
                                <span>Contact Number</span>
                                <input type="number" class="form-control" name="contact_number" id="contact_number"
                                    placeholder="contact number" value="{{ $resident->contact_number }}">
                                @error('contact_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mt-4">
                                <span>Purok</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="purok">
                                        <option selected>{{ $resident->purok }}</option>
                                        <option value="Antonio Village" name="purok">Antonio Village</option>
                                        <option value="Bacahoa Village" name="purok">Bacahoa Village</option>
                                        <option value="Camelon Compound" name="purok">Camelon Compound</option>
                                        <option value="CDE Phase 4" name="purok">CDE Phase 4</option>
                                        <option value="CDE Phase 3" name="purok">CDE Phase 3</option>
                                        <option value="CDE Phase 2" name="purok">CDE Phase 2</option>
                                        <option value="CDE Phase 1" name="purok">CDE Phase 1</option>
                                        <option value="Cecilia 1&2" name="purok">Cecilia 1&2</option>
                                        <option value="Celerina Heights" name="purok">Celerina Heights</option>
                                        <option value="Country Homes (Zone 11)" name="purok">Country Homes (Zone 11)
                                        </option>
                                        <option value="Country Homes B1-B19" name="purok">Country Homes B1-B19</option>
                                        <option value="CHS #15 (B55-B47)" name="purok">CHS #15 (B55-B47)</option>
                                        <option value="CHS Purok (14 B36-B46)" name="purok">CHS Purok (14 B36-B46)
                                        </option>
                                        <option value="Country Homes Sagingan" name="purok">Country Homes Sagingan
                                        </option>
                                        <option value="CHS #16 B56-62" name="purok">CHS #16 B56-62</option>
                                        <option value="Country Ville Village" name="purok">Country Ville Village
                                        </option>
                                        <option value="Chula Vista" name="purok">Chula Vista</option>
                                        <option value="D'Achievers" name="purok">D'Achievers</option>
                                        <option value="Dacudao/Binoling (Amsay)" name="purok">Dacudao/Binoling (Amsay)
                                        </option>
                                        <option value="Deca Homes Phase 1-A (B14-20)" name="purok">Deca Homes Phase 1-A
                                            (B14-20)
                                        </option>
                                        <option value="Deca Homes Phase 2-A (B21-32)" name="purok">Deca Homes Phase 2-A
                                            (B21-32)
                                        </option>
                                        <option value="Deca Homes Phase 2-B (B2 33-41)" name="purok">Deca Homes Phase
                                            2-B
                                            (B2
                                            33-41)</option>
                                        <option value="Deca Homes Phase 1-B (B1-13)" name="purok">Deca Homes Phase 1-B
                                            (B1-13)
                                        </option>
                                        <option value="Dela Peña Village" name="purok">Dela Peña Village</option>
                                        <option value="Diho Phase 2" name="purok">Diho Phase 2</option>
                                        <option value="Diho Phase 1" name="purok">Diho Phase 1</option>
                                        <option value="Dragon Compound Purok 5" name="purok">Dragon Compound Purok 5
                                        </option>
                                        <option value="Emilia Homes (Victors)" name="purok">Emilia Homes (Victors)
                                        </option>
                                        <option value="Emilia Homes Phase 1A" name="purok">Emilia Homes Phase 1A
                                        </option>
                                        <option value="Emilia Homes Beside Emily" name="purok">Emilia Homes Beside Emily
                                        </option>
                                        <option value="Emilia Homes Phase 1B" name="purok">Emilia Homes Phase 1B
                                        </option>
                                        <option value="Emilia Homes Phase 2B" name="purok">Emilia Homes Phase 2B
                                        </option>
                                        <option value="Emilia Homes Phase 2A" name="purok">Emilia Homes Phase 2A
                                        </option>
                                        <option value="Emilia Homes Phase 3B" name="purok">Emilia Homes Phase 3B
                                        </option>
                                        <option value="Emilia Homes Phase 3A" name="purok">Emilia Homes Phase 3A
                                        </option>
                                        <option value="Green Orchard Village" name="purok">Green Orchard Village
                                        </option>
                                        <option value="Greenland Phase 1" name="purok">Greenland Phase 1</option>
                                        <option value="Greenland Phase 2" name="purok">Greenland Phase 2</option>
                                        <option value="Holy Trinity Village" name="purok">Holy Trinity Village</option>
                                        <option value="Laverna Hills Phase 3" name="purok">Laverna Hills Phase 3
                                        </option>
                                        <option value="Laverna Hills Phase 1" name="purok">Laverna Hills Phase 1
                                        </option>
                                        <option value="Pag-ibig Subdivision" name="purok">Pag-ibig Subdivision</option>
                                        <option value="Pareñas Compound" name="purok">Pareñas Compound</option>
                                        <option value="Precilla 1/2" name="purok">Precilla 1/2</option>
                                        <option value="Pretige" name="purok">Pretige</option>
                                        <option value="Purok 32 Mountain View Village" name="purok">Purok 32 Mountain
                                            View
                                            Village</option>
                                        <option value="Purok 33 KM 11, San Roque" name="purok">Purok 33 KM 11, San Roque
                                        </option>
                                        <option value="Purok 34 Amakan" name="purok">Purok 34 Amakan</option>
                                        <option value="Purok 36 Arendain Compound" name="purok">Purok 36 Arendain
                                            Compound
                                        </option>
                                        <option value="Purok 36 Forestal" name="purok">Purok 36 Forestal</option>
                                        <option value="Purok 37 Forestal" name="purok">Purok 37 Forestal</option>
                                        <option value="Purok 39 Daitic Compound" name="purok">Purok 39 Daitic Compound
                                        </option>
                                        <option value="Ramonena 2" name="purok">Ramonena 2</option>
                                        <option value="Remedios Eights" name="purok">Remedios Eights</option>
                                        <option value="Sialza Compound" name="purok">Sialza Compound</option>
                                        <option value="Sta. Teresita Purok 1" name="purok">Sta. Teresita Purok 1
                                        </option>
                                        <option value="Suraya Cab Elem. School" name="purok">Suraya Cab Elem. School
                                        </option>
                                        <option value="Suraya Homes Phase 1" name="purok">Suraya Homes Phase 1</option>
                                        <option value="Suraya Homes Phase 2A" name="purok">Suraya Homes Phase 2A
                                        </option>
                                        <option value="Suraya Homes Phase 2B" name="purok">Suraya Homes Phase 2B
                                        </option>
                                        <option value="The Harmony Subdivision" name="purok">The Harmony Subdivision
                                        </option>
                                        <option value="Villa Park Subdivision" name="purok">Villa Park Subdivision
                                        </option>
                                    </select></p>

                                @error('purok')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4 mt-4">
                                <span>Classification By Age</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="classification_by_age">
                                        <option selected>{{ $resident->classification_by_age }}</option>
                                        <option value="none" name="classification_by_age" >None</option>
                                        <option value="Newborn" name="classification_by_age" >Newborn</option>
                                        <option value="Senior citizens" name="classification_by_age" >Senior Citizens</option>
                                        <option value="Adolescent" name="classification_by_age" >Adolescent</option>
                                        <option value="Adult (20-59 yrs old)" name="classification_by_age" >Adult (20-59 yrs old</option>
                                        <option value="15-49 y.o., not pregnant & non-PP" name="classification_by_age" >15-49 y.o., not pregnant & non-PP
                                        </option>
                                        <option value="Pregnant" name="classification_by_age" >Pregnant</option>
                                        <option value="Adolescent Pregnant" name="classification_by_age" >Adolescent Pregnant</option>
                                        <option value="Post Partum" name="classification_by_age" >Post Partum</option>
                                        <option value="Infant (29 days - 11 month old)" name="classification_by_age" >Infant (29 days - 11 month old
                                        </option>
                                        <option value="Under 5 (0-59 months)" name="classification_by_age" >Under 5 (0-59 months</option>
                                        <option value="PWD" name="classification_by_age" >PWD</option>
                                    </select></p>
                                @error('classification_by_age')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-2 mt-3">
                                <span>Remarks</span>
                                <input rows="5" class="form-control" name="remarks" id="remarks"  value="{{ $resident->remarks }}">
                                @error('remarks')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <h4 class="mt-5">Social Economic Status</h4>
                            <div class="col-md-3 mb-2 mt-3">
                                <span>NHTS 4Ps</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="nhts_4ps">
                                        <option selected>{{ $social->nhts_4ps }} </option>
                                        <option value="yes" name="nhts_4ps">Yes</option>
                                        <option value="no" name="nhts_4ps">No</option>
                                    </select>
                                    @error('nhts_4ps')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-3 mb-2 mt-3">
                                <span>NHTS Non 4Ps</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="nhts_non_4ps" id="nhts_non_4ps">
                                        <option selected>{{ $social->nhts_non_4ps }}</option>
                                        <option value="yes" name="nhts_non_4ps">Yes</option>
                                        <option value="no" name="nhts_non_4ps">No</option>
                                    </select>
                                    @error('nhts_non_4ps')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-3 mb-2 mt-3">
                                <span>Non NHTS</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="non_nhts" id="non_nhts">
                                        <option selected>{{ $social->non_nhts }}</option>
                                        <option value="yes" name="non_nhts">Yes</option>
                                        <option value="no" name="non_nhts">No</option>
                                    </select>
                                    @error('non_nhts')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-3 mb-2 mt-3">
                                <span>Non IP</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="non_ip"
                                        id="non_ip">
                                        <option selected>{{ $social->non_ip }} </option>
                                        <option value="yes" name="non_ip">Yes</option>
                                        <option value="no" name="non_ip">No</option>
                                    </select>
                                    @error('non_ip')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-6 mt-3">
                                <span>IP Indication</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="ip_indication" id="ip_indication">
                                        <option selected>{{ $indigent->ip_indication }}</option>
                                        <option value="yes" name="ip_indication">Yes</option>
                                        <option value="no" name="ip_indication">No</option>
                                    </select>
                                    @error('ip_indication')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-6 mt-3">
                                <span>Tribe</span>
                                <input type="text" class="form-control" name="tribe" id="tribe"
                                    placeholder="tribe" value="{{ $indigent->tribe }}">
                                @error('tribe')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <h4 class="mt-5">Educational Attainment and Occupation</h4>
                            <div class="col-md-6 mt-3">
                                <span>Educational Attainment</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="education" id="education">
                                        <option selected>{{$educ->education}}</option>
                                        <option value="None" name="education">None</option>
                                        <option value="Elementary Level" name="education">Elementary Level</option>
                                        <option value="Elementary Graduate" name="education">Elementary Graduate</option>
                                        <option value="Junior High School Level" name="education">Junior High School Level</option>
                                        <option value="Junior High School Graduate" name="education">Junior High School Graduate</option>
                                        <option value="Senior High School Level" name="education">Senior High School Level</option>
                                        <option value="Senior High School Graduate" name="education">Senior High School Graduate</option>
                                        <option value="Vocational" name="education">Vocational</option>
                                        <option value="College Level" name="education">College Level</option>
                                        <option value="College Graduate" name="education">College Graduate</option>
                                        <option value="Post Graduate" name="education">Post Graduate</option>
                                    </select></p>
                                @error('education')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 mt-3">
                                <span>Occupation</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="occupation" id="occupation">
                                        <option selected>{{$educ->occupation}}</option>
                                        <option value="Employed" name="occupation">Employed</option>
                                        <option value="Unemployed" name="occupation">Unemployed</option>
                                        <option value="Self Employed" name="occupation">Self Employed</option>
                                        <option value="Student" name="occupation">Student</option>
                                    </select></p>
                                @error('occupation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <h4 class="mt-5">Occupancy / Group Community and Voter Registration Information</h4>
                            <div class="col-md-3 mt-3">
                                <span>Type of Occupancy (Renter)</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="renter"
                                        id="renter">
                                        <option selected>{{$typeOccupancy->renter}}</option>
                                        <option value="yes" name="renter">Yes</option>
                                        <option value="no" name="renter">No</option>
                                    </select>
                                    @error('renter')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-3  mt-3">
                                <span>Number of Months</span>
                                <input type="number" class="form-control" name="months" id="months"
                                    placeholder="months" value="{{ $typeOccupancy->months }}">
                                @error('months')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mt-3">
                                <span>Registered Voter</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="reg_vot_indication" id="reg_vot_indication">
                                        <option selected>{{ $regVoter->reg_vot_indication}}</option>
                                        <option value="yes" name="reg_vot_indication">Yes</option>
                                        <option value="no" name="reg_vot_indication">No</option>
                                    </select>
                                    @error('reg_vot_indication')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-3 mt-3">
                                <span>Where</span>
                                <input type="text" class="form-control" name="reg_vot_where" id="reg_vot_where"
                                    placeholder="reg_vot_where" value="{{ $regVoter->reg_vot_where }}">
                                @error('reg_vot_where')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-2 mt-3">
                                <span>Community Group</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="com_grp_indication" id="com_grp_indication">
                                        <option selected>{{ $grpInd->com_grp_indication }}</option>
                                        <option value="yes" name="com_grp_indication">Yes</option>
                                        <option value="no" name="com_grp_indication">No</option>
                                    </select>
                                    @error('com_grp_indication')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-3 mt-3">
                                <span>Type of Community Group</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="com_grp_type" id="com_grp_type">
                                        <option selected>{{ $grpInd->com_grp_type }}</option>
                                        <option value="none" name="com_grp_type">None</option>
                                        <option value="women" name="com_grp_type">Women</option>
                                        <option value="senior citizens" name="com_grp_type">Senior Citizens</option>
                                        <option value="youth" name="com_grp_type">Youth</option>
                                        <option value="pwds" name="com_grp_type">PWDs</option>
                                    </select>
                                    @error('com_grp_type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <h3 class="mt-5"><b>Resident's Health Information:</b></h3>
                            <div class="col-md-4 mb-2 mt-2">
                                <span>PhilHealth Number</span>
                                <input type="text" class="form-control" name="philhealth_number"
                                    id="philhealth_number" placeholder="philhealth number"
                                    value="{{ $healthInfo->philhealth_number }}">
                                @error('philhealth_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2 mt-2">
                                <span>Medical History</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="medical_history" id="medical_history">
                                        <option selected>{{ $healthInfo->medical_history }}</option>
                                        <option value="Hypertension" name="medical_history">Hypertension</option>
                                        <option value="Diabetes" name="medical_history">Diabetes</option>
                                        <option value="Tuberculosis" name="medical_history">Tuberculosis</option>
                                        <option value="Surgery" name="medical_history">Surgery</option>
                                        <option value="None" name="medical_history">None</option>
                                    </select></p>
                                @error('medical_history')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2 mt-2">
                                <span>Remarks</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="remark"
                                        id="remark">
                                        <option selected>{{ $healthInfo->remark }}</option>
                                        <option value="Transfer of Residence" name="remark">Transfer of Residence
                                        </option>
                                        <option value="Severe Acute Malnutrition" name="remark">Severe Acute Malnutrition</option>
                                        <option value="Moderate Acute Malnutrition" name="remark">Moderate Acute Malnutrition</option>
                                        <option value="Stunted" name="remark">Stunted</option>
                                        <option value="For Updating" name="remark">For Updating</option>
                                        <option value="None" name="remark">None</option>
                                    </select></p>
                                @error('remark')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <h4 class="mt-5">Personal and Social </h4>
                            <div class="col-md-4 mb-2 mt-2">
                                <span>Smoker</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="smoker"
                                        id="smoker">
                                        <option selected>{{$perSocHis->smoker}}</option>
                                        <option value="yes" name="smoker">Yes</option>
                                        <option value="no" name="smoker">No</option>
                                    </select></p>
                                @error('smoker')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2 mt-2">
                                <span>Alcohol Beverages Drinker</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="alcohol_beverages_drinker" id="alcohol_beverages_drinker">
                                        <option selected>{{$perSocHis->alcohol_beverages_drinker}}</option>
                                        <option value="yes" name="alcohol_beverages_drinker">Yes</option>
                                        <option value="no" name="alcohol_beverages_drinker">No</option>
                                    </select></p>
                                @error('alcohol_beverages_drinker')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2 mt-2">
                                <span>Sexually Active</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="sexually_active" id="sexually_active">
                                        <option selected>{{$perSocHis->sexually_active}}</option>
                                        <option value="yes" name="sexually_active">Yes</option>
                                        <option value="no" name="sexually_active">No</option>
                                    </select></p>
                                @error('sexually_active')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <h4 class="mt-5">Women of Reproductive Age (WRA) (Leave input if Male) </h4>
                            <div class="col-md-3 mb-2 mt-3">
                                <span>Last Menstrual Period</span>
                                <input type="date" class="form-control" name="last_menstrual_period" value="{{ $womens->last_menstrual_period }}"
                                    id="last_menstrual_period">
                                @error('last_menstrual_period')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-2 mt-3">
                                <span>Family Planning Used</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="family_planning_use" id="family_planning_use">
                                        <option selected>{{ $womens->family_planning_use }}</option>
                                        <option value="yes" name="family_planning_use">Yes</option>
                                        <option value="no" name="family_planning_use">No</option>
                                        <option value="not applicable" name="family_planning_use">Not Apllicable</option>
                                    </select></p>
                                @error('family_planning_use')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-2 mt-3">
                                <span>Human Papillomavirus Vaccines (HPV)</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="hpv_indication" id="hpv_indication">
                                        <option selected>{{$hpv->hpv_indication}}</option>
                                        <option value="yes" name="hpv_indication">Yes</option>
                                        <option value="no" name="hpv_indication">No</option>
                                    </select></p>
                                @error('hpv_indication')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-2 mt-3">
                                <span>HPV When</span>
                                <input type="date" class="form-control" name="hpv_when" id="hpv_when" value="{{$hpv->hpv_when}}">
                                @error('hpv_when')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <h4 class="mt-5">COVID 19 Health Information and Vaccines</h4>
                            <div class="col-md-4 mb-2 mt-3">
                                <span>Covid Plus</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="c_plus_indication" id="c_plus_indication">
                                        <option selected>{{  $covidPlus->c_plus_indication }}</option>
                                        <option value="yes" name="c_plus_indication">Yes</option>
                                        <option value="no" name="c_plus_indication">No</option>
                                    </select>
                                    @error('c_plus_indication')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-4 mb-2 mt-3">
                                <span>When did you got COVID 19?</span>
                                <input type="date" class="form-control" name="c_plus_when" id="c_plus_when" value="{{  $covidPlus->c_plus_when }}">
                                @error('c_plus_when')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2 mt-3">
                                <span>Where did you got the COVID 19?</span>
                                <input type="text" class="form-control" name="c_plus_where" id="c_plus_where"
                                    placeholder="place got the covid 19" value="{{  $covidPlus->c_plus_where }}">
                                @error('c_plus_where')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2 mt-3">
                                <span>Covid Vaccine</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="c_vac_indication" id="c_vac_indication">
                                        <option selected>{{ $covidVac->c_vac_indication}}</option>
                                        <option value="yes" name="c_vac_indication">Yes</option>
                                        <option value="no" name="c_vac_indication">No</option>
                                    </select>
                                    @error('c_vac_indication')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-4 mb-2 mt-3">
                                <span>When did you got COVID 19 Vaccine?</span>
                                <input type="date" class="form-control" name="c_vac_when" id="c_vac_when" value="{{ $covidVac->c_vac_when}}">
                                @error('c_vac_when')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2 mt-3">
                                <span>Where did you got the COVID 19 Vaccine?</span>
                                <input type="text" class="form-control" name="c_vac_where" id="c_vac_where"
                                    placeholder="place got the covid 19 vaccine" value="{{ $covidVac->c_vac_where}}">
                                @error('c_vac_where')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2 mt-3">
                                <span>Covid Booster</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="c_boost_indication" id="c_boost_indication">
                                        <option selected>{{$covidBoost->c_boost_indication}}</option>
                                        <option value="yes" name="c_boost_indication">Yes</option>
                                        <option value="no" name="c_boost_indication">No</option>
                                    </select>
                                    @error('c_boost_indication')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-4 mb-2 mt-3">
                                <span>When did you got COVID 19 Booster?</span>
                                <input type="date" class="form-control" name="c_boost_when" id="c_boost_when" value="{{$covidBoost->c_boost_when}}">
                                @error('c_boost_when')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2 mt-3">
                                <span>Where did you got the COVID 19 Booster?</span>
                                <input type="text" class="form-control" name="c_boost_where" id="c_boost_where"
                                    placeholder="place got the covid 19 booster vaccine"
                                    value="{{$covidBoost->c_boost_where}}">
                                @error('c_boost_where')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <h4 class="mt-5">Measles-Rubella (MR) / Tetanus-Diphtheria (TD) Vaccines</h4>
                            <div class="col-md-3 mb-2 mt-3">
                                <span> Measles-Rubella(MR)</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="mr_indication" id="mr_indication">
                                        <option selected>{{  $mrtd->mr_indication }}</option>
                                        <option value="yes" name="mr_indication">Yes</option>
                                        <option value="no" name="mr_indication">No</option>
                                        <option value="not applicable" name="mr_indication">Not Applicable</option>
                                    </select>
                                    @error('mr_indication')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-3 mb-2 mt-3">
                                <span>Measles and Rubella Date of Vaccine</span>
                                <input type="date" class="form-control" name="mr_when" id="mr_when" value="{{  $mrtd->mr_when }}">
                                @error('mr_when')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-2 mt-3">
                                <span>Tetanus-Diphtheria (TD)</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="td_indication" id="td_indication">
                                        <option selected>{{  $mrtd->td_indication }}</option>
                                        <option value="yes" name="td_indication">Yes</option>
                                        <option value="no" name="td_indication">No</option>
                                        <option value="not applicable" name="td_indication">Not Applicable</option>
                                    </select>
                                    @error('td_indication')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-3 mb-2 mt-3">
                                <span>Tetanus and Diphtheria Date of Vaccine</span>
                                <input type="date" class="form-control" name="td_when" id="td_when" value="{{ $mrtd->td_when }}" >
                                @error('td_when')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <h4 class="mt-5">Dengue Vaccine</h4>
                            <div class="col-md-3 mb-2 mt-3">
                                <span>Dengue</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="dengue_indication" id="dengue_indication">
                                        <option selected>{{$dengue->dengue_indication}}</option>
                                        <option value="yes" name="dengue_indication">Yes</option>
                                        <option value="no" name="dengue_indication">No</option>
                                        <option value="no" name="dengue_indication">No</option>
                                    </select>
                                    @error('dengue_indication')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-md-3 mb-2 mt-3">
                                <span>When did you got a dengue vaccine?</span>
                                <input type="date" class="form-control" name="dengue_when" id="dengue_when" value="{{ $dengue->dengue_when }}">
                                @error('dengue_when')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-2 mt-3">
                                <span>Expanded Program on Immunization (EPI) Card (for 0-5 y.o)</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="epi_indication" id="epi_indication">
                                        <option selected>{{ $epiCard->epi_indication}}</option>
                                        <option value="yes" name="epi_indication">Yes</option>
                                        <option value="no" name="epi_indication">No</option>
                                        <option value="not applicable" name="epi_indication">Not Applicable</option>
                                    </select>
                                    @error('epi_indication')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <h3 class="mt-5"><b>Facility Structure</b></h3>
                            <div class="col-md-4 mb-2 mt-2">
                                <span>Type of Water Source</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="type_of_water_source" id="type_of_water_source">
                                        <option selected>{{ $facility->type_of_water_source }}</option>
                                        <option value="Level I (Point Source)" name="type_of_water_source">Level I (Point
                                            Source)</option>
                                        <option value="Level II (Communal Faucet)" name="type_of_water_source">Level II
                                            (Communal Faucet)</option>
                                        <option value="Level III (Individual Connection)" name="type_of_water_source">
                                            Level III (Individual Connection</option>
                                        <option value="Others (For Doubtful Sources,open dug, well, etc.)"
                                            name="type_of_water_source">Others (For Doubtful
                                            Sources,open dug, well, etc.)</option>
                                    </select></p>
                                @error('type_of_water_source')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2 mt-2">
                                <span>Type of Toilet Facility</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="type_of_toilet_facility" id="type_of_toilet_facility">
                                        <option selected>{{$facility->type_of_toilet_facility}}</option>
                                        <option value="A" name="type_of_toilet_facility">A. Pour/Flush type connected
                                            to septic tank</option>
                                        <option value="B" name="type_of_toilet_facility">B. Pour/Flush connected to
                                            septic tank and sewerage system</option>
                                        <option value="C" name="type_of_toilet_facility">C. Ventilated Pit (VIP)
                                            Latrine</option>
                                        <option value="D" name="type_of_toilet_facility">D. Water-Sealed Toilet
                                        </option>
                                        <option value="E" name="type_of_toilet_facility">E. Over Hung Lantrine
                                        </option>
                                        <option value="F" name="type_of_toilet_facility">F. Open Pit Lantrine
                                        </option>
                                        <option value="G" name="type_of_toilet_facility">G. Without Toilet</option>
                                    </select></p>
                                @error('type_of_toilet_facility')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2 mt-2">
                                <span>Type of Waste Management</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="type_of_waste_management" id="type_of_waste_management">
                                        <option selected>{{$facility->type_of_waste_management}}</option>
                                        <option value="A" name="type_of_waste_management">A. Waste Segration</option>
                                        <option value="B" name="type_of_waste_management">B. Backyard Composting
                                        </option>
                                        <option value="C" name="type_of_waste_management">C. Recycling/ReUse</option>
                                        <option value="D" name="type_of_waste_management">D. Collected by
                                            City/Municipality Collection and Disposal System
                                        </option>
                                        <option value="E" name="type_of_waste_management">E. Others (Burning /
                                            Burying)</option>
                                    </select></p>
                                @error('type_of_waste_management')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-2 mt-2">
                                <span>Backyard Gardening</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="gardening_indication" id="gardening_indication">
                                        <option selected>{{ $backyard->gardening_indication }}</option>
                                        <option value="yes" name="gardening_indication">Yes</option>
                                        <option value="no" name="gardening_indication">No</option>
                                    </select></p>
                                @error('gardening_indication')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-9 mb-2">
                                <span>Type of Vegetables Planted</span>
                                <input type="text" class="form-control" name="type_of_vegetables"
                                    id="type_of_vegetables" placeholder="vegetables planted"
                                    value="{{ $backyard->type_of_vegetables }}">
                                @error('type_of_vegetables')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <h3 class="mt-6"><b>Pets / Animals</b></h3>
                            <div class="col-md-5 mb-2 mt-3">
                                <span>Type of Pets/Animals</span>
                                <input type="text" class="form-control" name="type" id="type" value="{{  $pets->type }}">
                                @error('type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2 mt-3">
                                <span>Number Pets/Animals</span>
                                <input type="number" class="form-control" name="number" id="number" value="{{  $pets->number }}">
                                @error('number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2 mt-3">
                                <span>Number of Male Pets/Animals</span>
                                <input type="number" class="form-control" name="male" id="male" value="{{  $pets->male }}">
                                @error('male')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2 mt-3">
                                <span>Number of female Pets/Animals</span>
                                <input type="number" class="form-control" name="female" id="female" value="{{  $pets->female }}">
                                @error('female')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-9 mb-2 mt-2">
                                <span>Vaccinated</span>
                                <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                        name="vaccinated" id="vaccinated">
                                        <option disabled selected>{{ $pets->vaccinated }}</option>
                                        <option value="yes" name="vaccinated">Yes, all the pets and animals</option>
                                        <option value="some" name="vaccinated">Some, of my pets and animals</option>
                                        <option value="no" name="vaccinated">None of my pets and animals</option>
                                        <option value="prefer not to say" name="vaccinated">Prefer not to say</option>
                                    </select></p>
                                @error('vaccinated')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                </div>



                <div class="">
                    <div class="col-md-2 offset-md-9 d-flex">
                        <button type="submit" class="btn btn-success btn-lg ms-auto px-5">Save</button>
                    </div>
                    <div class="col-md-1 d-flex">
                        <a href="{{ route('residents.index') }}" id="cancel" name="cancel"
                                class="btn btn-danger btn-lg ">Cancel</a>
                    </div>
                </div>




            </div>
        </div>


        </form>
    </div>
    </div>
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
