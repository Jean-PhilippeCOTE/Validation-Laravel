<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <ul>
            <li class="box"><a href="/">Accueil</a></li>
            <li class="box"><a href="animalsListing">Animaux</a></li>
            <li class="box"><a href="speciesListing">Espèces</a></li>
            <li class="box"><a href="add">Ajout(s)</a></li>
        </ul>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
