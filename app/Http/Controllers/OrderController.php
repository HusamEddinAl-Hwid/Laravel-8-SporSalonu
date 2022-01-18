<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Order::where('user_id',Auth::id())->get();
        $includeWhenYes = false;
        return view('home.user_orders', ['datalist' => $datalist,'includeWhenYes'=>$includeWhenYes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {
        $includeWhenYes = false;
        $data = Product::find($id);
        #$months = $request->input('months');
        #$price = $request->input('price');
        return view('home.user_order_add',compact('data','includeWhenYes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #Get Credit Card information send to bank webservice if everything is ok next

        $data = new Order();
        $data->product_id = $request->input('product_id');
        $data->user_id = Auth::id();
        $data->start_date = $request->input('start_date');
        $data->finish_date = $request->input('finish_date');
        $data->months = $request->input('months');
        $data->price = $request->input('price');
        $data->total = $request->input('total');
        $data->payment = $request->input('payment');
        $data->IP = $_SERVER['REMOTE_ADDR'];
        $data->save();
        return redirect()->route('user_orders')->with('success','Subscription Completed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order,$id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
