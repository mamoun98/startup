@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <div class="container">
                        <div class="row">
                          <div class="col-sm">
                            
                            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                <div style="font-size:18px;"class="card-header"><a style="color: white;" href="{{route('departments')}}">Departments</a></div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$departments_count}}</h5>
                                </div>
                              </div>
                              <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                <div style="font-size:18px;"class="card-header"><a style="color: white;" href="{{route('cities')}}">Cities</a></div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$cities_count}}</h5>
                                </div>
                              </div>

                          </div>
                          <div class="col-sm">
                            
                            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                <div style="font-size:18px;"class="card-header"><a style="color: white;" href="{{route('banks')}}">Banks</a></div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$banks_count}}</h5>
                                </div>
                              </div>
        
                              <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                                <div style="font-size:18px;"class="card-header">Agents</div>
                                <div class="card-body">
                                  <h5 class="card-title">Info card title</h5>
                                </div>
                              </div>

                          </div>
                          <div class="col-sm">

                            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                            <div style="font-size:18px;"class="card-header" > <a style="color: white;" href="{{route('employees')}}">Employees</a></div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$employees_count}}</h5>
                                </div>
                              </div>


                              
                          </div>
                        </div>
                      </div>

                    





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
