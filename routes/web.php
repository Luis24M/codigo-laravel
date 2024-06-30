<?php

use Illuminate\Support\Facades\Route;

##Route::get('/', function () {
##    return view('welcome');
##});

Route::resource('servicios','App\Http\Controllers\ServiciosController')->except('index','show');

Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
Route::get('servicios','App\Http\Controllers\ServiciosController@index')->name('servicios.index');
Route::get('servicios/crear','App\Http\Controllers\ServiciosController@create')->name('servicios.create');
Route::get('servicios/{id}/editar','App\Http\Controllers\ServiciosController@edit')->name('servicios.edit');
Route::patch('servicios/{id}', 'App\Http\Controllers\ServiciosController@update')->name('servicios.update');
Route::post('servicios','App\Http\Controllers\ServiciosController@store')->name('servicios.store');
Route::view('contacto','contacto')->name('contacto');
Route::post('contacto', 'App\Http\Controllers\ContactoController@store');
Route::get('servicios/{id}','App\Http\Controllers\ServiciosController@show')->name('servicios.show');
Route::delete('servicios/{servicio}', 'App\Http\Controllers\ServiciosController@destroy')->name('servicios.destroy');