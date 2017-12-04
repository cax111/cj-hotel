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
Route::get('/admin-cj/data-tamu', 'tamuCrudController@index');
Route::get('/admin-cj/data-tamu/tambah', 'tamuCrudController@create');
Route::get('/admin-cj/data-tamu/hapus/{id}', 'tamuCrudController@destroy');

Route::get('/coba', function () {
    return view('coba');
});