<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class ResetController extends Controller
{
    public function index(){
    	return view('Admin.pages.reset');
    }


    public function resetData(){
    	DB::table('posts')->truncate();
    	DB::table('categories')->truncate();
    	DB::table('category_posts')->truncate();
    	DB::table('post_tags')->truncate();
    	DB::table('tags')->truncate();

    	return redirect('admin/home');
    }
}
