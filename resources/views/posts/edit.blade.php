@extends('layouts.app')

@section('content')
<form action="/posts/update/{{$post->id}}" method="post">
    @csrf
    <input name="title" value="{{$post->title}}">
    <br>
    <textarea name="content" rows="3">
        {{$post->content}}
    </textarea>
    <br>
    <button type="submit">Editar</button>
</form>
<a href="/posts/delete/{{ $post->id }}">Deletar</a>
@endsection
