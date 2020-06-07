<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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
    return view('welcome');
});

Route::get('/korona', 'HomeController@korona');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('pesan/{id}', 'PesanController@index');
Route::post('pesan/{id}', 'PesanController@pesan');
Route::get('checkout', 'PesanController@checkout');
Route::get('checkout/{id}','PesanController@delete');
Route::get('konfirmasi-checkout', 'PesanController@konfirmasi');

Route::get('berita/{id}', 'AdminController@detail');
Route::get('/berita', 'HomeController@indexberita');
Route::get('/admin/berita', 'AdminController@index');
Route::get('/admin/berita/create', 'AdminController@createberita');
Route::post('/admin/berita', 'AdminController@storeberita');
Route::get('/admin/berita/{id}/edit', 'AdminController@editberita');
Route::patch('/admin/berita/{id}', 'AdminController@updateberita');
Route::get('/admin/berita/{id}', 'AdminController@hapusberita');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');

Route::get('/toko', 'HomeController@toko');

Route::get('admin', 'AdminController@index');
Route::post('/admin/tambah', 'AdminController@tambahbarang');
Route::get('/admin/{id}/edit', 'AdminController@editbarang');
Route::post('/admin/{id}/update', 'AdminController@updatebarang');
Route::get('admin/{id}', 'AdminController@hapusbarang');