@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Bank</div>

                <div class="card-body">
                    
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                      </div>
                    @endif
                    
                    <form action="{{route('bank.update', ['id'=>$bank->id])}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="name">Bank Name</label>
                          <input type="text" class="form-control" name="name" value="{{$bank->name}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a type="button" class="btn btn-secondary"href="{{route('banks')}}">Cancel</a>
                      </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection