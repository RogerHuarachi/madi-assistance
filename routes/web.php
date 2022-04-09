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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registerMovile', 'UserController@register')->name('register');

Route::middleware(['auth'])->group(function () {

	// Roles
	Route::get('roles', 'Admin\RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');
    Route::post('roles/store', 'Admin\RoleController@store')->name('roles.store')
        ->middleware('permission:roles.store');
    Route::put('roles/{role}', 'Admin\RoleController@update')->name('roles.update')
        ->middleware('permission:roles.update');
    Route::delete('roles/{role}', 'Admin\RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');

    Route::get('users', 'Admin\UserController@index')->name('users.index')
        ->middleware('permission:users.index');
    Route::post('users/store', 'Admin\UserController@store')->name('users.store')
        ->middleware('permission:users.store');
    Route::put('users/{user}', 'Admin\UserController@update')->name('users.update')
        ->middleware('permission:users.update');
    Route::delete('users/{user}', 'Admin\UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');

    Route::get('inputs', 'Admin\InputController@index')->name('inputs.index')
        ->middleware('permission:inputs.index');
    Route::get('inputs/store', 'Admin\InputController@store')->name('inputs.store')
        ->middleware('permission:inputs.store');
    Route::post('inputs/storeInt', 'Admin\InputController@storeImp')->name('inputs.storeImp')
        ->middleware('permission:inputs.store');
    Route::put('inputs/{input}', 'Admin\InputController@update')->name('inputs.update')
        ->middleware('permission:inputs.update');
    Route::delete('inputs/{input}', 'Admin\InputController@destroy')->name('inputs.destroy')
        ->middleware('permission:inputs.destroy');

    Route::get('inputs/destroyall', 'Admin\InputController@destroyall')->name('inputs.destroyall')
        ->middleware('permission:inputs.destroy');


    Route::get('outputs', 'Admin\OutputController@index')->name('outputs.index')
        ->middleware('permission:outputs.index');
    Route::get('outputs/store', 'Admin\OutputController@store')->name('outputs.store')
        ->middleware('permission:outputs.store');
    Route::post('outputs/storeOut', 'Admin\OutputController@storeOut')->name('outputs.storeOut')
        ->middleware('permission:outputs.store');
    Route::put('outputs/{output}', 'Admin\OutputController@update')->name('outputs.update')
        ->middleware('permission:outputs.update');
    Route::delete('outputs/{output}', 'Admin\OutputController@destroy')->name('outputs.destroy')
        ->middleware('permission:outputs.destroy');

    Route::get('cities', 'Admin\CityController@index')->name('cities.index')
        ->middleware('permission:cities.index');
    Route::post('cities/store', 'Admin\CityController@store')->name('cities.store')
        ->middleware('permission:cities.store');
    Route::put('cities/{city}', 'Admin\CityController@update')->name('cities.update')
        ->middleware('permission:cities.update');
    Route::delete('cities/{city}', 'Admin\CityController@destroy')->name('cities.destroy')
        ->middleware('permission:cities.destroy');

    Route::get('agencies', 'Admin\AgencyController@index')->name('agencies.index')
        ->middleware('permission:agencies.index');
    Route::post('agencies/store', 'Admin\AgencyController@store')->name('agencies.store')
        ->middleware('permission:agencies.store');
    Route::put('agencies/{agency}', 'Admin\AgencyController@update')->name('agencies.update')
        ->middleware('permission:agencies.update');
    Route::delete('agencies/{agency}', 'Admin\AgencyController@destroy')->name('agencies.destroy')
        ->middleware('permission:agencies.destroy');

    Route::get('absences', 'Admin\AbsenceController@index')->name('absences.index')
        ->middleware('permission:absences.index');
    Route::post('absences/store', 'Admin\AbsenceController@store')->name('absences.store')
        ->middleware('permission:absences.store');
    Route::put('absences/{absence}', 'Admin\AbsenceController@update')->name('absences.update')
        ->middleware('permission:absences.update');
    Route::delete('absences/{absence}', 'Admin\AbsenceController@destroy')->name('absences.destroy')
        ->middleware('permission:absences.destroy');


    //Dashboard Asitencia
    Route::get('assistences', 'Dashboard\AssistanceController@index')->name('assistences.index')
        ->middleware('permission:assistences.index');
    Route::get('print', 'Dashboard\AssistanceController@print')->name('assistences.print')
        ->middleware('permission:assistences.index');
});
