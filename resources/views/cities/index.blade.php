@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex">
                  <h4>Manage Cities</h4>
            <a href="{{route('city.create')}}" class="btn btn-primary ml-auto"><i class="fa fa-plus"></i>Add City</a>
          </div>

                

                    

                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">City Name</th>
                            <th scope="col">Manage</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach($cities as $city)
                            <tr>
                                <th scope="row">{{$city->name}}</th>
                                <td>
                                  <a class="" href="{{route('city.edit',['id'=>$city->id])}}">
                                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                  </a>
                                  <a class="" href="{{route('city.delete',['id'=>$city->id])}}">
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
@endsection
