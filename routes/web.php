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



Route::get('/', 'App\Http\Controllers\PortalController@index')
    ->name('menu.index');

Route::get('/noticias', 'App\Http\Controllers\PortalController@noticias')
    ->name('noticias.index');

Route::get('/empresa', 'App\Http\Controllers\PortalController@empresa')
    ->name('empresa.index');

Route::get('/onde-estamos', 'App\Http\Controllers\PortalController@ondeEstamos')
    ->name('onde.index');

Route::get('/contactos', 'App\Http\Controllers\PortalController@contactos')
    ->name('contactos.index');


Route::post('/processarinfo', 'App\Http\Controllers\PortalController@processar')
    ->name('processar.form');