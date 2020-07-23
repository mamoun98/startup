@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Edit {{$employees->name}} </div>


                
                <div class="card-body">

                  @if (session('success'))
                  <div class="alert alert-success" role="alert">
                      {{session('success')}}
                    </div>
                  @endif
                    
                    <form action="{{route('employee.update', ['id'=>$employees->id])}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
 
                        
                        {{--   <div class="form-group">
                              <label for="photo">Photo</label>
                              <input type="file" class="form-control-file" name="photo">
                            </div>--}}

                       {{--     <div class="form-group">
                            <img src="{{$employees->photo}}" alt="{{$employees->name}}" class="img-thumbnail" style="width: 100px;">
                            </div>--}}

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$employees->name}}">
                          </div>

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" value="{{$employees->email}}">
                              </div>
                            <div class="form-group col-md-6">
                                <label for="mobile">Mobile Number</label>
                                <input type="text" class="form-control" name="mobile" value="{{$employees->mobile}}">
                              </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="gender_id">Gender</label>
                            <select name="gender_id" class="form-control">
                              @foreach ($genders as $gender)
                              <option value="{{$gender->id}}"
                                @if ($employees->gender_id == $gender->id)
                                selected
                            @endif
                                >{{$gender->name}}</option>
                              @endforeach 
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="id_number">ID Number</label>
                            <input type="text" class="form-control" name="id_number" value="{{$employees->id_number}}">
                          </div>

                      </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="city_id">City</label>
                              <select name="city_id" class="form-control">
                                @foreach ($cities as $city)
                                <option value="{{$city->id}}"
                                  @if ($employees->city_id == $city->id)
                                  selected
                              @endif
                                  >{{$city->name}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" value="{{$employees->address}}">
                              </div>
                        </div>




                          <div class="form-group">
                            <label for="birthday">Date of Birth</label>
                            <input type="date" class="form-control" name="birthday" value="{{$employees->birthday}}">
                          </div>


                          <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="social_id">Social status</label>
                                <select name="social_id" class="form-control">
                                  @foreach ($socials as $social)
                                  <option value="{{$social->id}}"
                                    @if ($employees->social_id == $social->id)
                                    selected
                                @endif
                                    >{{$social->name}}</option>
                                  @endforeach 
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="family">Family Members</label>
                                <input type="text" class="form-control" name="family" value="{{$employees->family}}">
                              </div>
                        </div>

         

                          {{--<div class="form-group">
                            <label for="Certificate">Certificates</label>
                            <input type="file" class="form-control-file" name="Certificate">
                          </div>--}}

                          <br>
                          <div class="dropdown-divider"></div>
                          <br>

                          <div class="form-group">
                            <label for="join_date">Join Date</label>
                            <input type="date" class="form-control" name="join_date" value="{{$employees->join_date}}">
                          </div>




                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="department_id">Department</label>
                              <select name="department_id" class="form-control">
                                @foreach ($departments as $department)
                                <option value="{{$department->id}}"
                                  @if ($employees->department_id == $department->id)
                                      selected
                                  @endif
                                  >{{$department->name}}</option>
                                @endforeach  
                              </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="job_type_id">Job Time</label>
                                <select name="job_type_id" class="form-control">
                                  @foreach ($job_types as $job_type)
                                  <option value="{{$job_type->id}}"
                                    @if ($employees->job_type_id == $job_type->id)
                                    selected
                                @endif
                                    >{{$job_type->name}}</option>
                                  @endforeach 
                                </select>
                              </div>
                            </div>


                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="salary">Salary</label>
                              <input type="text" class="form-control" name="salary" value="{{$employees->salary}}">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="curreny_id">Currency</label>
                              <select name="curreny_id" class="form-control">
                                @foreach ($currenies as $curreny)
                                <option value="{{$curreny->id}}"
                                  @if ($employees->curreny_id == $curreny->id)
                                  selected
                              @endif
                                  >{{$curreny->name}}</option>
                                @endforeach 
                              </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="per_id">Per</label>
                                <select name="per_id" class="form-control">
                                  @foreach ($pers as $per)
                                <option value="{{$per->id}}"
                                  @if ($employees->per_id == $per->id)
                                  selected
                              @endif
                                  
                                  >{{$per->name}}</option>
                                @endforeach 
                                </select>
                              </div>


                        </div>

                          
                          
                        
                          <div class="form-group">
                            <label for="status_id">Status</label>
                            <select class="form-control" name="status_id">
                              @foreach ($statuses as $status)
                              <option value="{{$status->id}}"
                                
                                @if ($employees->status_id == $status->id)
                                selected
                            @endif
                                >{{$status->name}}</option>
                              @endforeach 
                            </select>
                          </div>


                          <br>
                          <div class="dropdown-divider"></div>
                          <br>

                  

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="bank_id">Bank Name</label>
                              <select name="bank_id" class="form-control">
                                @foreach ($banks as $bank)
                                <option value="{{$bank->id}}"
                                  @if ($employees->bank_id == $bank->id)
                                  selected
                              @endif
                                  >{{$bank->name}}</option>
                                @endforeach 
                              </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="branch_id">Branch</label>
                                <select name="branch_id" class="form-control">
                                  @foreach ($branches as $branch)
                                  <option value="{{$branch->id}}"
                                    @if ($employees->branch_id == $branch->id)
                                    selected
                                @endif
                                    >{{$branch->name}}</option>
                                  @endforeach 
                                </select>
                              </div>


                        </div>


                          <div class="form-row">
                            <div class="form-group col-md-6">
                              
                                <label for="bank_account">Bank Account</label>
                                <input type="text" class="form-control" name="bank_account" value="{{$employees->bank_account}}">
                              </div>
                            <div class="form-group col-md-6">
                                <label for="iban">IBAN</label>
                                <input type="text" class="form-control" name="iban" value="{{$employees->iban}}">
                              </div>
                        </div>

<br>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a type="button" class="btn btn-secondary"href="{{route('employees')}}">Cancel</a>

                                 </div>
                         
                      </div>
                      </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
