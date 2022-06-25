<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\User;
use Auth;
//use User;


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
      if( Auth:: user()->role_id=='2'){
        return view('customer.dashboard'); 
      }
      else{
        return view('admin.dashboard'); 
      }

      
     }
        
    
}
