<?php

use Illuminate\Support\Facades\Route;

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
/////////////// Begin Route Doctor /////////////////////////////
Route::get('Doctor','DoctorController@index');
Route::get('Doctor/create','DoctorController@create');
Route::post('Doctor','DoctorController@store')->name('doctor.store');
Route::get('Doctor/edit/{$id}','DoctorController@edit');
Route::post('Doctor/{$id}','DoctorController@update');
Route::get('Doctor/{$id}','DoctorController@delete');
//////////// End Route Doctore///////////////////////////////////


