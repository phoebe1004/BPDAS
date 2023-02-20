@extends('layouts.admin')

@section('title', 'Resident')

@section('content')
<style>
    th{
        text-align: left;
    }
</style>

<div class="container bg-info bg-gradient">
    <div class="row">
      <div class="col-md-12">
        <h1>{{ $resident->id }}.
            {{ $resident->lastname }}, {{ $resident->firstname }}, {{ $resident->middlename }}, {{ $resident->suffix }}</h1>
      </div>
    </div>
  </div>
  <div class="container bg-dark bg-gradient">
    <div class="row">
      <div class="col-md-3">
        <h4>Relationship: <b>{{ $resident->relationship }}</b></h4>
      </div>
      <div class="col-md-3">
        <h4>Sex: <b>{{ $resident->sex }}</b></h4>
      </div>
      <div class="col-md-3">
        <h4>Birth Date:<b> {{ $resident->birthdate }}</b></h4>
      </div>
      <div class="col-md-3">
        <h4>Age: <b>{{ $resident->age }}</b></h4>
      </div>
    </div>
  </div>
  <div class="container bg-dark bg-gradient">
    <div class="row">
      <div class="col-md-3">
        <h4>Civil Status: <b>{{ $resident->civil_status }}</b></h4>
      </div>
      <div class="col-md-3">
        <h4>Membership Type: <b>{{ $resident->membership_type }}</b></h4>
      </div>
      <div class="col-md-3">
        <h4>Contact Number:<b> {{ $resident->contact_number }}</b></h4>
      </div>
      <div class="col-md-3">
        <h4>Purok: <b>{{ $resident->purok }}</b></h4>
      </div>
    </div>
  </div>
  <div class="container bg-dark bg-gradient">
    <div class="row">
      <div class="col-md-6">
        <h4>Age Classification: <b>{{ $resident->classification_by_age }}</b></h4>
      </div>
      <div class="col-md-6">
        <h4>Remarks: <b>{{ $resident->remarks }}</b></h4>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3><center><b>Social Economic Status</b></center></h3>
      </div>
    </div>
  </div>
  <div class="container bg-dark bg-gradient">
    <div class="row">
      <div class="col-md-2">
        <h4>NHTS 4Ps: <b>{{ $social->nhts_4ps }}</b></h4>
      </div>
      <div class="col-md-2">
        <h4>NHTS Non-4Ps: <b>{{ $social->nhts_non_4ps }}</b></h4>
      </div>
      <div class="col-md-2">
        <h4>Non-NHTS: <b> {{ $social->non_nhts }}</b></h4>
      </div>
      <div class="col-md-2">
        <h4>Non-IP: <b>{{$social->non_ip }}</b></h4>
      </div>
      <div class="col-md-2">
        <h4>IP Household: <b>{{$indigent->ip_indication }}</b></h4>
      </div>
      <div class="col-md-2">
        <h4>Tribe: <b>{{  $indigent->tribe }}</b></h4>
      </div>
    </div>
  </div>
  <div class="container bg-dark bg-gradient">
    <div class="row">
      <div class="col-md-3">
        <h4>Renter: <b>{{  $typeOccupancy->renter }}</b></h4>
        <h4>Months: <b>{{ $typeOccupancy->months }}</b></h4>
      </div>
      <div class="col-md-3">
        <h4>Joined Community Group: <b>{{  $grpInd->com_grp_indication }}</b></h4>
        <h4>Type of Group: <b>{{ $grpInd->com_grp_type }}</b></h4>
      </div>
      <div class="col-md-6">
        <h4>Voter:<b> {{  $regVoter->reg_vot_indication }}</b></h4>
        <h4>Where:<b> {{   $regVoter->reg_vot_where  }}</b></h4>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3><center><b>Health Information</b></center></h3>
      </div>
    </div>
  </div>
  <div class="container bg-dark bg-gradient">
    <div class="row">
      <div class="col-md-4">
        <h4>PhilHealth Number: <b>{{  $healthInfo->philhealth_number }}</b></h4>
      </div>
      <div class="col-md-4">
        <h4>Medical History: <b>{{ $healthInfo->medical_history }}</b></h4>
      </div>
      <div class="col-md-4">
        <h4>Remarks:<b> {{ $healthInfo->remark }}</b></h4>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3><center><b>Personal Social History</b></center></h3>
      </div>
    </div>
  </div>
  <div class="container bg-dark bg-gradient">
    <div class="row">
      <div class="col-md-4">
        <h4>Smoker: <b>{{  $perSocHis->smoker }}</b></h4>
      </div>
      <div class="col-md-4">
        <h4>Alcohol Drinker: <b>{{ $perSocHis->alcohol_beverages_drinker }}</b></h4>
      </div>
      <div class="col-md-4">
        <h4>Sexually Active:<b> {{ $perSocHis->sexually_active }}</b></h4>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3><center><b>Woman of Reproductive Age</b></center></h3>
      </div>
    </div>
  </div>
  <div class="container bg-dark bg-gradient">
    <div class="row">
      <div class="col-md-6">
        <h4>Last Menstrual Period: <b>{{ $womens->last_menstrual_period }}</b></h4>
      </div>
      <div class="col-md-6">
        <h4>Family Planning Used: <b>{{ $womens->family_planning_use }}</b></h4>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3><center><b>Human papillomavirus (HPV) / Dengue / Expanded Program on Immunization (EPI)</b></center></h3>
      </div>
    </div>
  </div>
  <div class="container bg-dark bg-gradient">
    <div class="row">
      <div class="col-md-4">
        <h4>HPV Vaccine: <b>{{ $hpv->hpv_indication }}</b></h4>
        <h4>When: <b>{{  $hpv->hpv_when }}</b></h4>
      </div>
      <div class="col-md-4">
        <h4>Dengue Vaccine: <b>{{  $dengue->dengue_indication  }}</b></h4>
        <h4>When: <b>{{  $dengue->dengue_when }}</b></h4>
      </div>
      <div class="col-md-4">
        <h4>Registered EPI Card: <b>{{ $hpv->hpv_indication }}</b></h4>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3><center><b>COVID-19 Health Information</b></center></h3>
      </div>
    </div>
  </div>
  <div class="container bg-dark bg-gradient">
    <div class="row">
      <div class="col-md-4">
        <h4>Covid Plus: <b>{{ $covidPlus->c_plus_indication }}</b></h4>
        <h4>When: <b>{{  $covidPlus->c_plus_when }}</b></h4>
        <h4>Where: <b>{{  $covidPlus->c_plus_where }}</b></h4>
      </div>
      <div class="col-md-4">
        <h4>Covid Vaccines: <b>{{  $covidVac->c_vac_indication }}</b></h4>
        <h4>When: <b>{{  $covidVac->c_vac_when }}</b></h4>
        <h4>Where: <b>{{  $covidVac->c_vac_where }}</b></h4>
      </div>
      <div class="col-md-4">
        <h4>Covid Booster: <b>{{  $covidBoost->c_boost_indication }}</b></h4>
        <h4>When: <b>{{  $covidBoost->c_boost_when }}</b></h4>
        <h4>Where: <b>{{ $covidBoost->c_boost_where }}</b></h4>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3><center><b>Measles-Rubella (MR)-Tetanus- Diphtheria(TD)</b></center></h3>
      </div>
    </div>
  </div>
  <div class="container bg-dark bg-gradient">
    <div class="row">
      <div class="col-md-6">
        <h4>Measles-Rubella (MR): <b>{{  $mrtd->mr_indication }}</b></h4>
        <h4>When: <b>{{ $mrtd->mr_when }}</b></h4>
      </div>
      <div class="col-md-6">
        <h4>Tetanus- Diphtheria(TD): <b>{{ $mrtd->td_indication }}</b></h4>
        <h4>When: <b>{{  $mrtd->td_when }}</b></h4>
      </div>
    </div>
  </div>

            <div class="d-grid gap-2 col-3 mx-auto">
                <a href="{{ route('residents.index') }}" id="cancel" name="cancel"
                    class="btn btn-danger btn-md mt-5">Back to homepage</a>
            </div>


@endsection
