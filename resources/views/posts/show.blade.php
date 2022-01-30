@extends('layouts.app')

@section('content')
    <div class="card" style="width:300px">
        <h5 class="card-title"> {{$post->title}}</h5>
         <p class="card-text"> {{$post->content}}</p>
        <a href="/posts/edit/{{$post->id}}">Editar post</a>
    </div>
@endsection
