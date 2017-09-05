<?php

use Illuminate\Http\Request;
Route::POST('/register','UsersController@register');

Route::group(['middleware' => 'auth:api'], function(){
	Route::get('/user','UsersController@index');
});