<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function __contstruct(){
    $this->middleware('auth');
    $this->middleware(['role:administrator']);

  }
  public function dashboard(){
    return view('admin.dashboard');
  }
}
