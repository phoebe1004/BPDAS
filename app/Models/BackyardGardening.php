<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackyardGardening extends Model
{
    use HasFactory;
    protected $table = 'backyard_gardening';
    protected $fillable = [
        'resident_id',
        'gardening_indication',
        'type_of_vegetables'
    ];
}
