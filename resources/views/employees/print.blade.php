@extends('layouts.print')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
              <div class="card-header"style="font-weight: bold;">Copy of {{$employees->name}} information</div>
            

                
                <div class="card-body">


                    
                    <form action="{{route('employee.print', ['id'=>$employees->id])}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
 
                        
                        {{--   <div class="form-group">
                              <label for="photo">Photo</label>
                              <input type="file" class="form-control-file" name="photo">
                            </div>--}}

                       {{--     <div class="form-group">
                            <img src="{{$employees->photo}}" alt="{{$employees->name}}" class="img-thumbnail" style="width: 100px;">
                            </div>--}}


                            <div class="form-group">
                              <img src="{{$employees->photo}}" alt="{{$employees->name}}" class="img-thumbnail" style="width: 100px;float:right;">
                              </div>
  
  
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="name" style="font-size: 18px;font-weight: 600;">Name : </label>
                                  <label for="name"style="font-size: 18px;">{{$employees->name}}</label>
                                  </div>
                                <div class="form-group col-md-5">
                                  <label for="gender_id"style="font-size: 18px;font-weight: 600;">Gender : </label>
                                  <label name="gender_id" style="font-size: 18px;">
                                    @foreach ($genders as $gender)
                                      @if ($employees->gender_id == $gender->id)
                                      {{$employees->gender->name}}
                                  @endif
                                    @endforeach 
                                  </label>
                                  </div>
                            </div>
  
  
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                
                                <label for="birthday"style="font-size: 18px;font-weight: 600;">Date of Birth : </label>
                                <label for="birthday"style="font-size: 18px;">{{$employees->birthday}}</label>
                                </div>
                              <div class="form-group col-md-6">
                                <label for="id_number"style="font-size: 18px;font-weight: 600;">ID Number : </label>
                                <label for="id_number"style="font-size: 18px;">{{$employees->id_number}}</label>
                                </div>
                          </div>
  
                       
  
  
  
                        
  
                          <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="city_id"style="font-size: 18px;font-weight: 600;">City : </label>
                                <label name="city_id" style="font-size: 18px;">
                                  @foreach ($cities as $city)
                                    @if ($employees->city_id == $city->id)
                                    {{$employees->city->name}}
                                @endif
                                  @endforeach 
                                </label>
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="address"style="font-size: 18px;font-weight: bold;"style="font-size: 18px;font-weight: 600;">Address : </label>
                                  <label for="address"style="font-size: 18px;">{{$employees->address}}</label>
                                </div>
                          </div>
  
  
  
  
                   
                   
  
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="social_id"style="font-size: 18px;font-weight: bold;">Social status : </label>
                                  <label name="social_id" style="font-size: 18px;">
                                    @foreach ($socials as $social)
                                      @if ($employees->social_id == $social->id)
                                      {{$employees->social->name}}
                                  @endif
                                    @endforeach 
                                  </label>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="family"style="font-size: 18px;font-weight: bold;">Family Members : </label>
                                  <label for="family"style="font-size: 18px;">{{$employees->family}}</label>
                                </div>
                          </div>
  
           
  
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              
                                <label for="email"style="font-size: 18px;font-weight: bold;">Email : </label>
                                <label for="email"style="font-size: 18px;">{{$employees->email}}</label>
                              </div>
                            <div class="form-group col-md-6">
                                <label for="mobile"style="font-size: 18px;font-weight: bold;">Mobile Number: </label>
                                <label for="mobile"style="font-size: 18px;">{{$employees->mobile}}</label>
                              </div>
                        </div>
  
                            {{--<div class="form-group">
                              <label for="Certificate">Certificates</label>
                              <input type="file" class="form-control-file" name="Certificate">
                            </div>--}}
  
                            <br>
                            <div class="dropdown-divider"></div>
                            <br>
  
  
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                
                                <label for="department_id"style="font-size: 18px;font-weight: bold;">Department : </label>
                                <label name="department_id" style="font-size: 18px;">
                                  @foreach ($departments as $department)
                                    @if ($employees->department_id == $department->id)
                                    {{$employees->department->name}}
                                @endif
                                  @endforeach 
                                </label>
                                </div>
                              <div class="form-group col-md-6">
                                <label for="join_date"style="font-size: 18px;font-weight: bold;">Join Date : </label>
                                <label for="join_date"style="font-size: 18px;">{{$employees->join_date}}</label>
                                </div>
                          </div>
  
  
  
                          <div class="form-row">
                            <div class="form-group col-md-3">
                              <label for="salary"style="font-size: 18px;font-weight: bold;">Salary</label>
                              <label for="salary"style="font-size: 18px;">{{$employees->salary}}</label>
                            </div>
                            <div class="form-group col-md-3">                   
                              <label for="curreny_id"style="font-size: 18px;font-weight: bold;">Currency : </label>
                              <label name="curreny_id"style="font-size: 18px;" >
                                @foreach ($currenies as $curreny)
                                  @if ($employees->curreny_id == $curreny->id)
                                  {{$curreny->name}}
                              @endif
                                @endforeach 
                              </label>
     
    
    
                            </div>
                            <div class="form-group col-md-3">
                                <label for="per_id"style="font-size: 18px;font-weight: bold;">Per : </label>
                                <label name="per_id" style="font-size: 18px;">
                                  @foreach ($pers as $per)
                                    @if ($employees->per_id == $per->id)
                                    {{$employees->per->name}}
                                @endif
                                  @endforeach 
                                </label>
                              </div>
    
    
                        </div>  
  
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              
                              <label for="job_type_id"style="font-size: 18px;font-weight: bold;">Job Time : </label>
                              <label name="job_type_id"style="font-size: 18px;" >
                                @foreach ($job_types as $job_type)
                                  @if ($employees->job_type_id == $job_type->id)
                                  {{$employees->job_type->name}}
                              @endif
                                @endforeach 
                              </label>
                              </div>
                            <div class="form-group col-md-6" >
  
       
                              <label for="status_id"style="font-size: 18px;font-weight: bold;">Status : </label>
                              <label name="status_id" style="font-size: 18px;">
                                @foreach ($statuses as $status)
                                  @if ($employees->status_id == $status->id)
                                  {{$employees->status->name}}
                              @endif
                                @endforeach 
                              </label>
                            </div>
                              
                        </div>
  
  
  
                            
                        
                          
                          
  
                            <br>
                            <div class="dropdown-divider"></div>
                            <br>
  
                    
  
                            <div class="form-row">
                              <div class="form-group col-md-6">
  
  
                                <label for="bank_id"style="font-size: 18px;font-weight: bold;">Bank Name : </label>
                                <label name="bank_id" style="font-size: 18px;">
                                  @foreach ($banks as $bank)
                                    @if ($employees->bank_id == $bank->id)
                                    {{$employees->bank->name}}
                                @endif
                                  @endforeach 
                                </label>
                              </div>
                              <div class="form-group col-md-6">
  
  
                                  <label for="branch_id"style="font-size: 18px;font-weight: bold;">Branch : </label>
                                  <label name="branch_id" style="font-size: 18px;">
                                    @foreach ($branches as $branch)
                                      @if ($employees->branch_id == $branch->id)
                                      {{$employees->branch->name}}
                                  @endif
                                    @endforeach 
                                  </label>
                                </div>
  
  
                          </div>
  
  
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                
                                  <label for="bank_account"style="font-size: 18px;font-weight: bold;">Bank Account : </label>
                                  <label style="font-size: 18px;" for="bank_account">{{$employees->bank_account}}</label>
                                </div>
                              <div class="form-group col-md-6">
                                  <label for="iban"style="font-size: 18px;font-weight: bold;">IBAN : </label>
                                  <label for="iban"style="font-size: 18px;">{{$employees->iban}}</label>
                                </div>
                          </div>
  
  <br>
  
                      </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
  window.print();
</script>