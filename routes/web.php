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

Route::get('/','BerandaController@index');

Auth::routes();

Route::get('/beranda', 'BerandaController@index');

Route::resource('berita', 'BeritaController');

Route::post('/berita', ['as' => 'berita', 'uses' => 'BeritaController@showMore']);

Route::post('/saveComment', ['as' => 'saveComment', 'uses' => 'BeritaController@saveComment']);

Route::get('/profil', 'ProfileController@index');

Route::get('/pengaturan', 'PengaturanController@index');

Route::post('/saveSetting', ['as' => 'saveSetting', 'uses' => 'PengaturanController@update']);

Route::get('pencarian', 'AlumniController@index');

Route::post('toCari', ['as' => 'toCari', 'uses' => 'AlumniController@toCari']);

Route::post('toUpdate', ['as' => 'toUpdate', 'uses' => 'AdmAlumniController@toUpdate']);

Route::get('pencarian/{id}','AlumniController@cari');

Route::get('angkatan', 'AlumniController@index');

Route::get('angkatan/{id}', 'AlumniController@angkatan');

Route::resource('alumni', 'AlumniController');

Route::get('/adm/', 'DashboardController@index');

Route::get('/adm/dashboard', 'DashboardController@index');

Route::resource('/adm/alumni', 'AdmAlumniController');

Route::resource('/adm/berita', 'AdmBeritaController');

Route::post('/adm/berita/delete', 'AdmBeritaController@delete');

Route::get('/adm/tes', function(){
    return view('admin.editberita');
});

