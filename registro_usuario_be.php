<?php
include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['email'];
$usuario = $_POST['username'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
          VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
        <script>
            alert("Usuario Almacenado Exitosamente");    
            window.location = "../index.php";
        </script>
    ';
} else{
    echo '
    <script>
        alert("Usuario Almacenado NOOOO Exitosamente");    
        window.location = "../index.php";
    </script>
';
}

mysqli_close($conexion);
?>
