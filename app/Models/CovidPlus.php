<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CovidPlus extends Model
{
    use HasFactory;
    protected $table = 'covid_plus';
    protected $fillable = [
        'resident_id',
        'c_plus_indication',
        'c_plus_when',
        'c_plus_where'
     ];
     public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id','id');
    }
}
