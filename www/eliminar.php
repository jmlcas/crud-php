<?php
ob_start();
?>

<?php session_start(); ?>

<?php

if (isset($_SESSION['user_id'])) {

    include("conexion.php");

    $id = $_GET['id'];

    $solicitud = "DELETE FROM productos WHERE id=$id";

    $resultado = mysqli_query($conexion, $solicitud);

    header("location: Leer.php");
} else {
    header("location: SesionNoIniciada.php");
}

?>

<?php
ob_end_flush();
?>
