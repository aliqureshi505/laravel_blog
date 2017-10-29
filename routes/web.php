<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Blog Routes
Route::group(['namespace' => 'blog'], function () {
// group route is created (Group route is not valid for url its only deals the folder Admin\PostController) If you want to do for your URL's then use prefix
Route::get('/', 'HomeController@index');
Route::get('/zzz', function () {
return bcrypt('123456');
});
Route::get('/post/{slug}', 'HomeController@single');
});
// Admin Routes
Route::group(['namespace' => 'admin', 'middleware' => 'auth'], function () {
// group route is created (Group route is not valid for url its only deals the folder Admin\PostController) If you want to do for your URL's then use prefix
Route::get('admin/home', 'HomeController@index');
Route::resource('admin/post', 'PostController');
Route::resource('admin/category', 'CategoryController');
Route::resource('admin/tags', 'TagsController');
Route::resource('admin/user-roles', 'UserRolesController');
Route::get('admin/reset', 'ResetController@index');
Route::post('admin/reset/proceed', 'ResetController@resetData');
// Route::get('admin/login', function(){
//     return view('Admin.pages.admin-login');
// });
});
Route::get('admin/login', '\App\Http\Controllers\Auth\LoginController@showLoginForm');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');