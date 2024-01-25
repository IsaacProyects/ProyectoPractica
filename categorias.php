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
      <li style="border: 5px solid black; padding: 0px;"><a href="categorias.php">Categorias</a></li>
      <li><a href="trabaja.php">Trabaja Con Nosotros</a></li>
      <li><a href="contacto.php">Contacto</a></li>
      <li><a href="php/cerrar_sesion.php">Cerrar sesión</a></li>
    </ul>
  </nav>
  
  <h1>Nuestro catalogo</h1>
  
  <section class="products">
<div class="product">
  <details>
    <summary><img src="img/1.jpeg" alt="local"></summary>
    <h3>Materiales de Escritura</h3>
    <ul>
      <li>Bolígrafos</li>
      <li>Lápices</li>
      <li>Marcadores</li>
      <li>Rotuladores</li>
      <li>Portaminas</li>
      <li>Plumas</li>
    </ul>
  </details>
</div>

    <div class="product">
      <details>
        <summary><img src="img/2.jpeg" alt="local"></summary>
        <h3>Cuadernos y Blocs</h3>
        
    <ul>
      <li>Cuadernos de notas</li>
      <li>Blocs de dibujo</li>
      <li>Agendas</li>
      <li>Planificadores</li>
    </ul>
      </details>
    </div>
    <div class="product">
      <details>
        <summary><img src="img/3.jpeg" alt="local"></summary>
        <h3>Papeles y Sobres</h3>
        
    <ul>
      <li>Papel bond</li>
      <li>Papel pergamino</li>
      <li>Sobres blancos y de colores</li>
      <li>Tarjetas y tarjetones</li>
    </ul>
      </details>
    </div>
    <div class="product">
      <details>
        <summary><img src="img/4.jpeg" alt="local"></summary>
        <h3>Organización y Archivo</h3>
        
    <ul>
      <li>Carpetas</li>
      <li>Organizadores de escritorio</li>
      <li>Archivadores</li>
      <li>Separadores y etiquetas</li>
    </ul>
      </details>
    </div>
    <div class="product">
      <details>
        <summary><img src="img/5.jpeg" alt="local"></summary>
        <h3>Material de Oficina</h3>
        
    <ul>
      <li>Grapadoras</li>
      <li>Clips</li>
      <li>Cintas adhesivas</li>
      <li>Gomas de borrar</li>
      <li>Tijeras</li>
      <li>Perforadoras</li>
    </ul>
      </details>
    </div>
    <div class="product">
      <details>
        <summary><img src="img/6.jpeg" alt="local"></summary>
        <h3>Arte y Manualidades</h3>
        
    <ul>
      <li>Pinceles</li>
      <li>Pinturas</li>
      <li>Lápices de colores</li>
      <li>Papel para manualidades</li>
      <li>Pegamento</li>
    </ul>
      </details>
    </div>
    <div class="product">
      <details>
        <summary><img src="img/7.jpeg" alt="local"></summary>
        <h3>Electrónica y Tecnología</h3>
        
    <ul>
      <li>USB</li>
      <li>Cargadores</li>
      <li>Baterías</li>
      <li>Calculadoras</li>
    </ul>
      </details>
    </div>
    <div class="product">
      <details>
        <summary><img src="img/8.jpeg" alt="local"></summary>
        <h3>Etiquetas y Adhesivos</h3>
        
    <ul>
      <li>Etiquetas adhesivas</li>
      <li>Cintas decorativas</li>
      <li>Pegatinas</li>
    </ul>
      </details>
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
