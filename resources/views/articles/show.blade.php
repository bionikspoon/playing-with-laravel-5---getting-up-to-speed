@extends('app')

@section('content')
    <a href="{{action('ArticlesController@edit', [$article->id])}}">
        <h1>{{$article->title}}</h1></a>

    <article>{{$article->body}}</article>

    @unless($article->tags->isEmpty())
    <h5>Tags</h5>
    <ul>
        @foreach($article->tags as $tag)
            <li>{{$tag->name}}</li>
        @endforeach
    </ul>
    @endunless
@stop
