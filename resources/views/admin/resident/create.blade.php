@extends('layouts.admin')

@section('title', 'BarangayCases')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="">Barangay Cases Page</h3>
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

            <h1>Registration Form:</h1>
            <!-- One "tab" for each step in the form: -->
            <div class="tab">
                <h4>Resident's Information Form:</h4>
                <div class="form-row mt-2">
                    <div class="col-md-3 mb-2">
                        <span>Lastname</span>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="lastname"
                            value="{{ old('lastname') }}">
                        @error('lastname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2">
                        <span>Firstname</span>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="firstname"
                            value="{{ old('firstname') }}">
                        @error('firstname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2">
                        <span>Middlename</span>
                        <input type="text" class="form-control" name="middlename" id="middlename"
                            placeholder="middlename" value="{{ old('middlename') }}">
                        @error('middlename')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <span>Suffix</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="suffix">
                                <option disabled selected>--Suffix--</option>
                                <option value="Sr.">Sr.</option>
                                <option value="Jr.">Jr.</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                <option value="None">None</option>
                            </select>
                            @error('suffix')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>Relationship to HH Head</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="relationship">
                                <option disabled selected>--Select Relationship--</option>
                                <option value="Head">Head</option>
                                <option value="Spouse">Spouse</option>
                                <option value="Son">Son</option>
                                <option value="Daughter">Daughter</option>
                                <option value="Others">Others</option>
                            </select>
                            @error('relationship')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>Sex</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="sex">
                                <option disabled selected>--Select Sex--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
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
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="civil_status">
                                <option disabled selected>--Select Civil Status--</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="widowed">Widowed</option>
                                <option value="live in">Live in</option>
                            </select>
                            @error('civil_status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Membership Type</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="membership_type">
                                <option disabled selected>--Select Membership Type--</option>
                                <option value="member">Member</option>
                                <option value="dependent">Dependent</option>
                            </select>
                            @error('memebership_type')
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
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="purok">
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
                        <span>Type of community group</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="group_community">
                                <option disabled selected>--Type of Group Community--</option>
                                <option value="none">None</option>
                                <option value="women">Womens</option>
                                <option value="Senior citizens">Senior Citizens</option>
                                <option value="youth">Youth</option>
                                <option value="pwd/s">PWD's</option>
                            </select></p>
                        @error('registered_voter')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Classification By Age</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg"
                                name="classification_by_age">
                                <option disabled selected>--classification by age--</option>
                                <option value="none">None</option>
                                <option value="Newborn">Newborn</option>
                                <option value="Senior citizens">Senior Citizens</option>
                                <option value="Adolescent">Adolescent</option>
                                <option value="Adult (20-59 yrs old)">Adult (20-59 yrs old</option>
                                <option value="15-49 y.o., not pregnant & non-PP">15-49 y.o., not pregnant & non-PP</option>
                                <option value="Pregnant">Pregnant</option>
                                <option value="Adolescent Pregnant">Adolescent Pregnant</option>
                                <option value="Post Partum">Post Partum</option>
                                <option value="Infant (29 days - 11 month old)">Infant (29 days - 11 month old</option>
                                <option value="Under 5 (0-59 months)">Under 5 (0-59 months</option>
                                <option value="PWD">PWD</option>
                            </select></p>
                        @error('classification_by_age')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-2 mt-3">
                        <span>Remarks</span>
                        <textarea rows="5" class="form-control" name="remark" id="remark"></textarea>
                        @error('remark')
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
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="nhts_4ps">
                                <option disabled selected>--Select--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('sex')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>NHTS Non 4Ps</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="nhts_non_4ps">
                                <option disabled selected>--Select--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('sex')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>Non NHTS</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="non_nhts">
                                <option disabled selected>--Select--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('sex')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>Non IP</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="non_ip">
                                <option disabled selected>--Select--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('sex')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="tab">
                <h4>Resident's Indigency:</h4>
                <div class="form-row mt-2">
                    <div class="col-md-3 mb-2 mt-3">
                        <span>Indigency</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="ip_indication">
                                <option disabled selected>--Select--</option>
                                <option value="yes">Yes</option>
                          <option value="no">No</option>
                            </select>
                            @error('sex')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Tribe</span>
                        <input type="text" class="form-control" name="tribe" id="tribe" placeholder="tribe"
                            value="{{ old('tribe') }}">
                        @error('tribe')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="tab">
                <h4>Resident's Educational Attainment and Occupation:</h4>
                <div class="form-row mt-2">
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Educational Attainment</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="education">
                            <option disabled selected>--Select Eduactional Attainment--</option>
                        <option value="None">None</option>
                        <option value="EL">Elementary Level</option>
                        <option value="EG">Elementary Graduate</option>
                        <option value="JHSL">Junior High School Level</option>
                        <option value="SHSL">Senior High School Level</option>
                        <option value="V">Vocational</option>
                        <option value="CL">College Level</option>
                        <option value="CG">College Graduate</option>
                        <option value="PG">Post Graduate</option>
                    </select></p>
                    @error('education')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Occupation</span>
                        <input type="text" class="form-control" name="occupation" id="occupation" placeholder="occupation"
                            value="{{ old('occupation') }}">
                        @error('occupation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="tab">
                <h4>Resident's Occupancy</h4>
                <div class="form-row mt-2">
                    <div class="col-md-3 mb-2 mt-3">
                        <span>Renter</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="renter">
                                <option disabled selected>--Select--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            @error('sex')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-3">
                        <span>Months</span>
                        <input type="number" class="form-control" name="months" id="months">
                        @error('months')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="tab">
                <h4>Residency Voter Registration :</h4>
                <div class="form-row mt-2">
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Registered voter</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="reg_vot_indication">
                            <option disabled selected>--Registered Voters--</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select></p>
                    @error('registered_voter')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Where</span>
                        <input type="text" class="form-control" name="reg_where" id="where" placeholder="where"
                            value="{{ old('reg_where') }}">
                        @error('reg_where')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

            </div>
            <div class="tab">
                <h4>Joined Community Group Type:</h4>
                <div class="form-row mt-2">
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Community Group Indication</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="com_grp_indication">
                            <option disabled selected>--Select--</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select></p>
                    @error('com_grp_indication')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Type of Community Group</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="com_grp_type">
                            <option disabled selected>--Select--</option>
                        <option value="women">Women</option>
                        <option value="senior citizens">Senir Citizens</option>
                        <option value="youth">Youth</option>
                        <option value="pwd's">Person with Disabilities</option>
                        <option value="none">None</option>
                    </select></p>
                    @error('com_grp_type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
            </div>
            <div class="tab">
                <h4>Resident's Health Information:</h4>
                <div class="form-row mt-2">
                    <div class="col-md-3 mb-2 mt-2">
                        <span>PhilHealth Number</span>
                        <input type="text" class="form-control" name="philhealth_number" id="philhealth_number" placeholder="philhealth_number"
                            value="{{ old('philhealth_number') }}">
                        @error('philhealth_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Medical History</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="medical_history">
                            <option disabled selected>--Select--</option>
                        <option value="HPN">Hypertension</option>
                        <option value="DM">Diabetes</option>
                        <option value="TB">Tuberculosis</option>
                        <option value="S">Surgery</option>
                        <option value="None">None</option>
                    </select></p>
                    @error('medical_history')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Remarks</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="remarks">
                            <option disabled selected>--Select--</option>
                        <option value="Transfer of Residence">Transfer of Residence</option>
                        <option value="SAM">Severe Acute Malnutrition</option>
                        <option value="MAM">Moderate Acute Malnutrition</option>
                        <option value="ST">Stunted</option>
                        <option value="Up">For Updating</option>
                        <option value="None">None</option>
                    </select></p>
                    @error('remarks')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
            </div>
            <div class="tab">
                <h4>Health Information for Personal Social History:</h4>
                <div class="form-row mt-2">
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Smoker</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="smoker">
                            <option disabled selected>--Select--</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select></p>
                    @error('smoker')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Alcohol Beverages Drinker</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="alcohol_beverages_drinker">
                            <option disabled selected>--Select--</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select></p>
                    @error('alcohol_beverages_drinker')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Sexually Active</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="sexually_active">
                            <option disabled selected>--Select--</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select></p>
                    @error('sexually_active')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
            </div>
            <div class="tab">
                <h4>Health Information for Women of Reproductive Age (WRA):</h4>
                <div class="form-row mt-2">
                    <div class="col-md-3 mb-2 mt-3">
                        <span>Last Menstrual Period</span>
                        <input type="date" class="form-control" name="last_menstual_period" id="last_menstual_period">
                        @error('last_menstual_period')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-2 mt-2">
                        <span>Family Planning Used</span>
                        <input type="text" class="form-control" name="family_planning_use" id="family_planning_use" placeholder="occupation"
                            value="{{ old('family_planning_use') }}">
                        @error('family_planning_use')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="tab">
                <h4>Resident's Health Information for COVID 19:</h4>
                <div class="form-row mt-2">
                    <div class="col-md-4 mb-2 mt-2">
                        <span>Covid Plus Indication</span>
                        <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="c_plus_indication">
                            <option disabled selected>--Select--</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select></p>
                    @error('c_plus_indication')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                        <div class="col-md-4 mb-2 mt-3">
                            <span>When</span>
                            <input type="date" class="form-control" name="plus_when" id="when">
                            @error('plus_when')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-2 mt-2">
                            <span>Where</span>
                            <input type="text" class="form-control" name="plus_where" id="where" placeholder="where"
                                value="{{ old('plus_where') }}">
                            @error('plus_where')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <h2>Covid Vaccination</h2>
                        <div class="col-md-4 mb-2 mt-2">
                            <span>Covid Vaccine Indication</span>
                            <p><select class="form-select form-select-lg" aria-label=".form-select-lg" name="c_vac_indication">
                                <option disabled selected>--Select--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select></p>
                        @error('c_vac_indication')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                            <div class="col-md-4 mb-2 mt-3">
                                <span>When</span>
                                <input type="date" class="form-control" name="vac_when" id="when">
                                @error('vac_when')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2 mt-2">
                                <span>Where</span>
                                <input type="text" class="form-control" name="vac_where" id="where" placeholder="where"
                                    value="{{ old('vac_where') }}">
                                @error('vac_where')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                </div>

            </div>

            <div class="tab">
                <h4>Resident's Backyard Gardening:</h4>
                <div class="form-row mt-2">
                </div>
            </div>
            <div class="tab">
                <h4>Resident's Covid Booster:</h4>
                <div class="form-row mt-2">
                </div>
            </div>
            <div class="tab">
                <h4>Resident's Dengue:</h4>
                <div class="form-row mt-2">
                </div>
            </div>
            <div class="tab">
                <h4>Resident's EPI card:</h4>
                <div class="form-row mt-2">
                </div>
            </div>
            <div class="tab">
                <h4>Resident's Facility Structure:</h4>
                <div class="form-row mt-2">
                </div>
            </div>
            <div class="tab">
                <h4>Resident's HPV:</h4>
                <div class="form-row mt-2">
                </div>
            </div>
            <div class="tab">
                <h4>Resident's MR/TD:</h4>
                <div class="form-row mt-2">
                </div>
            </div>
            <div class="tab">
                <h4>Resident's Pets & Animals:</h4>
                <div class="form-row mt-2">
                </div>
            </div>


            <div style="overflow:auto;" class=>
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>

            <div class="p-3 d-flex">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>


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
                fixStepIndicator(n)
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
                // if you have reached the end of the form...
                if (currentTab >= x.length) {
                    // ... the form gets submitted:
                    document.getElementById("regForm").submit();
                    return false;
                }
                // Otherwise, display the correct tab:
                showTab(currentTab);
            }

            function validateForm() {
                // This function deals with validation of the form fields
                var x, y, i, valid = true;
                x = document.getElementsByClassName("tab");
                y = x[currentTab].getElementsByTagName("input");
                // A loop that checks every input field in the current tab:
                for (i = 0; i < y.length; i++) {
                    // If a field is empty...
                    if (y[i].value == "") {
                        // add an "invalid" class to the field:
                        y[i].className += " invalid";
                        // and set the current valid status to false
                        valid = false;
                    }
                }
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
        {{-- <tbody>
                        @foreach ($healthcase as $healthcases)
                            <tr>
                                <td>{{ $healthcases>id }}</td>
                                <td>{{ $healthcases->name }}</td>
                                <td>{{ $healthcases->description }}</td>
                                <td>
                                    <img src="{{ asset('assets/uploads/category/'.$healthcases->image) }}" class="cate-image" alt="Image here">
                                </td>
                                <td>
                                    <a href="{{ url('edit-category/'.$healthcases->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ url('delete-category/'.$healthcases->id) }}" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody> --}}
    </div>

@endsection
