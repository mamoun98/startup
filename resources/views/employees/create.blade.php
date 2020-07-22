@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Create Employee</div>

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
                    
                    <form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
 
                        
                            <div class="form-group">
                              <label for="photo">Photo</label>
                              <img src="..." alt="..." class="img-thumbnail">
                              <input type="file" class="form-control-file" name="photo">
                            </div>
                    

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name">
                          </div>

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                              </div>
                            <div class="form-group col-md-6">
                                <label for="mobile">Mobile Number</label>
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile Number">
                              </div>
                        </div>


                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="gender_id">Gender</label>
                            <select name="gender_id" class="form-control">
                              @foreach ($genders as $gender)
                              <option value="{{$gender->id}}">{{$gender->name}}</option>
                              @endforeach 
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="id_number">ID Number</label>
                            <input type="text" class="form-control" name="id_number" placeholder="ID Number">
                          </div>

                      </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="city_id">City</label>
                              <select name="city_id" class="form-control">
                                @foreach ($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Address">
                              </div>
                        </div>




                          <div class="form-group">
                            <label for="birthday">Date of Birth</label>
                            <input type="date" class="form-control" name="birthday" placeholder="Date of Birth">
                          </div>


                          <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="social_id">Social status</label>
                                <select name="social_id" class="form-control">
                                  @foreach ($socials as $social)
                                  <option value="{{$social->id}}">{{$social->name}}</option>
                                  @endforeach 
                                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="family">Family Members</label>
                                <input type="text" class="form-control" name="family" placeholder="Family Members">
                              </div>
                        </div>

         

                          <div class="form-group">
                            <label for="Certificate">Certificates</label>
                            <input type="file" class="form-control-file" name="Certificate">
                          </div>

                          <br>
                          <div class="dropdown-divider"></div>
                          <br>

                          <div class="form-group">
                            <label for="join_date">Join Date</label>
                            <input type="date" class="form-control" name="join_date" placeholder="Join Date">
                          </div>




                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="department_id">Department</label>
                              <select name="department_id" class="form-control">
                                @foreach ($departments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                                @endforeach  
                              </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="job_type_id">Job Time</label>
                                <select name="job_type_id" class="form-control">
                                  @foreach ($job_types as $job_type)
                                  <option value="{{$job_type->id}}">{{$job_type->name}}</option>
                                  @endforeach 
                                </select>
                              </div>
                            </div>


                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="salary">Salary</label>
                              <input type="text" class="form-control" name="salary" placeholder="Amount">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="curreny_id">Currency</label>
                              <select name="curreny_id" class="form-control">
                                @foreach ($currenies as $curreny)
                                <option value="{{$curreny->id}}">{{$curreny->name}}</option>
                                @endforeach 
                              </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="per_id">Per</label>
                                <select name="per_id" class="form-control">
                                  @foreach ($pers as $per)
                                <option value="{{$per->id}}">{{$per->name}}</option>
                                @endforeach 
                                </select>
                              </div>


                        </div>

                          
                          
                        
                          <div class="form-group">
                            <label for="status_id">Status</label>
                            <select class="form-control" name="status_id">
                              @foreach ($statuses as $status)
                              <option value="{{$status->id}}">{{$status->name}}</option>
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
                                <option value="{{$bank->id}}">{{$bank->name}}</option>
                                @endforeach 
                              </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="branch_id">Branch</label>
                                <select name="branch_id" class="form-control">
                                  @foreach ($branches as $branch)
                                  <option value="{{$branch->id}}">{{$branch->name}}</option>
                                  @endforeach 
                                </select>
                              </div>


                        </div>


                          <div class="form-row">
                            <div class="form-group col-md-6">
                              
                                <label for="bank_account">Bank Account</label>
                                <input type="text" class="form-control" name="bank_account" placeholder="Bank Account">
                              </div>
                            <div class="form-group col-md-6">
                                <label for="iban">IBAN</label>
                                <input type="text" class="form-control" name="iban" placeholder="IBAN">
                              </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Create</button>
                        <a type="button" class="btn btn-secondary"href="{{route('employees')}}">Cancel</a>

                      </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
