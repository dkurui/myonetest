<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MemberController@index');

Route::get('members', 'MemberController@index');

Route::get('home', 'MemberController@index');
 
Route::get('members', 'MemberController@index');
 

Route::get('more/{id}', 'MemberController@show');

Route::get('new', 'MemberController@create');

Route::post('data', 'MemberController@store');
 
Route::get('edit', 'MemberController@viewEdit');

Route::get('edit/{id}', 'MemberController@edit');

Route::post('save-updates/{id}', 'MemberController@update');

Route::get('delete/{id}', 'MemberController@destroy');