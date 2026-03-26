@extends('layout')

@section('content')

<h2>📘 Books</h2>

@foreach($books as $book)
    <div class="card">
        <h3>{{ $book['title'] }}</h3>

        <p>
            <a class="link" href="/authors/{{ $book['author_id'] }}">👨 Author</a> |
            <a class="link" href="/publishers/{{ $book['publisher_id'] }}">🏢 Publisher</a>
        </p>
    </div>
@endforeach

@endsection