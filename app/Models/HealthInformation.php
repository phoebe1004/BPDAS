<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HealthInformation extends Model
{
    use HasFactory;
    protected $table = 'health_information';
    protected $fillable = [
        'resident_id',
        'philhealth_number',
        'medical_history',
        'remark',
    ];

    public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id','id');
    }
}
