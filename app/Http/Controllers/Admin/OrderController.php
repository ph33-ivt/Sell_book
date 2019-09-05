<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Mail\ConfirmOrder;
use App\Http\Requests\ConfirmRequest;
use App\Http\Requests\OrderEditRequest;
// use App\OrderDetail;
use App\Order;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formConfirm(){
        return view('admin.confirmorder');
    }
    public function sendConfirmOrder(ConfirmRequest $request){
        $confirm=$request->all();
        \Mail::to(config('constant.ADMIN_MAIL'))->send(new ConfirmOrder);
        return redirect()->back()->with('success',trans('messages.success'));
    }

    public function index()
    {
        $listOrder=Order::with('user')->get();
      
        // $orderdetail=OrderDetail::with('order_details')->get();
        return view('order.list_order', compact('listOrder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrderEditRequest $request, $id)
    {
        $order=Order::find($id);
        $data=$request->all();
        $order->update($data);
        if($data){
            return redirect()->route('admin.listOrder')->with('success','Order updated');
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
        //
    }
}
