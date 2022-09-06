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

Route::get('/', function () { // get adalah method nya. pada url / untuk menjalankan view yang namanya welcome
    return view('welcome'); //ini mau d tampilkan ke mana ?
});

Route::get('/kiky', function () {// get adalah method nya. pada url / untuk menjalankan view yang namanya welcome
    return view('welcome'); //ini mau d tampilkan ke mana ?
});
//cek url, kalo enter pakai get. ada url mikir pake post atau get ? 

//yang d pikir : get/post, urlnya apa, actionnya apa ?