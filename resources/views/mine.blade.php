<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($mine)
        <div>
            {{ "Mine id = " . $mine->id }}
        </div>
        <div>
            {{ "Mine name = " . $mine->name }}
        </div>
        <div>
            {{ "Mine longitude = " . $mine->longitude }}
        </div>
        <div>
            {{ "Mine latitude = " . $mine->latitude }}
        </div>
    @else
        <div>
            <p>This mine doesn't exist</p>
        </div>
    @endif
</body>
</html>