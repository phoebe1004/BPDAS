<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducOccupation extends Model
{
    use HasFactory;
    protected $table = 'educ_occupation';
    protected $fillable = [
        'resident_id',
        'education',
        'occupation'
    ];
}
