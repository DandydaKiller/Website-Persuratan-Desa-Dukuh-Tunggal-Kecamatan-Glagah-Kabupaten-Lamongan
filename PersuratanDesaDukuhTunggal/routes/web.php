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

/*Route::get('/', function () {
    return view('index');
});*/
Route::get('/','ArtikelController@index');

Route::get('/admin', function () {
    return view('index');
});

Route::get('/cari-penduduk',function(){
    return view('cari-penduduk');
});

Auth::routes();

//front end action
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/surat-view', 'SuratController@index');
Route::post('/store-surat','SuratController@store');
Route::get('/list-surat-view','SuratController@showlist');
Route::get('/get-surat/{id}','SuratController@showsurat');
Route::get('/surat/detail/{id}','SuratController@detailsurat');
Route::get('/surat/hapus/{id}','SuratController@deletesurat');
Route::get('/detail-artikel/{id}','ArtikelController@detail');
Route::get('/persewaan','ArtikelController@sewa');
Route::get('/cari-penduduk-find','ArtikelController@cari');
Route::get('/detail-sewa/{id}','ArtikelController@show_sewa');
Route::get('/edit-profile',function(){
    return view('edit');
});
Route::post('/edit-profile-post','HomeController@edit_profile');

//Admin Auth
Route::get('/loginadmin','Auth\AuthAdminController@login');
Route::get('/registeradmin-super','Auth\AuthAdminController@register');
Route::post('/registeradmin-super-post','Auth\AuthAdminController@store');
Route::post('loginadmin-post','Auth\AuthAdminController@cek');
Route::get('/homea', 'HomeaController@index')->name('admin.dashboard');
Route::get('/backend', 'HomeaController@index')->name('admin.dashboard');

//backend action Pengajuan Surat
Route::get('/backendPengajuanSurat','backendController@tampilPengajuanSurat');
Route::get('/backendPengajuanSurat/detail/{id}','backendController@tampilPengajuanSuratDetail');
Route::post('/updateStatus/selesai','backendController@updateStatusSelesai');
Route::post('/updateStatus/ditolak','backendController@updateStatusDitolak');

//backend Action Artikel
Route::get('/backendArtikel','backendArtikelController@tampilArtikel');
Route::get('/backendArtikelBaru','backendArtikelController@tulisArtikel');
Route::post('/backendArtikel/post','backendArtikelController@postArtikel');
Route::get('/backendArtikel/hapus','backendArtikelController@hapusArtikel');
Route::get('/backendArtikel/edit/{id}','backendArtikelController@editArtikel');
Route::post('/backendArtikel/artikelEdit','backendArtikelController@editPostArtikel');
Route::get('/backendArtikel/hapus/{id}','backendArtikelController@hapusArtikel');

//penduduk
Route::get('/backendUser','backendUserController@tampilUser');
Route::get('/backendUser/detail/{id}','backendUserController@detailUser');
Route::get('/backendUser/hapus/{id}','backendUserController@hapusUser');


//persewaan
Route::get('/backendPersewaan','backendPersewaanController@tampilPersewaan');
Route::get('/backendPersewaan/detail/{id}','backendPersewaanController@detailPersewaan');
Route::get('/backendPersewaan/hapus/{id}','backendPersewaanController@hapusPersewaan');
