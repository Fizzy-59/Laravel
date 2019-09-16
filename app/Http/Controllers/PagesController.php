<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {

        // On veut faire passer une varibale à notre vue
        $title = "A propos";

        // On va retourner notre vue perso créée avec Blade, on second paramètre on envoi la varibale
        return view('pages/about', ['title' => $title]);

    }
}
