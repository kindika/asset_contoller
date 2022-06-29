<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');

        $data['title'] = 'Job Type';
       // $data['login_user'] = Auth::user();
        $data['template'] = 'dashbord/index';
      // $data['categories']= DB::table('job_types')->get();
       return view('/template/template', ['data'=>$data]);//compact('data')
    }
}
