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
//halaman web
Route::get('/', 'appController@index');
Route::get('/rooms', 'appController@rooms');
Route::get('/resto', 'appController@resto');
Route::get('/about', 'appController@about');
//halaman admin
Route::get('/admin-cj/', 'appController@indexAdmin');
Route::get('/admin-cj/login', 'appController@login');
Route::post('/admin-cj/cek', 'appController@cek');
//halaman admin data tamu
Route::get('/admin-cj/data-tamu', 'tamuCrudController@index');
Route::get('/admin-cj/data-tamu/tambah', 'tamuCrudController@create');
Route::post('/admin-cj/data-tamu/store', 'tamuCrudController@store');
Route::get('/admin-cj/data-tamu/edit/{id}', 'tamuCrudController@edit');
Route::post('/admin-cj/data-tamu/update/{id}', 'tamuCrudController@update');
Route::get('/admin-cj/data-tamu/hapus/{id}', 'tamuCrudController@destroy');
//halaman admin data kamar
Route::get('/admin-cj/data-kamar', 'kamarCrudController@index');
Route::get('/admin-cj/data-kamar/tambah', 'kamarCrudController@create');
Route::post('/admin-cj/data-kamar/store', 'kamarCrudController@store');
Route::get('/admin-cj/data-kamar/edit/{id}', 'kamarCrudController@edit');
Route::post('/admin-cj/data-kamar/update/{id}', 'kamarCrudController@update');
Route::get('/admin-cj/data-kamar/hapus/{id}', 'kamarCrudController@destroy');
//halaman admin data kamar
Route::get('/admin-cj/data-kamar', 'kamarCrudController@index');
Route::get('/admin-cj/data-kamar/tambah-jenis', 'kamarCrudController@createJenis');
Route::post('/admin-cj/data-kamar/store-jenis', 'kamarCrudController@storeJenis');
Route::get('/admin-cj/data-kamar/edit-jenis/{id}', 'kamarCrudController@editJenis');
Route::post('/admin-cj/data-kamar/update-jenis/{id}', 'kamarCrudController@updateJenis');
Route::get('/admin-cj/data-kamar/hapus-jenis/{id}', 'kamarCrudController@destroyJenis');

Route::get('/coba', function () {
    return view('coba');
});