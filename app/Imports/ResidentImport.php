<?php

namespace App\Imports;

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
use App\Models\Resident;
use App\Models\SocialEconomicStatus;
use App\Models\TypeOfOccupancy;
use App\Models\WomensReproductiveAge;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class ResidentImport implements ToCollection, WithCalculatedFormulas, WithHeadingRow
{
    /* Reminders:
        * Only 1 sheet
        * Values in the sample excel file are not accurate
        * Headings sa column kay dili masabtan
        * There are no validations for the fields
    */
    public function collection(Collection $rows)
    {
        $SocialEconomicStatus = collect();
        $IndigentPerson = collect();
        $EducOccupation = collect();
        $TypeOfOccupancy = collect();
        $RegisteredVoter = collect();
        $CommunityGroup = collect();
        $HealthInformation = collect();
        $PersonalSocialHistory = collect();
        $WomensReproductiveAge = collect();
        $Hpv = collect();
        $CovidPlus = collect();
        $CovidVaccine = collect();
        $CovidBooster = collect();
        $MrTd = collect();
        $Dengue = collect();
        $EpiCard = collect();
        $FacilityStructure = collect();
        $BackyardGardening = collect();
        $PetsAnimals = collect();

        foreach ($rows as $row)
        {
            $row = $row->all();

            $birthdate = Date::excelToDateTimeObject($row['birthdate']);
            $resident = Resident::create([
                'lastname' => $row['lastname'],
                'firstname' => $row['firstname'],
                'middlename' => $row['middlename'],
                'suffix' => $row['suffix'],
                'purok' => $row['purok'],
                'contact_number' => $row['contact_number'],
                'sex' => $row['sex'],
                'birthdate' => $birthdate,
                'civil_status' => $row['civil_status'],
                'relationship' => $row['relationship'],
                'age' => Carbon::parse($birthdate)->age,
                'membership_type' => $row['membership_type'],
                'classification_by_age' => $row['classification_by_age'],
                'remarks' => $row['remarks']
            ]);

            $SocialEconomicStatus->push([
                'resident_id' => $resident->id,
                'nhts_4ps' => $row['nhts_4ps'],
                'nhts_non_4ps' => $row['nhts_non_4ps'],
                'non_nhts' => $row['non_nhts'],
                'non_ip' => $row['non_ip'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $IndigentPerson->push([
                'resident_id' => $resident->id,
                'ip_indication' => $row['ip_indication'],
                'tribe' => $row['tribe'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $EducOccupation->push([
                'resident_id' => $resident->id,
                'education' => $row['education'],
                'occupation' => $row['occupation'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $TypeOfOccupancy->push([
                'resident_id' => $resident->id,
                'renter' => $row['renter'],
                'months' => $row['months'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $RegisteredVoter->push([
                'resident_id' => $resident->id,
                'reg_vot_indication' => $row['reg_vot_indication'],
                'reg_vot_where' => $row['reg_vot_where'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $CommunityGroup->push([
                'resident_id' => $resident->id,
                'com_grp_indication' => $row['com_grp_indication'],
                'com_grp_type' => $row['com_grp_type'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $HealthInformation->push([
                'resident_id' => $resident->id,
                'philhealth_number' => $row['philhealth_number'],
                'medical_history' => $row['medical_history'],
                'remark' => $row['remark'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $PersonalSocialHistory->push([
                'resident_id' => $resident->id,
                'smoker' => $row['smoker'],
                'alcohol_beverages_drinker' => $row['alcohol_beverages_drinker'],
                'sexually_active' => $row['sexually_active'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $WomensReproductiveAge->push([
                'resident_id' => $resident->id,
                'last_menstrual_period' => Date::excelToDateTimeObject($row['last_menstrual_period']),
                'family_planning_use' => $row['family_planning_use'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $Hpv->push([
                'resident_id' => $resident->id,
                'hpv_indication' => $row['hpv_indication'],
                'hpv_when' => Date::excelToDateTimeObject($row['hpv_when']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $CovidPlus->push([
                'resident_id' => $resident->id,
                'c_plus_indication' => $row['c_plus_indication'],
                'c_plus_when' => Date::excelToDateTimeObject($row['c_plus_when']),
                'c_plus_where' => $row['c_plus_where'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $CovidVaccine->push([
                'resident_id' => $resident->id,
                'c_vac_indication' => $row['c_vac_indication'],
                'c_vac_when' => Date::excelToDateTimeObject($row['c_vac_when']),
                'c_vac_where' => $row['c_vac_where'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $CovidBooster->push([
                'resident_id' => $resident->id,
                'c_boost_indication' => $row['c_boost_indication'],
                'c_boost_when' => Date::excelToDateTimeObject($row['c_boost_when']),
                'c_boost_where' => $row['c_boost_where'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $MrTd->push([
                'resident_id' => $resident->id,
                'mr_indication' => $row['mr_indication'],
                'mr_when' => Date::excelToDateTimeObject($row['mr_when']),
                'td_indication' => $row['td_indication'],
                'td_when' => Date::excelToDateTimeObject($row['td_when']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $Dengue->push([
                'resident_id' => $resident->id,
                'dengue_indication' => $row['dengue_indication'],
                'dengue_when' => Date::excelToDateTimeObject($row['dengue_when']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $EpiCard->push([
                'resident_id' => $resident->id,
                'epi_indication' => $row['epi_indication'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $FacilityStructure->push([
                'resident_id' => $resident->id,
                'type_of_water_source' => $row['type_of_water_source'],
                'type_of_toilet_facility' => $row['type_of_toilet_facility'],
                'type_of_waste_management' => $row['type_of_waste_management'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $BackyardGardening->push([
                'resident_id' => $resident->id,
                'gardening_indication' => $row['gardening_indication'],
                'type_of_vegetables' => $row['type_of_vegetables'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $PetsAnimals->push([
                'resident_id' => $resident->id,
                'type' => $row['type'],
                'number' => $row['number'],
                'male' => $row['male'],
                'female' => $row['female'],
                'vaccinated' => $row['vaccinated'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);


            // $data = [
            //     ['name'=>'Coder 1', 'rep'=>'4096'],
            //     ['name'=>'Coder 2', 'rep'=>'2048'],
            //     //...
            // ];

            // Coder::insert($data);


            // $user = User::create([
            //     'name' => $row[0],
            //     'email'    => $row[6],
            //     'password' => Hash::make($row[7]),
            // ]);
            // Customer::create([
            //     'customer_name' => $row[0],
            //     'gender' => $row[1],
            //     'address' => $row[2],
            //     'city' => $row[3],
            //     'postal_code' => $row[4],
            //     'country' => $row[5],
            // ]);
            // $myString = $row[8];
            // $myArray = explode(',', $myString);
            // foreach ($myArray as $value) {
            //     Courses::create([
            //             'user_id' => $user->id,
            //             'course_name' => $value,
            //     ]);
            // }
        }

        SocialEconomicStatus::insert($SocialEconomicStatus->all());
        IndigentPerson::insert($IndigentPerson->all());
        EducOccupation::insert($EducOccupation->all());
        TypeOfOccupancy::insert($TypeOfOccupancy->all());
        RegisteredVoter::insert($RegisteredVoter->all());
        CommunityGroup::insert($CommunityGroup->all());
        HealthInformation::insert($HealthInformation->all());
        PersonalSocialHistory::insert($PersonalSocialHistory->all());
        WomensReproductiveAge::insert($WomensReproductiveAge->all());
        Hpv::insert($Hpv->all());
        CovidPlus::insert($CovidPlus->all());
        CovidVaccine::insert($CovidVaccine->all());
        CovidBooster::insert($CovidBooster->all());
        MrTd::insert($MrTd->all());
        Dengue::insert($Dengue->all());
        EpiCard::insert($EpiCard->all());
        FacilityStructure::insert($FacilityStructure->all());
        BackyardGardening::insert($BackyardGardening->all());
        PetsAnimals::insert($PetsAnimals->all());
    }
}
