<?php
$host = 'mysql'; // nombre del servicio de docker-compose .yml
$user = 'dbuser';
$password = 'dbpass';
$db = 'dbname';

$conexion = new mysqli($host, $user, $password, $db); // Aquí se hace la conexion

//Esto es para comprobar si conecta
// if($conn->connect_error){
//     echo 'conexión fallida' . $conn->connect_error;  
//     exit;
// }
// echo 'Te has conectado correctamente a MYSQL.'; 
