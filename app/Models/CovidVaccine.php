<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
