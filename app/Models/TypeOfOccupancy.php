<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeOfOccupancy extends Model
{
    use HasFactory;
    protected $table = 'type_of_occupancy';
    protected $fillable = [
        'resident_id',
        'renter',
        'months'
    ];
    public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id','id');
    }
}
