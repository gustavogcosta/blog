@extends('template')

@section('title') Blog @endsection

@section('style') 
    <style>
        .item-nav{
            background: none;
            border: none;
            color: white;
            cursor:pointer;
        }
    </style>
@endsection

@section('item1')<a href="{{route('post.create')}}">Criar post</a>@endsection

@section('item2')<a href="#">Perfil</a>@endsection

@section('item3') 
    <form method="POST" id="form" action="{{route('blog.logout')}}">
        @csrf
        <input type="submit" class="item-nav" value="Logout">
    </form>
@endsection

@section('content')
<div class="row">
   <div class="container">
        <br>
        @foreach ($posts as $post)
        <div class="row">
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
        </div>
        @endforeach

    </div>
</div>
@endsection
