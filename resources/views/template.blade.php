<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
      #logo {
        margin-left : 20px;
        font-family: sans-serif;
        font-size: 40px;
      }
    </style>
   <title>@yield('title')</title>
</head>
<body>
   
  <nav>
    <div class="nav-wrapper grey darken-3">
      <a href="#" id="logo" class="brand-logo left">Blog</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="btn grey darken-3 z-depth-0 white-text" href="{{route('blog.home')}}">Home</a></li>
        <li><a class="btn grey darken-3 z-depth-0 white-text" href="{{route('blog.post.create')}}">Escrever post</a></li>
        <li><a class="btn grey darken-3 z-depth-0 white-text" href="{{route('blog.user.edit')}}">Editar perfil</a></li>
        <li><a class="btn grey darken-3 z-depth-0 white-text" href="{{route('blog.post.show')}}">Seus posts</a></li>
        <li>
          <form method="POST" id="form" action="{{route('blog.logout')}}">
            @csrf
            <input type="submit" class="btn grey darken-3 z-depth-0 white-text" value="Logout">
          </form>
        </li>
      </ul>
    </div>
  </nav>
        
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
    <script>
      M.AutoInit();
    </script>
</body>
</html>