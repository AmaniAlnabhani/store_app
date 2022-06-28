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

     if(Auth::check()){
     $product = new Product();
     $product->name=$request->name;
     $product->price=$request->price;
     $product->section=$request->section;
     $product->quantity=$request->quantity;
     $product->attachment=$request->attachment;
     $product->save();
     return "Product is created Seccessfully";

     }else{
           return redirect('home');
     }

    }

    public function list()
    {
        $data['product'] = Product::all();

        return view('product/list', $data);
    }


}
