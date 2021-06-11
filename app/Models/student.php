<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function achievement()
    {
        return $this->belongsToMany(Achievement::class);
    }

    public function thesis()
    {
        return $this->belongsToMany(Thesis::class);
    }
   
    public function project()
    {
        return $this->belongsToMany(Project::class);
    }
}
