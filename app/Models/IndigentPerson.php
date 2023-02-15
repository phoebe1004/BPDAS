<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndigentPerson extends Model
{
    use HasFactory;
    protected $table = 'indigent_person';
    protected $fillable = [
        'resident_id',
        'ip_indication',
        'tribe'
    ];
}
