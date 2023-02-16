<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
