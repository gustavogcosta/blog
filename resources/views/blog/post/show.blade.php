@extends('blog.layouts.template')

@section('content')
<div class="container">
    @if(count($posts) === 0)
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Ops voce ainda não tem posts!</h2>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('post.write')}}">Crie um agora!</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @foreach ($posts as $post)
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p class="card-text">{{$post->content}}</p>
                    </div>
                    <div class="card-footer">
                    <form method="POST" id="form" action="{{route('post.destroy', $post)}}">
                        <a href="{{route('post.edit', $post)}}" class="btn btn-dark">Editar</a>
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-dark" value="Deletar">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <footer class="fixed-bottom">
        {{$posts->links()}}
    </footer>
</div>
@endsection

