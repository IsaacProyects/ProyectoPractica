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
      <li style="border: 5px solid black; padding: 0px;"><a href="inicio.php">Inicio</a></li>
      <li><a href="nosotros.php">Nosotros</a></li>
      <li><a href="galeria.php">Galeria</a></li>
      <li><a href="categorias.php">Categorias</a></li>
      <li><a href="trabaja.php">Trabaja Con Nosotros</a></li>
      <li><a href="contacto.php">Contacto</a></li>
      <li><a href="php/cerrar_sesion.php">Cerrar sesión</a></li>
    </ul>
  </nav>
  
  <h1>Bienvenido a El Rincón del Papel</h1>
  <center><p>Descubre una amplia gama de productos y servicios de calidad para tus necesidades de papelería.</p></center>
  
<br>

    <center><h2>Nos caracterizamos por nuestros:</h2></center>
	
  <section class="products">
    <div class="product">
      <img src="img/material.jpeg" alt="Materiales">
      <h3>Materiales</h3>
      <p>Nuestra papelería ofrece una extensa variedad de materiales de escritura, desde plumas y lápices de distintas marcas hasta una diversidad de papeles, cuadernos y agendas para cada ocasión. Además, disponemos de una amplia selección de suministros de oficina, desde grapadoras y clips hasta carpetas y organizadores, todo diseñado para potenciar la productividad y el orden en tu espacio de trabajo o estudio.</p>
    </div>
    <div class="product">
      <img src="img/servicios.jpeg" alt="Servicios">
      <h3>Servicios</h3>
      <p>En nuestra papelería, no solo proporcionamos materiales de calidad, sino que también ofrecemos servicios especializados para satisfacer las necesidades de nuestros clientes. Brindamos asesoramiento en la selección de productos, servicios de impresión y encuadernación, así como la posibilidad de realizar pedidos especiales para artículos difíciles de encontrar. Además, contamos con promociones regulares y descuentos para estudiantes y empresas, asegurando que todos puedan acceder a lo que necesitan a precios accesibles.</p>
    </div>
  </section>
  <section id="map">
      <center><h2>¿Donde encontrarnos?</h2></center>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1179.1329868612431!2d-75.56329187676043!3d6.248599322679181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442857e5c31f3f%3A0x1b5c977dda94e7bf!2sCENSA%20Medell%C3%ADn!5e0!3m2!1sen!2sco!4v1699981481094!5m2!1sen!2sco" width="100%" height="450" allowfullscreen=""  referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
    <section class="products">
    <div class="product">
      <img src="img/local1.jpeg" alt="local">
      <h3>Local de Medellin</h3>
    </div>
    <div class="product">
      <img src="img/local2.jpeg" alt="local">
      <h3>Local de Bello</h3>
    </div>
    <div class="product">
      <img src="img/local3.jpeg" alt="local">
      <h3>Local de Bogota</h3>
    </div>
    <div class="product">
      <img src="img/local4.jpeg" alt="local">
      <h3>Local de Cali</h3>
    </div>
    <div class="product">
      <img src="img/local5.jpeg" alt="local">
      <h3>Local de Cartagena</h3>
    </div>
    <div class="product">
      <img src="img/local6.jpeg" alt="local">
      <h3>Local de Bucaramanga</h3>
    </div>
    <div class="product">
      <img src="img/local7.jpeg" alt="local">
      <h3>Local de Santa Marta</h3>
    </div>
    <div class="product">
      <img src="img/local8.jpeg" alt="local">
      <h3>Local de Villavicencio</h3>
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
