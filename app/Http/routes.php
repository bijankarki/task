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
Route::get('/index',function(){
    return view('client/index');
});
Route::get('/addclient','Index@index');
Route::post('/submit','Index@submit');
Route::get('/viewall','Index@viewall');
