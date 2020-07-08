@extends('layout')

@section('title', 'Modifier un animal')
@section('content')
    <h1>Modification des informations</h1>
    <form action="/editAnimal" method="POST">
        @csrf
        <input value="{{ $request->id }}" name="id" hidden>
        <label for="name">Nom :</label>
        <input type="text" class="edit" name="name" value="{{ $request->name }}" maxlength="300">

        <label for="age">Age :</label>
        <input type="number" class="edit" name="age" value="{{ $request->age }}" maxlength="300">

        <label for="description">Description :</label>
        <textarea class="edit" name="description" rows="5" col="25">{{ $request->description }}</textarea>

        <label for="sex">Sexe :</label>
        <input type="text" class="edit" name="sex" value="{{ $request->sex }}" maxlength="300">

        <label for="weight">Poids :</label>
        <input type="number" class="edit" name="weight" value="{{ $request->weight }}" maxlength="300">

        <label for="species_id">Espèce :</label>
        <select name="species_id">
            @foreach($species as $race)
                <option value="{{ $race->id }}" {{ $request->species_id == $race->id ? 'selected' : '' }} >{{ $race->name }}</option>
            @endforeach
        </select>

        <div id="buttons">
            <input type="submit" value="Soumettre">
        </div>
    </form>
@endsection
