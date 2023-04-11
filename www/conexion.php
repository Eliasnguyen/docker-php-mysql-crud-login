<?php
$host = '127.0.0.1:3306'; // nombre del servicio de docker-compose .yml
$user = 'root';
$password = '123';
$db = 'dbName';

$conexion = new mysqli($host, $user, $password, $db); // Aquí se hace la conexion

//Esto es para comprobar si conecta
// if($conn->connect_error){
//     echo 'conexión fallida' . $conn->connect_error;  
//     exit;
// }
// echo 'Te has conectado correctamente a MYSQL.'; 
