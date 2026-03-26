@extends('layout')

@section('content')

<div class="card">
    <h2>{{ $publisher['name'] }}</h2>

    <p><strong>Country:</strong> {{ $publisher['country'] }}</p>

    <a class="link" href="/publishers">⬅ Back</a>
</div>

@endsection