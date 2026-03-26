@extends('layout')

@section('content')

<h2>👨‍💻 Authors</h2>

@foreach($authors as $author)
    <div class="card">
        <a class="link" href="/authors/{{ $author['id'] }}">
            {{ $author['name'] }}
        </a>
    </div>
@endforeach

@endsection