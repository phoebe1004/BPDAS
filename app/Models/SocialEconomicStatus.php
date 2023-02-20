<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialEconomicStatus extends Model
{
    use HasFactory;
    protected $table = 'social_economic_status';
    protected $fillable = [
        'resident_id',
        'nhts_4ps',
        'nhts_non_4ps',
        'non_nhts',
        'non_ip',
    ];
    public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id','id');
    }
}
