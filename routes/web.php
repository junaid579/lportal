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

Route::get('/home', 'HomeController@index_metro');
Route::get('/home', 'HomeController@index_metro_2');
Route::get('/test', function () {
    return view('test');
});
Route::post('/test', 'testcontroller@findAction');
// Route::post('/test', 'testcontroller@get_details');
// Route::post('/test', 'testcontroller@fetch');
