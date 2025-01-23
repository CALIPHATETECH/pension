<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinimumWage extends Model
{
    protected $guarded = [];

    public function minimumWagesGradeLevels()
    {
        return $this->hasMany(MinimumWagesGradeLevel::class);
    }
}
