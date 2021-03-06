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

Route::resource('/users','UsersController');
Route::resource('/rolenames','RoleNamesController');
Route::resource('/userroles','UserRolesController');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
