@extends('layout')

@section('title', 'Ajouter une espèce')
@section('content')
    <h1>Ajouter une espèce</h1>
    <form action="/addOneSpecies" method="POST">
        @csrf
        <label for="name">Nom :</label>
        <input type="text" class="edit" name="name" value="Entrer un nom" maxlength="300">

        <label for="description">Description :</label>
        <textarea class="edit" name="description" rows="5" col="25">Décrire rapidemment l'espèce</textarea>

        <div id="buttons">
            <input type="submit" value="Soumettre">
        </div>
    </form>
@endsection
