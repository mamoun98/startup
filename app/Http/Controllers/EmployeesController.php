<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Bank;
use App\Branch;
use App\City;
use App\Jop_type;
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
        ->with('departments',Department::all());
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
        ->with('cities',City::all())
        ->with('jop_types',Jop_type::all())
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
        
            "photo" => $file_name,
            "name" => $request->name,
            "email" => $request->email,
            "mobile" => $request->mobile,
            "city_id" => $request->city_id,
            "address" => $request->address,
            "birthday" => $request->birthday,
            "social_id" => $request->social_id,
            "family" => $request->family,
            "Certificate" => $file_namee,
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
        

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        ->with('cities',City::all())
        ->with('jop_types',Jop_type::all())
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
           //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
