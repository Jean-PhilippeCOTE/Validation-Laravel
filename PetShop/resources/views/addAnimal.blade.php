@extends('layout')

@section('title', 'Ajouter un animal')
@section('content')
    <h1>Ajouter un animal</h1>
    <form action="/addAnAnimal" method="POST">
        @csrf
        <label for="name">Nom :</label>
        <input type="text" class="edit" name="name" value="Entrer un nom" maxlength="300">

        <label for="age">Age :</label>
        <input type="number" class="edit" name="age" value="2" maxlength="300" placeholder="Entrer un âge">

        <label for="description">Description :</label>
        <textarea class="edit" name="description" rows="5" col="25">Décrire rapidemment l'animal</textarea>

        <label for="sex">Sexe :</label>
        <input type="text" class="edit" name="sex" value="Non défini" maxlength="300" placeholder="Entrer un sexe">

        <label for="weight">Poids :</label>
        <input type="number" class="edit" name="weight" value="2" maxlength="300" placeholder="Entrer un poids">

        <label for="species_id">Espèce :</label>
        <select name="species_id">
            @foreach($species as $race)
                <option value="{{ $race->id }}">{{ $race->name }}</option>
            @endforeach
        </select>

        <div id="buttons">
            <input type="submit" value="Soumettre">
        </div>
    </form>
@endsection
