<?PHP
session_start();
include 'conexion_be.php';

$_correo = $_POST['correo'];
$_contrasena = $_POST['contrasena'];
$_contrasena = hash('sha512', $_contrasena);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo='$_correo' AND Contraseña='$_contrasena'");

if(mysqli_num_rows($validar_login) > 0 ){
    $_SESSION['usuario'] = $_correo;
    header("location: ../inicio.php");
    exit();
}else{
    echo '
    <script>
    alert("Datos incorrectos")
    window.location = "../index.php"
    </script>
    ';
    exit();
}

?>