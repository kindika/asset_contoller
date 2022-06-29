<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
Use Alert;
use Auth;

class LocationController extends Controller
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
    
        
        $data['location']= DB::table('locations')->where('sbu_id',Auth::user()->sbu_id)->get();    
        $data['title'] = 'Users';
        $data['template'] = 'location/index';
        return view('/template/template', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)   {

        $request->validate([
            'location_name' => ['required', 'string', 'max:255'],
               ]);
      
        $data=array(
            'location_name'=>$request->location_name,
            'sbu_id'=> Auth::user()->sbu_id,
         );

            DB::table('locations')->insert($data);
            return redirect('location')->with('success',$request->location_name.'  Created Successfully!');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLocationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        
        $request->validate([
            'location_name' => ['required', 'string', 'max:255'],
               ]);
      
        $data=array(
            'location_name'=>$request->location_name,
            'sbu_id'=> Auth::user()->sbu_id,
         );

        
            DB::table('locations')->where('location_id',$request->location_id)->update($data);
            return redirect('location')->with('success',$request->location_name.'  Update Successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLocationRequest  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocationRequest $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
