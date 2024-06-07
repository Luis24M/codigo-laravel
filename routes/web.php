<?php

Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::get('servicios', 'App\Http\Controllers\ServiciosController@index')->name('servicios.index');
Route::view('contacto', 'contacto')->name('contacto');
Route::get('servicios/{id}','App\Http\Controllers\ServiciosController@show')->name('servicios.show');