@extends('layouts.app')

@section('content')
    <form action="/posts/store" method="post">
        @csrf
        <input type="text" name="title" placeholder="Titulo">
        <br>
        <textarea name="content" rows="3" placeholder="Conteudo"></textarea>
        <br>
        <button type="submit">Publicar</button>
    </form>
@endsection
