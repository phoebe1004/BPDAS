<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hpv extends Model
{
    use HasFactory;
    protected $table = 'hpv';
    protected $fillable = [
        'resident_id',
        'hpv_indication',
        'hpv_when'
    ];
    public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id','id');
    }
}
