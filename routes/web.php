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
//Route::get('/','CRUDController@sheit');
Route::get('post',function (){
    //$name =request('name');
    return view('post',[
        'name'=>request('name')
    ]);

});
//Route::get('/', function () {
//
//    return view('master');
//});
//
//Route::get('register',function(){
// return view('register');
//});
//
//Route::prefix('products')->group(function() {
//    Route::get('list', ['as' => 'products.index', 'uses' => 'ProductController@index']);
//    Route::post('list', ['as' => 'products.store', 'uses' => 'ProductController@store']);
//    //Route::get('list', ['as' => 'products.store', 'uses' => 'ProductController@store']);
//    Route::get('shelf' ,function() {
//        return view('shelf');
//    });
//
//});


