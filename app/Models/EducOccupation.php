<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EducOccupation extends Model
{
    use HasFactory;
    protected $table = 'educ_occupation';
    protected $fillable = [
        'resident_id',
        'education',
        'occupation'
    ];

    public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id','id');
    }
}
