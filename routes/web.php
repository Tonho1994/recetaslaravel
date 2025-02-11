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

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/nosotros', function () {
    return view('nosotros');
}); */

Route::get('/recetas','RecetaController@index')->name('recetas.index');
Route::get('/recetas/create','RecetaController@create')->name('recetas.create');
Route::post('/recetas/store','RecetaController@store')->name('recetas.store');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
