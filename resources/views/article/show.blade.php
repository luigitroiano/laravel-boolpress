@extends('layouts.app')
@section('title')
  Show-Articles
@endsection
@section('content')
  <div class="container">
    <div><h4>Titolo:</h4> {{$article->title}}</div>
    <div><h4>Paragrafo:</h4> {{$article->body}}</div>
    <div><h4>Autore:</h4> {{$article->author}}</div>
    <div><h4>Tempo di lettura:</h4> {{$article->reading_time}} min</div>
    <div><h4>Categoria:</h4> {{$article->category->name}}</div>
    <div><h4>Tags:</h4>  
      @if (count($article->tags) > 0 )
        @foreach ($article->tags as $tag)
          <span class="tag"> {{$tag->name}} </span>
        @endforeach
        @else
          N/a
      @endif
    </div>
  </div>
@endsection