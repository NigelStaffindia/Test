<?php

namespace App\Http\Controllers;

use App\Models\AddCateory;
use Illuminate\Http\Request;
use Session;

class AddCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
		
       return view('admin.index')->with('categories',AddCateory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 
		'name'=>'required|min:3|max:5',
		]);
		
		$cate= new AddCateory();
		
		$cate['cate_name']=$request->name;
		
		
		if($cate->save()){
			
			
			Session::flash('success','Added Suuessfully');
			
			
		}
		
		return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddCateory  $addCateory
     * @return \Illuminate\Http\Response
     */
    public function show(AddCateory $addCateory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddCateory  $addCateory
     * @return \Illuminate\Http\Response
     */
    public function edit(AddCateory $addCateory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddCateory  $addCateory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddCateory $addCateory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddCateory  $addCateory
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddCateory $addCateory)
    {
       $addCateory->delete();
	   
	   return back();
	   
	   //return redirect()->route('category.create');
    }
}
