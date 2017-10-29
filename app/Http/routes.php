<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

  Route::group(['prefix'=>'admin', 'middleware'=>['web','auth']],function(){
    
  Route::get('/{site?}', ['uses'=>'AdminController@index','as'=>'adminIndex']);
    
  Route::post('/select', ['uses'=>'AdminController@select','as'=>'adminSelect']);
  Route::post('/update', ['uses'=>'AdminController@update','as'=>'adminUpdate']);
  Route::post('/softdelete',['uses'=>'AdminController@delete','as'=>'adminDelete']);
 // Route::post('/accaunt',['uses'=>'AdminController@select','as'=>'adminAccaunt']);
  
  
  
});

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
