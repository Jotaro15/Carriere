<!DOCTYPE html>
<html>
<head>
    <title>Création d'une Concession</title>
</head>
<body>
    <h1>Création d'une Concession</h1>
    <form method="post" action="/concession/create">
        @csrf 
        <table>
            <tr>
                <td>
                    <input type="text" name="name" placeholder="Nom de la concession"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="siret" maxlength="15" placeholder="SIRET"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="siret" maxlength="15" placeholder="SIRET"/>
                </td>
            </tr>
        </table>
        <button type="submit">Créer</button>
    </form>
</body>
</html>