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

Route::get('member','MemberController@index');



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

Route::get('member', 'MemberController@index');

Route::get('member/add','memberController@add');
Route::post('member/add','memberController@create');

Route::get('member/edit','memberController@edit');
Route::post('member/update','memberController@update');

Route::get('member/del','memberController@del');
Route::post('member/remove','memberController@remove');
