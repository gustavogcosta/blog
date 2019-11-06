@extends('template')

@section('title') Blog @endsection


@section('item1')<a href="{{route('blog.index')}}">Voltar</a>@endsection


@section('content')
<div class="container row center">
    <br>
    <br>
    <br>
    <div class="col s6">
        <a href="{{route('user.edit')}}">
            <div class="card grey darken-3">
                <div class="card-content white-text">
                    <span class="card-title">Editar suas informações</span>
                </div>
            </div>
        </a>
    </div>
    <div class="col s6">
        <a href="{{route('post.show')}}">
            <div class="card grey darken-3">
                <div class="card-content white-text">
                    <span class="card-title">Ver seus posts</span>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
