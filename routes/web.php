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

Auth::routes();

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/dashboard', 'UserController@index')->name('dashboard');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/create', 'UserController@create')->name('user.create');

Route::post('/dashboard', 'UserController@store')->name('user.store');

Route::get('/manage','UserController@edit')->name('user.manage');

Route::post('/manage','UserController@update')->name('user.update');
