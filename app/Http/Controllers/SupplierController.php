<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
Use Alert;
use Auth;


class SupplierController extends Controller
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
       
       
//->where('sbu_id',Auth::user()->sbu_id)->get()->all()
        $data['sbu_data']=DB::select('select * from suppliers ');
        $data['title'] = 'Dashboard';
        $data['template'] = 'suppliers/index';
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
            'suppliers_company_name' => ['required', 'string', 'max:255'],
            'suppliers_contact_person' => ['required', 'string', 'max:255'],
            'suppliers_contact_number' => ['required', 'string', 'max:255'],
            'suppliers_contact_email' => ['required', 'string', 'max:255'],            
               ]);
      
        $data=array(
            'suppliers_company_name'=>$request->suppliers_company_name,
            'suppliers_contact_person'=>$request->suppliers_contact_person,
            'suppliers_contact_number'=>$request->suppliers_contact_number,
            'suppliers_contact_email'=>$request->suppliers_contact_email, 
             'sbu_id'=> Auth::user()->sbu_id,
         );

            DB::table('suppliers')->insert($data);
            return redirect('Supplier')->with('success',$request->suppliers_company_name.'  Created Successfully!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupplierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplierRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $request->validate([
            'suppliers_company_name' => ['required', 'string', 'max:255'],
            'suppliers_contact_person' => ['required', 'string', 'max:255'],
            'suppliers_contact_number' => ['required', 'string', 'max:255'],
            'suppliers_contact_email' => ['required', 'string', 'max:255'],            
               ]);
      
        $data=array(
            'suppliers_company_name'=>$request->suppliers_company_name,
            'suppliers_contact_person'=>$request->suppliers_contact_person,
            'suppliers_contact_number'=>$request->suppliers_contact_number,
            'suppliers_contact_email'=>$request->suppliers_contact_email, 
             'sbu_id'=> Auth::user()->sbu_id,
         );

         DB::table('suppliers')->where('suppliers_id',$request->suppliers_id)->update($data);
         return redirect('Supplier')->with('success',$request->suppliers_company_name.'  Update Successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierRequest  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
