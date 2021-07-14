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
Route::get('Doctor','DoctorController@index')->name('doctor.index');
Route::get('Doctor/create','DoctorController@create')->name('doctor.create');
Route::post('Doctor/create','DoctorController@store')->name('doctor.store');
Route::get('Doctor/edit/{id}','DoctorController@edit')->name('doctor.edit');
Route::post('Doctor/update/{id}','DoctorController@update')->name('doctor.update');
Route::get('Doctor/{id}','DoctorController@delete')->name('doctor.delete');
//////////// End Route Doctore /////////////////////////////


/////////////// Begin Route Doctor /////////////////////////////
Route::get('Department','DepartmentController@index')->name('department.index');
Route::get('Department/create','DepartmentController@create')->name('department.create');
Route::post('Department/create','DepartmentController@store')->name('department.store');
Route::get('Department/edit/{id}','DepartmentController@edit')->name('department.edit');
Route::post('Department/update/{id}','DepartmentController@update')->name('department.update');
Route::get('Department/{id}','DepartmentController@delete')->name('department.delete');
//////////// End Route Doctore /////////////////////////////
