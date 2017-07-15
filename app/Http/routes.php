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
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('hello', function () {
    return view('hello', ['name' => 'Jenn']);
});
Route::get('new', function () {
    return view('hello', ['name' => 'Jennifer']);
});

Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');

Route::get('events/{event}/edit', 'EventController@edit');
Route::put('events{event}', 'EventController@update');

Route::post('events/store', 'EventController@store');

Route::get('events/create', 'EventController@create');
Route::get('events/{event}', 'EventController@show');
Route::get('events', 'EventController@index');

