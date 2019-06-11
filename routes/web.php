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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('ticket', 'TicketController')->middleware('role:realizar');
    Route::resource('usuario', 'UserController')->middleware('role:admin');
    Route::resource('sistema', 'SystemController')->middleware('role:admin');
});


/*Route::group(['prefix' => 'ticket', 'middleware' => ['role:realizar']], function() {
    Route::get('/', 'TicketController@index')->name('tk_lista');
    Route::get('/alta', 'TicketController@alta')->name('tk_alta');
    Route::post('/alta', 'TicketController@crear')->name('tk_crear');
    Route::get('/{id}', 'TicketController@mostrar')->name('tk_mostrar');
});

Route::group(['prefix' => 'usuario', 'middleware' => ['role:admin']], function() {
    Route::resource('/', 'UserController');
    Route::get('/', 'UsuarioController@index')->name('usr_lista');
    Route::get('/alta', 'UsuarioController@alta')->name('usr_alta');
    Route::post('/alta', 'UsuarioController@crear')->name('usr_crear');
    Route::get('/{id}', 'UsuarioController@asignar')->name('usr_asignar');
    Route::post('/{id}', 'UsuarioController@update')->name('usr_update');
    Route::get('/usuario/asignar', 'UsuarioController@asignar')->name('usr_asignar');
});

Route::group(['prefix' => 'sistema', 'middleware' => ['role:admin']], function() {
    Route::resource('/', 'SystemController');
    Route::get('/', 'SystemController@index')->name('sys_lista');
    Route::get('/alta', 'SystemController@alta')->name('sys_alta');
    Route::post('/alta', 'SystemController@crear')->name('sys_crear');
});*/
