<?php

namespace App\Http\Controllers;

use App\Models\Emp;
use App\Http\Requests\StoreEmpRequest;
use App\Http\Requests\UpdateEmpRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
Use Alert;
use Auth;

class EmpController extends Controller
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
        $data['emp_details']= DB::table('emps')->where('sbu_id',Auth::user()->sbu_id)->get();    
        $data['title'] = 'EMP Details';
        $data['template'] = 'emp/index';
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
            'emp_name' => ['required', 'string', 'max:255'],
            'emp_nic' => ['required', 'string', 'max:255'],
            'job_role' => ['required', 'string', 'max:255'],
            'emp_mobile_no' => ['string', 'max:255'],
            
               ]);
      
        $data=array(
            'emp_name'=>$request->emp_name,
            'emp_nic'=>$request->emp_nic,
            'emp_email'=>$request->emp_email,
            'emp_mobile_no'=>$request->emp_mobile_no,
            'job_role'=>$request->job_role,

            'sbu_id'=> Auth::user()->sbu_id,
         );

            DB::table('emps')->insert($data);
            return redirect('emplist')->with('success',$request->emp_name.'  Created Successfully!');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function show(Emp $emp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $request->validate([
            'emp_name' => ['required', 'string', 'max:255'],
            'emp_nic' => ['required', 'string', 'max:255'],
            'job_role' => ['required', 'string', 'max:255'],
            'emp_mobile_no' => ['string', 'max:255'],
            
               ]);
      
        $data=array(
            'emp_name'=>$request->emp_name,
            'emp_nic'=>$request->emp_nic,
            'emp_email'=>$request->emp_email,
            'emp_mobile_no'=>$request->emp_mobile_no,
            'job_role'=>$request->job_role,
         );

         DB::table('emps')->where('emp_id',$request->emp_id)->update($data);
            return redirect('emplist')->with('success',$request->emp_name.'  Created Successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmpRequest  $request
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmpRequest $request, Emp $emp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emp  $emp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emp $emp)
    {
        //
    }
}
