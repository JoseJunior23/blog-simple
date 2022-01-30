@extends('layouts.app')

@section('content')
    <a href="/posts/create">Criar post</a>
    @foreach ($posts as $post)
        <div class="card" style="width:300px">
            <a href="/posts/{{$post->id}}"> {{$post->title}}</a>
        </div>
    @endforeach
@endsection
