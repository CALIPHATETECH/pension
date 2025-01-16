@extends('layouts.app')

@section('title')
    dashboard
@endsection

@section('content')
    <div class="p-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="row my-4">
              <div class="col-md-3 text-center">
                <a href="" class="btn btn-outline-success w-100 py-4">
                  <i class="fas fa-user fa-2x mb-2"></i>
                  <h5>Members</h5>
                </a>
              </div>
              <div class="col-md-3 text-center">
                <a href="" class="btn btn-outline-success w-100 py-4">
                  <i class="fas fa-truck fa-2x mb-2"></i>
                  <h5>Pension Scheme</h5>
                </a>
              </div>
            <div class="col-md-3 text-center">
              <a href="" class="btn btn-outline-success w-100 py-4">
                <i class="fas fa-road fa-2x mb-2"></i>
                <h5>Pension Funds</h5>
              </a>
            </div>
            <div class="col-md-3 text-center">
              <a href="" class="btn btn-outline-success w-100 py-4">
                <i class="fas fa-briefcase fa-2x mb-2"></i>
                <h5>Payouts</h5>
              </a>
            </div>
          </div>
            </div>
        </div>
    </div>
@endsection
