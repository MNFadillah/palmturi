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

Route::get('berita/','BeritaController@index');

Route::get('berita/{id}/more','BeritaController@more');

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

Route::get('/adm/tes', function(){
    return view('admin.pengaturan');
});

Route::prefix('adm')->group(function() {
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');

    Route::get('/dashboard', 'DashboardController@index');

    Route::get('/setting', 'DashboardController@setting');

    Route::post('/setting/savepass', 'DashboardController@savepass')->name('password');

    Route::post('/setting/saveprof', 'DashboardController@saveprof')->name('profile');

    Route::resource('/alumni', 'AdmAlumniController');

    Route::post('/alumni/approve', 'AdmAlumniController@approve')->name('approve');

    Route::resource('/berita', 'AdmBeritaController');

    Route::post('/berita/delete', 'AdmBeritaController@delete');
});
