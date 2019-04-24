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
Route::get('cities/new/{id}', 'CityController@new');
Route::get('cities/insert/{id}/{name}', 'CityController@store');

Route::get('/home', 'HomeController@index')->name('home');
