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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', ['as' => 'zipcode', 'uses' => 'ZipCodeController@index']);
Route::get('/zipcode', ['as' => 'zipcode.index', 'uses' => 'ZipCodeController@index']);
Route::post('zipcode/get', ['as' => 'zipcode.get', 'uses' => 'ZipCodeController@get']);

Route::get('/address', ['as' => 'zipcodeaddress.index', 'uses' => 'ZipCodeController@address']);
Route::post('address/get', ['as' => 'zipcodeaddress.get', 'uses' => 'ZipCodeController@addressget']);
