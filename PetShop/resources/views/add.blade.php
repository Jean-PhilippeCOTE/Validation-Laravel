@extends('layout')

@section('title', 'Ajouter une entrée')
@section('content')
    <article>
        <h1>Choisissez d'ajouter un animal ou une espèce</h1>
            <section>
                <a href="addAnimal" class="add">Ajouter un animal</a>
                <a href="addSpecies" class="add" id="background">Ajouter une espèce</a>
            </section>
    </article>
@endsection
