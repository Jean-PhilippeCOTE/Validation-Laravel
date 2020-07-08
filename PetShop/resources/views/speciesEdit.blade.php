@extends('layout')

@section('title', 'Modifier une espèce')
@section('content')
    <h1>Modification des informations</h1>
    <form action="/editSpecies" method="POST">
        @csrf
        <input value="{{ $request->id }}" name="id" hidden>
        <label for="name">Nom :</label>
        <input type="text" class="edit" name="name" value="{{ $request->name }}" maxlength="300">

        <label for="description">Description :</label>
        <textarea class="edit" name="description" rows="5" col="25">{{ $request->description }}</textarea>

        <div id="buttons">
            <input type="submit" value="Soumettre">
        </div>
    </form>
@endsection
