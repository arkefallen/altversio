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

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/donate', 'DonateController@index')->name('donate');

// Control Karya

Route::get('/dashboard', 'KaryaController@index')->name('dashboard');

Route::get('/dashboard/search', 'KaryaController@search')->name('karya.search');

Route::get('/dashboard/create', 'KaryaController@create')->name('karya.create');

Route::post('/dashboard', 'KaryaController@store')->name('karya.store');

Route::get('/dashboard/manage','KaryaController@show')->name('karya.manage');

Route::get('/dashboard/edit/{id}','KaryaController@edit')->name('karya.edit');

Route::post('/dashboard/update/{id}','KaryaController@update')->name('karya.update');

Route::get('/dashboard/destroy/{id}','KaryaController@destroy')->name('karya.destroy');


