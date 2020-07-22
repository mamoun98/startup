@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Department</div>

                <div class="card-body">
                    

                    
                    <form action="{{route('department.update', ['id'=>$department->id])}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="name">Department Name</label>
                          <input type="text" class="form-control" name="name" value="{{$department->name}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a type="button" class="btn btn-secondary"href="{{route('departments')}}">Cancel</a>

                      </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection