<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ComicController@index')->name('comics');
Route::get('/create', 'ComicController@create')->name('comics.create');
Route::post('/', 'ComicController@store')->name('comics.store');
Route::get('/{comic}', 'ComicController@show')->name('comics.show');
Route::get('/{comic}/edit', 'ComicController@edit')->name('comics.edit');
Route::put('/{comic}', 'ComicController@update')->name('comics.update');
Route::delete('/{comic}', 'ComicController@destroy')->name('comics.delete');