@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit City</div>

                <div class="card-body">
                    

                    
                    <form action="{{route('city.update', ['id'=>$city->id])}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="name">city Name</label>
                          <input type="text" class="form-control" name="name" value="{{$city->name}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection