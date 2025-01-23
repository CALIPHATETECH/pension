
@extends('layouts.app')

@section('title')

@endsection

@section('content')
            <form enctype="multipart/form-data" action="{{route('wages.register')}}" method="post">
                    @csrf
                    <div class="col-md-6"></div>
                        <div class="form-group">
                            <select name="percentage" id="" class="form-control">
                            <option value="">Percentage</option>
                            @for($i=1; $i<=100; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                            @endfor
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Start Date</label>
                            <input type="date" name="date" id="" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-4">
                    @foreach(App\Models\GradeLevel::all() as $level)
                    <div class="form-group col-md-2">
                        <label for="">{{$level->name}}</label>
                        <input type="checkbox" name="{{$level->id}}">
                    </div>
                    @endforeach
                    </div>
                    <button class="btn btn-success mt-4" >Register</button>
                </form>
            @endsection