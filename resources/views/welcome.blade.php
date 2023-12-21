<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <h1>Site minier de Pont-Péan : </h1>
        <p>Au cœur de l'histoire minière de la région, le site minier de Pont-Péan est une vitrine du
        patrimoine industriel qui a façonné notre communauté depuis des décennies. Notre équipe
        d'administration est fière de jouer un rôle clé dans la préservation, la gestion et la mise 
        en valeur de ce site historique.<br> Ici on voit qu'il y a un problème. 
        Notre mission est de préserver l'authenticité du site minier, de garantir sa sécurité et de
        fournir des informations éducatives et culturelles aux visiteurs. À travers une gestion
        responsable, nous nous engageons à maintenir la mémoire de l'exploitation minière vivante et
        accessible à tous.
        </p>

        <div style="text-align: center; margin-top: 20px;">
            <a href="show.blade.php" style="text-decoration: none;">
                <button style="background-color: #000; color: #fff; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer;">
                    Nouvel utilisateur
                </button>
            </a>
        </div>

        <footer style="position: fixed; bottom: 15px; width: 100%; background-color: #000; color: #fff; padding: 10px; text-align: center;">
            <p>Fait par Sterenn Languille</p>
        </footer>

    </body>
</html>
