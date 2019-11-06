@extends('template')

@section('title') Blog @endsection

@section('content')
<div class="row">
   <h5 class="center">Escreva seu post</h5>
</div>

@section('item1')
    <a href="{{route('blog.index')}}">Voltar</a>
@endsection

@if($errors->all())
   @foreach ($errors->all() as $error)
       <h5 class="center red-text">{{$error}}</h5>
   @endforeach
@endif
<div class="row">
   <div class="container">
      <form method="POST" action="{{route('post.store')}}">
         @csrf
         <input type="hidden" name="user" value="{{Auth::user()->id}}">
         <div class="row">
            <div class="input-field">
               <label for="title">Titulo</label>
               <input type="text" name="title" id="title">
            </div>
         </div>
         <div class="row">
            <div class="input-field">
               <input type="text" name="content" id="content" data-length="255">
                <label for="content">Conteudo</label>
            </div>
         </div>
         <div class="row center">
            <input type="submit" class="btn grey darken-3" value="Postar">
         </div>
      </form>
   </div>
</div>

@endsection
