<?php

namespace App\Http\Controllers;

use App\Http\Middleware\PersoIp;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    // création d'un constructeur pour utiliser un middleware
    public function __construct()
    {
        // $this->middleware(PersoIp);
    }

    // création d'une méthode pour le traitement sans paramètre
    public function index()
    {
        return 'salut je passe par un controlleur';
    }

    // création d'une méthode pour le traitement avec paramètre inscrit dans la route
    public function index_param($name)
    {
        return "Salut $name, je passe par un controleur avec un paramètre";
    }

}
