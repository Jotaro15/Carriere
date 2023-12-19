<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulaire d'inscription</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
</head>
<body>

<header>
    <h1>Formulaire d'inscription</h1>
</header>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <label for="lastname">Nom :</label>
    <input type="text" name="lastname" required>

    <label for="firstname">Prénom :</label>
    <input type="text" name="firstname" required>

    <label for="email">Email :</label>
    <input type="email" name="email" required>

    <label for="phone">Téléphone :</label>
    <input type="tel" name="phone" required>

    <label for="idConcession">ID Concession :</label>
    <input type="number" name="idConcession" required>

    <label for="idRole">ID Role :</label>
    <input type="number" name="idRole" required>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" required>

    <button type="submit">S'inscrire</button>
</form>

<footer>
    <p>Fait par Sterenn Languille</p>
</footer>

</body>
</html>
