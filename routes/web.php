<?php

Route::get('/', function () {return view('welcome');});

//Login
Route::get('/login', 'SessionController@create')->name('login'); 

//Autenticación
Auth::routes();

//Landing page
Route::get('/home', 'HomeController@index')->name('home');

//Socios
Route::get('/socios', 'SocioController@index')->name('socios');
Route::post('/socios', 'SocioController@store');
