<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'DrinkController@index')
 ->name('drink-index');

Route::get('/index/{id}', 'DrinkController@show')
 ->name('drink-show');

Route::get('/create','DrinkController@create')
 ->name('drink-create');

Route::post('/store' , 'DrinkController@store')
 ->name('drink-store');

Route::get('/edit/{id}','DrinkController@edit')
 ->name('drink-edit');

Route::post('/update/{id}' ,'DrinkController@update')
 ->name('drink-update');

Route::get('/delete/{id}','DrinkController@delete')
 ->name('drink-delete');
