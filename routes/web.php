<?php

use Illuminate\Support\Facades\Route;

##Route::get('/', function () {
##    return view('welcome');
##});

Route::resource('servicios','App\Http\Controllers\ServiciosController')->except('index','show');

Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
Route::resource('servicios', 'App\Http\Controllers\ServiciosController')
  ->names('servicios')
  ->middleware('auth');

Route::view('contacto','contacto')->name('contacto');
Route::post('contacto', 'App\Http\Controllers\ContactoController@store');
Route::get('servicios/{id}','App\Http\Controllers\ServiciosController@show')->name('servicios.show');



Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
