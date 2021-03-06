@extends('blog.layouts.template')

@section('content')
   <div class="container">
      <form method="POST" action="{{route('user.store')}}">
         @csrf
         <div class="row justify-content-center">
            <div class="form-group col-sm-8 col-lg-4">
               <label for="name">Nome</label>
               <input type="text" class="form-control" name="name" id="name">
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="form-group col-sm-8 col-lg-4">
               <label for="email">Email</label>
               <input type="text" class="form-control" name="email" id="email">
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
               <input type="submit" style="width: 100px;" class="btn btn-dark" value="Registrar">
               <a href="{{route('blog.login')}}" style="width: 100px;" class="btn btn-dark">Voltar</a>
            </div>
         </div>
      </form>
   </div>
@endsection
