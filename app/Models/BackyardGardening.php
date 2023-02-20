<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BackyardGardening extends Model
{
    use HasFactory;
    protected $table = 'backyard_gardening';
    protected $fillable = [
        'resident_id',
        'gardening_indication',
        'type_of_vegetables',
    ];

    // public function resident()
    // {
    //     return $this->belongsTo(Resident::class, 'resident_id','id');
    // }
}
