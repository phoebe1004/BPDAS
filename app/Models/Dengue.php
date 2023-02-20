<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dengue extends Model
{
    use HasFactory;
    protected $table = 'dengue';
    protected $fillable = [
        'dengue_indication',
        'dengue_when'
    ];
    public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id','id');
    }
}
