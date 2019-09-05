<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryEditRequest;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCategory=Category::with('children')->whereNull('parent_id')->get()->toArray();
        // dd($listCategory);
        //toArray thì phải dùng dấu ngoặc vuông để lấy 1 phần tử trong mảng
        
        return view('category.list_cate',compact('listCategory'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create_cate');
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
        $category=Category::create($data);
        if($data){
        return redirect()->route('admin.listCate',compact('category'))->with('success','Created');    
        }
        return redirect()->back()->with('fail','Fail to update. Please check again.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        $listCategory=Category::all();
        return view('category.edit_cate',compact('category','listCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryEditRequest $request,$id)
    {
        $category=Category::find($id);
        $data=$request->all();
        $category->update($data);
        if($data){
            return redirect()->route('admin.listCate',compact('category'))->with('success','Category updated');    
        }
        return redirect()->back()->with('fail','Fail to update. Please check again.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect()->route('admin.listCate',compact('category'))->with('success','Category deleted');
    }
    public function listChildrenCategory($id){
        $children=Category::where('parent_id',$id)->get();
        
        return view('category.list_children',compact('children'));
    }
}
