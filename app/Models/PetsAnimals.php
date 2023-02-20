<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PetsAnimals extends Model
{
    use HasFactory;
    protected $table = 'pets_animals';
    protected $fillable = [
        'type',
        'number',
        'male',
        'female',
        'vaccinated'
     ];
     public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id','id');
    }
}
