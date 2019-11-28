@extends('blog.layouts.template')

@section('content')
   <div class="container">
      <form method="POST" action="{{route('post.store')}}">
         @csrf
         <input type="hidden" name="user" value="{{Auth::user()->id}}">
         <div class="row justify-content-center">
            <div class="form-group col-sm-8 col-lg-4">
               <label for="title">Titulo</label>
               <input type="text" class="form-control" name="title" id="title">
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="form-group col-sm-8 col-lg-4">
               <label for="content">Texto</label>
               <input type="text" class="form-control" name="content" id="content">
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-sm-8 col-lg-4">
               <input type="submit" style="width: 100px;" class="btn btn-dark" value="Criar">
            </div>
         </div>
      </form>
   </div>
@endsection