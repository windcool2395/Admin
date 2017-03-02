<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Cart;
use Session;
use App\OrderDetail;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $order_id = $request->get('order_id');
        if( isset($order_id)){
            $order = Order::where('id',$order_id)->get();
            $order_detail = OrderDetail::where('order_id',$order_id)->get();
        }
        return view('order.list', compact('order','order_detail'));
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
        //Hóa đơn
        $order = new Order();
        $order->user_id =1;
        $order->receiver_name = $request->receiver_name;
        $order->receiver_date = $request->receiver_date;
        $order->receiver_phone_number = $request->receiver_phone_number;
        $order->receiver_email = $request->receiver_email;
        $order->receiver_address = $request->receiver_address;
        $order->total_amount = Cart::total();
        $order->status =1;
        $order->save();
        //Chi tiết hóa đơn
        foreach (Cart::all() as $item){
            $order_detail = new OrderDetail();
            $order_detail->product_id =$item->id;
            $order_detail->order_id = $order->id;
            $order_detail->price =$item->price;
            $order_detail->quantity =$item->qty ;
            $order_detail->discount=$item->discount ;
            $order_detail->tax= 0;
            $order_detail->amount = $item->total;
            $order_detail->save();
        }
        //Xóa giỏ hàng
        Cart::destroy();
        Session::flash('success',"Thực hiện mua hàng thành công !!!");

        return redirect('cart');

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
    public function update(Request $request, $id)
    {
        //
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
