<?php

namespace App\Http\Controllers;
use App\Models\Sub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Alert;

use auth;



//use App\Http\Controllers\SubController;

class SubController extends Controller
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
    $data['sbu_data']=DB::select('select * from subs');
    $data['title'] = 'Dashboard';
    $data['template'] = 'sbu/index';
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
            'sbu_name' => 'required | string | max:255 ', 
            'sbu_prefixes' => 'required | string | max:255 ',          
        ]);

        
        

        $data=array(
            'sbu_name'=>$request->sbu_name,
            "adderss"=>$request->adderss,
            "contact_person"=>$request->contact_person,
            "sbu_prefixes"=>$request->sbu_prefixes,
            );

            DB::table('subs')->insert($data);
            return redirect('sbu')->with('success', $request->sbu_name.'  Created Successfully!');

    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subs=new SubController;
        $subs->sbu_name=$request->sbu_name;
        $subs->adderss=$request->adderss;
        $subs->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function show(Sub $sub)
    {
       
        $sql = "SELECT distinct sbu_id,sbu_name,adderss,contact_person FROM subs  ";
        return DB::select( DB::raw($sql), $params);

 /* inner join brand on product.brand_id = brand.brand_id
        inner join brand_area on brand_area.brand_id = brand.brand_id
        inner join area on area.area_id = brand_area.area_id
        inner join product_offer on product_offer.product_id = product.product_id
        where area.area_id = :area
        and product.size_id = :size 
        */

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
    
        $request->validate([
            'sbu_name' => 'required | string | max:255 ', 
            'sbu_prefixes' => 'required | string | max:255 ',          
        ]);

        $data=array(
            'sbu_name'=>$request->sbu_name,
            "adderss"=>$request->adderss,
            "contact_person"=>$request->contact_person,
            "sbu_prefixes"=>$request->sbu_prefixes,
            );

            DB::table('subs')->where('sbu_id',$request->sbu_id)->update(['sbu_name'=>$request->sbu_name]);
            return redirect('sbu')->with('success', $request->sbu_name.'  Update Successfully!');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubRequest  $request
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
        $validatedData = $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    
           ]);
  
    $fileName = $request->sbu_id.'.'.$request->file->extension();     
    $request->file->move(public_path('logo'), $fileName);

    DB::table('subs')->where('sbu_id',$request->sbu_id)->update(['logoname'=>$fileName]);
    return redirect('sbu')->with('success', $request->sbu_name.'  Update Successfully!');

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sub $sub)
    {
        //
    }
}
