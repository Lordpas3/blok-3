@extends('layout2')

@section('title')
    <h1>{{ $article->title }}</h1>
    <span class="byline">{{ $article->excerpt }}</span>
@endsection
@section('content')
    <div>
        <p>{{ $article->body }}</p>
    </div>
@endsection
