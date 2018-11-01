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
    return view('index');
    //return view('autocomplete');

});

//Create user account in Joboard
Route::get('auth/register', 'auth\RegisterController@create');

Route::post('auth/register', 'auth\RegisterController@store');

//user loggin into Joboard
Route::get('auth/login', 'auth\LoginController@create');

Route::post('auth/login', 'auth\LoginController@store');

Route::get('auth/logout', 'auth\LoginController@destroy');

Route::get('displaymenu', function(){
    return view('displaymenu');
});



Route::get('/profile/index','ProfileController@index');
Route::get('profile/profileupdate','ProfileController@create');
Route::put('/profile','ProfileController@update');



Route::get('/profile/{techid}/create', 'ProfileWebtecheController@create');
Route::get('/profile/{techid}/destroy', 'ProfileWebtecheController@destroy');

//Route::get('/profile/index','ProfileWebtecheController@alltechno');


Route::get('feed', 'apiController@getdata');

Route::get('addJobs', 'apiController@getdata');
Route::get('addJobs', 'FavoritesController@store');
Route::delete('deleteJob', 'FavoritesController@destroy');
Route::get('meetup', 'apiController@getMeetup');

Route::get('favorites', function(){
    return view('favorites');
});