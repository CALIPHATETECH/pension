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
                <th><a href="{{route('member.create')}}"><b><i class="fas fa-user"></i> Member</b></a></th>
            </tr>
        </thead>
        <tbody>
            @foreach($productions as $production)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$production->name}}</td>
                    <td>{{$production->quantity}}</a></td>
                    <td>{{$production->price}}</a></td>
                    <td>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#edit_{{$production->id}}">Edit</button>
                        <a href="{{route('production.delete',[$production->id])}}" onclick="return confirm('Are you sure, you want to delete this production?')"><button class="btn btn-danger">Delete</button></a>
                    </td>
                    @include('production.edit')
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
