<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityStructure extends Model
{
    use HasFactory;
    protected $table = 'facility_structure';
    protected $fillable = [
        'resident_id',
        'type_of_water_source',
        'type_of_toilet_facility',
        'type_of_waste_management',
     ];





}
