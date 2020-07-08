@extends('layout')

@section('title', 'Nos Animaux')
@section('content')
    <h1>Nos animaux</h1>
    <table>
        <thead>
            <tr id="head">
                <th>Nom</th>
                <th>Âge</th>
                <th>Description</th>
                <th>Sexe</th>
                <th>Poids</th>
                <th>Espèce</th>
                <th>Modifier l'Entrée</th>
                <th>Supprimer l'Entrée</th>
            </tr>
        </thead>
        <tbody>
        @foreach($animals as $animal)
            <tr>
                <td>{{ $animal->name }}</td>
                <td>{{ $animal->age }}</td>
                <td id="desc">{{ $animal->description }}</td>
                <td>{{ $animal->sex }}</td>
                <td>{{ $animal->weight }}</td>
                <td><a href="/speciesListing" id="species">{{ $animal->species->name }}</a></td>
                <td>
                    <form class="form" action="/animalsEdit" method="post">
                        @csrf
                        <input type="hidden" value="{{ $animal->id }}" name="id">
                        <input type="submit" id="edit" value="Modifier">
                    </form>
                </td>
                <td>
                    <form class="form" action="/deleteAnimal" method="post">
                        @csrf
                        <input type="hidden" value="{{ $animal->id }}" name="id">
                        <input type="submit" id="delete" value="Supprimer">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
