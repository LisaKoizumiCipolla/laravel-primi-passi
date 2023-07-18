<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>ポケモン、ゲットだぜ！</h1>
    
    <ul>
        <li>
            <a href="{{ route('first-team') }}">
                First team
            </a>
        </li>
        <li>
            <a href="{{ route('second-team') }}">
                Second team
            </a>
        </li>
        <li>
            <a href="{{ route('third-team') }}">
                Third team
            </a>
        </li>
    </ul>
    
</body>
</html>