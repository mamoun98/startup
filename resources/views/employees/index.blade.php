@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex">
                   <div class="col mid-4">
                   <a href="{{route('employees')}}" style="font-size: 20px; color:black;">Manage Employees</a> 
                   </div>
                 
                   <div class="col mid-4">
                    <form action="{{route('employee.search')}}" method="POST">
                      @csrf
                      <div class="input-group">
                       <input type="text" name="q" id="q" class="form-control" placeholder="Search Here">
                       <span class="input-group-prepend">
                         <button type="submit" class="btn btn-primary">Search</button>
                       </span>
                      </div>
                    </form>
                   </div>
                   <div class="col mid-4 d-flex">
                    <a href="{{route('employee.create')}}" class="btn btn-primary ml-auto"><i class="fa fa-plus"></i>Add Employee</a>
                   </div>
                  


          </div>
                
          @if (session('success'))
          <div class="alert alert-success" role="alert">
              {{session('success')}}
            </div>
          @endif
          
  
                    <table class="table table-striped" >
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Department</th>
                            <th scope="col">Status</th>
                            <th scope="col">Manage</th>
                          </tr>
                        </thead>
                        <tbody>

                          
                          @if (session('status'))
                          <div class="alert alert-danger">
                            {{session('status')}}
                          </div>
                          @endif

                          @foreach($employees as $employee)
                          <tr>
                              <th scope="row">{{$employee->name}}</th>
                              <th scope="row">{{$employee->email}}</th>
                              <th scope="row">{{$employee->mobile}}</th>
                              <th scope="row">{{$employee->Department->name}}</th>
                              <th scope="row"
                         
                              @if ($employee->status->name === "Active")
                                    style="color : green;"
                                 @else
                                 style="color : red;"
                                @endif
                              
                              >{{$employee->status->name}}</th>
                              <td>
                                <a class="" href="{{route('employee.show',['id'=>$employee->id])}}">
                                  <button type="button" class="btn btn-success btn-sm">Show</button>
                                </a>
                                <a class="" href="{{route('employee.edit',['id'=>$employee->id])}}">
                                  <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                </a>
                                <a class="" href="{{route('employee.delete',['id'=>$employee->id])}}">
                                  <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </a>
                              </td>
                            </tr>
                          @endforeach

                        </tbody>
                      </table>
                   {{$employees->links()}}
                
            </div>
        </div>
    </div>
</div>



@endsection
