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
        //
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
        //
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
