@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Employee</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <form action="{{route('employee.store')}}" method="POST">
                        {{csrf_field()}}

                        
                            <div class="form-group">
                              <label for="photo">Photo</label>
                              <input type="file" class="form-control-file" id="photo">
                            </div>
                    

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                          </div>

                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                          </div>

                          <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" class="form-control" id="name" placeholder="Mobile Number">
                          </div>



                        <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="city">City</label>
                              <select id="city" class="form-control">
                                <option>Choose...</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Address">
                              </div>
                        </div>




                          <div class="form-group">
                            <label for="birthday">Date of Birth</label>
                            <input type="date" class="form-control" id="birthday" placeholder="Date of Birth">
                          </div>

                          <div class="form-group">
                            <label for="Social">Social status</label>
                            <select class="form-control" id="Social">
                              <option>Single</option>
                              <option>Married</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="family">Family Members</label>
                            <input type="text" class="form-control" id="family" placeholder="Family Members">
                          </div>


                          <div class="form-group">
                            <label for="Certificates">Certificates</label>
                            <input type="file" class="form-control-file" id="Certificates">
                          </div>

                          <br>
                          <div class="dropdown-divider"></div>
                          <br>

                          <div class="form-group">
                            <label for="jdate">Join Date</label>
                            <input type="date" class="form-control" id="jdate" placeholder="Join Date">
                          </div>


                          <div class="form-group">
                            <label for="department">Department</label>
                            <select class="form-control" id="department">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>


                          <div class="form-group">
                            <label for="job">Jop time</label>
                            <select class="form-control" id="job">
                              <option>Part Time</option>
                              <option>Full Time</option>
                            </select>
                          </div>




                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="salary">Salary</label>
                              <input type="text" class="form-control" id="salary" placeholder="Amount">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputState">Currency</label>
                              <select id="inputState" class="form-control">
                                <option selected>ILS</option>
                                <option>USD</option>
                                <option>JOD</option>
                              </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="per">Per</label>
                                <select id="per" class="form-control">
                                  <option selected>Hour</option>
                                  <option>Day</option>
                                  <option>Week</option>
                                  <option>Month</option>
                                  <option>Year</option>
                                </select>
                              </div>


                        </div>

                          
                          
                        
                          <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status">
                              <option>Active</option>
                              <option>Not Active</option>
                            </select>
                          </div>


                          <br>
                          <div class="dropdown-divider"></div>
                          <br>

                          <div class="form-group">
                            <label for="bank">Bank Name</label>
                            <select class="form-control" id="bank">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>



                          <div class="form-group">
                            <label for="branch">Branch</label>
                            <select class="form-control" id="branch">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>

                          
                          <div class="form-group">
                            <label for="bank_account">Bank Account</label>
                            <input type="text" class="form-control" id="bank_account" placeholder="Bank Account">
                          </div>

                          <div class="form-group">
                            <label for="iban">IBAN</label>
                            <input type="text" class="form-control" id="iban" placeholder="IBAN">
                          </div>


                        <button type="submit" class="btn btn-primary">Create</button>
                      </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
