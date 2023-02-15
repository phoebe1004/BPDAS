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
        'relationship',
        'sex',
        'birthdate',
        'age',
        'civil_status',
        'membership_type',
        'contact_number',
        'purok',
        'group_community',
        'remark'
     ];


}
