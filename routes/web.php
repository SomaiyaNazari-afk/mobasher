roo<?php

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
    return view('welcome');
});
Auth::routes();

Route::get('/dashboard', function () {
    return view('pharmacy.dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('pharmacy')->middleware(['auth'])->group(function() {


    Route::get('/', 'PharmacyController@index');
});

Route::get('/user_list', function () {
    return view('pharmacy.user_list');
});
Route::get('/pharmacy_list', function () {
    return view('pharmacy.pharmacy_list');
});

Route::post('create', 'UserController@create');


Route::get('/pharmacy', ['as' => 'pharmacy.user_list', 'uses' => 'PharmacyController@index']);

Route::post('/pharmacy', ['as' => 'pharmacy.store', 'uses' => 'UserController@store']);

//Route::group(['middleware' => ['auth', 'admin']], function() {
//
//    Route::get('/dashboard', function () {
//        return view('pharmacy.dashboard');
//    });
//
//    Route::get('create', 'UserController@index');
//
//});
//
//Route::post('/pharmacy', ['as' => 'pharmacy.store', 'uses' => 'UserController@store']);
