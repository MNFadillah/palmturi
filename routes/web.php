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

/*
Route::get('/beranda', function () {
    return view('pages.index');
});

Route::get('/alumni', function () {
    return view('pages.listuser');
});

Route::get('/profil', function () {
    return view('pages.profile');
});

Route::get('/pengaturan', function () {
    return view('pages.setting');
});

Route::get('/berita', function () {
    return view('pages.news');
});

Route::get('/pilihberita', function () {
    return view('pages.newsselect');
});
*/

Route::get('/','BerandaController@index');

Auth::routes();

Route::get('/beranda', 'BerandaController@index');

Route::get('/profil', 'ProfileController@index');

Route::get('/pengaturan', 'PengaturanController@index');

Route::post('/simpeng', ['as' => 'saveSetting', 'uses' => 'PengaturanController@update']);

Route::resource('alumni', 'AlumniController');

Route::get('/home', 'HomeController@index')->name('home');
