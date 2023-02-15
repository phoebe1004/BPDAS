<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidPlus extends Model
{
    use HasFactory;
    protected $table = 'covid_plus';
    protected $fillable = [
        'resident_id',
        'c_plus_indication',
        'when',
        'where'
     ];
}
