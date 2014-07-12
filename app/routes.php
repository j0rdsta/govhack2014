<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home.home');
});

Route::get('/admin', function()
{
	$cities = City::all();
	return View::make('admin.index', compact('cities'));
});

Route::resource('cities', 'CitiesController');
Route::resource('amenities', 'AmenitiesController');