@extends('template')

@section('content')

<h4 class="center">Registre-se</h4>

@if($errors->all())
   @foreach ($errors->all() as $error)
       <h5>{{$error}}</h5>
   @endforeach
@endif

<div class="row container">
   <form method="POST" action="{{route('user.store')}}">
      @csrf
      <div class="row">
         <div class="input-field">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
         </div>
      </div>
      <div class="row">
         <div class="input-field">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
         </div>
      </div>
      <div class="row">
         <div class="input-field">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password">
         </div>
      </div>
      <div class="row center">
         <input type="submit" class="btn grey darken-3" value="Registrar">
         <a href="{{route('blog.home')}}" class="btn grey darken-3">Voltar</a>
      </div>
   </form>
</div>

@endsection
