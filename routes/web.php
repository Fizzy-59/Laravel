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

// Route qui retourne le nom qu'on entre dans l'url
Route::get('coucou/{name}', function($name)
{
    return "coucou $name";
});


// Route acceptant 2 paramètres, trié à l'affichage avec where grace au regex 
// !!!where inverse les param par rapport a prematch et replace
// <ue du posix pour le where()
Route::get('salut/{slug}-{id}', function($slug, $id)
{
    return "Slug : $slug, ID : $id";
})->where('slug', '[a-z0-9^\-]+')->where('id', '[0-9]');

// Création d'une route nomée
Route::get('route_nommée', ['as' => 'nommée', function()
{
    return "C'est la route nommée !";
}]);

// Route nommée avec paramètre 
Route::get('route_nommée_param/{chiffre}-{lettre}', ['as' => 'nommée_param', function($chiffre, $lettre)
{
    return "Lien : ". route('nommée_param', ['chiffre' => $chiffre, 'lettre' => $lettre]);
}])->where('chiffre', '[1-9]+')->where('lettre', '[a-zA-Z]+');

// Groupe de routes
Route::group(['prefix' => 'admin'], function()
{
    Route::get('super_user', function()
    {
        return 'Vous êtes le super user !';
    });
});


// Route avec middleware
Route::get('test_middleware', function()
    {
        return "Tu as le bon ip !";
    }
)->middleware('PersoIp');

// Route envoyant vers un controleur
Route::get('first_controller', 'FirstController@index');

// Route envoyant vers un controleur avec un paramètre
Route::get('first_controller/{name}', 'FirstController@index_param');

// Création d'une route nommée vers un controller utilisant une fonction de celui ci
// on rajoute as et uses dans un tableau pour faire le lien
Route::get('a-propos', ['as' => 'about', 'uses' => 'PagesController@about']);

