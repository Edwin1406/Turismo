<?php
require "../config/Conexion.php";

// Ejecutar la consulta para obtener los datos
$query = " SELECT o.nombre, i.comunidad,  i.tipo_emprendimiento, i.legalizado FROM organizacion o INNER JOIN aspectos_informativos i ON o.id_organizacion = i.id_organizacion";

// SELECT o.nombre, i.comunidad,  i.tipo_emprendimiento, i.legalizado FROM organizacion o INNER JOIN aspectos_informativos i ON o.id_organizacion = i.id_organizacion

$result = $conexion->query($query);

// Crear una matriz para almacenar los datos
$data = array();



// Construir el array con los datos
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $name = $row["nombre"];
      $comunidad = $row["comunidad"];
      $emprendimiento = $row["tipo_emprendimiento"];
      $legalizado = $row["legalizado"] == "1" ? true : false;
      $data[] = array($name, $comunidad, $emprendimiento, $legalizado);
    }
  }

// Convertir la matriz a JSON y devolverla
echo json_encode($data);

// Cerrar la conexión a la base de datos
$conexion->close();




?>