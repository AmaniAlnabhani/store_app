<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;

class ProductsController extends Controller
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
         $data['product'] = Product::all();
        return view('product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $record = new Product;
        $record->name = $request->name;
        $record->price = $request->price;
        $record->cateogry_id = $request->cateogry_id;

        if($request->hasFile('image'))
        {
            $photo =$request->file('image');
            $path = 'uploads/products/'.time().'.'.$photo->extension();
            $photo->move(public_path('uploads/products/'), $path);
            $record->image_path = $path;
        }

        $record->save();

        return "Record is created Successfully";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data['product'] = Product::findOrFail($id);
        return view('product.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $record = Product::findOrFail($id);
        $record->name = $request->name;
        $record->price = $request->price;
        $record->cateogry_id = $request->cateogry_id;

        if($request->hasFile('image'))
        {
            $photo =$request->file('image');
            $path = 'uploads/products/'.time().'.'.$photo->extension();
            $photo->move(public_path('uploads/products/'), $path);
            $record->image_path = $path;
        }

        $record->save();

        return "Record is updated Successfully";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Product::FindOrFail($id);
        $record->delete();

        return back();
    }

}
