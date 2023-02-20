<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WomensReproductiveAge extends Model
{
    use HasFactory;
    protected $table = 'womens_reproductive_age';
    protected $fillable = [
        'resident_id',
        'last_menstrual_period',
        'family_planning_use',
    ];
    public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id','id');
    }
}
