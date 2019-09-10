<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

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
        $listProduct=Product::all();
        if(\Auth::user()->role_id==1){
            return redirect()->route('admin.dashboard');
        }
        
        return view('home',compact('listProduct'));
    }
}
