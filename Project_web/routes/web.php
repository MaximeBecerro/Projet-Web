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
    return view('welcome');
});


Route::get('/evenements', function () {
    return view('evenements');
});

Route::get('/evenementspassé', function () {
    return view('evenementspassé');
});

Route::get('idees', 'ApiController@store');

Route::post('ProduitCart', 'Cart@addToCart');

Route::get('/boutique', function () {
    $products=DB::table('products')->get();
    return view('boutique', compact('products'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');



Route::get('/admin', function () {
    $users=DB::table('users')->get();
    return view('admin', compact('users'));
});

Route::get('/mentions_legales', function () {
    return view('mentions_legales');
});

Route::get('/cgu', function () {
    return view('cgu');
});

Route::get('/cgv', function () {
    return view('cgv');
});

Route::get('/cart', function () {
    return view('/cart');
});