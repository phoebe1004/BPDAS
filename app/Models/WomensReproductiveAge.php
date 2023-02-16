<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WomensReproductiveAge extends Model
{
    use HasFactory;
    protected $table = 'womens_reproductive_age';
    protected $fillable = [
        'resident_id',
        'last_menstrual_period',
        'family_planning_use',
    ];
}
