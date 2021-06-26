<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|c
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

Route::get('matkul', 'MatkulController@index')->name('matkul');
Route::get('matkul-create', 'MatkulController@create')->name('tambah_matkul');
Route::post('matkul-simpan', 'MatkulController@store')->name('simpan_matkul');
Route::get('matkul-edit/{id}', 'MatkulController@edit')->name('edit_matkul');
Route::post('matkul-update/{id}', 'MatkulController@update')->name('update_matkul');
Route::get('matkul-hapus/{id}', 'MatkulController@destroy')->name('hapus_matkul');