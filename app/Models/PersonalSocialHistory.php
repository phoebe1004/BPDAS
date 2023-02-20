<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id','id');
    }
}
