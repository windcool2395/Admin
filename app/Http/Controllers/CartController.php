<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Session;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.list');
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
        $id= $request->id;
        $name = $request->title;
        $thumbnail = $request->thumbnail;
        $price = $request->price;
        $sl = $request->sl;
        $discount = $request->discount;
        Cart::add($id, $name, $sl,$price,['discount'=>$discount,'thumbnail' => $thumbnail]);
        Session::flash('success',"Thêm sản phẩm vào giỏ hàng thành công !!!");

        return redirect('admin/product');
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
        if($request->qty >=1){
            foreach (Cart::all() as $item){
                if($item->id == $id){
                    Cart::update($item-> __raw_id, ['qty'=> $request->qty]);
                    break;
                }
            }
            Session::flash('success',"Cập nhật số lượng giỏ hàng thành công !!!");
        }
        else{
            Session::flash('success',"Số lượng phải >= 1 !!!");
        }

        return redirect('cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        foreach (Cart::all() as $item){
            if($item->id == $id){
                Cart::remove($item-> __raw_id);
                break;
            }

        }
        Session::flash('success',"Cập nhật giỏ hàng thành công !!!");
        return redirect('cart');
    }
}
