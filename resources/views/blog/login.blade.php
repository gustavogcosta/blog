@extends('template')

@section('content')

<h4 class="center">Faça login para continuar</h4>

@if($errors->all())
   @foreach ($errors->all() as $error)
       <h5 class="center red-text">{{$error}}</h5>
   @endforeach
@endif

<div class="row">
   <div class="container">
      <form method="POST" action="{{route('blog.login.do')}}">
         @csrf
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
            <input type="submit" class="btn grey darken-3" value="Logar">
            <a href="{{route('blog.user.create')}}" class="btn grey darken-3">Registrar</a>
         </div>
      </form>
   </div>
</div>

@endsection
