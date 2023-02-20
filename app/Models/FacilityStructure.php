<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
     public function resident()
     {
         return $this->belongsTo(Resident::class, 'resident_id','id');
     }




}
