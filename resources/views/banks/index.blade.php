@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header d-flex">
                  <h4>Manage Banks</h4>
            <a href="{{route('bank.create')}}" class="btn btn-primary ml-auto"><i class="fa fa-plus"></i>Add Bank</a>
          </div>

                

                    

                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Bank Name</th>
                            <th scope="col">Manage</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach($banks as $bank)
                            <tr>
                                <th scope="row">{{$bank->name}}</th>
                                <td>

                                  <a class="" href="{{route('bank.edit',['id'=>$bank->id])}}">
                                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                  </a>
                                  <a class="" href="{{route('bank.delete',['id'=>$bank->id])}}">
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
