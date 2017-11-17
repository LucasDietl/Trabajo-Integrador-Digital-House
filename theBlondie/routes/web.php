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
    return view('index');
});

/* Rutas para los usuarios START*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/signin', 'SignInController@show')->name('signin');
Route::post('/signin', 'SignInController@validator')->name('signin');
Route::get('/zapatos', 'zapatosController@show')->name('zapatos');
Route::get('/faq', 'faqController@show')->name('faq');

Auth::routes();
/* Rutas para los usuarios END*/


/*Rutas para los administradores START*/


/*Rutas para los administradores END*/
