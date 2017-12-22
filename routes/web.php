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
    return view('in');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/agen', function () {
    return view('agen');
});
Route::get('/ayam', function () {
    return view('ayam');
});
Route::get('/telur', function () {
    return view('telur');
});
Route::get('/pesan', function () {
    return view('pesan');
});
Route::get('/statistik', function () {
    return view('sttaistik');
});
Route::get('/datajual', function () {
    return view('datajual');
});
Route::get('/profil', function () {
    return view('profil');
});
