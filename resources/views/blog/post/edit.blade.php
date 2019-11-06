@extends('template')

@section('title') Blog @endsection

@section('content')
<div class="row">
   <h5 class="center">Edite seu post</h5>
</div>

@section('item1')
    <a href="{{route('post.show')}}">Voltar</a>
@endsection

@if($errors->all())
   @foreach ($errors->all() as $error)
       <h5 class="center red-text">{{$error}}</h5>
   @endforeach
@endif
<div class="row">
   <div class="container">
      <form method="POST" action="{{route('post.update', $post)}}">
        @csrf
        @method('put')
         <div class="row">
            <div class="input-field">
               <label for="title">Titulo</label>
               <input type="text" name="title" value="{{$post->title}}" id="title">
            </div>
         </div>
         <div class="row">
            <div class="input-field">
               <input type="text" value="{{$post->content}}" name="content" id="content" data-length="255">
                <label for="content">Conteudo</label>
            </div>
         </div>
         <div class="row center">
            <input type="submit" class="btn grey darken-3" value="Editar">
         </div>
      </form>
   </div>
</div>

@endsection
