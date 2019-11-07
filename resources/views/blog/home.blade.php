@extends('template')

@section('content')
<div class="row container">
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
@endsection
