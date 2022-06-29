<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sub;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
Use Alert;
use Auth;

class UserController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
    
    public function index()
    {

        
     $usersAll= DB::table('users')->select('users.id','users.name','users.email','users.admin','users.boardroom','users.sbu_id','users.status','subs.sbu_prefixes','subs.logoname','subs.sbu_name')->join('subs','subs.sbu_id','=','users.sbu_id')->get();
        
    $data['sbu_data']=DB::select('select * from subs');
    $data['usersAll']= $usersAll;
    $data['title'] = 'Users';
    $data['template'] = 'users/index';
    return view('/template/template', compact('data'));
    }



    public function crate(Request $request){       
      

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'status' => ['required', 'string'],         
        ]);
      
        $data=array(
            'name'=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
            "admin"=>$request->admin,
            "boardroom"=>$request->boardroom,
            "sbu_id"=>$request->sbu_id,//
            "status"=>$request->status,
            "created_at"=>date('Y-m-d')
            );

            DB::table('users')->insert($data);
            return redirect('uses')->with('success',$request->name.'  Created Successfully!');


    }



    
    public function update (Request $request){       
      

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
         //   'password' => ['required', 'string', 'min:8'],
            'status' => ['string'],         
        ]);
      
        $data=array(
            'name'=>$request->name,
            "email"=>$request->email,
          //  "password"=>Hash::make($request->password),
            "admin"=>$request->admin,
            "boardroom"=>$request->boardroom,
            "sbu_id"=>$request->sbu_id,//
            "status"=>$request->status,
            "updated_at"=>date('Y-m-d')
            );

            DB::table('users')->where('id',$request->id)->update($data);

          //  DB::table('subs')->where('sbu_id',$request->sbu_id)->update(['sbu_name'=>$request->sbu_name]);

            return redirect('uses')->with('success',$request->name.'  Created Successfully!');


    }



     
    public function  updatepass (Request $request){       
      

        $request->validate([           
          'password' => ['required', 'string', 'min:8']                   
        ]);
      
        $data=array(
            "password"=>Hash::make($request->password),            
            "updated_at"=>date('Y-m-d')
            );

            DB::table('users')->where('id',$request->id)->update($data);
       
            return redirect('uses')->with('success',' Password  Update Successfully!');


    }





    public function logout(Request $request) {
     Auth::logout();
     $request->session()->flush();
     return redirect('/login');
    }
   

   

}
