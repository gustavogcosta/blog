@extends('template')

@section('content')
<div class="container">
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
    <footer>
        {{$posts->links()}}
    </footer>
</div>
@endsection
