<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EpiCard extends Model
{
    use HasFactory;
    protected $table = 'epi_card';
    protected $fillable = [
        'epi_indication',
        // 'epi_when',
    ];
    public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id','id');
    }
}
