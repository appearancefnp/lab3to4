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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::redirect('/', 'countries/');
Route::get('countries/', 'CountryController@index');
Route::get('countries/delete/{id}', 'CountryController@destroy');
Route::get('cities/{id}', 'CityController@index');
Route::get('cities/delete/{id}', 'CityController@destroy');
Route::get('cities/new/{id}', 'CityController@new');
Route::get('cities/insert/{id}/{name}', 'CityController@store');

Route::get('countries/update/{id}', 'CountryController@edit');
Route::put('countries/update/{id}', 'CountryController@update');

Route::get('cities/update/{id}', 'CityController@edit');
Route::put('cities/update/{id}', 'CityController@update');

Route::get('cities/search/{name}', 'CityController@search');
Route::get('countries/search/{name}', 'CountryController@search');

Route::get('/home', 'HomeController@index')->name('home');
