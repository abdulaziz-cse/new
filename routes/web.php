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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::redirect('/','/blog');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::group(['middleware'=>['auth']],function(){
    Route::resource('admin/posts', 'Admin\\PostsController');
    Route::resource('admin/role', 'Admin\\RoleController');
    Route::resource('admin/user', 'Admin\\UserController');

});


Route::group(['middleware'=>['auth']],function(){
    Route::view('/admin', 'admin.dashboard');
    Route::resource('admin/sub', 'Admin\\SubController');

});

Route::get('/subscribe','SubscriptionController@index');
Route::post('/subscribe','SubscriptionController@store');

//Route::resource('admin/posts', 'Admin\\PostsController');
//Route::resource('admin/sub', 'Admin\\SubController');
