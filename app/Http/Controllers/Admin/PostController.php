<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\blog\category;
use App\blog\post;
use App\blog\tag;
use Illuminate\Http\Request;
class PostController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$records = post::all()->sortByDesc("id");
return view('admin.pages.view-post', compact('records'));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
	$tags = tag::all()->sortByDesc("id");
	$category = category::all()->sortByDesc("id");
	return view('admin.pages.posts', compact('tags', 'category'));
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
'post_title' => 'required',
'post_slug' => 'required',
'post_content' => 'required'
]);
if ($request->hasFile('post_image') ) {
	$imagename = $request->post_image->store('public');
}
$post = new post;
$post->Ttile = $request->post_title ;
$post->content  = htmlspecialchars($request->post_content);
$post->slug  = $request->post_slug;
if(isset($imagename)){
$post->image  = $imagename;
}
if($post->save())
{
$post->tags()->sync($request->tags);
$post->categories()->sync($request->categories);
session()->flash('message', 'Post Created Successfully ! ');
}
return redirect('admin/post');
}
/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
}
/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
	$data = post::with('tags', 'categories')->WHERE('id', $id)->first();
	$tags = tag::all()->sortByDesc("id");
	$category = category::all()->sortByDesc("id");
return view( 'admin.pages.edit-post',compact('tags', 'category','data'));
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
'post_title' => 'required',
'post_slug' => 'required',
'post_content' => 'required'
]);
if ($request->hasFile('post_image') ) {
	$imagename = $request->post_image->store('public');
}

$post =   post::find($id);
$post->Ttile = $request->post_title ;
$post->content  = htmlspecialchars($request->post_content);
$post->slug  = $request->post_slug;
if(isset($imagename)){
$post->image  = $imagename;
}
$post->save();
$post->tags()->sync($request->tags);
$post->categories()->sync($request->categories);
return redirect()->route('post.index');
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
post::destroy($id);
session()->flash('message', 'Post deleted successfully !');
return redirect()->back();
}
}