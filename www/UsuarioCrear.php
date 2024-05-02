<?php

//conexion
include("conexion.php");

//captar las variables
$nombre = $_POST['nombre'];
$password = $_POST['password'];
$email = $_POST['email'];

if(!empty($_POST['nombre']) && !empty($_POST['password']) && !empty($_POST['email'])){

    $hash = password_hash($password, PASSWORD_DEFAULT);
    //Con DEFAULT, php elige el algoritmo más seguro. Otra buena opción es BCRYPT para Blowfish

    //meterlas en un registro, en la tabla
    $solicitud = "INSERT INTO usuarios(`Nombre`, `Password`,`Correo`) VALUES('$nombre', '$hash', '$email')";

    //enviar la sentencia sql
    $resultado = mysqli_query($conexion, $solicitud);

    // que reaparezca la misma página al terminar
    header("location: UsuarioCreado.php");
}
