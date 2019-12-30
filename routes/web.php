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

//Route::get('/profile', function () { //means any variable before profile, No need to type that variable
//    return view('users.profile');
//});

Auth::routes();


Route::middleware('auth')->group(function (){
    Route::get('/phpinfo', function() {
        phpinfo();
    });
    Route::get('/dashboard', function () {
        return view('pharmacies.dashboard');
    });

//    Route::post('users/{id}/destroy', 'UserController@destroy');
//    Route::resource('users', 'UserController');


    Route::prefix('users')->group(function() {
        Route::get('list', 'UserController@index')->middleware('admin');
        Route::get('users', ['as' => 'users.list', 'uses' => 'UserController@index']);

        Route::get('create', 'UserController@create');
        Route::post('users', ['as' => 'users.save', 'uses' => 'UserController@save']);
        Route::delete('users/{user}', ['as' => 'users.destroy', 'uses' => 'UserController@destroy']);

        Route::get('/{user}/edit', ['as' => 'users.edit', 'uses' => 'UserController@edit']);
        Route::put('/{user}/edit', ['as' => 'users.update', 'uses' => 'UserController@update']);

        Route::get('/{user}/show', ['as' => 'users.show', 'uses' => 'UserController@show']);


    });

    Route::middleware('admin')->prefix('pharmacies')->group(function () {
        Route::get('create', 'PharmacyController@create');
        Route::post('/list', ['as' => 'pharmacies.store', 'uses' => 'PharmacyController@store']);

        Route::get('/{pharmacy}/edit', ['as' => 'pharmacies.edit', 'uses' => 'PharmacyController@edit']);
        Route::put('/{pharmacy}/edit', ['as' => 'pharmacies.update', 'uses' => 'PharmacyController@update']);

        Route::get('list', ['as' => 'pharmacies.list', 'uses' => 'PharmacyController@index']);
        Route::get('/{pharmacy}/show', ['as' => 'pharmacies.show', 'uses' => 'PharmacyController@show']);
        Route::delete('pharmacies/{pharmacy}', ['as' => 'pharmacies.destroy', 'uses' => 'PharmacyController@destroy']);

    });

    Route::middleware('admin')->prefix('products')->group(function () {
        Route::get('create', 'ProductController@create');
        Route::post('list', ['as' => 'products.store', 'uses' => 'ProductController@store']);

        Route::get('/{product}/edit', ['as' => 'products.edit', 'uses' => 'ProductController@edit']);
        Route::put('/{product}/edit', ['as' => 'products.update', 'uses' => 'ProductController@update']);

        Route::get('list', ['as' => 'products.list', 'uses' => 'ProductController@index']);
        Route::get('/{product}/show', ['as' => 'products.show', 'uses' => 'ProductController@show']);
        Route::delete('products/{product}', ['as' => 'products.destroy', 'uses' => 'ProductController@destroy']);

    });

    Route::prefix('country')->group(function () {
        Route::get('/', 'CountryController@index');
    });

    Route::prefix('province')->group(function () {
        Route::get('/', 'ProvinceController@index');
    });
});




Route::get('/home', 'HomeController@index')->name('home');


?>


