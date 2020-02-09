@extends('layout2')

@section('title')
    <h1>Articles</h1>
    <span class="byline">Hier staan articles vanuit een database</span>
@endsection
@section('content')
    @foreach( $articles as $article )
        <div class="content">
            <div class="title">
                <h2>
                    <a href="/articles/{{ $article->id }}"> {{ $article->title }}</a>
                </h2>
            </div>

            <p>
                <img
                    src="images/banner.jpg"
                    alt=""
                    class="image image-full"
                />
            </p>

            {!! $article->excerpt !!}
        </div>
    @endforeach
@endsection
