<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Http\Requests\ProductEditRequest;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $listProduct=Product::with('category')->get();
         
        return view('product.list_product',compact('listProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $listCategory=Category::all();
        return view('product.create_product',compact('listCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->except('_token');
        $product=Product::create($data);
        if($product){
            return redirect()->route('admin.listProduct')->with('success','Created');    
        }
        else{
            return redirect()->back()->with('fail','Unable to create');    
        }
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
        $product=Product::with('category')->where('id',$id)->first();
        $listCategory=Category::all();
        return view('product.edit_product',compact('product','listCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductEditRequest $request, $id)
    {
        $product=Product::with('category')->where('id',$id)->first();
        $data=$request->all();
        $product->update($data);
        if($data){
        return redirect()->route('admin.listProduct',compact('product'))->with('success','Product updated');    
        }
        return redirect()->back()->with('fail','Fail to update. Please check again.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->route('admin.listProduct',compact('product'))->with('success','Product deleted');
    }
}
