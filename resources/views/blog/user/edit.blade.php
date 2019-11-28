@extends('blog.layouts.template')

@section('content')
   <div class="container">
      <form method="POST" action="{{route('user.update')}}">
         @csrf
         @method('PUT')
         <div class="row justify-content-center">
            <div class="form-group col-sm-8 col-lg-4">
               <label for="name">Nome</label>
               <input type="text" value="{{Auth::user()->name}}" class="form-control" name="name" id="name">
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="form-group col-sm-8 col-lg-4">
               <label for="email">Email</label>
               <input type="text" value="{{Auth::user()->email}}" class="form-control" name="email" id="email">
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="form-group col-sm-8 col-lg-4">
               <label for="password">Senha</label>
               <input type="password" class="form-control" name="password" id="password">
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-sm-8 col-lg-4">
               <input type="submit" style="width: 100px;" class="btn btn-dark" value="Atualizar">
            </div>
         </div>
      </form>
   </div>
@endsection
