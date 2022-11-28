<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangaycase extends Model
{
    use HasFactory;
    protected $table = 'barangaycases';
    protected $fillable = [
        'pwd_rate',
        'immunization_rate',
        'maternal_rate',
        'childhealth_rate',
        'familyplanning_rate',
    ];
}
