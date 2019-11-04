<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   @yield('style')
   <title>@yield('title')</title>
</head>
<body>
   
  <nav>
    <div class="nav-wrapper grey darken-3">
      <a href="#" class="brand-logo center">Blog</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li>@yield('item1')</li>
        <li>@yield('item2')</li>
        <li>@yield('item3')</li>
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