<?php
require_once "../model/Categoria.php";

$categoria = new Categoria();

$idorganizacion= isset($_POST["idorganizacion"]) ? limpiarCadena($_POST["idorganizacion"]) : "";

//Persona
$dirigente = isset($_POST["dirigente"]) ? limpiarCadena($_POST["dirigente"]) : "";
$distancia = isset($_POST["distancia"]) ? limpiarCadena($_POST["distancia"]) : "";

$vias = isset($_POST["vias"]) ? limpiarCadena($_POST["vias"]) : "";
$tipoVias = isset($_POST["tipoVias"]) ? limpiarCadena($_POST["tipoVias"]) : "";

//Organizacion
$accesoMotos = isset($_POST["accesoMotos"]) ? limpiarCadena($_POST["accesoMotos"]) : "";

//Aspectos informativos
$familias = isset($_POST["familias"]) ? limpiarCadena($_POST["familias"]) : "";
$dia_reunion = isset($_POST["dia_reunion"]) ? $_POST["dia_reunion"] : "";
$tipo_actividad = isset($_POST["tipo_actividad"]) ? limpiarCadena($_POST["tipo_actividad"]) : "";
$ingresos = isset($_POST["ingresos"]) ? limpiarCadena($_POST["ingresos"]) : "";
$actividades = isset($_POST["actividades"]) ? limpiarCadena($_POST["actividades"]) : "";
$percepcion = isset($_POST["percepcion"]) ? limpiarCadena($_POST["percepcion"]) : "";
$organizativo = isset($_POST["organizativo"]) ? limpiarCadena($_POST["organizativo"]) : "";
$recomendacion_tecnico = isset($_POST["recomendacion_tecnico"]) ? limpiarCadena($_POST["recomendacion_tecnico"]) : "";
$recomendacion_director = isset($_POST["recomendacion_director"]) ? limpiarCadena($_POST["recomendacion_director"]) : "";
$nombre_tecnico = isset($_POST["nombre_tecnico"]) ? limpiarCadena($_POST["nombre_tecnico"]) : "";
$nombre_director = isset($_POST["nombre_director"]) ? limpiarCadena($_POST["nombre_director"]) : "";
$razon_tecnico = isset($_POST["razon_tecnico"]) ? limpiarCadena($_POST["razon_tecnico"]) : "";
$razon_director = isset($_POST["razon_director"]) ? limpiarCadena($_POST["razon_director"]) : "";

$fecha = date("d/m/Y"); //TODO: CREAR FUNCION PARA FECHA

$editar= isset($_POST["editar"]) ? limpiarCadena($_POST["editar"]) : "";


switch ($_GET["op"]) {

        //-------------------Persona-----------------------
    case 'guardaryeditarIdentificacion':

        //Insertammos demas aspectos informativos
        if (empty($editar)) {
            $rspta = $categoria->insertarIdentificacion(
                $idorganizacion,
                $dirigente,
                $distancia,
                $vias,
                $tipoVias,
                $accesoMotos,
                $familias,
                $dia_reunion,
                $tipo_actividad,
                $ingresos,
                $actividades,
                $percepcion,
                $organizativo,
                $recomendacion_tecnico,
                $nombre_tecnico,
                $recomendacion_director,
                $nombre_director,
                $razon_tecnico,
                $razon_director,
                $fecha
            );
            echo $rspta ? $idorganizacion : 0;
        } else {
            $rspta = $categoria->editarIdentificacion(
                $idorganizacion,
                $dirigente,
                $distancia,
                $vias,
                $tipoVias,
                $accesoMotos,
                $familias,
                $dia_reunion,
                $tipo_actividad,
                $ingresos,
                $actividades,
                $percepcion,
                $organizativo,
                $recomendacion_tecnico,
                $nombre_tecnico,
                $recomendacion_director,
                $nombre_director,
                $razon_tecnico,
                $razon_director
            );
        
            echo $rspta ? -1 : -2;
        }

        break;
}
