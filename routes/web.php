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
    return view('home');
});

Route::get('/aboutme', function() {
    return view('aboutme',
    [
        'name' => 'Alessandro',
        'srcLogo' => 'https://m.media-amazon.com/images/I/51xv9QsBymL._AC_UY606_.jpg'
    ]);
});

Route::get('/altrapagina', function() {
    return view('altrapagina');
});


Route::get('/altrapaginaancora', function() {
    return view('altrapaginaancora');
});
