<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
