<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GradeLevel;
use App\Models\MinimumWage;

class MinimumWagesController extends Controller
{
    public function index()
    {
        return view('minimumWages.index');
    }

    public function create()
    {
        return view('minimumWages.create');
    }

    public function register(Request $request)
    {
        $wages = MinimumWage::create(['percentage'=>$request->percentage,'date'=>$request->date]);
        foreach($request->all() as $key=>$value){
            $level = GradeLevel::find($key);
            if($level){
                $wages->minimumWagesGradeLevels()->create(['grade_level_id'=>$level->id]);
            }
        }
        return redirect()->route('wages.index');
    }
}
