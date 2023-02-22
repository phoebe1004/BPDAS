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

class ResidentImport implements ToModel, WithHeadingRow,WithCalculatedFormulas
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Resident([
            'lastname' => $row['lastname'],
            'firstname' => $row['firstname'],
            'middlename' => $row['middlename'],
            'suffix' => $row['suffix'],
            'relationship' => $row['relationship'],
            'sex' => $row['sex'],
            // 'birthdate' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['birthdate']),
            'birthdate' => Carbon::parse($row['birthdate'])->toDateString(),
             //  'birthdate' => $row['birthdate'],
            'age' => $row['age'],
            'civil_status' => $row['civil_status'],
            'membership_type' => $row['membership_type'],
            'contactnumber' => $row['contactnumber'],
            'purok' => $row['purok'],
            'classification_by_age' => $row['classification_by_age'],
            'remarks' => $row['remarks'],
        ]);

        return new SocialEconomicStatus([
            'nhts_4ps' => $row['nhts_4ps'],
            'nhts_non_4ps' => $row['nhts_non_4ps'],
            'non_4ps' => $row['non_4ps'],
            'non_ip' => $row['non_ip'],
        ]);

        return new IndigentPerson([
            'ip_indication' => $row['ip_indication'],
            'tribe' => $row['ip_tribe'],
        ]);

        return new EducOccupation([
            'education' => $row['education'],
            'occupation' => $row['occupation'],
        ]);

        return new TypeOfOccupancy([
            'renter' => $row['renter'],
            'months' => $row['months'],
        ]);

        return new RegisteredVoter([
            'reg_vot_indication' => $row['reg_vot_indication'],
            'reg_vot_where' => $row['reg_vot_where'],
        ]);

        return new CommunityGroup([
            'com_grp_indication' => $row['com_grp_indication'],
            'com_grp_type' => $row['com_grp_type'],
        ]);

        return new HealthInformation([
            'philhealth_number' => $row['philhealth_number'],
            'medical_history' => $row['medical_history'],
            'remark' => $row['remark'],
        ]);

        return new PersonalSocialHistory([
            'smoker' => $row['smoker'],
            'alcohol_beverages_drinker' => $row['alcohol_beverages_drinker'],
            'sexually_active' => $row['sexually_active'],
        ]);

        return new WomensReproductiveAge([
            'last_menstrual_period' => $row['last_menstrual_period'],
            'family_planning_use' => $row['family_planning_use'],
        ]);

        return new Hpv([
            'hpv_indication' => $row['hpv_indication'],
            'hpv_when' => $row['hpv_when'],
        ]);

        return new CovidPlus([
            'c_plus_indication' => $row['c_plus_indication'],
            'c_plus_when' => $row['c_plus_when'],
            'c_plus_where' => $row['c_plus_where'],
        ]);

        return new CovidVaccine([
            'c_vac' => $row['c_vac'],
            'c_vac_when' => $row['c_vac_when'],
            'c_vac_where' => $row['c_vac_where'],
        ]);

        return new CovidBooster([
            'c_boost_indication' => $row['c_boost_indication'],
            'c_boost_when' => $row['c_boost_when'],
            'c_boost_where' => $row['c_boost_where'],
        ]);

        return new MrTd([
            'mr_indication' => $row['mr_indication'],
            'mr_when' => $row['mr_when'],
            'td_indication' => $row['td_indication'],
            'td_when' => $row['td_when'],
        ]);

        return new Dengue([
            'dengue_indication' => $row['dengue_indication'],
            'dengue_when' => $row['dengue_when'],
        ]);

        return new EpiCard([
            'epi_indication' => $row['epi_indication'],
        ]);

        return new FacilityStructure([
            'type_of_water_source' => $row['type_of_water_source'],
            'type_of_toilet_facility' => $row['type_of_toilet_facility'],
            'type_of_waste_management' => $row['type_of_waste_management'],
        ]);

        return new BackyardGardening([
            'gardening_indication' => $row['gardenings_indication'],
            'type_of_vegetables' => $row['type_of_vegetables'],
        ]);

        return new PetsAnimals([
            'type' => $row['type'],
            'number' => $row['number'],
            'male' => $row['male'],
            'female' => $row['female'],
            'vaccinated' => $row['vaccinated'],
        ]);

    }
}
