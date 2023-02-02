<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Resident extends Model
{
    use HasFactory;
    protected $table = 'residents';
    protected $fillable = [
        'lastname',
        'firstname',
        'middlename',
        'suffix',
        'purok',
        'address',
        'emailaddress',
        'contactnumber',
        'age',
        'sex',
        'birthdate',
        'civil_status',
        'services_acquired',
        'nutritional_status',
        'employment_status',
        'pwd_status',


     ];
}
