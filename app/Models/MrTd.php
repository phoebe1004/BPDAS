<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MrTd extends Model
{
    use HasFactory;
    protected $table = 'mr_td';
    protected $fillable = [
        'resident_id',
        'mr_indication',
        'mr_when',
        'td_indication',
        'td_when',
     ];
     public function resident()
     {
         return $this->belongsTo(Resident::class, 'resident_id','id');
     }
}
