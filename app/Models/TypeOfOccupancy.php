<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfOccupancy extends Model
{
    use HasFactory;
    protected $table = 'type_of_occupancy';
    protected $fillable = [
        'resident_id',
        'renter',
        'months'
    ];
}
