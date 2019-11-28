@extends('template')

@section('content')
<div class="container">
    @foreach ($posts as $post)
         <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p class="card-text">{{$post->content}}</p>
                    </div>
                    <div class="card-footer">
                    Escrito por : {{$post->user}}
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
