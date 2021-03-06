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






Route::auth();

Route::get('/','PagesController@index');

Route::group(['middleware' => 'auth' ] , function(){
    Route::get('search/documents','SearchController@searchDocument');
    Route::get('search/peoples','SearchController@searchPeople');
    Route::get('search','SearchController@index');
    Route::get('settings/account-removal','SettingsController@removal');
    Route::get('settings','SettingsController@account');
});


Route::get('signUp','PagesController@signUp');
// Route::resource('login','PagesController@login');


Route::get('/home', 'HomeController@index');
Route::get('/upload',function(){

   return view('upload');
});
