<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bank;

class BanksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('banks.index')->with('banks',bank::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banks.create');
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
                        'name' => ['required','unique:banks']
                    ]);
                    
                    $bank = new bank;
                    $bank->name = $request->name;
                    $bank->save();
        
                    return redirect()->back()->with([

                        'success' => 'Bank Added'
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
        $bank = bank::find($id);
        return view('banks.edit')->with('bank',$bank);
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
        $bank = bank::find($id);
        $bank->name = $request->name;
        $bank->save();
        return redirect()->back()->with([

            'success' => 'Bank Updated'
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
        $bank = bank::find($id);
        $bank->delete();

        return redirect()->back()->with([

            'success' => 'Bank Deleted'
        ]);
    }
}
