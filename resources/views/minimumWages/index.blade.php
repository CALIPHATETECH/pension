@extends('layouts.app')
    @section('title')
        registered minimum wages
    @endsection
    @section('content')
    <p class="h4 p-4"> Registered Minimum Wages</p>
    <table class="table" style="color: black;">
        <thead>
            <tr>
                <th>S/N</th>
                <th>PERCENTAGE</th>
                <th>DATE</th>
                <th>GRADE LEVELS</th>
                <th><a href="{{route('wages.create')}}" class="btn btn-success btn-sm"><b><i class="fas fa-check"></i> New Minimum Wages</b></a></th>
            </tr>
        </thead>
        
        <tbody>
            @foreach(App\Models\MinimumWage::all() as $wage)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$wage->percentage}}</td>
                    <td>{{$wage->date}}</td>
                    <td>
                    @foreach($wage->minimumWagesGradeLevels as $minimumWageLevel)
                    {{$minimumWageLevel->gradeLevel->name}}<br>
                    @endforeach
                    </td>
                    <td>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
