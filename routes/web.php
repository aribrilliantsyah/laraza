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

Route::get('/', 'GuestsController@index');
Route::get('/info', function () {
    return view('tambahan.articles');
});

Route::get('info/{slug}',[
		'as'=>'show.more',
		'uses'=>'GuestsController@show'
		]);

Route::get('/kalku', function () {
    return view('tambahan.kalkulator');
});

Route::get('/test', function () {
    return view('layouts.modal');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
//SuperAdmin

//Admin
Route::get('/system', function () {
    return view('welcome_admin');
});

Route::group(['middleware'=>'web'],function(){
	Route::group(['prefix'=>'pengurus','middleware'=>['auth','role:admin']], function(){
	Route::resource('orang','OrangsController');
	Route::resource('fitrah','FitrahsController');
	Route::resource('mal','MalsController');
	Route::resource('amal','LainsController');
	Route::resource('laporan','LaporansController');
	Route::get('plugin/{ketetapan}/edit',[
		'as'=>'panel.edit',
		'uses'=>'FitrahsController@editket'
		]);
	Route::put('plugin/{ketetapan}',[
		'as'=>'panel.update',
		'uses'=>'KetetapansController@update'
		]);
});
});


