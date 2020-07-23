<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Bank;
use App\Branch;
use App\Gender;
use App\City;
use App\Job_type;
use App\Per;
use App\Social;
use App\Curreny;
use App\Status;
use App\Employee;



class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        


        return view('employees.index')->with('employees',employee::all())
        ->with('employees',employee::paginate(5))
        ->with('departments',Department::all());
    }

    public function search(Request $request){
        

        $request->validate([
             "q"=> "required"
        ]);
        
        $q = $request->q;
        $filterdEmployees = Employee::where('name', 'like', '%' . $q . '%')
                                      ->orwhere('email', 'like', '%' . $q . '%')
                                      ->orwhere('status_id', 'like', '%' . $q . '%')->paginate(10);
       
                                      

        
                                                                   
                                      

                                     /* dd($filterdEmployees); */

       if($filterdEmployees -> count()){
          return view('employees.index')->with([
                 'employees'=> $filterdEmployees
          ]);
       }  else{
        return redirect()->route('employees')->with([

            'status' => 'No Results'
        ]);


       }                           
  
     /* $search = $request->get('search');

      $employees = Employee::oldest()
             ->where('name', 'like', "%$search%")
             ->paginate(5);

      return view('employees.index',['employees'=> $employees]);

*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create')
        ->with('departments',Department::all())
        ->with('banks',Bank::all())
        ->with('branches',Branch::all())
        ->with('genders',Gender::all())
        ->with('cities',City::all())
        ->with('job_types',Job_type::all())
        ->with('pers',Per::all())
        ->with('socials',Social::all())
        ->with('currenies',Curreny::all())
        ->with('statuses',Status::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //dd($request->all());
        $this->validate($request,[
            "photo" => "required|image",
            "name" => "required",
            "email" => "required",
            "mobile" => "required",
            "id_number"=> "required",
            "gender_id"=> "required",
            "city_id" => "required",
            "address" => "required",
            "birthday" => "required",
            "social_id" => "required",
            "family" => "required",
            "Certificate" => "required|image",
            "join_date" => "required",
            "department_id" => "required",
            "job_type_id" => "required",
            "salary" => "required",
            "curreny_id" => "required",
            "per_id" => "required",
            "status_id" => "required",
            "bank_id" => "required",
            "branch_id" => "required",
            "bank_account" => "required",
            "iban" => "required"
        ]);

        

        $file_extension = $request->photo ->getClientOriginalName();
        $file_name =time().'.'.$file_extension;
        $path = 'uploads/photos';
        $request ->photo ->move($path,$file_name);

        $file_extensionn = $request->Certificate ->getClientOriginalName();
        $file_namee =time().'.'.$file_extensionn;
        $pathh = 'uploads/Certificate';
        $request ->Certificate ->move($pathh,$file_namee);
       

        Employee::create([
        
            "photo" => 'uploads/photos/'.$file_name,
            "name" => $request->name,
            "email" => $request->email,
            "mobile" => $request->mobile,
            "id_number"=> $request->id_number,
            "gender_id"=> $request->gender_id,
            "city_id" => $request->city_id,
            "address" => $request->address,
            "birthday" => $request->birthday,
            "social_id" => $request->social_id,
            "family" => $request->family,
            "Certificate" => 'uploads/Certificate/'.$file_namee,
            "join_date" => $request->join_date,
            "department_id" => $request->department_id,
            "job_type_id" => $request->job_type_id,
            "salary" => $request->salary,
            "curreny_id" => $request->curreny_id,
            "per_id" => $request->per_id,
            "status_id" => $request->status_id,
            "bank_id" => $request->bank_id,
            "branch_id" => $request->branch_id,
            "bank_account" => $request->bank_account,
            "iban" => $request->iban

        ]);
        

        return redirect()->back()->with([

            'success' => 'Employee Added'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = employee::find($id);
        return view('employees.show')->with('employees',$employee)
        ->with('departments',Department::all())
        ->with('banks',Bank::all())
        ->with('branches',Branch::all())
        ->with('genders',Gender::all())
        ->with('cities',City::all())
        ->with('job_types',Job_type::all())
        ->with('pers',Per::all())
        ->with('socials',Social::all())
        ->with('currenies',Curreny::all())
        ->with('statuses',Status::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = employee::find($id);
        return view('employees.edit')->with('employees',$employee)
        ->with('departments',Department::all())
        ->with('banks',Bank::all())
        ->with('branches',Branch::all())
        ->with('genders',Gender::all())
        ->with('cities',City::all())
        ->with('job_types',Job_type::all())
        ->with('pers',Per::all())
        ->with('socials',Social::all())
        ->with('currenies',Curreny::all())
        ->with('statuses',Status::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $employee = Employee::find($id);

        $this->validate($request,[
           // "photo" => "required|image",
            "name" => "required",
            "email" => "required",
            "mobile" => "required",
            "id_number"=> "required",
            "gender_id"=> "required",
            "city_id" => "required",
            "address" => "required",
            "birthday" => "required",
            "social_id" => "required",
            "family" => "required",
          //  "Certificate" => "required|image",
            "join_date" => "required",
            "department_id" => "required",
            "job_type_id" => "required",
            "salary" => "required",
            "curreny_id" => "required",
            "per_id" => "required",
            "status_id" => "required",
            "bank_id" => "required",
            "branch_id" => "required",
            "bank_account" => "required",
            "iban" => "required"
        ]);



              /*  if($request->hasFile('photo')) {
                $file_extension = $request->photo ->getClientOriginalName();
                $file_name =time().'.'.$file_extension;
                $path = 'uploads/photos';
                $request ->photo ->move($path,$file_name);
            }

                $employee->photo =$file_name;



            if($request->hasFile('Certificate')) {
                $file_extensionn = $request->Certificate ->getClientOriginalName();
                $file_namee =time().'.'.$file_extensionn;
                $pathh = 'uploads/Certificate';
                $request ->Certificate ->move($pathh,$file_namee);


                $employee->Certificate =$file_namee;
            }
            */
            


            //$employee->photo = $file_name,
            $employee->name = $request->name;
            $employee->email= $request->email;
            $employee->mobile = $request->mobile;
            $employee->id_number= $request->id_number;
            $employee->gender_id= $request->gender_id;
            $employee->city_id = $request->city_id;
            $employee->address = $request->address;
            $employee->birthday = $request->birthday;
            $employee->social_id = $request->social_id;
            $employee->family = $request->family;
            //$employee->Certificate = $file_namee,
            $employee->join_date = $request->join_date;
            $employee->department_id = $request->department_id;
            $employee->job_type_id = $request->job_type_id;
            $employee->salary = $request->salary;
            $employee->curreny_id = $request->curreny_id;
            $employee->per_id = $request->per_id;
            $employee->status_id = $request->status_id;
            $employee->bank_id = $request->bank_id;
            $employee->branch_id = $request->branch_id;
            $employee->bank_account = $request->bank_account;
            $employee->iban = $request->iban;
            $employee->save();
            

            return redirect()->back()->with([

                'success' => 'Employee Updated'
            ]);
    
            

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = employee::find($id);
        $employee->delete();
        return redirect()->back()->with([

            'success' => 'Employee Deleted'
        ]);
    }

    public function print($id)
    {
        $employee = employee::find($id);
        return view('employees.print')->with('employees',$employee)
        ->with('departments',Department::all())
        ->with('banks',Bank::all())
        ->with('branches',Branch::all())
        ->with('genders',Gender::all())
        ->with('cities',City::all())
        ->with('job_types',Job_type::all())
        ->with('pers',Per::all())
        ->with('socials',Social::all())
        ->with('currenies',Curreny::all())
        ->with('statuses',Status::all());
    }

}
