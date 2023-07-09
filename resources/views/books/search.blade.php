@extends('layouts.layout')


@section('content')
    <h1>Search</h1>

    <form action="{{ route('books.search') }}" method="GET">
        <input type="text" name="query" placeholder="Enter search query" value="{{ $query }}">
        <button type="submit">Search</button>
    </form>

    <h1>Search Results</h1>

    <div class="search-results">
        @if ($books->isEmpty())
            <p>No results found.</p>
        @else
            <ul>
                @foreach ($books as $book)
                    <li>{{ $book->title }} - ISBN: {{ $book->isbn }} - Price: ${{ $book->price }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
