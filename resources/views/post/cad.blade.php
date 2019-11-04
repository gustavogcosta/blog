@extends('template')

@section('title') Posts @endsection

@section('content')

<h1>Criar novo</h1>

<form method="POST" action="{{route('posts.store')}}">
   @csrf
   <input type="text" name="title" placeholder="Titulo:">
   <br>
   <textarea name="content"></textarea>
   <br>
   <select name="user">
      @foreach ($users as $user)
          <option value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
   </select>
   <input type="submit" value="Adicionar">
</form>

<a href="{{route ('posts.index')}}">Voltar</a>

@endsection
