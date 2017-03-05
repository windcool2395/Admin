<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Session;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = '';
        if($request->get('keyword'))
        {
            $keyword= $request->get('keyword');
            $products = Product::where('name','like', '%'.$keyword.'%')->get();
        }
        else{
            $products = Product::all();
        }
        return view('admin.product.list',compact('products','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Category::all();
        return view('admin.product.create', compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request){
            $row = new Product();
            $row->name = $request->name;
            $row->price = $request->price;
            $row->thumbnail = $request->thumbnail;
            $row->category_id = $request->category_id;
            $row->discount = $request->discount;
            $row->description = $request->description;
            $row->content = $request->contentt;
            $row->author = $request->author;
            $row->publishing_date = $request->publishing_date;
            $row->publishing_company = $request->publishing_company;
            $row->number_of_pages = $request->number_of_pages;
            $row->size = $request->size;
            $row->save();
            Session::flash('success','Create Product Successfully !!!');
        }
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
        $cate = Category::all();
        $pro = Product::findOrFail($id);
        return view('admin.product.edit', compact('pro','cate'));
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
        if( isset($id) && $request != null){
            $row = Product::where('id', $id)->first();
            $row->name = $request->name;
            $row->price = $request->price;
            $row->thumbnail = $request->thumbnail;
            $row->category_id = $request->category_id;
            $row->discount = $request->discount;
            $row->description = $request->description;
            $row->content = $request->contentt;
            $row->author = $request->author;
            $row->publishing_date = $request->publishing_date;
            $row->publishing_company = $request->publishing_company;
            $row->number_of_pages = $request->number_of_pages;
            $row->size = $request->size;
            $row->save();
            Session::flash('success','Create Product Successfully !!!');
        }
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Product::findOrFail($id);
        if($row){
            $row->is_deleted = 1;
            $row->save();
            Session::flash('success','Deleted "'. $row->name. '" successfully !');
        }
        return redirect('admin/product');
    }
}
