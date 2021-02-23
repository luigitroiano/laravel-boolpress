@extends('layouts.app')
@section('title')
  Articles
@endsection
@section('content')
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>TITLE</th>
      <th>BODY</th>
      <th>AUTHOR</th>
      <th>READING TIME</th>
      <th>CREATED AT</th>
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
    </tr>
    @empty
    <tr>
      <td>No Customer</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection
