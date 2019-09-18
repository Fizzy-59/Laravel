{{-- Creation de la vue create avec le formulaire pour raccourcir l'url --}}

@extends('default')

@section('content')

<h1>Raccourcir un nouveau lien</h1>

<form action="" method="POST">

    {{-- Ajout d'une ligne en hidden pour gèrer la création de token --}}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label for="url">Lien à raccourcir</label>
        <input type="text" name="url" id="url" placeholder="http:://....">
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Raccourcir</button>
    </div>

</form>

@endsection