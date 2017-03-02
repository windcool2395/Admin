<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Session;
class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Image::all();
        return view('upload.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( $request->hasFile('image')){
            $file_name = $request->file('image')->getClientOriginalName();
            $file_size = $request->file('image')->getSize();
            $file_url = $request->file('image')->getRealPath();
            $file_type = $request->file('image')->getMimeType();
            $filePath = public_path('/uploads/');
            $request->file('image')->move($filePath, $file_name);
            $item = new Image();
            $item->name = $file_name;
            $item->size = $file_size;
            $item->url = $file_url;
            $item->type = $file_type;
            $item->product_id = 1;
            $item->save();
            Session::flash('success','Upload Image Successfully !!');
        }
        return redirect('upload');
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
