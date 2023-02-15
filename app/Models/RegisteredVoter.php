<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredVoter extends Model
{
    use HasFactory;

    protected $table = 'registered_voter';
    protected $fillable = [
        'resident_id',
        'reg_vot_indication',
        'where'
    ];
}
