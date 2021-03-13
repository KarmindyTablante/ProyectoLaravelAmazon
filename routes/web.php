<?php

// use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::resource('usuarios', 'UserController');

Route::resource('roles', 'RoleController');


Route::resource('categorias', 'Categorias73Controller');
Route::resource('articulos', 'Articulos73Controller');
Route::resource('personas', 'Personas73Controller');
Route::resource('ventas', 'Ventas73Controller');

Route::resource('detalles', 'Detalles73Controller');
Route::resource('carrito', 'Carrito73Controller');
Route::resource('comprar', 'Eliminar73Controller');
Route::resource('detallado', 'Detallado73Controller');


