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
Route::any('/', 'appController@index');
//halaman reservasi------------------------------------------------
Route::any('/pilih-hotel', 'appController@pilihHotel');
Route::post('/cek-kamar', 'appController@cekKamar');
Route::get('/isi-data', 'appController@isi');
Route::post('/isi-data', 'appController@isiData');
Route::post('/isi-data-store', 'appController@isiDataStore');
Route::get('/reservasi-kamar', 'appController@reservasiKamar');
Route::post('/reservasi-kamar', 'appController@reservasiKamar');
//register-login-lupa password-------------------------------------
Route::get('/login-user', 'appController@loginUser');
Route::post('/cek', 'appController@cek');
Route::any('/logout', 'appController@logout');
Route::get('/account-user', 'appController@accountUser');
Route::get('/ubah-data', 'appController@ubahData');
Route::post('/ubah-proses', 'appController@ubahProses');
Route::get('/registrasi', 'appController@registrasi');
Route::post('/registrasi-proses', 'appController@registrasiStore');
Route::get('/halaman-konfirmasi', 'appController@halamanKonfirmasi');
Route::post('/konfirmasi-proses', 'appController@aktivasiAkun');
Route::get('/lupa-password', 'appController@lupaPass');
Route::post('/lupa-proses', 'appController@lupaProses');
Route::get('/lupa-ganti/{token}', 'appController@lupaGanti');
Route::post('/lupa-ganti-proses', 'appController@lupaGantiProses');
//halaman informasi------------------------------------------------
Route::get('/rooms', 'appController@rooms');
Route::get('/resto', 'appController@resto');
Route::get('/about', 'appController@about');
//halaman admin
Route::get('/admin-cj', 'appController@indexAdmin');
Route::get('/login-admin-cj', 'appController@loginAdmin');
Route::post('/cek-admin', 'appController@cekAdmin');
Route::any('/logout-admin', 'appController@logoutAdmin');
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
//halaman admin data reservasi
Route::get('/admin-cj/data-reservasi', 'reservasiCrudController@index');
Route::get('/admin-cj/data-kamar/tambah-jenis', 'kamarCrudController@createJenis');
Route::post('/admin-cj/data-kamar/store-jenis', 'kamarCrudController@storeJenis');
Route::get('/admin-cj/data-kamar/edit-jenis/{id}', 'kamarCrudController@editJenis');
Route::post('/admin-cj/data-kamar/update-jenis/{id}', 'kamarCrudController@updateJenis');
Route::get('/admin-cj/data-kamar/hapus-jenis/{id}', 'kamarCrudController@destroyJenis');

Route::get('/coba', function () {
    return view('coba');
});