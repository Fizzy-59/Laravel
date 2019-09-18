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

Route::get('/', function () 
    {
    return view('welcome');
    });

// mène a la page du raccourciceur 
Route::get('links/create', 'LinksController@create');

// mène à la page qui traite après avoir appuyé sur le bouton
Route::post('links/create', 'LinksController@store');

// Capture du sytème d'url
Route::get('/r/{id}', 'LinksController@show')->where('id', '[0-9]+');