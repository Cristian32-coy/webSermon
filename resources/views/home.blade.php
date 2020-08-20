@extends('layouts.plantilla')

@section('botones')
  <a href="{{route('recetas.create')}}" class="btn btn-primary mr-2 text-white ">Crear</a>
@endsection

@section('content')
<example-component
@endsection
<!doctype html>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="Rd9ryqYITFuSErmHWCf9h-1xM4MSbvV2H6XKo-evH-c" />
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <!-- <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/contenedor.css"> -->
    <link rel="stylesheet" href="{{asset('css/plantilla.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/main.css"> -->
     <link rel="manifest" href="site.webmanifest">
      
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/plantilla.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    
    <!-- <script type="text/javascript" src="js/script.js"></script> -->
    <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    < ![endif]-->
    <title>SERMON COYHAIQUE</title>
   
   
  </head>
  
<!--  <body oncontextmenu="return false" onkeydown="return false"> -->
  <body> 
  


 <nav id="menu" class="navbar navbar-expand-lg ml-auto text-center navbar-dark bg-primary fixed-top">
     <a class="navbar-brand ml-auto" href="index.php">
         <img src="{{asset('imagen/face1.jpg')}}" width="70" height="50" class="d-inline-block align-top rounded-circle" alt="">
       
     </a>
  
  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
       <div class="dropdown-divider"></div>
      <li class="nav-item">
        <a class="nav-link" href="nosotros.php">Nosotros</a>
      </li>
       <div class="dropdown-divider"></div>
       <li class="nav-item">
        <a class="nav-link" href="programa.php">Programa</a>
      </li>
       <div class="dropdown-divider"></div>
       <li class="nav-item active">
        <a class="nav-link" href="contacto.php">Contacto</a>
      </li>
      <div class="dropdown-divider"></div>
      <li class="nav-item active">
        <a class="nav-link" href="videos.php">Vídeos</a>
      </li>
    </ul>
   
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Seleccione
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="todo.php">Predicaciones</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Iglesias</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">La Misión</a>
        </div>
      </li>
      
    </ul>
  </div>
</nav>




  </body>
  
</html>