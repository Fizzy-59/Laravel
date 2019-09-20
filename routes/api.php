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

Route::get('/person', function()
{
    $person = 
    [
        'firstname' => 'Romain',
        'last_name' => 'Devillez',
    ];

    return $person;
});

// Nous n'utiliserons pas cette route pour le tuto
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
