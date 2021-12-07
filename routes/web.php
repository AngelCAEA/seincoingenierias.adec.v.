<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\UserController;

//DB::listen(function($query){
//    var_dump($query->sql);
//});

Route::view('/', 'inicio')->name('inicio');

Route::view('/empresa','empresa')->name('empresa');

Route::resource('servicios', 'ProjectController')->names('projects')->parameters(['servicios'=>'project']);

Route::resource('catalogo','CatalogController')->names('catalogos');

Route::get('categorias/{category}','CategoryController@show')->name('categories.show');

Route::view('/contactanos','contactanos')->name('contactanos');

Route::post('contactanos','MessageController@store')->name('messages.store');

Route::view('/politicas', 'politicas')->name('politicas');

Auth::routes(['register'=> false]);


