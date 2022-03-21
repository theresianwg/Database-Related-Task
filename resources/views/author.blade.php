@extends('template')

@section('container')
    <h1>Author : {{ $author }}</h1>

    @foreach($articles as $article)
        <article class="mb-5">
            <h3>
                <a href="/article/{{ $article->slug }}">
                {{ $article->title }}
                </a>                    
            </h3>
            <h6>By: <a href="/author/{{ $article->author->slug }}" class="text-decoration-none"> {{ $article->author->name  }} </a></h6>
            <p>{{ $article->excerpt }}</p>
        </article>
    @endforeach
@endsection