<?php

session_start();
if(!isset($_SESSION['usuario'])){
  echo'
  <script>
  alert("Se debe iniciar sesion");
  window.location = "index.php";
  </script>
  ';
  die();
  session_destroy();
}

?>
<!DOCTYPE html>
<html lang="es-CO">
<head>
  <title>El Rincón del Papel</title>
  <link rel="stylesheet" href="estilos.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
</head>
<body>
  <nav>
    <ul>
      <li class="logo">
        <a href="inicio.php"><img src="img/logo.jpeg" alt="El Rincón del Papel"></a>
      </li>
      <li><a href="inicio.php">Inicio</a></li>
      <li><a href="nosotros.html">Nosotros</a></li>
      <li style="border: 5px solid black; padding: 0px;"><a href="galeria.php">Galeria</a></li>
      <li><a href="categorias.php">Categorias</a></li>
      <li><a href="trabaja.php">Trabaja Con Nosotros</a></li>
      <li><a href="contacto.php">Contacto</a></li>
      <li><a href="php/cerrar_sesion.php">Cerrar sesión</a></li>
    </ul>
  </nav>
  
  <h1>Nuestra galeria</h1>
  
<br>
	
  <section class="products">
    <div class="product">
      <img src="img/cuaderno.jpeg" alt="Materiales">
      <h3>Cuadernos grapados</h3>
    </div>
    <div class="product">
      <img src="img/lapiceros.jpeg" alt="lapiceros">
      <h3>Lapiceros</h3>
    </div>
    <div class="product">
      <img src="img/iris.jpeg" alt="iris">
      <h3>Block iris</h3>
    </div>
    <div class="product">
      <img src="img/folder.jpeg" alt="folder">
      <h3>Folder tamaño carta</h3>
    </div>
    <div class="product">
      <img src="img/lapiz.jpeg" alt="lapiz">
      <h3>Lapiz N2</h3>
    </div>
    <div class="product">
      <img src="img/rojo.jpeg" alt="rojo">
      <h3>Lapiz rojo</h3>
    </div>
    <div class="product">
      <img src="img/colores.jpeg" alt="colores">
      <h3>Caja de colores</h3>
    </div>
    <div class="product">
      <img src="img/bisturi.jpeg" alt="bisturi">
      <h3>Bisturi</h3>
    </div>
    <div class="product">
      <img src="img/cinta.jpeg" alt="cinta">
      <h3>Cinta de enmascarar</h3>
    </div>
    <div class="product">
      <img src="img/argollado.jpeg" alt="argollado">
      <h3>Cuadernos argollados</h3>
    </div>
    <div class="product">
      <img src="img/grapadora.jpeg" alt="grapadora">
      <h3>Grapadora</h3>
    </div>
  </section>
  
<br>
<br>
<br>

  <footer>
    <p>&copy; 2023 Página con fines educativos | Todos los derechos reservados Kevin Bolivar | Imagenes generadas por IA</p>
  </footer>
</body>
</html>
