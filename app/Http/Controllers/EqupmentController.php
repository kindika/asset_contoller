<?php

namespace App\Http\Controllers;

use App\Models\Equpment;
use App\Http\Requests\StoreEqupmentRequest;
use App\Http\Requests\UpdateEqupmentRequest;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
Use Alert;
use Auth;


class EqupmentController extends Controller
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
        $data['equname']= DB::table('equpmentnames')->get(); //->where('sbu_id',Auth::user()->sbu_id)
        $data['emps']= DB::table('emps')->get();
        $data['supplier']= DB::table('suppliers')->get();
        $data['location']= DB::table('locations')->get();
        $data['sbu_data']=DB::select('select * from subs');
        $data['title'] = 'New Equpment';
        $data['template'] = 'itequpment/index';
        return view('/template/template', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {






     if(!empty(Auth::user()->admin)){

        $request->validate([
            'equpmentname_id' => 'required | string | max:255 ',
            'manufacture' => 'required | string | max:255 ',
            'model' => 'required | string | max:255 ',
            'sn' => 'required | string | max:255 ',
            'sbu_id' => 'required | string | max:255 ',
            'cost' => 'required | string | max:255 ',
            'invoice_no' => 'required | string | max:255 ',
            'location_id' => 'required | string | max:255 ',
        ]);

        if(empty(DB::table('equpments')->where('sbu_id',$request->sbu_id)->orderBy('itequp_id', 'DESC')->value('itequp_id'))){
            $prefex= DB::table('subs')->where('sbu_id',$request->sbu_id)->value('sbu_prefixes');
            $number = $prefex."-".str_pad("1", 5, '0', STR_PAD_LEFT);
        }
        else{
          $itequp_id  =DB::table('equpments')->where('sbu_id',$request->sbu_id)->orderBy('itequp_id', 'DESC')->value('equ_number');
          $expo=explode("-",$itequp_id ); $number = $expo[0]."-".str_pad($expo[1]+1, 5, '0', STR_PAD_LEFT);

        }

     }
     else{

        $request->validate([
            'equpmentname_id' => 'required | string | max:255 ',
            'manufacture' => 'required | string | max:255 ',
            'model' => 'required | string | max:255 ',
            'sn' => 'required | string | max:255 ',
          //  'sbu_id' => 'required | string | max:255 ',
           // 'cost' => 'required | string | max:255 ',
           // 'invoice_no' => 'required | string | max:255 ',
            'location_id' => 'required | string | max:255 ',
            'user_details' => 'required | string ',
        ]);

        // normal user
        if(empty(DB::table('equpments')->where('sbu_id',Auth::user()->sbu_id)->orderBy('itequp_id', 'DESC')->value('itequp_id'))){
            $prefex= DB::table('subs')->where('sbu_id',Auth::user()->sbu_id)->value('sbu_prefixes');
            $number = $prefex."-".str_pad("1", 5, '0', STR_PAD_LEFT);
        }
        else{
          $itequp_id  =DB::table('equpments')->where('sbu_id',Auth::user()->sbu_id)->orderBy('itequp_id', 'DESC')->value('equ_number');
          $expo=explode("-",$itequp_id );
          $number = $expo[0]."-".str_pad($expo[1]+1, 5, '0', STR_PAD_LEFT);



        }

     }


     if (!empty(Auth::user()->admin)) {
         $fileName = $number.'.'.$request->file->extension();
         $request->file->move(public_path('invoice'), $fileName);

         $data=array(
                'equ_number'=>$number,
                'equpmentname_id'=>$request->equpmentname_id,
                'manufacture'=>$request->manufacture,
                'model'=>$request->model,
                'sn'=>$request->sn,
                'sbu_id'=>$request->sbu_id,
                'location_id'=>$request->location_id,
                'emp_id'=>$request->emp_id,
                'invoice_name'=>$fileName,
                'admin_details'=>$request->admin_details,
                'cost'=>$request->cost,
                'invoice_no'=>$request->invoice_no,
                'suppliers_id'=>$request->suppliers_id,
                'user_details'=>'N/A',
             );


     }
     else{

        $data=array(
                'equ_number'=>$number,
                'equpmentname_id'=>$request->equpmentname_id,
                'manufacture'=>$request->manufacture,
                'model'=>$request->model,
                'sn'=>$request->sn,
                'sbu_id'=>Auth::user()->sbu_id,
                'location_id'=>$request->location_id,
                'emp_id'=>$request->emp_id,
                'invoice_name'=>'',
                'admin_details'=>'-',
                'cost'=>'',
                'invoice_no'=>'',
                'suppliers_id'=>'',
                'user_details'=>$request->user_details,
             );



     }

                DB::table('equpments')->insert($data);

                $itequp_id=DB::getPdo()->lastInsertId();
                return redirect('equdetails/'. $itequp_id)->with('success',$request->location_name.'  Update Successfully!');




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEqupmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEqupmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equpment  $equpment
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
     $itequp_id=  $request->itequp_id;

    $equid=DB::table('equpments')->where('itequp_id', '=', $request->itequp_id)->pluck('itequp_id');  // "5"

     if(!empty($equid)){

      $all=  DB::table('equpments')
      ->select('equpments.itequp_id',
      'equpments.equ_number',
      'equpments.manufacture',
      'equpments.model',
      'equpments.sn',
      'equpments.sbu_id',
      'equpments.location_id',
      'equpments.emp_id',
      'equpments.invoice_name',
      'equpments.admin_details',
      'equpments.user_details',
      'equpments.it_equ_status',
      'emps.emp_id',
      'emps.emp_name',
      'emps.emp_nic',
      'emps.emp_email',
      'emps.emp_mobile_no',
      'emps.sbu_id',
      'emps.job_role',
      'emps.emp_id',
      'equpmentnames.equpmentname_id',
      'equpmentnames.equpmentname',
      'subs.sbu_id',
      'subs.sbu_name',
      'locations.location_id',
      'locations.location_name',
      'emps.emp_id',
      'emps.emp_name'
      )
      ->join('emps','emps.emp_id','=','equpments.emp_id')
      ->join('equpmentnames','equpmentnames.equpmentname_id','=','equpments.equpmentname_id')
      ->join('subs','subs.sbu_id','=','equpments.sbu_id')
      ->join('locations','locations.location_id','=','equpments.location_id')
     //  ->join('emps','emps.emp_id','=','equpments.emp_id')
      ->where(['equpments.itequp_id' => $itequp_id])
      ->get()->toArray();


        $data['oneitem']=$all;
        $data['title'] = 'New Equpment';
        $data['location']= DB::select('select * from locations');
        $data['responsperson']= DB::select('select * from emps');
        $data['template'] = 'itequpment/view';
        return view('/template/template', compact('data'));


     }
     else{
        return redirect('/home');
     }



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equpment  $equpment
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        if(!empty(Auth::user()->admin)){

            $data=array(
                'emp_id'=>$request->emp_id,
                'location_id'=>$request->location_id,
                'it_equ_status'=>$request->it_equ_status,
             );


            DB::table('equpmentnames')->where('equpmentname_id',$request->equpmentname_id )->update($data);
            return redirect('equpmentnames')->with('success',$request->location_name.'  Update Successfully!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEqupmentRequest  $request
     * @param  \App\Models\Equpment  $equpment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEqupmentRequest $request, Equpment $equpment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equpment  $equpment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equpment $equpment)
    {
        //
    }
}
