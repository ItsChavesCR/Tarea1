@extends('layout')

@section('content')

<div class="card">
    <h2>👨‍💻 {{ $author['name'] }}</h2>

    <p><strong>🌍 Nationality:</strong> {{ $author['nationality'] }}</p>
    <p><strong>🎂 Birth Year:</strong> {{ $author['birth_year'] }}</p>
    <p><strong>📚 Fields:</strong> {{ $author['fields'] }}</p>

    <hr>

    <h3>📘 Books written:</h3>

    <ul>
        @foreach($author['books'] as $book)
            <li>
                <a class="link" href="/books">
                    {{ $book['title'] }}
                </a>
            </li>
        @endforeach
    </ul>

    <br>
    <a class="link" href="/authors">⬅ Back</a>
</div>

@endsection