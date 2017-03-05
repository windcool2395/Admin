<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        $list = Category::all();
        $keyword = '';
        if($request->get('keyword'))
        {
            $keyword= $request->get('keyword');
            $list = Category::where('title','like', '%'.$keyword.'%')->get();
        }
        else{
            $list = Category::all();
        }
        //$list = Category::select('tên trường 1', 'tên trường 2')->where()->get();
        return view('admin.category.list', compact('list','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->title){
            $row = new Category();
            $row->title = $request->title;
            $row->save();
            Session::flash('success','Create Category Successfully !!');
        }
        return redirect('admin/category');
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
        $cate = Category::findOrFail($id);
        return view('admin.category.edit', compact('cate'));
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
        if(isset($id) && $request->title != null){
            $row = Category::where('id', $id)->first();
            $row->title = $request->title;
            $row->save();
            Session::flash('success', 'Update item successfully !' );
        }
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Category::findOrFail($id);
        //$row = Category::where('id', $id)-> first();
        if( $row){
            $row->delete();
            Session::flash('success', 'Deleted "'.$row->title .'" successfully !' );
        }

        return redirect('admin/category');
    }
}
