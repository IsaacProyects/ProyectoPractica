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
      <li><a href="nosotros.php">Nosotros</a></li>
      <li><a href="galeria.php">Galeria</a></li>
      <li><a href="categorias.php">Categorias</a></li>
      <li style="border: 5px solid black; padding: 0px;"><a href="trabaja.php">Trabaja Con Nosotros</a></li>
      <li><a href="contacto.php">Contacto</a></li>
      <li><a href="php/cerrar_sesion.php">Cerrar sesión</a></li>
    </ul>
  </nav>
  <h1>¡Trabaja con nosotros!</h1>
  
<br>

    <center><h2>¿Te interesa unirte al equipo?</h2></center>
  <br>
  <div class="container">
    <div class="product">
    <form action="MAILTO:usuario@gmail.com" method="POST" enctype="text/plain">
      <h1>Envianos tu hoja de vida</h1>
      <b>Nombre:</b><br>
      <input type="text" name="NOMBRE" size="50"><br><br>
      <b>Edad:</b><br>
      <input type="text" name="EDAD" size="10"><br><br>
      <b>Documento:</b><br>
      <input type="text" name="DOCUMENTO" size="25"><br><br>
      <b>Formacion academica:</b><br>
      <textarea name="Otros" rows="5" cols="50"></textarea><br><br>
      <b>Otros cursos y seminarios:</b><br>
      <textarea name="Otros" rows="5" cols="50"></textarea><br><br>
      <b>Experiencia profesional:</b><br>
      <textarea name="Otros" rows="5" cols="50"></textarea><br><br>
      <b>Idiomas:</b><br>
      <textarea name="Otros" rows="5" cols="50"></textarea><br><br>
      <b>Informatica:</b><br>
      <textarea name="Otros" rows="5" cols="50"></textarea><br><br>
      <b>Otros datos:</b><br>
      <textarea name="Otros" rows="5" cols="50"></textarea><br><br>
      <b>Referencias:</b><br>
      <textarea name="Otros" rows="5" cols="50"></textarea><br><br>

      <input type="submit" value="ENVIAR INFORMACION">
      <input type="reset" value="BORRAR"><br><br>

    </form>
  </div>
<br>
<br>
<br>
 <footer>
    <p>&copy; 2023 Página con fines educativos | Todos los derechos reservados Kevin Bolivar | Imagenes generadas por IA</p>
  </footer>
</body>
</html>
