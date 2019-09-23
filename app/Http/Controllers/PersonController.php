<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;

class PersonController extends Controller
{
    /**
     * @param Person $person
     * @return PersonResource
     * @return PersonResourceCollection
     */

    public function show(Person $person) : PersonResource
    {
        // collect des data dans la db et les retournes en array
        // tout sera envoyé sous un parent data
        return new PersonResource($person);
    }

    // Permet d'afficher la liste de toutes les personnes si on ne mentionne pas d'id
    public function index() : PersonResourceCollection 
    {
        // paginate permet de mettre de faire des pages lors de la lecture sur postman, page=2 affichera du 
        // 16 au ...
        return new PersonResourceCollection(Person::paginate());
    }

    // On va crée une nouvelle entrée
    public function store(Request $request)
    {
        // create person
        $request->validate(
            [
                'first_name' => 'required',
                'last_name'  => 'required',
                'email'      => 'required',
                'phone'      => 'required',
                'city'       => 'required',
            ]);

        // Création de la variable person
        // attention il faut s'assurer que les champs soit "fillable dans Person.php"
        $person = Person::create($request->all());
        
        // on retourne ce qu'on vient de créer
        return new PersonResource($person);
    }

    // On va mettre a jour une entrée
    public function update(Person $person, Request $request) : PersonRessource
    {
        // On va update l'entrée
        $person->update($request->all());

        // On retourne l'entrée qu'on vient d'update
        return new PersonRessource($person);
    }

    // On va détruire une entrée
    public function destroy(Person $person)
    {
        // On utilise la function delete inclus dans laravel
        $person->delete();

        // On retourne un tableau, il sera vide si l'opération à réussi
        return response()->json();
    }
}
