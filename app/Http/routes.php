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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', 'TodoController@index');

Route::post('/todo', function()
{
	if($_POST['type']=='INSERT'){
		DB::update('INSERT INTO todos(nama) VALUES (?)',array($_POST['nama']));	
	}
	else if($_POST['type']=='DELETE'){
		DB::delete('DELETE FROM todos where ID='.$_POST['id'].'');
	}
});

