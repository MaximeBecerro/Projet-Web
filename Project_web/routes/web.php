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

//Route de la page d'acceuil
Route::get('/', function () {
    return view('welcome');
});

//Route de la page des évènements/manifestations
Route::get('/evenements', function () {
    return view('evenements');
});

//Route permettant d'utiliser l'API qui récupère les éléments de la BDD
Route::get('idees', 'ApiController@store');

//Route de la page de la boutique. On effectue aussi une requête SQL pour récupérer les produits de la BDD
Route::get('/boutique', function () {
    $products=DB::table('products')->get();
    return view('boutique', compact('products'));
});

//Classe qui aide à la génération de routes concernant l'authentification des utilisateurs
Auth::routes();

//Route utilisée après la connexion qui redirige vers la page d'acceuil
Route::get('/home', 'HomeController@index')->name('home');

//Route de la page de déconnexion qui redirige directement vers la page d'acceuil
Route::get('/logout', 'Auth\LoginController@logout');

//Route donnant accès aux droits d'administrateur du site
Route::get('/admin', function () {
    $users=DB::table('users')->get();
    return view('admin', compact('users'));
});

//Route des mentions légales présentes dans le footer
Route::get('/mentions_legales', function () {
    return view('mentions_legales');
});

//Route des Conditions Générales d'Utilisation du footer
Route::get('/cgu', function () {
    return view('cgu');
});
