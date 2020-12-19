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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kawan', function () {
    return 'Halo Kawan';
});

Route::get('/kawan/{page}', function ($page) {
    return "Hello Kawan, ini halaman Belajar Route ".$page;
});

Route::get('/kawan-optional/{page?}', function ($page=404) {
    return "Hello Kawan, ini halaman Belajar Route ".$page;
});

Route::get('/percobaan/{page}', function ($page) {
    $a = 3;
    $b = 1;
    $hasil = $a+$b;
    return "Hasil penjumlahan a dan b = " .$hasil;
});

Route::get('tugas', 'tugas_pertama_yuni@index');


Auth::routes();

Route::get('/hello', function(){
    return view('hello', ['name' => 'Yuni']);
});

Route::get('/home', 'HomeController@home');

Route::get ('/about', 'AboutController@about');

Route::get ('/article/{id}', 'ArticleController@article');

Route::get('/page', 'PageController@page');

Route::get('kuisYuni', 'kuisYuniController@kuisYuni');

Route::get('/tubesDemo', function () {
    return view('tubesDemo');
 });

Route::get('/aboutDemoTubes', function () {
    return view('aboutDemoTubes');
 });

 Route::get('/fanartsDemoTubes', function () {
    return view('fanartsDemoTubes');
 });