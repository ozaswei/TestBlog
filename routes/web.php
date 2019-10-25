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

use Illuminate\Support\Facades\Config;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::group(['namespace' => 'frontend'],function(){

    Route::get('/','AppController@index')->name('my_home_route');

    Route::get('/about','AppController@about')->name('my_about_route');

    Route::get('/contact','AppController@contact')->name('my_contact_route');

    Route::get('/insert','AppController@insert');

});

Route::group(['prefix'=>Config::get('site.admin'),'namespace'=>'backend'],function(){

    Route::get('/','BackendController@index');
});


