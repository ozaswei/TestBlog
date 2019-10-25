<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});

//Blog routes
Route::group(['prefix'=>'blog','namespace'=>'frontend'],function(){

    Route::get('get','ApiController@getBlogs');
    Route::get('get/{id}','ApiController@getSingleBlog')->where('id','[0-9]+');//this indicates that id should be an integer
    Route::post('insert','ApiController@InsertBlog');
    Route::patch('update','ApiController@UpdateBlog');
    Route::get('delete/{id}','ApiController@DeleteBlog')->where('id','[0-9]+');

});


