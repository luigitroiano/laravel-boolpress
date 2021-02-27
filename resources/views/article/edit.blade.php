@extends('layouts.app')
@section('title')
  Article-Create
@endsection
@section('content')
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div><br/>
@endif
{{-- <h1>Edit {{$post->title}}</h1> --}}
<form action="{{route('article.update', ['article'=>$article->id])}}" method="post">
  @csrf
  @method('put')
  {{-- INPUT TITOLO --}}
  <div class="form-group">
    <label for="title">Titolo</label>
    <input type="text" name="title" value="{{$article->title}}" id="title" class="form-control" placeholder="Inserisci titolo" aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Inserisci il titolo dell' articolo</small>
  </div>
  {{-- INPUT BODY --}}
  <div class="form-group">
    <label for="body">Body</label>
    <input type="text" class="form-control" name="body" value="{{$article->body}}" id="body" required>
    <small class="text-muted">Inserisci il body dell' articolo</small>
  </div>
  {{-- INPUT AUTHOR --}}
  <div class="form-group">
    <label for="author">Autore</label>
    <input type="text" name="author" id="author" class="form-control" placeholder="Inserisci Nome e Cognome" aria-describedby="helpId" value="{{$article->author}}" required>
    <small class="text-muted">Inserisci il tuo nome</small>
  </div>
  {{-- INPUT READING_TIME --}}
  <div class="form-group">
    <label for="reading_time">Tempo di lettura</label>
    <input type="number" name="reading_time" id="reading_time" value="{{$article->reading_time}}">
    <small class="text-muted">Inserisci il tempo di lettura</small>
  </div>
  {{-- INPUT CATEGORY --}}
  <div class="form-group">
    <label for="category">Categoria</label>
    <select class="form-control" name="category_id" id="category">
      @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
  </div>
  {{-- INPUT TAG --}}
  <div class="form-group">
    <label for="tags">Tag</label>
    <select class="form-control" name="tags[]" multiple id="tags">
      @foreach ($tags as $tag)
        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection