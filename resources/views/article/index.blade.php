@extends('layouts.app')
@section('title')
  Articles
@endsection
@section('content')
<a href="{{route('article.create')}}" class="btn btn-dark">Create a new post</a>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>TITLE</th>
      <th>BODY</th>
      <th>AUTHOR</th>
      <th>READING TIME</th>
      <th>CREATED AT</th>
      <th>CATEGORY</th>
      <th>TAGS</th>
      <th>ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($articles as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->title}}</td>
      <td>{{$item->body}}</td>
      <td>{{$item->author}}</td>
      <td>{{$item->reading_time}} min</td>
      <td>{{$item->created_at}}</td>
      <td>{{$item->category ? $item->category->name : "No Category"}}</td>
      <td>
        @if (count($item->tags) > 0 )
          @foreach ($item->tags as $tag)
            <span class="tag"> {{$tag->name}} </span>
          @endforeach
          @else
            N/a
        @endif
      </td>
      <td>
          <a href="{{route('article.show',['article'=>$item->id])}}">View</a>
          <a href="{{route('article.edit',['article'=>$item->id])}}">Edit</a>
          <form action="{{route('article.destroy',['article'=>$item->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <button><a style="color: red">Delete</a></button>
          </form>
        </td>
    </tr>
    @empty
    <tr>
      <td>No Articles</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection
