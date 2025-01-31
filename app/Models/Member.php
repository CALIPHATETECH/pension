<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function pensionFunds()
    {
        return $this->hasMany(PensionFund::class);
    }

    public function payouts()
    {
        return $this->hasMany(Payout::class);
    }

    public function contribution()
    {
        return $this->belongsTo(Contribution::class);
    }

    public function currentSalary()
    {
        $amount = $this->salary;
        foreach($this->gradeLevel->minimumWagesGradeLevels as $levelWages){
            $amount += $levelWages->getPercentageof($amount);
        }
        return $amount;
    }

    public function gradeLevel()
    {
        return $this->belongsTo(GradeLevel::class);
    }

    public function pensionAmount()
    {
        return ($this->currentSalary()/100) * $this->contribution->percentage;
    }

    public function salaryAmount()
    {
        return $this->salary - $this->pensionAmount();
    }

    public function totalPensionFunds()
    {
        $funds = 0;
        foreach($this->pensionFunds as $pensionFund){
            $funds += $pensionFund->amount;
        }
        return $funds;
    }
}
