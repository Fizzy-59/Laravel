<?php

namespace App\Http\Controllers;

use Request;
use App\Link;
use Symfony\Component\HttpFoundation\RedirectResponse;


// Création du controller perso pour nos routes et des méthodes liées

class LinksController extends Controller
{
    // Fonction de capture d'url
    public function show($id)
    {
        // On récupère le lien affiché
        $link = Link::findOrFail($id);
        // On ne veut pas de vue mais une redirection
        return new RedirectResponse($link->url);
    }

        public function create()
    {
        return view('links/create');
    }

    public function store()
    {
        // Création d'une méthode pour vérifier les doublons url en bdd
        $url = Request::get('url');
        $link = Link::where('url', $url)->first();

        if(!$link)
        {
            // Si le lien  n'est pas présent en bdd alors on le crée
            $link = Link::create(['url' => $url]);
        }
        // Pour simplifier le if du dessous on peut utiliser 
        // $link = Link::firstOrCreate(['url' => $url]);


        // Debug pour affichezr les infos
        // dd($link);
        // dd(Request::get('url'));

        // Renvoi vers la vue
        return view('links/success', compact('link'));


    }
}

