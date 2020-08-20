<template>
	<nav id="menu" class="navbar navbar-expand-lg ml-auto text-center navbar-dark bg-primary fixed-top">
     <a class="navbar-brand ml-auto" href="index.php">
         <img src="#" width="70" height="50" class="d-inline-block align-top rounded-circle" alt="">
       
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
</template>

<script>
export default {

 
}
</script>

<style lang="css" scoped>
</style>