<?php
require "../config/Conexion.php";

// Recupera la consulta enviada por AJAX
$query =$_GET['query'];

// Realiza la consulta
$result = $conexion->query($query);

// Convierte los resultados en un arreglo de filas asociativas
$datos = array();
while ($fila = $result->fetch_assoc()) {
  $datos[] = $fila;
}

// Libera la memoria del resultado y cierra la conexión
$result->free();
$conexion->close();

// Devuelve los datos en formato JSON
echo json_encode($datos);




?>



