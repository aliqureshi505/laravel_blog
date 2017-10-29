<?php
namespace App\Http\Controllers\Blog;
use App\Http\Controllers\Controller;
use App\blog\post;
use Illuminate\Http\Request;
class HomeController extends Controller
{
public function index(){
	$data =  Post::orderBy('id', 'desc')->paginate(8);;
	return view('blog.index', compact('data'));
}

public function single(post $slug){
	
	return view('blog.single-post', compact('slug'));
}

}