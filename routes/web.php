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

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'HomeController@admin');

Route::post('/rebate', 'RebateController@store');

Route::get('/rebate/edit/{id}', 'HomeController@edit');

Route::get('/rebate/{id}/pdf', 'HomeController@edit');

Route::put('/rebate/update/{id}',[
    'as' => 'rebate.update',
    'uses' => 'HomeController@update'
]);
