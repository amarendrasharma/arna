<?php

use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

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

Route::get('/', function () {
    $categories = Category::with('posts')->get();
    return view('home', compact('categories'));
});
Route::get('post/{slug}', function($slug){
	$post = Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});
Route::get('/test', function(){
	$posts = Post::all();
	return view('layouts.master',compact('posts'));
});
Route::get('contact', 'ContactController@contact');
Route::post('contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
