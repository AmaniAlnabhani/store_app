<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function __contstruct(){
        $this->middleware('auth');
        $this->middleware(['role:customer']);
    
      }
      public function dashboard(){
        return view('customer.dashboard');
      }
}
