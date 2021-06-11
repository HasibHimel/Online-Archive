<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    public function teacher()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function student()
    {
        return $this->belongsToMany(Student::class);
    }
}
