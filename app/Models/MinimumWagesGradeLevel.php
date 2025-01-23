<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinimumWagesGradeLevel extends Model
{
    protected $guarded = [];

    public function minimumWage()
    {
        return $this->belongsTo(MinimumWage::class);
    }

    public function gradeLevel()
    {
        return $this->belongsTo(GradeLevel::class);
    }
}
