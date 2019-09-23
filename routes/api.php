<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Person;

// On cré un préfix de route v1 pour indiquer facielement la version de l'api qu'on utilise
Route::prefix('v1')->group(function()
{
    // Route menant à l'id d'une personne via son controller
// En utilisant ::apiRessource on a pas besoind e renseigner l'argument à la toute et la fonction lié au controlleur
// Ca crée automatiquement toutes les routes possible : get/put/patch/post/delete ...
Route::apiResource('/person', 'Api\v1\PersonController');
});



// Nous n'utiliserons pas cette route pour le tuto
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
