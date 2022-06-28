<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class sectionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
public function store(Request $request){
    return $request;
    
    $section = new Section();
    $section->id=$request->id;
     $section->name=$request->name;
     
     $section->save();
    
 return "Record is created succefuly";


}
}
