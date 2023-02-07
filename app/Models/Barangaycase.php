<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangaycase extends Model
{
    use HasFactory;
    protected $table = 'barangaycases';
    protected $fillable = [
        'age',
        'complainant',
        'type_case',
        'case_specification',
        'date_filed',
        'case_status',
    ];
}
