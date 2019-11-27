<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('blog/css/styles.css')}}" rel="stylesheet">
   <title>Blog</title>
</head>
<body>
   
  <nav>
    <div class="nav-wrapper grey darken-3">
      <a href="#" id="logo" class="brand-logo left">Blog</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        @if (Auth::user())
            <li><a class="btn grey darken-3 z-depth-0 white-text" href="{{route('blog.home')}}">Home</a></li>
            <li><a class="btn grey darken-3 z-depth-0 white-text" href="{{route('post.write')}}">Escrever</a></li>
            <li><a class="btn grey darken-3 z-depth-0 white-text" href="{{route('user.edit')}}">Perfil</a></li>
            <li><a class="btn grey darken-3 z-depth-0 white-text" href="{{route('post.show')}}">Seus posts</a></li>
            <li>
              <form method="POST" id="form" action="{{route('blog.logout')}}">
                @csrf
                <input type="submit" class="btn grey darken-3 z-depth-0 white-text" value="Logout">
              </form>
            </li> 
        @endif    
      </ul>
    </div>
  </nav>
        
    @yield('content')
    <script src="{{asset('blog/js/bootstrap.js')}}"></script>
    <script src="{{asset('blog/js/jquery.js')}}"></script>
</body>
</html>