<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contribution;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function index()
    {
        return view('member.index');
    }

    public function create()
    {
        
        return view('member.create');
    }

    public function register(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "address" => "required",
            "password" => "required",
            "staffID" => "required",
            "salary" => "required",
            "department" => "required",
            "contribution_id" => "required",
            "date_enrolled" => "required",
            "date_of_birth" => "required"
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->name),
            'role'=>'member',
            ]);
        $employee = $user->employee()->create([
            'address'=>$request->address,
            'phone'=>$request->phone,
            'department'=>$request->department,
            'staff_id'=>$request->staffID,
        ]);
        
        $employee->member()->create([
            'date_of_birth'=>$request->date_of_birth,
            'date_enrolled'=>$request->date_enrolled,
            'salary'=>$request->salary,
            'contribution_id'=>$request->contribution_id,
            'grade_level_id'=>$request->grade_level_id,
        ]);

        return redirect()->route('member.index')->withSuccess('Member Registered');
  
    }
}
