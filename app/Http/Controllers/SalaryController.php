<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class SalaryController extends Controller
{
    public function index()
    {
        return view('salary.index');
    }

    public function pay()
    {
        foreach(Member::all() as $member){
            $salary = $member->pensionFunds()->create(['amount'=>$member->pensionAmount(),'salary'=>$member->salaryAmount()]);
        }

        return redirect()->route('salary.index');
    }
}
