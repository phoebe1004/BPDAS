<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalSocialHistory extends Model
{
    use HasFactory;
    protected $table = 'personal_social_history';
    protected $fillable = [
        'resident_id',
        'smoker',
        'alcohol_beverages_drinker',
        'sexually_active',
    ];
}
