<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
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
        return $this->hasOne(Contribution::class);
    }
}