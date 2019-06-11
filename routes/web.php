<?php

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
})->name('inicio');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'ticket', 'middleware' => ['role:realizar']], function() {
    Route::get('/', 'TicketController@index')->name('tk_lista');
    Route::get('/alta', 'TicketController@alta')->name('tk_alta');
    Route::post('/alta', 'TicketController@crear')->name('tk_crear');
});

Route::group(['prefix' => 'administrador', 'middleware' => ['role:admin']], function() {
    Route::get('/usuario', 'UsuarioController@index')->name('usr_lista');
    Route::get('/usuario/alta', 'UsuarioController@alta')->name('usr_alta');
    Route::post('/usuario/alta', 'UsuarioController@crear')->name('usr_crear');

    Route::get('/usuario/asignar', 'UsuarioController@asignar')->name('usr_asignar');

    Route::get('/sistema', 'SystemController@index')->name('sys_lista');
    Route::get('/sistema/alta', 'SystemController@alta')->name('sys_alta');
    Route::post('/sistema/alta', 'SystemController@crear')->name('sys_crear');
});
