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
      <li style="border: 5px solid black; padding: 0px;"><a href="nosotros.php">Nosotros</a></li>
      <li><a href="galeria.php">Galeria</a></li>
      <li><a href="categorias.php">Categorias</a></li>
      <li><a href="trabaja.php">Trabaja Con Nosotros</a></li>
      <li><a href="contacto.php">Contacto</a></li>
      <li><a href="php/cerrar_sesion.php">Cerrar sesión</a></li>
    </ul>
  </nav>
  
  <h1>Nuestra Perspectiva</h1>
  
<br>

    <center><h2>Nuestros objetivos:</h2></center>
	
  <section class="products">
    <div class="product">
      <img src="img/mision.jpg" alt="Mision">
      <p>En el Rincón del Papel, nuestra misión es ser el aliado confiable para todos tus proyectos creativos, laborales y educativos. Buscamos ofrecer una amplia gama de productos de calidad, servicios personalizados y asesoramiento experto para satisfacer las necesidades de nuestros clientes, fomentando la productividad y la creatividad en cada paso.</p>
    </div>
    <div class="product">
      <img src="img/vision.jpg" alt="Vision">
      <p>Nuestra visión es convertirnos en el referente local e inspirar a nuestra comunidad a través de una oferta diversa de materiales innovadores y servicios excepcionales. Buscamos ser un espacio donde la imaginación cobra vida y cada idea encuentra los recursos para materializarse, promoviendo la educación, el arte y la eficiencia laboral.</p>
    </div>
    <div class="product">
      <h1>Politicas</h1>
      <p>
        1.Privacidad:
        <br>
        Tu información es segura con nosotros y solo la usamos para procesar tus pedidos.
        <br><br>
        2.Envíos:
        <br>
        Ofrecemos opciones de envío estándar y express con información de seguimiento.
        <br><br>
        3.Devoluciones:
        <br>
        Aceptamos devoluciones dentro de los 15 días si no estás satisfecho. Los gastos de envío son responsabilidad del cliente, a menos que haya un problema con el producto.
        <br><br>
        4.Calidad:
        <br>
        Garantizamos productos de alta calidad. Si hay algún problema, contáctanos y lo solucionaremos.
        <br><br>
        5.Precios:
        <br>
        Ofrecemos precios competitivos, y cualquier cambio no afectará los pedidos ya realizados.
        <br><br>
        6.Atención al Cliente:
        <br>
        Estamos aquí para ayudarte. Puedes contactarnos a través de nuestro formulario en línea o por correo electrónico.
        <br><br>
        7.Pago Seguro:
        <br>
        Puedes realizar tus compras con confianza. Utilizamos métodos de pago seguros.</p>
        <br><br>
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