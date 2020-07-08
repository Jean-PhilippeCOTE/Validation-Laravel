@extends('layout')

@section('title', 'Accueil')
@section('content')
    @section('content')
        <h1>Les espèces</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Modifier l'Entrée</th>
                    <th>Supprimer l'Entrée</th>
                </tr>
            </thead>
            <tbody>
            @foreach($species as $race)
                <tr>
                    <td>{{ $race->name }}</td>
                    <td id="desc">{{ $race->description }}</td>
                    <td>
                        <form class="form" action="/speciesEdit" method="post">
                            @csrf
                            <input type="hidden" value="{{ $race->id }}" name="id">
                            <input type="submit" id="edit" value="Modifier">
                        </form>
                    </td>
                    <td>
                        <form class="form" action="/deletespecies" method="post">
                            @csrf
                            <input type="hidden" value="{{ $race->id }}" name="id">
                            <input type="submit" id="delete" value="Supprimer">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endsection
@endsection
