<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProductsController extends Controller
{
    //

public function __construct()
    {
        $this->middleware('auth');
    }
public function store(Request $request){
    //return $request;
    
        $product = new Product();
     $product->name=$request->name;
     $product->price=$request->price;
     $product->section=$request->section;
     $product->quantity=$request->quantity;
     $product->attachment=$request->attachment;
     
     $product->save();
    
 return "Record is created succefuly";


}


}
