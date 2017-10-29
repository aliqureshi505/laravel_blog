<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\blog\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = category::all()->sortByDesc("id");
        return view('Admin.pages.view-category', compact('records'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.pages.category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'category_name' => 'required',
                'category_slug' => 'required',
        ]);
        $create = new category;
        $create->name = $request->category_name;
        $create->slug = $request->category_slug;
        $create->save();
        session()->flash('message', 'Category added successfully !');
        return redirect()->route('category.create');
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
        $data = category::find($id);
        return view('admin.pages.edit-category', compact('data'));
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
        $this->validate($request, [
                'category_name' => 'required',
                'category_slug' => 'required',
        ]);
        $create =  category::find($id);
        $create->name = $request->category_name;
        $create->slug = $request->category_slug;
        $create->save();
        session()->flash('message', 'Category Edited successfully !');
        return redirect()->route('category.index');
    
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
