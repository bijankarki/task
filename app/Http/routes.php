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
    return view('client/index');
});
Route::get('/index',function(){
    return view('client/index');
});
Route::get('/laravel/public/addclient','Index@index');
Route::post('/laravel/public/submit','Index@submit');
Route::get('/laravel/public/viewall','Index@viewall');
