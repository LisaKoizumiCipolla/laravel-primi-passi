<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>ポケモン、ゲットだぜ！</h1>

    @foreach ($pokemons as $pokemon)
    <h2>
        {{ $pokemon['name'] }}
    </h2>
    <div>
        {{ $pokemon['type1'] }}
    </div>
    <div>
        {{ $pokemon['type2'] }}
    </div>
    @endforeach
</body>
</html>