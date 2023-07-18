<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>第二チーム</h1>

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
<br>
<br>
    <div>
        <a href="{{ route('homepage') }}">
            << Go back to the team list
        </a>
    </div>
</body>
</html>