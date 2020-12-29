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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//user
Route::get('/user', 'UserController@index')->name('user');
Route::get('/opd1', 'Opd1Controller@index')->name('opd1');

//laporan
Route::get('/laporan', 'LaporanController@index')->name('laporan');

//opd
Route::resource('opd' ,OpdController::class)->only('index');


//grafik
Route::get('/grafik', 'GrafikController@index')->name('grafik');

//nested Kantor
Route::resource('opd.kantor', OrganisasiKantorController::class)->only('index', 'show');

//nested barang di kantor
Route::resource('opd.kantor.barang', KantorBarangController::class)->except('index', 'show');

