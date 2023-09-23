<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable  = [
        'section_id',
        'section_name',
        'level',
        'school_year',
        'status'
    ];
}
