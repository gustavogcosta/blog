@extends('template')

@section('title') Posts @endsection

@section('content')

<h1>Criar novo</h1>

<form method="POST" action="{{route('posts.update', $post)}}">
   @csrf
   @method('PUT')
   <input type="text" name="title" placeholder="Titulo:" value="{{ $post->title }}">
   <br>
   <textarea name="content">{{ $post->content }}</textarea>
   <br>
   <select name="user">

      @foreach ($users as $user)

         @if ($user->id === $post->user)
            <option selected value="{{$user->id}}">{{$user->name}}</option>
         @else
            <option value="{{$user->id}}">{{$user->name}}</option>
         @endif

      @endforeach

   </select>
   <input type="submit" value="Adicionar">
</form>
<form method="POST" action="{{route('posts.destroy', $post)}}">
   @csrf
   @method('DELETE')
   <input type="submit" value="Deletar">
</form>
<a href="{{route ('posts.index')}}">Voltar</a>

@endsection
