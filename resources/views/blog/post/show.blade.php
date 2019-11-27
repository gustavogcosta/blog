@extends('template')

@section('content')
<div class="row container">
    @if(count($posts) === 0)
        <div class="col s12">
            <div class="card grey darken-3">
                <div class="card-content white-text">
                    <span class="card-title">Opa voce ainda não escreveu nenhum post!</span>
                </div>
                <div class="card-action">
                    <a href="{{route('post.write')}}">Escreva um agora</a>
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
                    <form method="POST" id="form" action="{{route('post.destroy', $post)}}">
                        <a href="{{route('post.edit', $post)}}" class="btn grey darken-3 z-depth-0 white-text">Editar</a>
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn grey darken-3 z-depth-0 white-text" value="Deletar">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <footer>
        {{$posts->links()}}
    </footer>
</div>
@endsection
