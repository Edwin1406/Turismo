<?php
require "../config/Conexion.php";

// Ejecutar la consulta para obtener los datos
$query = "SELECT o.nombre, e.ingresos_mensuales,  e.egresos_mensuales, e.permiso_funcionamiento FROM organizacion o INNER JOIN aspectos_economicos e ON o.id_organizacion = e.id_organizacion";

// SELECT o.nombre, e.ingresos_mensuales, e.egresos_mensuales, e.permiso_funcionamiento FROM organizacion o INNER JOIN aspectos_economicos e ON o.id_organizacion = e.id_organizacion

$result = $conexion->query($query);

// Crear una matriz para almacenar los datos
$data = array();



// Construir el array con los datos
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $name = $row["nombre"];
      $ingresos_mensuales = array("v" => $row["ingresos_mensuales"], "f" => "$" . number_format($row["ingresos_mensuales"], 0));
      $egresos_mensuales = array("v" => $row["egresos_mensuales"], "f" => "$" . number_format($row["egresos_mensuales"], 0));
      $permiso_funcionamiento = $row["permiso_funcionamiento"] == "1" ? true : false;
      $data[] = array($name, $ingresos_mensuales, $egresos_mensuales, $permiso_funcionamiento);
    }
  }

// Convertir la matriz a JSON y devolverla
echo json_encode($data);

// Cerrar la conexión a la base de datos
$conexion->close();




?>