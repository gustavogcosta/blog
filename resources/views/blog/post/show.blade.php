@extends('template')

@section('title') Blog @endsection

@section('item1')<a href="{{route('blog.profile')}}">Voltar</a>@endsection

@section('content')
<div class="row">
   <div class="container">
        <br>
        @if(count($posts) === 0)
        <div class="col s12">
            <div class="card grey darken-3">
                <div class="card-content white-text">
                    <span class="card-title">Nenhum post encontrado!</span>
                </div>
                <div class="card-action">
                    <a href="{{route('post.create')}}">Escreva um agora</a>
                </div>
            </div>
        </div>
        @endif
        @foreach ($posts as $post)
        <div class="row">
            <div class="col s12">
                <div class="card grey darken-3">
                    <div class="card-content white-text">
                    <span class="card-title">{{$post->title}}</span>
                    <p>{{$post->content}}</p>
                    </div>
                    <div class="card-action white-text">
                    <a href="{{route('post.edit', $post->id)}}" class="blue-text">Editar</a>
                    <a href="#" class="blue-text">Deletar</a>  
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
