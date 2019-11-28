<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('blog/css/styles.css')}}" rel="stylesheet">
    <title>Blog</title>
    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>
<body>
   
  <nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Blog</a>
        @if (Auth::user())
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('blog.home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('post.write')}}">Escrever</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('post.show')}}">Seus Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.edit')}}">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog.logout')}}">Logout</a>
                </li>
            </ul>
        @endif
        </div>
      </div>
   </nav>
        
    @yield('content')
    
    <script src="{{asset('blog/js/jquery.js')}}"></script>
    <script src="{{asset('blog/js/bootstrap.js')}}"></script>
</body>
</html>