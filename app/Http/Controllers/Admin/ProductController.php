<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Http\Requests\ProductEditRequest;
use App\Traits\UploadTrait;
use App\User;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function index()
    {
         $listProduct=Product::paginate(5);

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
        $product=Product::all();
        return view('product.create_product',compact('listCategory','product'));
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
    public function updateProImage(Request $request,$id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        if ($request->has('product_image')) {
            $image = $request->file('product_image');
            $name = str_slug($request->input('name')).'_'.time();
            $folder = '/public/images/product/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();

            $this->uploadOne($image, $folder, 'public', $name);          
            $product->product_image = $filePath;
        }
           
            $product->save();
            return redirect()->route('admin.listProduct');
    }
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
    public function detail($id){
        $product=Product::find($id);
        $listProduct=Product::all();
        return view('product.detail_product',compact('product','listProduct'));
    }
    public function getSearch(Request $request)
    {
        $products=Product::where('name','like','%'.$request->search.'%')
                        ->orWhere('price',$request->search)
                        ->get();

        return view('product.search',compact('products'));
    }
}
