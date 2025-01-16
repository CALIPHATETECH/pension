@extends('layouts.app')
    @section('title')
        registered members
    @endsection
    @section('content')
    <table class="table" style="color: black;">
        <thead>
            <tr>
                <th>S/N</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE NUMBER</th>
                <th>ADDRESS</th>
                <th>TOTAL PENSION FUNDS</th>
                <th>PENSHION SCHEME</th>
                <th><a href="{{route('member.create')}}" class="btn btn-success"><b><i class="fas fa-user"></i> Member</b></a></th>
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
                    <td></a></td>
                    <td>{{$member->contribution->name}}</a></td>
                    <td>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#edit_{{$member->id}}">Edit</button>
                        <a href="{{route('member.delete',[$member->id])}}" onclick="return confirm('Are you sure, you want to delete this member?')"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
