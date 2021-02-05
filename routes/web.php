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
    return view('index');
});

Route::get('/kemahasiswaan', function () {
    return view('Kemahasiswaan');
});

Route::get('/dashboard', function () {
    return view('dashboard.layout');
});

Route::get('/berita1', function () {
    return view('Kemahasiswaan/berita1');
});

Route::get('/berita11', function () {
    return view('Berita/berita11');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('home')
    ->namespace('Admin')
    ->group(function () {
        // Route::resource('/', 'DashboardController');
        Route::resource('/kemahasiswaan', 'KemahasiswaanController');
        // Route::resource('/galeri', 'GaleriController');
        // Route::resource('/rekomendasi', 'RekomendasiController');
        // Route::resource('/jadwaltv', 'JadwaltvController');
    });

    Route::prefix('/')
    ->namespace('home')
    ->group(function () {
        // Route::resource('/', 'DashboardController');
        Route::resource('/kemahasiswaan', 'MahasiswaController');
        // Route::resource('/galeri', 'GaleriController');
        // Route::resource('/rekomendasi', 'RekomendasiController');
        // Route::resource('/jadwaltv', 'JadwaltvController');
    });

