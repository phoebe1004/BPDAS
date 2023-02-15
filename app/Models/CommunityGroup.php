<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityGroup extends Model
{
    use HasFactory;
    protected $table = 'community_group';
    protected $fillable = [
        'resident_id',
        'com_grp_indication',
        'com_grp_type'
    ];
}
