<?php

namespace App\Http\Controllers;

use App\Models\Equpmentnames;
use App\Http\Requests\StoreEqupmentnamesRequest;
use App\Http\Requests\UpdateEqupmentnamesRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
Use Alert;
use Auth;


class EqupmentnamesController extends Controller
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
         $data['Equpname']= DB::select('select * from equpmentnames');
        $data['title'] = 'Equpment Name';
        $data['template'] = 'equpment/index';
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
            'equpmentname' => ['required', 'string', 'max:255'],
               ]);

        $data=array(
            'equpmentname'=>$request->equpmentname,
         );

            DB::table('equpmentnames')->insert($data);
            return redirect('equpmentnames')->with('success',$request->location_name.'  Created Successfully!');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEqupmentnamesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEqupmentnamesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equpmentnames  $equpmentnames
     * @return \Illuminate\Http\Response
     */
    public function show(Equpmentnames $equpmentnames)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equpmentnames  $equpmentnames
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $request->validate([
            'equpmentname' => ['required', 'string', 'max:255'],
               ]);

        $data=array(
            'equpmentname'=>$request->equpmentname,
         );


            DB::table('equpmentnames')->where('equpmentname_id',$request->equpmentname_id )->update($data);
            return redirect('equpmentnames')->with('success',$request->location_name.'  Update Successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEqupmentnamesRequest  $request
     * @param  \App\Models\Equpmentnames  $equpmentnames
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEqupmentnamesRequest $request, Equpmentnames $equpmentnames)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equpmentnames  $equpmentnames
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equpmentnames $equpmentnames)
    {
        //
    }
}
