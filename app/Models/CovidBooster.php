<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
     public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id','id');
    }
}
