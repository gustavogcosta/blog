@extends('template')

@section('title') Blog @endsection

@section('item1')<a href="{{route('blog.profile')}}">Voltar</a>@endsection

@section('content')

@if($errors->all())
   @foreach ($errors->all() as $error)
       <h5>{{$error}}</h5>
   @endforeach
@endif
<div class="row">
   <div class="container">
      <form method="POST" action="{{route('user.update')}}">
         @csrf
         @method('put')
         <div class="row">
            <div class="input-field">
               <label for="name">Nome</label>
               <input value="{{Auth::user()->name}}" type="text" name="name" id="name">
            </div>
         </div>
         <div class="row">
            <div class="input-field">
               <label for="email">Email</label>
               <input value="{{Auth::user()->email}}" type="text" name="email" id="email">
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
         </div>
      </form>
   </div>
</div>
@endsection
