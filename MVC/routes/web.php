<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/create', 'UserController@create');
Route::post('/user', 'UserController@store');

Route::get('/news/create', 'NewsController@create');
Route::post('/news', 'NewsController@store');
Route::get('/allmsj', 'DbController@displayallmsj');

Route::get('/dbdisplay/{id}', function ($id) {
	$messages = App\Messages::find($id);
	echo $messages->contenu_messages;
});
Route::get('/onemsj', function () {
	$messages = App\Messages::where('contenu_messages', '=', 'Salut')->first();
	echo $messages->contenu_messages;
});

Route::get('/tenlastmsj', 'DbController@displaytenlastmsj');
Route::get('/20firstmsj', 'DbController@display20firstmsj');
Route::get('/messageids', 'DbController@showidofallmsj');
Route::get('/messageids/{id}', 'DbController@showmsjofcibledid');
