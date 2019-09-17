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

/*Route::get('/', 'pagescontroller@homepage' {
    return view('pages.homepage');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('siswa', function () {
    $siswa = ['Andi',
                'Budi',
                'Cindi',
                'Dendi'
                ];
    return view('siswa.index', ['siswa' =>$siswa]);
});
*/

Route::get('/', 'Homecontroller@index');
Route::get('home', 'pagescontroller@homepage');
Route::get('about', 'pagescontroller@about');
Route::get('siswa', 'siswacontroller@siswa');
Route::get('register', 'pagescontroller@register');

// Route::get('siswa', 'siswacontroller@index');
Route::get('/siswa/siswa_pdf', 'siswacontroller@siswa_pdf');

// siswa
Route::get('siswa/create', 'siswacontroller@create');
Route::post('siswa', 'siswacontroller@store');
Route::get('siswa/{siswa}', 'siswacontroller@show');
Route::get('siswa/{siswa}/edit', 'siswacontroller@edit');
Route::post('siswa/{siswa}/update', 'siswacontroller@update');
Route::get('siswa/{siswa}/delete', 'siswacontroller@delete');

// guru
Route::get('guru/create', 'gurucontroller@create');
Route::post('guru', 'gurucontroller@store');
Route::get('guru/{guru}', 'gurucontroller@show');
Route::get('guru/{guru}/edit', 'gurucontroller@edit');
Route::post('guru/{guru}/update', 'gurucontroller@update');
Route::get('guru/{guru}/delete', 'gurucontroller@delete');

// walikelas
Route::get('walikelas', 'walikelascontroller@walikelas');
Route::get('walikelas/create', 'walikelascontroller@create');
Route::post('walikelas', 'walikelascontroller@store');
Route::get('walikelas/{walikelas}', 'walikelascontroller@show');
Route::get('walikelas/{walikelas}/edit', 'walikelascontroller@edit');
Route::post('walikelas/{walikelas}/update', 'walikelascontroller@update');
Route::get('walikelas/{walikelas}/delete', 'walikelascontroller@delete');

// kelas
Route::get('kelas', 'kelascontroller@kelas');
Route::get('kelas/create', 'kelascontroller@create');
Route::post('kelas', 'kelascontroller@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//guru
Route::get('guru', 'gurucontroller@guru');