<?php

namespace App\Http\Controllers;

use App\Models\Deparment;
use App\Http\Requests\StoreDeparmentRequest;
use App\Http\Requests\UpdateDeparmentRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
Use Alert;
use Auth;

class DeparmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['department']= DB::select('select * from departments');;    
        $data['title'] = 'Department';
        $data['template'] = 'department/index';
        return view('/template/template', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'deparment' => ['required', 'string', 'max:255'],
               ]);
      
        $data=array(
            'deparment'=>$request->deparment,
            'sbu_id'=> Auth::user()->sbu_id,
         );

            DB::table('departments')->insert($data);
            return redirect('department')->with('success',$request->deparment.'  Created Successfully!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDeparmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeparmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deparment  $deparment
     * @return \Illuminate\Http\Response
     */
    public function show(Deparment $deparment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deparment  $deparment
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        
        $request->validate([
            'deparment' => ['required', 'string', 'max:255'],
               ]);
      
        $data=array(
            'deparment'=>$request->deparment,
         );

        
            DB::table('departments')->where('deparment_id',$request->deparment_id)->update($data);
            return redirect('department')->with('success',$request->deparment.'  Update Successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeparmentRequest  $request
     * @param  \App\Models\Deparment  $deparment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeparmentRequest $request, Deparment $deparment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deparment  $deparment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deparment $deparment)
    {
        //
    }
}
