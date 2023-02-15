<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MrTd extends Model
{
    use HasFactory;
    protected $table = 'mr_td';
    protected $fillable = [
        'resident_id',
        'mr_indication',
        'mr_when',
        'td_indication',
        'td_when'
     ];

}
