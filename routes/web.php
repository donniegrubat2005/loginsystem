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

/*Route::get('/', function () {
    return view('base_admin');
});*/

Route::group(['middleware' => 'disablepreventback'],function(){
Route::get('/','LoginController@index')->name('login');

Route::post('login/validate_login','LoginController@validate_login');

Route::get('login/validate_success','LoginController@validate_success');

Route::get('login/logout','LoginController@logout');
});