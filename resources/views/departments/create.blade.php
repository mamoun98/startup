@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Department</div>

                <div class="card-body">
                    
                    @if(count($errors)>0)  
                    <ul class="navbar-nav mr-auto">
                    @foreach ($errors->all() as $error)
                    <li class="form-text text-danger">
                        {{$error}}
                      </li>
                    @endforeach
                   </ul>
                    @endif

                    @if (session('Success'))
                    <div class="alert alert-success" role="alert">
                        {{session('Success')}}
                      </div>
                    @endif
                  
                    
                    <form action="{{route('department.store')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="name">Department Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Enter New Department">
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a type="button" class="btn btn-secondary"href="{{route('departments')}}">Cancel</a>

                      </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
