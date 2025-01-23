<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeLevel extends Model
{
    protected $guarded = [];

    public function minimumWagesGradeLevels()
    {
        return $this->hasMany(MinimumWagesGradeLevel::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
