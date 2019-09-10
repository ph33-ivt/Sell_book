<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use Session;
use App\Cart;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listProduct=Product::all();
        return view('user.index',compact('listProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listCategory=Category::all();
        return view('product.list_product',compact('listCategory'));
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
            return redirect()->route('listProduct')->with('success','Created');    
        }
        else{
            return redirect()->back()->with('fail','Unable to create');    
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::with('category')->where('id',$id)->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    public function getAddToCart(Request $request,$id)
    {
        $product=Product::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->add($product,$product->id);
        $request->session()->put('cart',$cart);
        return redirect()->route('user.listProduct');
    }
    public function getCart()
    {
        if(!Session::has('cart')){
            return view('user.shoppingcart');
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        return view('user.shoppingcart',['listProduct'=>$cart->items, 'totalprice'=>$cart->totalprice]);
    }
    public function getCheckout()
    {
        if(!Session::has('cart')){
            return view('user.shoppingcart');
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $total= $cart->totalprice;
        return view('user.checkout',['total'=>$total]);
    }
    public function Checkout()
    {
        
    }
}
