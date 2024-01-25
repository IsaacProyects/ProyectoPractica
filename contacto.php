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
      <li><a href="trabaja.php">Trabaja Con Nosotros</a></li>
      <li style="border: 5px solid black; padding: 0px;"><a href="contacto.php">Contacto</a></li>
      <li><a href="php/cerrar_sesion.php">Cerrar sesión</a></li>
    </ul>
  </nav>
  <h1>Acerca del creador</h1>
  
  <div class="container">
    <div class="product">
      <center><h2>Informacion</h2></center>
      <br>
      <p>Kevin Isaac Bolivar Pardo</p>
      <p>Correo: bolivarkevin028isaac@gmail.com</p>
      <p>Telefono: 314 517 9458</p>
    </div>
    <div class="product">
      <details>
        <summary>PQRS</summary>
        <br>
        <ul>
          <li>
            <label for="pqrsType">Tipo de PQRS:</label>
            <select id="pqrsType" name="PQRS">
              <option value="N0"></option>
              <option value="Peticiones">Peticiones</option>
              <option value="Quejas">Quejas</option>
              <option value="Reclamos">Reclamos</option>
              <option value="Sugerencias">Sugerencias</option>
            </select>
          </li>
          <li>
            <br>
            <form action="MAILTO:usuario@gmail.com" method="POST" enctype="text/plain">
              <textarea id="pqrsText" name="PQRS" rows="5" cols="50"></textarea>
              <br>
              <br>
              <input type="submit" value="ENVIAR INFORMACION">
              <input type="reset" value="BORRAR"><br><br>
            </form>
          </li>
        </ul>
      </details>
    </div>
    <div class="product">
      <details>
        <summary>Dejanos tus comentarios</summary>
        <br>
        <ul>
          <li>
            <form action="MAILTO:usuario@gmail.com" method="POST" enctype="text/plain">
              <label for="comments">Comentarios:</label><br>
              <textarea id="comments" name="Comentarios" rows="5" cols="50"></textarea>
              <br>
              <br>
              <input type="submit" value="ENVIAR INFORMACION">
              <input type="reset" value="BORRAR"><br><br>
            </form>
          </li>
        </ul>
      </details>
    </div>
  </div>
  <br>
  <br>
  <br>
  <footer>
    <p>&copy; 2023 Página con fines educativos | Todos los derechos reservados Kevin Bolivar | Imagenes generadas por IA</p>
  </footer>
</body>
</html>
