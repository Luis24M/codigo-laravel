<?php

Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::get('servicios', 'App\Http\Controllers\ServiciosController@index')->name('servicios.index');
Route::get('servicios/crear', 'App\Http\Controllers\ServiciosController@create')->name('servicios.create');
Route::post('servicios', 'App\Http\Controllers\ServiciosController@store')->name('servicios.store');
Route::view('contacto', 'contacto')->name('contacto');
Route::get('servicios/{id}','App\Http\Controllers\ServiciosController@show')->name('servicios.show');