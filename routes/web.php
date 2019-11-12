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

Route::get('halo', function () {
    return 'Hello and welcome to New Project';
});

Route::get('blog', function () {
    return view('blog');
});

// Route::get('emp', 'EmployeeController@index');

// Route CRUD
Route::get('/employee','EmployeeController@index');
Route::get('/employee/add','EmployeeController@add');
Route::post('/employee/store','EmployeeController@store');
Route::get('/employee/edit/{id}','EmployeeController@edit');
Route::post('/employee/update','EmployeeController@update');
Route::get('/employee/delete/{id}','EmployeeController@delete');