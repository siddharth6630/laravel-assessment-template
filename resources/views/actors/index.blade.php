<!-- actors/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Actors and Movies</title>
</head>
<body>
    <h1>Actors and Movies</h1>

    <nav>
        <ul>
            <li><a href="{{route('list')}}">Actor & Movie Listing</a></li>
            <li><a href="{{ route('filter')}}">Actor & Movie Filter</a></li>
            <li><a href="{{ route('search-people')}}">The Star Wars Search</a></li>
        </ul>
    </nav>

    <ul>
        @foreach($actors as $actor)
            <li>
                {{ $actor->actor_name }}:
                <ul>
                    @foreach($actor->movies as $movie)
                        <li>{{ $movie->movie_name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
