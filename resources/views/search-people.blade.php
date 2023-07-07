<!DOCTYPE html>
<html>
<head>
    <title>Search People</title>
</head>
<body>
    <h1>Search The Star Wars People</h1>

    <nav>
        <ul>
            <li><a href="{{route('list')}}">Actor & Movie Listing</a></li>
            <li><a href="{{ route('filter')}}">Actor & Movie Filter</a></li>
            <li><a href="{{ route('search-people')}}">The Star Wars Search</a></li>
        </ul>
    </nav>

    <form action="{{ route('search-people') }}" method="POST">
        @csrf
        <label for="search">Search:</label>
        <input type="text" name="search" id="search">
        <button type="submit">Search</button>
    </form>

    @isset($data)
        <h2>Results:</h2>

        <ul>
            @foreach ($data['results'] as $result)
                <li>Name: {{ $result['name'] }}</li>
                <li>Height: {{ $result['height'] }}</li>
                <li>Mass: {{ $result['mass'] }}</li>
                <hr>
            @endforeach
        </ul>
    @endisset
</body>
</html>
