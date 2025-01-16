@extends('layouts.app')
    @section('title')
        registered members
    @endsection
    @section('content')
    <p class="h4 p-4"> Staff Salary Page</p>
    <table class="table" style="color: black;">
        <thead>
            <tr>
                <th>S/N</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE NUMBER</th>
                <th>ADDRESS</th>
                <th>SALARY</th>
                <th>TOTAL PENSION FUNDS</th>
                <th><a href="{{route('salary.pay')}}" class="btn btn-success"><b><i class="fas fa-check"></i> Authorize Payment</b></a></th>
            </tr>
        </thead>
        <tbody>
            @foreach(App\Models\Member::all() as $member)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$member->employee->user->name ?? ''}}</td>
                    <td>{{$member->employee->user->email ?? ''}}</td>
                    <td>{{$member->employee->phone ?? ''}}</td>
                    <td>{{$member->employee->address ?? ''}}</td>
                    <td>{{$member->salary}}</a></td>
                    <td>{{number_format($member->totalPensionFunds(), 2)}}</a></td>
                    <td>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
