@extends('layouts.app')

@section('title')
    dashboard
@endsection

@section('content')

    <form enctype="multipart/form-data" action="{{route('member.register')}}" method="post">
        @csrf

        <div class="row shadow">
        <p class="h5 text-center">Member Registration Page ...</p>
        <div class="col-md-2"></div>
            <div class="col-md-4">
                
                <div class="form-group pt-2">
                    <input type="text" class="input-group form-control" placeholder="Full Name" value="{{old('name')}}" name="name">
                </div>
                
                <div class="form-group pt-2">
                    <input type="email" class="input-group form-control" placeholder="E-mail Address" value="{{old('email')}}" name="email">
                </div>
                
                <div class="form-group pt-2">
                    <input type="number" class="input-group form-control" placeholder="Phone Number" value="{{old('phone')}}" name="phone">
                </div>

                <div class="form-group pt-2">
                    <input type="date" class="input-group form-control" placeholder="Date of Birth" value="{{old('date_of_birth')}}" name="date_of_birth">
                </div>

                <div class="form-group pt-2">
                    <textarea name="address" id="" cols="30" placeholder="Address" rows="2" class="input-group form-control">{{old('address')}}</textarea>
                </div>

                <div class="form-group pt-2">
                    <input type="password" class="input-group form-control" placeholder="Password" value="{{old('password')}}" name="password">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group pt-2">
                    <input type="text" class="input-group form-control" placeholder="staff ID" value="{{old('staffID')}}" name="staffID">
                </div>
                <div class="form-group pt-2">
                    <input type="number" class="input-group form-control" placeholder="Salary" value="{{old('salary')}}" name="salary">
                </div>
                <div class="form-group pt-2">
                    <input type="date" class="input-group form-control" placeholder="Date Enrolled" value="{{old('date_enrolled')}}" name="date_enrolled">
                </div>
                <div class="form-group pt-2 ">
                    <label for="">Department</label>
                    <select name="department" id="" class="input-group form-control">
                        <option value="">Select Department</option>
                        <option value="Admin">Admin</option>
                        <option value="Agric">Agric</option>
                        <option value="Health">Health</option>
                        <option value="Social">Social</option>
                    </select>
                </div>
                <div class="form-group pt-2 ">
                    <label for="">Pension Scheme</label>
                    <select name="contribution_id" id="" class="input-group form-control">
                    <option value="">Select Scheme</option>
                    @foreach(App\Models\Contribution::all() as $scheme)
                    <option value="{{$scheme->id}}">{{$scheme->name}}</option>
                    @endforeach
                    </select>
                </div>
                <button class="btn btn-success my-4">REGISTER</button>
            </div>
        </div>
        
       
        
        
    </form>
@endsection           