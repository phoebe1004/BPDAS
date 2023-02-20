<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IndigentPerson extends Model
{
    use HasFactory;
    protected $table = 'indigent_person';
    protected $fillable = [
        'resident_id',
        'ip_indication',
        'tribe',
    ];
    public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id','id');
    }
}
