<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CovidVaccine extends Model
{
    use HasFactory;
    protected $table = 'covid_vaccine';
    protected $fillable = [
        'resident_id',
        'c_vac_indication',
        'c_vac_when',
        'c_vac_where'
     ];
     public function resident()
     {
         return $this->belongsTo(Resident::class, 'resident_id','id');
     }
}
