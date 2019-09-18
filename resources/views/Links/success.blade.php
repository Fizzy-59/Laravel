{{-- Creation de la vue create avec le formulaire pour raccourcir l'url --}}

@extends('default')

@section('content')

<h1>Bravo à toi !</h1>

<p>
<a class ="btn btn-primary" href="{{ action('LinksController@show', ['id' => $link->id] )}}">
    
        {{-- {{ action('LinksController@show', ['id' => $link->id] )}} --}}
        {{-- On va utiliser un helper pour simplifier la ligne du dessus --}}
        return redirect($link->url, 301);
    </a>
</p>

@endsection