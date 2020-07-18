@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Employeess</div>

                <div class="card-body">

                    

                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Department</th>
                            <th scope="col">Status</th>
                            <th scope="col">Manage</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach($employees as $employee)
                          <tr>
                              <th scope="row">{{$employee->name}}</th>
                              <th scope="row">{{$employee->email}}</th>
                              <th scope="row">{{$employee->department_id}}</th>
                              <th scope="row">{{$employee->status_id}}</th>
                              <td>
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
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
