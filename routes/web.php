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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registerUser', 'UserController@register')->name('register');
Route::post('/register/store', 'UserController@registerStore')->name('registerStore');


Route::middleware(['auth'])->group(function () {

	// Roles
	Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('permission:roles.store');
    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('permission:roles.update');
    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');

    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('permission:users.index');
    Route::post('users/store', 'UserController@store')->name('users.store')
        ->middleware('permission:users.store');
    Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('permission:users.update');
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');

    Route::get('inputs', 'InputController@index')->name('inputs.index')
        ->middleware('permission:inputs.index');
    Route::get('inputs/store', 'InputController@store')->name('inputs.store')
        ->middleware('permission:inputs.store');
    Route::put('inputs/{input}', 'InputController@update')->name('inputs.update')
        ->middleware('permission:inputs.update');
    Route::delete('inputs/{input}', 'InputController@destroy')->name('inputs.destroy')
        ->middleware('permission:inputs.destroy');


    Route::get('outputs', 'OutputController@index')->name('outputs.index')
        ->middleware('permission:outputs.index');
    Route::get('outputs/store', 'OutputController@store')->name('outputs.store')
        ->middleware('permission:outputs.store');
    Route::put('outputs/{output}', 'OutputController@update')->name('outputs.update')
        ->middleware('permission:outputs.update');
    Route::delete('outputs/{output}', 'OutputController@destroy')->name('outputs.destroy')
        ->middleware('permission:outputs.destroy');

    Route::get('departaments', 'DepartamentController@index')->name('departaments.index')
        ->middleware('permission:departaments.index');
    Route::post('departaments/store', 'DepartamentController@store')->name('departaments.store')
        ->middleware('permission:departaments.store');
    Route::put('departaments/{departament}', 'DepartamentController@update')->name('departaments.update')
        ->middleware('permission:departaments.update');
    Route::delete('departaments/{departament}', 'DepartamentController@destroy')->name('departaments.destroy')
        ->middleware('permission:departaments.destroy');

    Route::get('offices', 'OfficeController@index')->name('offices.index')
        ->middleware('permission:offices.index');
    Route::post('offices/store', 'OfficeController@store')->name('offices.store')
        ->middleware('permission:offices.store');
    Route::put('offices/{office}', 'OfficeController@update')->name('offices.update')
        ->middleware('permission:offices.update');
    Route::delete('offices/{office}', 'OfficeController@destroy')->name('offices.destroy')
        ->middleware('permission:offices.destroy');


    //Dashboard Asitencia
    Route::get('assistences', 'Dashboard\AssistanceController@index')->name('assistences.index')
        ->middleware('permission:assistences.index');
    Route::get('print', 'Dashboard\AssistanceController@print')->name('assistences.print')
        ->middleware('permission:assistences.index');
});
