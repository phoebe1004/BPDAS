<?php

namespace App\Imports;

use App\Models\Resident;
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
            'purok' => $row['purok'],
            'address' => $row['address'],
            'emailaddress' => $row['emailaddress'],
            'contactnumber' => $row['contactnumber'],
            'age' => $row['age'],
            'sex' => $row['sex'],
            // 'birthdate' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['birthdate']),
            'birthdate' => Carbon::parse($row['birthdate'])->toDateString(),
            
            //  'birthdate' => $row['birthdate'],
            'civil_status' => $row['civil_status'],
            'services_acquired' => $row['services_acquired'],
            'nutritional_status' => $row['nutritional_status'],
            'employment_status' => $row['employment_status'],
            'pwd_status' => $row['pwd_status'],
        ]);
    }
}
