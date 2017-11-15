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

Route::get('/index', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/signin', function () {return view('signin');});
Route::post('/signin', function () {return view('signin');});

Route::get('/zapatos', 'zapatosController@show')->name('zapatos');
Route::get('/faq', 'faqController@show')->name('faq');

Auth::routes();


