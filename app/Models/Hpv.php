<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hpv extends Model
{
    use HasFactory;
    protected $table = 'hpv';
    protected $fillable = [
        'resident_id',
        'hpv_indication',
        'when'
    ];
}
