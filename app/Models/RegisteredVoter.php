<?php

namespace App\Models;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegisteredVoter extends Model
{
    use HasFactory;

    protected $table = 'registered_voter';
    protected $fillable = [
        'resident_id',
        'reg_vot_indication',
        'reg_vot_where',
    ];
    public function resident()
    {
        return $this->belongsTo(Resident::class, 'resident_id','id');
    }
}
