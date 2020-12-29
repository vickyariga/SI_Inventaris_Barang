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




//Sekre1
Route::get('/sekre1', 'Sekre1Controller@index')->name('sekre1');
Route::get('/tambah1','Sekre1Controller@create')->name('tambah1');
Route::post('/tambah1','Sekre1Controller@store1')->name('store1');
Route::get('/edit1/{id}','Sekre1Controller@edit1')->name('edit1');
Route::post('/update1/{id}','Sekre1Controller@update1')->name('sekre1');
Route::get('/hapus1/{id}','Sekre1Controller@hapus1')->name('sekre1');

//Sekre2
Route::get('/sekre2', 'Sekre2Controller@index')->name('sekre2');
Route::get('/tambah2','Sekre2Controller@create')->name('tambah2');
Route::post('/tambah2','Sekre2Controller@store2')->name('store2');
Route::get('/edit2/{id}','Sekre2Controller@edit2')->name('edit2');
Route::post('/update2/{id}','Sekre2Controller@update2')->name('sekre2');
Route::get('/hapus2/{id}','Sekre2Controller@hapus2')->name('sekre2');

//Sekre3
Route::get('/sekre3', 'Sekre3Controller@index')->name('sekre3');
Route::get('/tambah3','Sekre3Controller@create')->name('tambah3');
Route::post('/tambah3','Sekre3Controller@store3')->name('store3');
Route::get('/edit3/{id}','Sekre3Controller@edit3')->name('edit3');
Route::post('/update3/{id}','Sekre3Controller@update3')->name('sekre3');
Route::get('/hapus3/{id}','Sekre3Controller@hapus3')->name('sekre3');

//Sekre4
Route::get('/sekre4', 'Sekre4Controller@index')->name('sekre4');
Route::get('/tambah4','Sekre4Controller@create')->name('tambah4');
Route::post('/tambah4','Sekre4Controller@store4')->name('store4');
//Route::get('/tambah1','sekre1Controller@edit')->name('sekre1');

//Sekre5
Route::get('/sekre5', 'Sekre5Controller@index')->name('sekre5');
Route::get('/tambah5','Sekre5Controller@create')->name('tambah5');
Route::post('/tambah5','Sekre5Controller@store5')->name('store5');
//Route::get('/tambah1','sekre1Controller@edit')->name('sekre1');

//Sekre6
Route::get('/sekre6', 'Sekre6Controller@index')->name('sekre6');
Route::get('/tambah6','Sekre6Controller@create')->name('tambah6');
Route::post('/tambah6','Sekre6Controller@store6')->name('store6');
//Route::get('/tambah1','sekre1Controller@edit')->name('sekre1');

//Sekre7
Route::get('/sekre7', 'Sekre7Controller@index')->name('sekre7');
Route::get('/tambah7','Sekre7Controller@create')->name('tambah7');
Route::post('/tambah7','Sekre7Controller@store7')->name('store7');
//Route::get('/tambah1','sekre1Controller@edit')->name('sekre1');

//Sekre8
Route::get('/sekre8', 'Sekre8Controller@index')->name('sekre8');
Route::get('/tambah8','Sekre8Controller@create')->name('tambah8');
Route::post('/tambah8','Sekre8Controller@store8')->name('store8');
//Route::get('/tambah1','sekre1Controller@edit')->name('sekre1');

//Sekre9
Route::get('/sekre9', 'Sekre9Controller@index')->name('sekre9');
Route::get('/tambah9','Sekre9Controller@create')->name('tambah9');
Route::post('/tambah9','Sekre9Controller@store9')->name('store9');
//Route::get('/tambah1','sekre1Controller@edit')->name('sekre1');

//Sekre10
Route::get('/sekre10', 'Sekre10Controller@index')->name('sekre10');
Route::get('/tambah10','Sekre10Controller@create')->name('tambah10');
Route::post('/tambah10','Sekre10Controller@store10')->name('store10');
//Route::get('/tambah1','sekre1Controller@edit')->name('sekre1');

//badan1


//user
Route::get('/user', 'UserController@index')->name('user');
Route::get('/opd1', 'Opd1Controller@index')->name('opd1');

//laporan
Route::get('/laporan', 'LaporanController@index')->name('laporan');
//Route::get('/laporan', 'LaporansController@index')->name('laporan');

//opd
Route::resource('opd' ,OpdController::class)->only('index');
Route::get('/info1', 'Info1Controller@index')->name('info1');
Route::get('/info2', 'Info2Controller@index')->name('info2');
Route::get('/info3', 'Info3Controller@index')->name('info3');
Route::get('/info4', 'Info4Controller@index')->name('info4');
Route::get('/info5', 'Info5Controller@index')->name('info5');

//grafik
Route::get('/grafik', 'GrafikController@index')->name('grafik');

//nested Kantor
Route::resource('opd.kantor', OrganisasiKantorController::class)->only('index', 'show');

