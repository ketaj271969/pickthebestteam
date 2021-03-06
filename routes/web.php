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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/users', 'AdminUsersController');
Route::resource('admin/venues', 'AdminVenueController');
Route::resource('admin/cities', 'AdminCitiesController');
Route::resource('admin/countries', 'AdminCountriesController');
Route::resource('admin/regions', 'AdminRegionsController');
Route::get('/json-ptbtcountry','AdminCountriesController@ptbtcountry');
Route::get('/json-ptbtstprov', 'AdminStProvsController@ptbtstprov');
Route::get('/json-ptbtcity', 'AdminCitiesController@ptbtcity');
