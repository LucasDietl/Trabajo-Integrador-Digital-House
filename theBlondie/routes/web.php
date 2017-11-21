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

/* Rutas para los usuarios START*/
Route::get('/', 'HomeController@start')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/zapatos', 'zapatosController@show')->name('zapatos');
Route::get('/faq', 'faqController@show')->name('faq');

Auth::routes();
/* Rutas para los usuarios END*/


/*Rutas para los administradores START*/
Route::get('/Productos/Agregar', 'ProductsController@showForm')->middleware('auth');
Route::post('/Productos/Agregar', 'ProductsController@create')->middleware('auth');

Route::get('/Productos/Modificar', 'ProductsController@modify')->middleware('auth');
Route::get('/Productos/Borrar', 'ProductsController@kill')->middleware('auth');
/*Rutas para los administradores END*/
