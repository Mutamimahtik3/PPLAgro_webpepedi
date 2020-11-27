<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::resource('artikel', 'ArtikelController');
    Route::resource('konsultan', 'KonsultanController');
    Route::delete('artikel/{artikel:slug}', 'ArtikelController@destroy')->name('artikel.destroy.admin');
    Route::get('artikel/{artikel:slug}', 'ArtikelController@edit')->name('artikel.edit.admin');
    Route::patch('artikel/{artikel:slug}', 'ArtikelController@update')->name('artikel.update.admin');
    Route::get('/dataAkun', 'AdminController@dataAkun')->name('admin.akun');
});

Route::prefix('petani')->middleware('auth')->group(function () {
    Route::get('/', 'PetatniController@index')->name('petani.index');
    Route::get('artikel', 'ArtikelController@index')->name('artikel.index.petani');
    Route::get('artikel/{artikel:slug}', 'ArtikelController@show')->name('artikel.show.petani');
    Route::resource('penjadwalan', 'PenjadwalanController');
    Route::get('/myProfile', 'UserController@myProfile')->name('profile.Petani');
    Route::get('/editProfile', 'UserController@editProfile')->name('edit.profile.Petani');
    Route::patch('/editProfile', 'UserController@updateProfile')->name('edit.profile.Petani');
    Route::get('/editPassword', 'UserController@editPassword')->name('edit.password.Petani');
    Route::patch('/editPassword', 'UserController@updatePassword')->name('edit.password.Petani');
});

Route::prefix('konsultan')->middleware('auth')->group(function () {
    Route::get('/', 'KonsultanrController@index')->name('konsultan.index');
    Route::get('/myProfile', 'UserController@myProfile')->name('profile.Konsultan');
    Route::get('/editProfile', 'UserController@editProfile')->name('edit.profile.Konsultan');
    Route::patch('/editProfile', 'UserController@updateProfile')->name('edit.profile.Konsultan');
    Route::get('/editPassword', 'UserController@editPassword')->name('edit.password.Konsultan');
    Route::patch('/editPassword', 'UserController@updatePassword')->name('edit.password.Konsultan');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
