<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\blog\tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = tag::all()->sortByDesc("id");  
         return view('admin.pages.view-tags', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            return view('Admin.pages.tag');
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
                'tag_name' => 'required',
                'tag_slug' => 'required',
        ]);
        $create = new tag;
        $create->name = $request->tag_name;
        $create->slug = $request->tag_slug;
        $create->save();
        session()->flash('messaage', 'Tag inserted Successfully !');
        return redirect()->route('tags.create');
        
 
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
        $data = tag::find($id);
        return view('admin.pages.edit-tag', compact('data'));
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
                'tag_name' => 'required',
                'tag_slug' => 'required',
        ]);
        $create =  tag::find($id);
        $create->name = $request->tag_name;
        $create->slug = $request->tag_slug;
        $create->save();
        session()->flash('messaage', 'Tag edited Successfully !');
        return redirect()->route('tags.index');
        
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
