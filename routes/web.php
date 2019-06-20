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

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('book', 'BookController');

//Route::get('/', 'BookController@index');
Route::get('/', [
    'uses' =>  'BookController@index',
    'as' => 'BookIndex'
]);

//Route::get('users/create', 'BookController@create');
Route::get('users/create',[
    'uses' => 'BookController@create',
    'as' => 'BookCreate'
    ]);

Route::get('users/edit/{id}',[
    'uses' => 'BookController@edit',
    'as' => 'BookEdit'
    ]);

Route::delete('users/delete/{id}',[
    'uses' => 'BookController@destroy',
    'as' => 'BookDestroy'
    ]);

Route::post('users', [
    'uses' => 'BookController@store',
    'as' => 'BookStore'
]);

Route::put('users/update/{id}' ,[
    'uses' => 'BookController@update',
    'as' => 'BookUpdate'
]);

Route::get('users/{id}', [
    'uses' => 'BookController@show',
    'as' => 'BookShow'
]);
