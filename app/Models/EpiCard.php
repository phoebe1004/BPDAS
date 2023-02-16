<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpiCard extends Model
{
    use HasFactory;
    protected $table = 'epi_card';
    protected $fillable = [
        'epi_indication',
        // 'epi_when',
    ];
}
