<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');

// awal route dashboard
Route::get('/admin/dashboard', 'DashboardController@index')->name('dashboard');
// akhir route dashboard

// awal route pasar
Route::get('/admin/pasar', 'PasarController@index')->name('pasar');
Route::get('/admin/pasar/create', 'PasarController@create')->name('pasarCreate');
Route::post('/admin/pasar/store', 'PasarController@store')->name('pasarStore');
Route::get('/admin/pasar/updateview/{pasar}', 'PasarController@updateview')->name('pasarUpdateView');
Route::patch('/admin/pasar/update/{pasar}', 'PasarController@update')->name('pasarUpdate');
Route::delete('/admin/pasar/destroy/{pasar}', 'PasarController@destroy')->name('pasarDestroy');
// akhir route pasar

// awal route pembangunan
Route::get('/admin/pembangunan', 'PembangunanController@index')->name('pembangunan');
Route::get('/admin/pembangunan/create', 'PembangunanController@create')->name('pembangunanCreate');
Route::post('/admin/pembangunan/store', 'PembangunanController@store')->name('pembangunanStore');
Route::get('/admin/pembangunan/updateview/{pembangunan}', 'PembangunanController@updateview')->name('pembangunanUpdateView');
Route::patch('/admin/pembangunan/update/{pembangunan}', 'PembangunanController@update')->name('pembangunanUpdate');
Route::delete('/admin/pembangunan/destroy/{pembangunan}', 'PembangunanController@destroy')->name('pembangunanDestroy');
// akhir route pembangunan