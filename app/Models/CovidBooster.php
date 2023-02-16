<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidBooster extends Model
{
    use HasFactory;
    protected $table = 'covid_booster';
    protected $fillable = [
        'resident_id',
        'c_boost_indication',
        'c_boost_when',
        'c_boost_where',
     ];
}
