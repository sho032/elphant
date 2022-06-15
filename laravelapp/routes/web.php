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

Route::get('member/add','MemberController@add');
Route::post('member/add','MemberController@create');

Route::get('member/edit','MemberController@edit');
Route::post('member/update','MemberController@update');

//Route::get('member/del','MemberController@del');
//Route::post('member/remove','MemberController@remove');

Route::get('member/show','MemberController@show');

Route::get('member/del2','MemberController@del2');