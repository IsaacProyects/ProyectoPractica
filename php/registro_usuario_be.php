<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
//Encriptamiento de contraseña
$contrasena = hash('sha512', $contrasena);
//Listo
$query = "INSERT INTO usuarios(Nombre_Completo, Correo, Usuario, Contraseña)
VALUES('$nombre', '$correo', '$usuario', '$contrasena')";

//verificacion para evitar repeticiones en la bd

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo'");
if (mysqli_num_rows($verificar_correo) > 0 ){
    echo'
    <script>
    alert("Este correo ya se encuentra registrado");
    window.location = "../index.php";
    </script>
    ';
    exit();
    mysqli_close($conexion);
}
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0 ){
    echo'
    <script>
    alert("Este nombre de usuario ya se encuentra registrado");
    window.location = "../index.php";
    </script>
    ';
    exit();
    mysqli_close($conexion);
}

//Verificacion terminada

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo'
    <script>
    alert("Usuario registrado correctamente");
    window.location = "../index.php";
    </script>
    ';
}else{
    echo'
    <script>
    alert("Registro fallido, intentelo nuevamente");
    window.location = "../index.php";
    </script>
    ';
}

mysqli_close($conexion);

?>