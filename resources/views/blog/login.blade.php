@extends('template')

@section('title') Blog @endsection

@section('content')

<h1>Faça login para continuar</h1>

@if($errors->all())
   @foreach ($errors->all() as $error)
       <h5>{{$error}}</h5>
   @endforeach
@endif

<form method="POST" action="{{route('blog.login.do')}}">
   @csrf
   <input type="text" name="email" placeholder="Email:">
   <br>
   <input type="password" name="password" placeholder="Senha:">
   <br>
   <input type="submit" value="Logar">
</form>

@endsection
