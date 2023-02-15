<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
