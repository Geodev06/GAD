<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentsection extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'section_id'
    ];

    public function section()
    {
        $this->hasOne(Section::class, 'section_id', 'section_id');
    }
}
