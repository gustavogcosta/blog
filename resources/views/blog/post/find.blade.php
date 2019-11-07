@extends('template')

@section('content')

{{-- <h5 class="center">Edite seu post</h5> --}}

@if($errors->all())
   @foreach ($errors->all() as $error)
       <h5 class="center red-text">{{$error}}</h5>
   @endforeach
@endif

<div class="row">
   <div class="container">
      <form method="POST" action="{{route('post.find')}}">
        @csrf
        <div class="row">
            <div class="input-field">
               <input type="text" required class="validate" name="keyword" id="keyword" data-length="255">
                <label for="keyword">Palavra chave</label>
            </div>
         </div>
        <div class="row center">
            <label>
                <input name="filtro"value="title" type="radio" checked />
                <span>Titulo</span>
            </label>
            <label>
                <input name="filtro" value="content" type="radio" checked />
                <span>Conteudo</span>
            </label>
        </div>
         
         <div class="row center">
            <input type="submit" class="btn grey darken-3" value="Pesquisar">
         </div>
      </form>
      @if (isset($posts))
         @foreach ($posts as $post)
            <div class="col s12">
                  <div class="card grey darken-3">
                     <div class="card-content white-text">
                     <span class="card-title">{{$post->title}}</span>
                        <p>{{$post->content}}</p>
                     </div>
                     <div class="card-action white-text">
                        Escrito por : {{$post->user}}
                     </div>
                  </div>
            </div>
         @endforeach
      @endif
   </div>
</div>

@endsection
