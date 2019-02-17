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

Route::get('/ajout/{id}', [
    'uses' => 'ProductController@addToCart',
    'as' => 'addProduct'
    ]);

Route::get('/boutique', 
    [
       'uses' => 'ProductController@display',
       'as' => 'index'
    ]
   );

   Route::get('/cart', [
    'uses' => 'BasketController@index',
    'as' => 'index'
 ]
);

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






Route::get('/reduce/{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne',
]);

Route::get('/remove/{id}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove',
]);

Route::get('/add-to-cart', [
    'uses' => 'ProductController@addToCart',
    'as' => 'product.addToCart',
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart',
])->middleware('auth');

Route::get('/shop', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.shop',
]);