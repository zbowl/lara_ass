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

Route::get('/', 'PagesController@index');

Route::get('pages/erecycle', 'PagesController@erecycle');
Route::get('pages/frecycle', 'PagesController@frecycle');
Route::get('pages/milequip', 'PagesController@milequip');
Route::get('pages', 'PagesController@services');
Route::get('/pages/{content}', 'PagesController@show');

Route::get('/create', 'PagesController@create');
Route::get('/create/store', 'PagesController@store');


//Route::resource('pages', 'PagesController');


