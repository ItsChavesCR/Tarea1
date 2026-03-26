@extends('layout')

@section('content')

<h2>🏢 Publishers</h2>

@foreach($publishers as $publisher)
    <div class="card">
        <a class="link" href="/publishers/{{ $publisher['id'] }}">
            {{ $publisher['name'] }}
        </a>
    </div>
@endforeach

@endsection