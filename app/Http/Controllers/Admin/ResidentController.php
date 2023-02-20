<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;

use App\Models\Resident;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\ResidentImport;
use App\Models\BackyardGardening;
use App\Models\CommunityGroup;
use App\Models\CovidBooster;
use App\Models\CovidPlus;
use App\Models\CovidVaccine;
use App\Models\Dengue;
use App\Models\EducOccupation;
use App\Models\EpiCard;
use App\Models\FacilityStructure;
use App\Models\HealthInformation;
use App\Models\Hpv;
use App\Models\IndigentPerson;
use App\Models\MrTd;
use App\Models\PersonalSocialHistory;
use App\Models\PetsAnimals;
use App\Models\RegisteredVoter;
use App\Models\SocialEconomicStatus;
use App\Models\TypeOfOccupancy;
use App\Models\WomensReproductiveAge;
use Excel;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $resident = Resident::where('completed', 0)->get();
        $resident = Resident::all();
        return view('admin.resident.index')->with("resident", $resident);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resident.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            "lastname" => 'required',
            "firstname" => 'required',
            "middlename" => 'required',
            "suffix" => 'required',
            "relationship" => 'required',
            "sex" => 'required',
            "birthdate" => 'required',
            "civil_status" => 'required',
            "membership_type" => 'required',
            "contact_number" => 'required',
            "purok" => 'required',
            "classification_by_age" => 'required',
            "remarks" => 'required',
            "nhts_4ps" => 'required',
            "nhts_non_4ps" => 'required',
            "non_nhts" => 'required',
            "non_ip" => 'required',
            "ip_indication" => 'required',
            "tribe" => 'required',
            "education" => 'required',
            "occupation" => 'required',
            "renter" => 'required',
            // "months" => 'required',
            "reg_vot_indication" => 'required',
            // "reg_vot_where" => 'required',
            "com_grp_indication" => 'required',
            "com_grp_type" => 'required',
            // "philhealth_number" => 'required',
            "medical_history" => 'required',
            "remark" => 'required',
            "smoker" => 'required',
            "alcohol_beverages_drinker" => 'required',
            "sexually_active" => 'required',
            // "last_menstrual_period" => 'required',
            // "family_planning_use" => 'required',
            "hpv_indication" => 'required',
            // "hpv_when" => 'required',
            "c_plus_indication" => 'required',
            // "c_plus_when" => 'required',
            // "c_plus_where" => 'required',
            "c_vac_indication" => 'required',
            // "c_vac_when" => 'required',
            // "c_vac_where" => 'required',
            "c_boost_indication" => 'required',
            // "c_boost_when" => 'required',
            // "c_boost_where" => 'required',
            "mr_indication" => 'required',
            // "mr_when" => 'required',
            "td_indication" => 'required',
            // "td_when" => 'required',
            "dengue_indication" => 'required',
            // "dengue_when" => 'required',
            "epi_indication" => 'required',
            "type_of_water_source" => 'required',
            "type_of_toilet_facility" => 'required',
            "type_of_waste_management" => 'required',
            "gardening_indication" => 'required',
            "type_of_vegetables" => 'required',
        ]);

        $resident = new Resident();

        $resident->lastname = $request->lastname;
        $resident->firstname = $request->firstname;
        $resident->middlename = $request->middlename;
        $resident->suffix = $request->suffix;
        $resident->relationship = $request->relationship;
        $resident->sex = $request->sex;
        $resident->birthdate = $request->birthdate;
        $resident->age = Carbon::parse($request->birthdate)->age;
        $resident->civil_status = $request->civil_status;
        $resident->membership_type = $request->membership_type;
        $resident->contact_number = $request->contact_number;
        $resident->purok = $request->purok;
        $resident->classification_by_age = $request->classification_by_age;
        $resident->remarks = $request->remarks;

        $resident->save();

        $social = new SocialEconomicStatus();

        $social->resident_id = $resident->id;
        $social->nhts_4ps = $request->nhts_4ps;
        $social->nhts_non_4ps = $request->nhts_non_4ps;
        $social->non_nhts = $request->non_nhts;
        $social->non_ip = $request->non_ip;
        $social->save();

        $indigent = new IndigentPerson();

        $indigent->resident_id = $resident->id;
        $indigent->ip_indication = $request->ip_indication;
        $indigent->tribe = $request->tribe;

        $indigent->save();

        $educ = new EducOccupation();

        $educ->resident_id = $resident->id;
        $educ->education = $request->education;
        $educ->occupation = $request->occupation;

        $educ->save();

        $typeOccupancy = new TypeOfOccupancy();

        $typeOccupancy->resident_id = $resident->id;
        $typeOccupancy->renter = $request->renter;
        $typeOccupancy->months = $request->months;

        $typeOccupancy->save();

        $regVoter = new RegisteredVoter();

        $regVoter->resident_id = $resident->id;
        $regVoter->reg_vot_indication = $request->reg_vot_indication;
        $regVoter->reg_vot_where = $request->reg_vot_where;

        $regVoter->save();

        $grpInd = new CommunityGroup();

        $grpInd->resident_id = $resident->id;
        $grpInd->com_grp_indication = $request->com_grp_indication;
        $grpInd->com_grp_type = $request->com_grp_type;

        $grpInd->save();

        $healthInfo = new HealthInformation();

        $healthInfo->resident_id = $resident->id;
        $healthInfo->philhealth_number = $request->philhealth_number;
        $healthInfo->medical_history = $request->medical_history; //TODO: array
        $healthInfo->remark = $request->remark;

        $healthInfo->save();

        $perSocHis = new PersonalSocialHistory();

        $perSocHis->resident_id = $resident->id;
        $perSocHis->smoker = $request->smoker; // Todo: find bug
        $perSocHis->alcohol_beverages_drinker = $request->alcohol_beverages_drinker;
        $perSocHis->sexually_active = $request->sexually_active;

        $perSocHis->save();

        $womens = new WomensReproductiveAge();

        $womens->resident_id = $resident->id;
        $womens->last_menstrual_period = $request->last_menstrual_period;
        $womens->family_planning_use = $request->family_planning_use;

        $womens->save();

        $hpv = new Hpv();

        $hpv->resident_id = $resident->id;
        $hpv->hpv_indication = $request->hpv_indication;
        $hpv->hpv_when = $request->hpv_when;

        $hpv->save();

        $covidPlus = new CovidPlus();

        $covidPlus->resident_id = $resident->id;
        $covidPlus->c_plus_indication = $request->c_plus_indication;
        $covidPlus->c_plus_when = $request->c_plus_when;
        $covidPlus->c_plus_where = $request->c_plus_where;

        $covidPlus->save();

        $covidVac = new CovidVaccine();

        $covidVac->resident_id = $resident->id;
        $covidVac->c_vac_indication = $request->c_vac_indication;
        $covidVac->c_vac_when = $request->c_vac_when;
        $covidVac->c_vac_where = $request->c_vac_where;

        $covidVac->save();

        $covidBoost = new CovidBooster();

        $covidBoost->resident_id = $resident->id;
        $covidBoost->c_boost_indication = $request->c_boost_indication;
        $covidBoost->c_boost_when = $request->c_boost_when;
        $covidBoost->c_boost_where = $request->c_boost_where;

        $covidBoost->save();

        $mrtd = new MrTd();

        $mrtd->resident_id = $resident->id;
        $mrtd->mr_indication = $request->mr_indication;
        $mrtd->mr_when = $request->mr_when;
        $mrtd->td_indication = $request->td_indication;
        $mrtd->td_when = $request->td_when;

        $mrtd->save();

        $dengue = new Dengue();

        $dengue->resident_id = $resident->id;
        $dengue->dengue_indication = $request->dengue_indication;
        $dengue->dengue_when = $request->dengue_when;

        $dengue->save();

        $epiCard = new EpiCard();

        $epiCard->resident_id = $resident->id;
        $epiCard->epi_indication = $request->epi_indication;
        // $epiCard->epi_when = $request->epi_when;$indigent->save();
        $epiCard->save();

        $facility = new FacilityStructure();

        $facility->resident_id = $resident->id;
        $facility->type_of_water_source = $request->type_of_water_source;
        $facility->type_of_toilet_facility = $request->type_of_toilet_facility;
        $facility->type_of_waste_management = $request->type_of_waste_management;
        // $facility->name = $request->name;

        $facility->save();

        $backyard = new BackyardGardening();

        $backyard->resident_id = $resident->id;
        $backyard->gardening_indication = $request->gardening_indication;
        $backyard->type_of_vegetables = $request->type_of_vegetables;

        $backyard->save();

        // $pets = new PetsAnimals();
        // $pets->resident_id = $resident->id;
        // $pets->c_vac_indication = $request->c_vac_indication;


        // $pets->save();


        return redirect()->route('residents.index')->with('status', 'Resident has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resident = Resident::where('id', $id)->first();
        $social = SocialEconomicStatus::where('resident_id', $resident->id)->first();
        $indigent = IndigentPerson::where('resident_id', $resident->id)->first();
        $educ = EducOccupation::where('resident_id', $resident->id)->first();
        $typeOccupancy = TypeOfOccupancy::where('resident_id', $resident->id)->first();
        $regVoter = RegisteredVoter::where('resident_id', $resident->id)->first();
        $grpInd = CommunityGroup::where('resident_id', $resident->id)->first();
        $healthInfo = HealthInformation::where('resident_id', $resident->id)->first();
        $perSocHis = PersonalSocialHistory::where('resident_id', $resident->id)->first();
        $womens = WomensReproductiveAge::where('resident_id', $resident->id)->first();
        $hpv = Hpv::where('resident_id', $resident->id)->first();
        $covidPlus = CovidPlus::where('resident_id', $resident->id)->first();
        $covidVac = CovidVaccine::where('resident_id', $resident->id)->first();
        $covidBoost = CovidBooster::where('resident_id', $resident->id)->first();
        $mrtd = MrTd::where('resident_id', $resident->id)->first();
        $dengue = Dengue::where('resident_id', $resident->id)->first();
        $epiCard = EpiCard::where('resident_id', $resident->id)->first();
        $facility = FacilityStructure::where('resident_id', $resident->id)->first();
        $backyard = BackyardGardening::where('resident_id', $resident->id)->first();

        return view('admin.resident.show', compact('resident', 'social', 'indigent', 'educ', 'typeOccupancy', 'regVoter', 'grpInd', 'healthInfo', 'perSocHis', 'womens', 'hpv', 'covidPlus', 'covidVac', 'covidBoost', 'mrtd', 'dengue', 'epiCard', 'facility', 'backyard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resident = Resident::find($id);
        $social = SocialEconomicStatus::where('resident_id', $resident->id)->first();
        $indigent = IndigentPerson::where('resident_id', $resident->id)->first();
        $educ = EducOccupation::where('resident_id', $resident->id)->first();
        $typeOccupancy = TypeOfOccupancy::where('resident_id', $resident->id)->first();
        $regVoter = RegisteredVoter::where('resident_id', $resident->id)->first();
        $grpInd = CommunityGroup::where('resident_id', $resident->id)->first();
        $healthInfo = HealthInformation::where('resident_id', $resident->id)->first();
        $perSocHis = PersonalSocialHistory::where('resident_id', $resident->id)->first();
        $womens = WomensReproductiveAge::where('resident_id', $resident->id)->first();
        $hpv = Hpv::where('resident_id', $resident->id)->first();
        $covidPlus = CovidPlus::where('resident_id', $resident->id)->first();
        $covidVac = CovidVaccine::where('resident_id', $resident->id)->first();
        $covidBoost = CovidBooster::where('resident_id', $resident->id)->first();
        $mrtd = MrTd::where('resident_id', $resident->id)->first();
        $dengue = Dengue::where('resident_id', $resident->id)->first();
        $epiCard = EpiCard::where('resident_id', $resident->id)->first();
        $facility = FacilityStructure::where('resident_id', $resident->id)->first();
        $backyard = BackyardGardening::where('resident_id', $resident->id)->first();

        return view('admin.resident.edit', compact('resident', 'social', 'indigent', 'educ', 'typeOccupancy', 'regVoter', 'grpInd', 'healthInfo', 'perSocHis', 'womens', 'hpv', 'covidPlus', 'covidVac', 'covidBoost', 'mrtd', 'dengue', 'epiCard', 'facility', 'backyard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "lastname" => 'required',
            "firstname" => 'required',
            "middlename" => 'required',
            "suffix" => 'required',
            "relationship" => 'required',
            "sex" => 'required',
            "birthdate" => 'required',
            "civil_status" => 'required',
            "membership_type" => 'required',
            "contact_number" => 'required',
            "purok" => 'required',
            "classification_by_age" => 'required',
            "remarks" => 'required',
            "nhts_4ps" => 'required',
            "nhts_non_4ps" => 'required',
            "non_nhts" => 'required',
            "non_ip" => 'required',
            "ip_indication" => 'required',
            "tribe" => 'required',
            "education" => 'required',
            "occupation" => 'required',
            "renter" => 'required',
            // "months" => 'required',
            "reg_vot_indication" => 'required',
            // "reg_vot_where" => 'required',
            "com_grp_indication" => 'required',
            "com_grp_type" => 'required',
            // "philhealth_number" => 'required',
            "medical_history" => 'required',
            "remark" => 'required',
            "smoker" => 'required',
            "alcohol_beverages_drinker" => 'required',
            "sexually_active" => 'required',
            // "last_menstrual_period" => 'required',
            // "family_planning_use" => 'required',
            "hpv_indication" => 'required',
            // "hpv_when" => 'required',
            "c_plus_indication" => 'required',
            // "c_plus_when" => 'required',
            // "c_plus_where" => 'required',
            "c_vac_indication" => 'required',
            // "c_vac_when" => 'required',
            // "c_vac_where" => 'required',
            "c_boost_indication" => 'required',
            // "c_boost_when" => 'required',
            // "c_boost_where" => 'required',
            "mr_indication" => 'required',
            // "mr_when" => 'required',
            "td_indication" => 'required',
            // "td_when" => 'required',
            "dengue_indication" => 'required',
            // "dengue_when" => 'required',
            "epi_indication" => 'required',
            "type_of_water_source" => 'required',
            "type_of_toilet_facility" => 'required',
            "type_of_waste_management" => 'required',
            "gardening_indication" => 'required',
            "type_of_vegetables" => 'required',
        ]);

        $resident = Resident::find($id);

        $resident->lastname = $request->lastname;
        $resident->firstname = $request->firstname;
        $resident->middlename = $request->middlename;
        $resident->suffix = $request->suffix;
        $resident->relationship = $request->relationship;
        $resident->sex = $request->sex;
        $resident->birthdate = $request->birthdate;
        $resident->age = Carbon::parse($request->birthdate)->age;
        $resident->civil_status = $request->civil_status;
        $resident->membership_type = $request->membership_type;
        $resident->contact_number = $request->contact_number;
        $resident->purok = $request->purok;
        $resident->classification_by_age = $request->classification_by_age;
        $resident->remarks = $request->remarks;

        $resident->save();
        // dd($request);

        $social = SocialEconomicStatus::where('resident_id', $resident->id)->first();
        $social->nhts_4ps = $request->nhts_4ps;
        $social->nhts_non_4ps = $request->nhts_non_4ps;
        $social->non_nhts = $request->non_nhts;
        $social->non_ip = $request->non_ip;

        $social->save();

        $indigent = IndigentPerson::where('resident_id', $resident->id)->first();
        $indigent->ip_indication = $request->ip_indication;
        $indigent->tribe = $request->tribe;

        $indigent->save();

        $educ = EducOccupation::where('resident_id', $resident->id)->first();
        $educ->education = $request->education;
        $educ->occupation = $request->occupation;

        $educ->save();

        $typeOccupancy = TypeOfOccupancy::where('resident_id', $resident->id)->first();
        $typeOccupancy->renter = $request->renter;
        $typeOccupancy->months = $request->months;

        $typeOccupancy->save();

        $regVoter = RegisteredVoter::where('resident_id', $resident->id)->first();
        $regVoter->reg_vot_indication = $request->reg_vot_indication;
        $regVoter->reg_vot_where = $request->reg_vot_where;

        $regVoter->save();

        $grpInd = CommunityGroup::where('resident_id', $resident->id)->first();
        $grpInd->com_grp_indication = $request->com_grp_indication;
        $grpInd->com_grp_type = $request->com_grp_type;

        $grpInd->save();

        $healthInfo = HealthInformation::where('resident_id', $resident->id)->first();
        $healthInfo->philhealth_number = $request->philhealth_number;
        $healthInfo->medical_history = $request->medical_history; //TODO: array
        $healthInfo->remark = $request->remark;

        $healthInfo->save();

        $perSocHis = PersonalSocialHistory::where('resident_id', $resident->id)->first();
        $perSocHis->smoker = $request->smoker; // Todo: find bug
        $perSocHis->alcohol_beverages_drinker = $request->alcohol_beverages_drinker;
        $perSocHis->sexually_active = $request->sexually_active;

        $perSocHis->save();

        $womens = WomensReproductiveAge::where('resident_id', $resident->id)->first();
        $womens->last_menstrual_period = $request->last_menstrual_period;
        $womens->family_planning_use = $request->family_planning_use;

        $womens->save();

        $hpv = Hpv::where('resident_id', $resident->id)->first();
        $hpv->hpv_indication = $request->hpv_indication;
        $hpv->hpv_when = $request->hpv_when;

        $hpv->save();

        $covidPlus = CovidPlus::where('resident_id', $resident->id)->first();
        $covidPlus->c_plus_indication = $request->c_plus_indication;
        $covidPlus->c_plus_when = $request->c_plus_when;
        $covidPlus->c_plus_where = $request->c_plus_where;

        $covidPlus->save();

        $covidVac = CovidVaccine::where('resident_id', $resident->id)->first();
        $covidVac->c_vac_indication = $request->c_vac_indication;
        $covidVac->c_vac_when = $request->c_vac_when;
        $covidVac->c_vac_where = $request->c_vac_where;

        $covidVac->save();

        $covidBoost = CovidBooster::where('resident_id', $resident->id)->first();
        $covidBoost->c_boost_indication = $request->c_boost_indication;
        $covidBoost->c_boost_when = $request->c_boost_when;
        $covidBoost->c_boost_where = $request->c_boost_where;

        $covidBoost->save();

        $mrtd = MrTd::where('resident_id', $resident->id)->first();
        $mrtd->mr_indication = $request->mr_indication;
        $mrtd->mr_when = $request->mr_when;
        $mrtd->td_indication = $request->td_indication;
        $mrtd->td_when = $request->td_when;

        $mrtd->save();

        $dengue = Dengue::where('resident_id', $resident->id)->first();
        $dengue->dengue_indication = $request->dengue_indication;
        $dengue->dengue_when = $request->dengue_when;

        $dengue->save();

        $epiCard = EpiCard::where('resident_id', $resident->id)->first();
        $epiCard->epi_indication = $request->epi_indication;

        $epiCard->save();

        $facility = FacilityStructure::where('resident_id', $resident->id)->first();
        $facility->type_of_water_source = $request->type_of_water_source;
        $facility->type_of_toilet_facility = $request->type_of_toilet_facility;
        $facility->type_of_waste_management = $request->type_of_waste_management;

        $facility->save();

        $backyard = BackyardGardening::where('resident_id', $resident->id)->first();
        $backyard->gardening_indication = $request->gardening_indication;
        $backyard->type_of_vegetables = $request->type_of_vegetables;

        $backyard->save();

        return redirect()->route('residents.index')->with('status', 'Resident has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resident = Resident::find($id);
        $resident->delete();

        return redirect()->route('residents.index')->with('status', 'Resident deleted Successfully');
    }
    public function importForm()
    {
        $resident = Resident::all();
        return view('admin.resident.csv')->with('resident', $resident);
    }
    public function import(Request $request)
    {
        //Excel::import(new ResidentImport, $request->file);
        return redirect()->route('residents.index')->with('status', 'Resident imported Successfully');
    }
    public function done($id)
    {
        $resident = Resident::orderBy('created_at', 'asc')->get();

        return view('resident', [
            'resident' => $resident
        ]);

        return view('admin.resident.completed')->with("resident", $resident);
    }
    public function completed()
    {
        $residents = Resident::where('completed', 1)->get();

        return view('admin.resident.completed')->with("residents", $residents);
    }
}
