<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIES</title>
</head>
<body>
    <h1>Lissta de estrenos 2024</h1>

        @auth
            <a href="{{url('dashboard')}}">Dashboard</a>
        @else
            <a href="{{url('login')}}">login</a>
        @endauth

    <ul>
        @foreach ( $movies as $movie )
            <li>
                <a href="{{ url('movie', $movie->id) }}"> {{$movie->title}} </a>
            </li>
        @endforeach
    </ul>

</body>
</html>