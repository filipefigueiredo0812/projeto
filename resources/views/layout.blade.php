<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('css/fa.css')}}"> 
    </head>
    <body>
        <h1 style="color:blue;">@yield('header')</h1>
        @yield('conteudo')
        <div class="navbar">
            
            <nav class="navbar fixed-bottom navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><i class="fas fa-home"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('menu.index')}}">Menu <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('noticias.index')}}">Notícias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('empresa.index')}}">Empresa</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('onde.index')}}">Onde Estamos</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('contactos.index')}}">Contactos</a>
      </li>
    </ul>
  </div>
</nav>
            
        </div>
        <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="{{asset('js/fa.js')}}"></script>
    </body>
</html>