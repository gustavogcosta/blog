@extends('template')

@section('title') Posts @endsection

@section('content')

<h1>Posts</h1>

<table>
<tr>
   <th>Titulo</th>
   <th>Conteudo</th>
   <th>Autor</th>
   <th></th>
</tr>
@foreach ($posts as $post)
<tr>
   <td>{{$post->title}}</td>
   <td>{{$post->content}}</td>
   <td>{{$post->user}}</td>
   <td><a href="{{route ('posts.edit', $post->id)}}">Atualizar</a></td>
</tr>
@endforeach
</table>

<a href="{{route ('posts.create')}}">Adicionar</a>

@endsection
