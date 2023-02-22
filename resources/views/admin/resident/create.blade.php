@extends('layouts.admin')

@section('title', 'BarangayCases')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="">Resident's Profiling Page</h4>
        </div>

        <style>
            * {
                box-sizing: border-box;
            }

            body {
                background-color: #f1f1f1;
            }

            #regForm {
                background-color: #ffffff;
                margin: 10px auto;
                font-family: Raleway;
                padding: 10px;
                width: 80%;
                min-width: 100px;
            }

            h1 {
                text-align: center;
            }

            input {
                padding: 10px;
                width: 100%;
                font-size: 17px;
                font-family: Raleway;
                border: 1px solid #aaaaaa;
            }

            /* Mark input boxes that gets an error on validation: */
            input.invalid {
                background-color: #ffdddd;
            }

            /* Hide all steps by default: */
            .tab {
                display: none;
            }

            button {
                background-color: #04AA6D;
                color: #ffffff;
                border: none;
                padding: 10px 20px;
                font-size: 17px;
                font-family: Raleway;
                cursor: pointer;
            }

            button:hover {
                opacity: 0.8;
            }

            #prevBtn {
                background-color: #bbbbbb;
            }

            /* Make circles that indicate the steps of the form: */
            .step {
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbbbbb;
                border: none;
                border-radius: 50%;
                display: inline-block;
                opacity: 0.5;
            }

            .step.active {
                opacity: 1;
            }

            /* Mark the steps that are finished and valid: */
            .step.finish {
                background-color: #04AA6D;
            }
        </style>

        <form action="{{ route('residents.store') }}" method="post" id="regForm" class="needs-validation" novalidate>
            @csrf
            @method('post')
            <h1>Registration Form:</h1>
            <!-- One "tab" for each step in the form: -->
            <div class="tab">
                <h4>Resident's Information Form:</h4>
                <div class="form-row mt-2">
                    <div class="col-md-3 mb-2">
                        <span>Lastname</span>
                        <input oninput="validateInformation()" type="text" class="form-control" name="lastname" id="lastname" placeholder="lastname"
                            value="{{ old('lastname') }}">
                        @error('lastname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2">
                        <span>Firstname</span>
                        <input oninput="validateInformation()" type="text" class="form-control" name="firstname" id="firstname" placeholder="firstname"
                            value="{{ old('firstname') }}">
                        @error('firstname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2">
                        <span>Middlename</span>
                        <input oninput="validateInformation()" type="text" class="form-control" name="middlename" id="middlename"
                            placeholder="middlename" value="{{ old('middlename') }}">
                        @error('middlename')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <span>Suffix</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="suffix" id="suffix">
                                <option disabled selected>--Suffix--</option>
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
                    <div class="col-md-3 mb-2 mt-3">
                        <span>Relationship to HH Head</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="relationship" id="relationship">
                                <option disabled selected>--Select Relationship--</option>
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
                    <div class="col-md-3 mb-2 mt-3">
                        <span>Sex</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="sex" id="sex">
                                <option disabled selected>--Select Sex--</option>
                                <option value="Male" name="sex">Male</option>
                                <option value="Female" name="sex">Female</option>
                            </select>
                            @error('sex')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>Birthday</span>
                        <input type="date" class="form-control" name="birthdate" id="birthdate">
                        @error('birthdate')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>Civil Status</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="civil_status" id="civil_status">
                                <option disabled selected>--Select Civil Status--</option>
                                <option value="single" name="civil_status">Single</option>
                                <option value="married" name="civil_status">Married</option>
                                <option value="widowed" name="civil_status">Widowed</option>
                                <option value="live in" name="civil_status">Live in</option>
                                <option value="separated" name="civil_status">Separated</option>
                            </select>
                            @error('civil_status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Membership Type</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="membership_type" id="membership_type">
                                <option disabled selected>--Select Membership Type--</option>
                                <option value="member" name="membership_type">Member</option>
                                <option value="dependent" name="membership_type">Dependent</option>
                            </select>
                            @error('membership_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="col-md-3 mb-2 mt-2">
                        <span>Contact Number</span>
                        <input type="number" class="form-control" name="contact_number" id="contact_number"
                            placeholder="contact number" value="{{ old('contact_number') }}">
                        @error('contact_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-3 mb-2 mt-2">
                        <span>Purok</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="purok" id="purok">
                                <option disabled selected>--Select Purok--</option>
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
                                <option value="CHS Purok (14 B36-B46)" name="purok">CHS Purok (14 B36-B46)</option>
                                <option value="Country Homes Sagingan" name="purok">Country Homes Sagingan</option>
                                <option value="CHS #16 B56-62" name="purok">CHS #16 B56-62</option>
                                <option value="Country Ville Village" name="purok">Country Ville Village</option>
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
                                <option value="Deca Homes Phase 2-B (B2 33-41)" name="purok">Deca Homes Phase 2-B
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
                                <option value="Purok 39 Daitic Compound" name="purok">Purok 39 Daitic Compound
                                </option>
                                <option value="Ramonena 2" name="purok">Ramonena 2</option>
                                <option value="Remedios Eights" name="purok">Remedios Eights</option>
                                <option value="Sialza Compound" name="purok">Sialza Compound</option>
                                <option value="Sta. Teresita Purok 1" name="purok">Sta. Teresita Purok 1</option>
                                <option value="Suraya Cab Elem. School" name="purok">Suraya Cab Elem. School
                                </option>
                                <option value="Suraya Homes Phase 1" name="purok">Suraya Homes Phase 1</option>
                                <option value="Suraya Homes Phase 2A" name="purok">Suraya Homes Phase 2A</option>
                                <option value="Suraya Homes Phase 2B" name="purok">Suraya Homes Phase 2B</option>
                                <option value="The Harmony Subdivision" name="purok">The Harmony Subdivision
                                </option>
                                <option value="Villa Park Subdivision" name="purok">Villa Park Subdivision</option>
                            </select></p>

                        @error('purok')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-3 mb-2 mt-2">
                        <span>Classification By Age</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="classification_by_age" id="classification_by_age">
                                <option disabled selected>--classification by age--</option>
                                <option value="none" name="classification_by_age">None</option>
                                <option value="Newborn" name="classification_by_age">Newborn</option>
                                <option value="Senior citizens" name="classification_by_age">Senior Citizens</option>
                                <option value="Adolescent" name="classification_by_age">Adolescent</option>
                                <option value="Adult (20-59 yrs old)" name="classification_by_age">Adult (20-59 yrs old
                                </option>
                                <option value="15-49 y.o., not pregnant & non-PP" name="classification_by_age">15-49 y.o.,
                                    not pregnant & non-PP</option>
                                <option value="Pregnant" name="classification_by_age">Pregnant</option>
                                <option value="Adolescent Pregnant" name="classification_by_age">Adolescent Pregnant
                                </option>
                                <option value="Post Partum" name="classification_by_age">Post Partum</option>
                                <option value="Infant (29 days - 11 month old)" name="classification_by_age">Infant (29
                                    days - 11 month old</option>
                                <option value="Under 5 (0-59 months)" name="classification_by_age">Under 5 (0-59 months
                                </option>
                                <option value="PWD" name="classification_by_age">PWD</option>
                            </select></p>
                        @error('classification_by_age')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-2 mt-3">
                        <span>Remarks</span>
                        <input rows="5" class="form-control" name="remarks" id="remarks">
                        @error('remarks')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="tab">
                <h4>Resident's Social Economic Status:</h4>
                <div class="form-row mt-2">
                    <div class="col-md-3 mb-2 mt-3">
                        <span>NHTS 4Ps</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="nhts_4ps" id="nhts_4ps">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="nhts_4ps">Yes</option>
                                <option value="no" name="nhts_4ps">No</option>
                            </select>
                            @error('nhts_4ps')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>NHTS Non 4Ps</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="nhts_non_4ps" id="nhts_non_4ps">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="nhts_non_4ps">Yes</option>
                                <option value="no" name="nhts_non_4ps">No</option>
                            </select>
                            @error('nhts_non_4ps')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>Non NHTS</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="non_nhts" id="non_nhts">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="non_nhts">Yes</option>
                                <option value="no" name="non_nhts">No</option>
                            </select>
                            @error('non_nhts')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>Non IP</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="non_ip" id="non_ip">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="non_ip">Yes</option>
                                <option value="no" name="non_ip">No</option>
                            </select>
                            @error('non_ip')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-6 mt-3">
                        <span>IP Indication</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="ip_indication" id="ip_indication">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="ip_indication">Yes</option>
                                <option value="no" name="ip_indication">No</option>
                            </select>
                            @error('ip_indication')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-6 mt-3">
                        <span>Tribe</span>
                        <input type="text" class="form-control" name="tribe" id="tribe" placeholder="tribe"
                            value="{{ old('tribe') }}">
                        @error('tribe')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-3">
                        <span>Educational Attainment</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="education" id="education">
                                <option disabled selected>--Select Eduactional Attainment--</option>
                                <option value="None" name="education">None</option>
                                <option value="EL" name="education">Elementary Level</option>
                                <option value="EG" name="education">Elementary Graduate</option>
                                <option value="JHSL" name="education">Junior High School Level</option>
                                <option value="SHSL" name="education">Senior High School Level</option>
                                <option value="V" name="education">Vocational</option>
                                <option value="CL" name="education">College Level</option>
                                <option value="CG" name="education">College Graduate</option>
                                <option value="PG" name="education">Post Graduate</option>
                            </select></p>
                        @error('education')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-3">
                        <span>Occupation</span>
                        <input type="text" class="form-control" name="occupation" id="occupation"
                            placeholder="occupation" value="{{ old('occupation') }}">
                        @error('occupation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="tab">
                <h4 class="mt-5">Type 0f Occupancy / Joined Community Group / Voters Registration</h4>
                <div class="form-row mt-2">
                    <div class="col-md-6 mt-3">
                        <span>Type of Occupancy (Renter)</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="renter" id="renter">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="renter">Yes</option>
                                <option value="no" name="renter">No</option>
                            </select>
                            @error('renter')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-6  mt-3">
                        <span>Number of Months</span>
                        <input type="number" class="form-control" name="months" id="months" placeholder="months"
                            value="{{ old('months') }}">
                        @error('months')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4 mt-3">
                        <span>Registered Voter</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="reg_vot_indication" id="reg_vot_indication">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="reg_vot_indication">Yes</option>
                                <option value="no" name="reg_vot_indication">No</option>
                            </select>
                            @error('reg_vot_indication')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-8 mt-3">
                        <span>Where</span>
                        <input type="text" class="form-control" name="reg_vot_where" id="reg_vot_where"
                            placeholder="reg_vot_where" value="{{ old('reg_vot_where') }}">
                        @error('reg_vot_where')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-2 mt-3">
                        <span>Community Group</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="com_grp_indication" id="com_grp_indication">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="com_grp_indication">Yes</option>
                                <option value="no" name="com_grp_indication">No</option>
                            </select>
                            @error('com_grp_indication')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mt-3">
                        <span>Type of Community Group</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="com_grp_type" id="com_grp_type">
                                <option disabled selected>--Select--</option>
                                <option value="none" name="com_grp_type">None</option>
                                <option value="women" name="com_grp_type">Women</option>
                                <option value="senior citizens" name="com_grp_type">Senior Citizens</option>
                                <option value="youth" name="com_grp_type">Youth</option>
                                <option value="pwd's" name="com_grp_type">PWD's</option>
                            </select>
                            @error('com_grp_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
            </div>

            <div class="tab">
                <h1><b>Resident's Health Information:</b></h1>
                <div class="form-row mt-2">
                    <div class="col-md-4 mb-2 mt-2">
                        <span>PhilHealth Number</span>
                        <input type="text" class="form-control" name="philhealth_number" id="philhealth_number"
                            placeholder="philhealth number" value="{{ old('philhealth_number') }}">
                        @error('philhealth_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-2 mt-2">
                        <span>Medical History</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="medical_history" id="medical_history">
                                <option disabled selected>--Select--</option>
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
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="remark" id="remark">
                                <option disabled selected>--Select--</option>
                                <option value="Transfer of Residence" name="remark">Transfer of Residence</option>
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
                    <div class="col-md-4 mb-2 mt-2">
                        <span>Smoker</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="smoker" id="smoker">
                                <option disabled selected>--Select--</option>
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
                                <option disabled selected>--Select--</option>
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
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="sexually_active">Yes</option>
                                <option value="no" name="sexually_active">No</option>
                            </select></p>
                        @error('sexually_active')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2 mt-3">
                        <span>Last Menstrual Period (Leave input if Male)</span>
                        <input type="date" class="form-control" name="last_menstrual_period"
                            id="last_menstrual_period">
                        @error('last_menstrual_period')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2 mt-3">
                        <span>Family Planning Used</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="family_planning_use" id="family_planning_use">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="family_planning_use">Yes</option>
                                <option value="no" name="family_planning_use">No</option>
                                <option value="Not Applicable" name="family_planning_use">Not Applicable</option>
                            </select></p>
                        @error('family_planning_use')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2 mt-3">
                        <span>Human Papillomavirus Vaccines (HPV)</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="hpv_indication" id="hpv_indication">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="hpv_indication">Yes</option>
                                <option value="no" name="hpv_indication">No</option>
                            </select></p>
                        @error('hpv_indication')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-2 mt-3">
                        <span>HPV When (Leave Input for Male)</span>
                        <input type="date" class="form-control" name="hpv_when" id="hpv_when">
                        @error('hpv_when')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="tab">
                <h4>Health Information</h4>
                <div class="form-row mt-2">
                    <div class="col-md-4 mb-2 mt-3">
                        <span>Covid Plus</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="c_plus_indication" id="c_plus_indication">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="c_plus_indication">Yes</option>
                                <option value="no" name="c_plus_indication">No</option>
                            </select>
                            @error('c_plus_indication')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>When did you got COVID 19?</span>
                        <input type="date" class="form-control" name="c_plus_when" id="c_plus_when">
                        @error('c_plus_when')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-5 mb-2 mt-3">
                        <span>Where did you got the COVID 19?</span>
                        <input type="text" class="form-control" name="c_plus_where" id="c_plus_where"
                            placeholder="place got the covid 19" value="{{ old('c_plus_where') }}">
                        @error('c_plus_where')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-2 mt-3">
                        <span>Covid Vaccine</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="c_vac_indication" id="c_vac_indication">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="c_vac_indication">Yes</option>
                                <option value="no" name="c_vac_indication">No</option>
                            </select>
                            @error('c_vac_indication')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>When did you got COVID 19 Vaccine?</span>
                        <input type="date" class="form-control" name="c_vac_when" id="c_vac_when">
                        @error('c_vac_when')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-5 mb-2 mt-3">
                        <span>Where did you got the COVID 19 Vaccine?</span>
                        <input type="text" class="form-control" name="c_vac_where" id="c_vac_where"
                            placeholder="place got the covid 19 vaccine" value="{{ old('c_vac_where') }}">
                        @error('c_vac_where')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-2 mt-3">
                        <span>Covid Booster</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="c_boost_indication" id="c_boost_indication">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="c_boost_indication">Yes</option>
                                <option value="no" name="c_boost_indication">No</option>
                            </select>
                            @error('c_boost_indication')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>When did you got COVID 19 Booster?</span>
                        <input type="date" class="form-control" name="c_boost_when" id="c_boost_when">
                        @error('c_boost_when')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-5 mb-2 mt-3">
                        <span>Where did you got the COVID 19 Booster?</span>
                        <input type="text" class="form-control" name="c_boost_where" id="c_boost_where"
                            placeholder="place got the covid 19 booster vaccine" value="{{ old('c_boost_where') }}">
                        @error('c_boost_where')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span> Measles-Rubella(MR)</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="mr_indication" id="mr_indication">
                                <option disabled selected>--Select--</option>
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
                        <input type="date" class="form-control" name="mr_when" id="mr_when">
                        @error('mr_when')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-2 mb-2 mt-3">
                        <span>Tetanus-Diphtheria (TD)</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="td_indication" id="td_indication">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="td_indication">Yes</option>
                                <option value="no" name="td_indication">No</option>
                                <option value="not applicable" name="td_indication">Not Applicable</option>
                            </select>
                            @error('td_indication')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-4 mb-2 mt-3">
                        <span>Tetanus and Diphtheria Date of Vaccine</span>
                        <input type="date" class="form-control" name="td_when" id="td_when">
                        @error('td_when')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>Dengue</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="dengue_indication" id="dengue_indication">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="dengue_indication">Yes</option>
                                <option value="no" name="dengue_indication">No</option>
                            </select>
                            @error('dengue_indication')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>When did you got a dengue vaccine?</span>
                        <input type="date" class="form-control" name="dengue_when" id="dengue_when">
                        @error('dengue_when')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-5 mb-2 mt-3">
                        <span>Expanded Program on Immunization (EPI) Card (for 0-5 y.o)</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="epi_indication" id="epi_indication">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="epi_indication">Yes</option>
                                <option value="no" name="epi_indication">No</option>
                                <option value="not applicable" name="epi_indication">Not Applicable</option>
                            </select>
                            @error('epi_indication')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
            </div>

            <div class="tab">
                <h4>Facility Stucture :</h4>
                <div class="form-row mt-2">
                    <div class="col-md-4 mb-2 mt-2">
                        <span>Type of Water Source</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="type_of_water_source" id="type_of_water_source">
                                <option disabled selected>--Select--</option>
                                <option value="Level I (Point Source)" name="type_of_water_source">Level I (Point Source)</option>
                                <option value="Level II (Communal Faucet)" name="type_of_water_source">Level II (Communal Faucet)</option>
                                <option value="Level III (Individual Connection)" name="type_of_water_source">Level III (Individual Connection</option>
                                <option value="Others (For Doubtful Sources,open dug, well, etc.)" name="type_of_water_source">Others (For Doubtful
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
                                <option disabled selected>--Select--</option>
                                <option value="A. Pour/Flush type connected to septic tank" name="type_of_toilet_facility">A. Pour/Flush type connected to septic tank</option>
                                <option value="B. Pour/Flush connected to septic tank and sewerage system" name="type_of_toilet_facility">B. Pour/Flush connected to septic tank and sewerage system</option>
                                <option value="C. Ventilated Pit (VIP) Latrine" name="type_of_toilet_facility">C. Ventilated Pit (VIP) Latrine</option>
                                <option value="D. Water-Sealed Toilet" name="type_of_toilet_facility">D. Water-Sealed Toilet</option>
                                <option value="E. Over Hung Lantrine" name="type_of_toilet_facility">E. Over Hung Lantrine</option>
                                <option value="F. Open Pit Lantrine" name="type_of_toilet_facility">F. Open Pit Lantrine</option>
                                <option value="G. Without Toilet" name="type_of_toilet_facility">G. Without Toilet</option>
                            </select></p>
                        @error('type_of_toilet_facility')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-2 mt-2">
                        <span>Type of Waste Management</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="type_of_waste_management" id="type_of_waste_management">
                                <option disabled selected>--Select--</option>
                                <option value="A. Waste Segration" name="type_of_waste_management">A. Waste Segration</option>
                                <option value="B. Backyard Composting" name="type_of_waste_management">B. Backyard Composting</option>
                                <option value="C. Recycling/ReUse" name="type_of_waste_management">C. Recycling/ReUse</option>
                                <option value="D. Collected by City/Municipality Collection and Disposal System" name="type_of_waste_management">D. Collected by City/Municipality Collection and Disposal System
                                </option>
                                <option value="E. Others (Burning / Burying)" name="type_of_waste_management">E. Others (Burning / Burying)</option>
                            </select></p>
                        @error('type_of_waste_management')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Backyard Gardening</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="gardening_indication" id="gardening_indication">
                                <option disabled selected>--Select--</option>
                                <option value="yes" name="gardening_indication">Yes</option>
                                <option value="no" name="gardening_indication">No</option>
                            </select></p>
                        @error('gardening_indication')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-9 mb-2">
                        <span>Type of Vegetables Planted</span>
                        <input type="text" class="form-control" name="type_of_vegetables" id="type_of_vegetables"
                            placeholder="vegetables planted" value="{{ old('type_of_vegetables') }}">
                        @error('type_of_vegetables')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="tab">
                <h4>Pets Animals Form</h4>
                <div class="form-row mt-2">
                    <div class="col-md-6 mb-2">
                        <span>Type of pets/animals: </span>
                        <input type="text" class="form-control" name="type" id="type"
                            placeholder="type of pets/animals" value="{{ old('type') }}">
                        @error('type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                        <div class="col-md-6 mb-2">
                            <span>Number of pets/animals: </span>
                            <input type="number" class="form-control" name="number" id="number"
                                placeholder="number of pets/animals" value="{{ old('number') }}">
                            @error('number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <span>Number of male pets/animals: </span>
                            <input type="number" class="form-control" name="male" id="male"
                                placeholder="number of male" value="{{ old('male') }}">
                            @error('male')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <span>Number of female pets/animals: </span>
                            <input type="number" class="form-control" name="female" id="female"
                                placeholder="number of female" value="{{ old('female') }}">
                            @error('female')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    <div class="col-md-9 mb-2 mt-2">
                        <span>Vaccinated</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="vaccinated" id="vaccinated">
                                <option disabled selected>--Select--</option>
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

                <div class="p-3 d-flex">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

            {{-- <div class="tab">
                <h4>Resident's Pets & Animals:</h4>
                <div class="form-row mt-2">
                </div>
            </div> --}}


            <div style="overflow:auto;" class=>
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)" disabled>Next</button>
                    <a style="color: red; display: none;" id="error-msg">information exist</a>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>



        <script>
            var currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab

            function showTab(n) {
                // This function will display the specified tab of the form...
                var x = document.getElementsByClassName("tab");
                x[n].style.display = "block";
                //... and fix the Previous/Next buttons:
                if (n == 0) {
                    document.getElementById("prevBtn").style.display = "none";
                } else {
                    document.getElementById("prevBtn").style.display = "inline";
                }
                if (n == (x.length - 1)) {
                    document.getElementById("ne xtBtn").innerHTML = "Submit";
                } else {
                    document.getElementById("nextBtn").innerHTML = "Next";
                }
                //... and run a function that will display the correct step indicator:

            }

            function nextPrev(n) {

                // This function will figure out which tab to display
                var x = document.getElementsByClassName("tab");
                // Exit the function if any field in the current tab is invalid:
                if (n == 1 && !validateForm()) return false;
                // Hide the current tab:
                x[currentTab].style.display = "none";
                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
                validateTab();
                // if you have reached the end of the form...
                if (currentTab >= x.length) {
                    // ... the form gets submitted:
                    document.getElementById("regForm").submit();
                    return false;
                }
                // Otherwise, display the correct tab:
                showTab(currentTab);
            }

            function validateTab() {
                if (currentTab == 6) {
                    document.getElementById('nextBtn').style = 'display: none;';
                } else {
                    document.getElementById('nextBtn').style = 'display: inline;';
                }
            }

            function validateForm() {
                // This function deals with validation of the form fields
                var x, y, i, valid = true;
                x = document.getElementsByClassName("tab");
                y = x[currentTab].getElementsByTagName("input");
                // A loop that checks every input field in the current tab:
                // for (i = 0; i < y.length; i++) {
                //     // If a field is empty...
                //     if (y[i].value == "") {
                //         // add an "invalid" class to the field:
                //         y[i].className += " invalid";
                //         // and set the current valid status to false
                //         valid = false;
                //     }
                // }
                // If the valid status is true, mark the step as finished and valid:
                if (valid) {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
                return valid; // return the valid status
            }

            function fixStepIndicator(n) {
                // This function removes the "active" class of all steps...
                var i, x = document.getElementsByClassName("step");
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(" active", "");
                }
                //... and adds the "active" class on the current step:
                x[n].className += " active";
            }
        </script>

        <script>
            var residents = <?php echo $resident ?>;
            var ids = new Set();

            for (var i = 0; i < residents.length; i++) {
                var id = residents[i].firstname + '@' + residents[i].middlename + '@' + residents[i].lastname;

                ids.add(id);
            }

            function validateInformation() {
                let firstname = document.getElementById('firstname').value;
                let lastname = document.getElementById('lastname').value;
                let middlename = document.getElementById('middlename').value;
                let id = firstname + '@' + middlename + '@' + lastname;

                if (ids.has(id)) {
                    document.getElementById('nextBtn').disabled = true;
                    document.getElementById('error-msg').style = 'color: red; display: block';
                } else {
                    document.getElementById('nextBtn').disabled = false;
                    document.getElementById('error-msg').style = 'color: red; display: none';
                }
            }

        </script>
</form>
    </div>

@endsection
