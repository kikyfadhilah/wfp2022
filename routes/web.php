<?php

use App\Http\Controllers\ProductController;
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

Route::get('/foo', function () {// get adalah method nya. pada url / untuk menjalankan view yang namanya welcome
    return 'hello world'; //ini mau d tampilkan ke mana ?
});


Route::view('/selamatdatang','welcome'); // route view sama dengan route get.. adalah method nya. pada url / untuk menjalankan view yang namanya welcome;

Route::get('greeting', function(){ //urlnya greeting
    return view('welcome', ['name' => 'kiky']); // viewnya welcome blade nah ngambil name. =>ini defaultnya.
});

Route::get('/my', function(){ 
    return view('mynrp'); 
});

Route::get('/myfriend/{nrp?}', function($nrp=null){ 
    return view('myfriend',['nrp' => $nrp]); 
});

Route::resource('product','ProductController');
Route::resource('category','CategoryController');



// Route::get('/myfriend/{nrp?}', function($nrp=null){ 
//     return view('myfriend',['nrp' => $nrp]); 
// })->name('myfriend');

//cek url, kalo enter pakai get. ada url mikir pake post atau get ? 

//yang d pikir : get/post, urlnya apa, actionnya apa ?