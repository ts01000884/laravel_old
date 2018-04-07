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
    //return 'Hello Laravel~';
});
Route::get('mydb', function () {
    return view('mysql');
    //return 'Hello Laravel~';
});

Route::get('cat', 'testController@index');

/*
Route::get('cat', function () {
    return view('test')
    ->with('title','貓王網')
    ->with('text1','測試表格1');
    //return 'Hello Laravel~';
});

*/
Route::get('post/{id}', 'testController@show');


Route::get('x', function () {
    
    return 'Hello Laravel~';
});
