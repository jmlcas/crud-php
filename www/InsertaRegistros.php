<?php
ob_start();
?>

<?php session_start(); ?>

<?php

session_start();

//conexion
include("conexion.php");

$UsuarioId = $_SESSION['user_id'];
if (isset($UsuarioId)) {

    //captar las variables
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    //meterlas en un registro, en la tabla
    $solicitud = "INSERT INTO productos(Nombre, Precio, UsuarioId) VALUES('$nombre', '$precio', $UsuarioId )";

    //enviar la sentencia sql
    $resultado = mysqli_query($conexion, $solicitud);

    // que reaparezca la misma página al terminar
    header("location: Leer.php");
} else {
    header("location: SesionNoIniciada.php");
}

?>

<?php
ob_end_flush();
?>
