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
Route::get('/', 'HomeController@start')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/zapatos', 'zapatosController@show')->name('zapatos');
Route::get('/faq', 'faqController@show')->name('faq');

Auth::routes();
/* Rutas para los usuarios END*/


/*Rutas para los administradores START*/
Route::get('/Productos/Agregar', 'ProductsController@showForm')->name('AgregarProductosFormulario');
Route::post('/Productos/Agregar', 'ProductsController@validator')->name('AgregarProductosFormularioPost');

Route::get('/Productos/Modificar', 'ProductsController@modify')->name('ModificarProductos');
Route::get('/Productos/Borrar', 'ProductsController@kill')->name('BorrarProductos');
/*Rutas para los administradores END*/
