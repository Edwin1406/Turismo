<?php
require_once "../model/Categoria.php";

$categoria = new Categoria();
// forma de gurdar dos variables 
$organizacion_asosiacion	= isset($_POST["organizacion_asosiacion"]) ? limpiarCadena($_POST["organizacion_asosiacion"]) : "";
$organizacion	= isset($_POST["organizacion"]) ? limpiarCadena($_POST["organizacion"]) : "";
// $organizacion_asosiacion = $organizacion_asosiacion." ".$organizacion;

//1
$subsidios_apoyos= isset($_POST["subsidios_apoyos"]) ? limpiarCadena($_POST["subsidios_apoyos"]) : "";
$subsidios= isset($_POST["subsidios"]) ? limpiarCadena($_POST["subsidios"]) : "";
// $subsidios_apoyos = $subsidios_apoyos ." ". $subsidios;

//2
$analfabetismo_asociacion= isset($_POST["analfabetismo_asociacion"]) ? limpiarCadena($_POST["analfabetismo_asociacion"]) : "";
$analfabetismo= isset($_POST["analfabetismo"]) ? limpiarCadena($_POST["analfabetismo"]) : "";
// $analfabetismo_asociacion = $analfabetismo_asociacion." ".$analfabetismo;


//3
$dependencia_economicaPrincipal= isset($_POST["dependencia_economicaPrincipal"]) ? limpiarCadena($_POST["dependencia_economicaPrincipal"]) : "";
$dependencia= isset($_POST["dependencia"]) ? limpiarCadena($_POST["dependencia"]) : "";
// $dependencia_economicaPrincipal= $dependencia_economicaPrincipal." ". $dependencia;

//4
$concentracion_actividades= isset($_POST["concentracion_actividades"]) ? limpiarCadena($_POST["concentracion_actividades"]) : "";
$concentracion= isset($_POST["concentracion"]) ? limpiarCadena($_POST["concentracion"]) : "";
// $concentracion_actividades = $concentracion_actividades." ".$concentracion;

//5 
$aporte_mujer= isset($_POST["aporte_mujer"]) ? limpiarCadena($_POST["aporte_mujer"]) : "";
$aporte= isset($_POST["aporte"]) ? limpiarCadena($_POST["aporte"]) : "";
// $aporte_mujer= $aporte_mujer ." ". $aporte;

//6
$vias_acceso= isset($_POST["vias_acceso"]) ? limpiarCadena($_POST["vias_acceso"]) : "";
$vias= isset($_POST["vias"]) ? limpiarCadena($_POST["vias"]) : "";
// $vias_acceso = $vias_acceso ." ". $vias;

//7
$infraestructura_basica	= isset($_POST["infraestructura_basica"]) ? limpiarCadena($_POST["infraestructura_basica"]) : "";
$infraestructura = isset($_POST["infraestructura"]) ? limpiarCadena($_POST["infraestructura"]) : "";
// $infraestructura_basica = $infraestructura_basica . " " . $infraestructura ;

//8
$iniciativas_productivas	= isset($_POST["iniciativas_productivas"]) ? limpiarCadena($_POST["iniciativas_productivas"]) : "";
$iniciativas	= isset($_POST["iniciativas"]) ? limpiarCadena($_POST["iniciativas"]) : "";
// $iniciativas_productivas = $iniciativas_productivas ." ".$iniciativas;

//9 
$centro_salud= isset($_POST["centro_salud"]) ? limpiarCadena($_POST["centro_salud"]) : "";
$centro= isset($_POST["centro"]) ? limpiarCadena($_POST["centro"]) : "";
// $centro_salud= $centro_salud." ". $centro;

//10

$actividades_estacionales = isset($_POST["actividades_estacionales"]) ? limpiarCadena($_POST["actividades_estacionales"]) : "";
$actividades	= isset($_POST["actividades"]) ? limpiarCadena($_POST["actividades"]) : "";
// $actividades_estacionales = $actividades_estacionales . " " .$actividades;

//11
$asociacion_consideracion = isset($_POST["asociacion_consideracion"]) ? limpiarCadena($_POST["asociacion_consideracion"]) : "";
$asociacion = isset($_POST["asociacion"]) ? limpiarCadena($_POST["asociacion"]) : "";
// $asociacion_consideracion = $asociacion_consideracion ." ". $asociacion;

//12
$fuente_principla= isset($_POST["fuente_principla"]) ? limpiarCadena($_POST["fuente_principla"]) : "";
$fuente= isset($_POST["fuente"]) ? limpiarCadena($_POST["fuente"]) : "";
// $fuente_principla = $fuente_principla ." ".$fuente;

//13
$vende_productos= isset($_POST["vende_productos"]) ? limpiarCadena($_POST["vende_productos"]) : "";
$vende= isset($_POST["vende"]) ? limpiarCadena($_POST["vende"]) : "";
// $vende_productos = $vende_productos ." ".$vende;

$idorganizacion= isset($_POST["idorganizacion"]) ? limpiarCadena($_POST["idorganizacion"]) : "";

$editar= isset($_POST["editar"]) ? limpiarCadena($_POST["editar"]) : "";

switch ($_GET["op"]) {

	case 'guardarCual':
		//Insertamos datos persona

				//Insertammos demas aspectos cualitativos
				if (empty($editar)) {
					$rspta = $categoria->insertarCual(
                        $idorganizacion,
                        $organizacion_asosiacion,
						$organizacion,
                        $subsidios_apoyos,
						$subsidios,
                        $analfabetismo_asociacion,
						$analfabetismo,	
                        $dependencia_economicaPrincipal,
						$dependencia,
                        $concentracion_actividades,
						$concentracion,
                        $aporte_mujer,
						$aporte,
                        $vias_acceso,
						$vias,
                        $infraestructura_basica,
						$infraestructura,	
                        $iniciativas_productivas,
						$iniciativas,	
                        $centro_salud,
						$centro,
                        $actividades_estacionales,
						$actividades,	
                        $asociacion_consideracion,
						$asociacion,	
                        $fuente_principla,
						$fuente,
                        $vende_productos,
						$vende
					);
					echo $rspta ? $idorganizacion : 0;
				} else { 
					$rspta = $categoria->editarCual(
						$idorganizacion,
                        $organizacion_asosiacion,
						$organizacion,
                        $subsidios_apoyos,
						$subsidios,
                        $analfabetismo_asociacion,
						$analfabetismo,	
                        $dependencia_economicaPrincipal,
						$dependencia,
                        $concentracion_actividades,
						$concentracion,
                        $aporte_mujer,
						$aporte,
                        $vias_acceso,
						$vias,
                        $infraestructura_basica,
						$infraestructura,	
                        $iniciativas_productivas,
						$iniciativas,	
                        $centro_salud,
						$centro,
                        $actividades_estacionales,
						$actividades,	
                        $asociacion_consideracion,
						$asociacion,	
                        $fuente_principla,
						$fuente,
                        $vende_productos,
						$vende
				);
				echo $rspta ? -1 : -2;
		}


		// case 'guardaryeditar':
		// 	if (empty($idcategoria)) {
		// 		$rspta = $categoria->insertar(
		// 			$nombre,
		// 			$fecha,
		// 			$legalizado,
		// 			$tipoEmprendimiento,
		// 			$barrio,
		// 			$canton,
		// 			$contacto,
		// 			$cargo,
		// 			$telefono,
		// 			$dia,
		// 			$distancia,
		// 			$socios,
		// 			$familias,
		// 			$genero,
		// 			$hijos,
		// 			$discapacidad
		// 		);
		// 		echo $rspta ? 1 : 2;
		// 	} else {
		// 		$rspta = $categoria->editar(
		// 			$idcategoria,
		// 			$nombre,
		// 			$fecha,
		// 			$legalizado,
		// 			$tipoEmprendimiento,
		// 			$barrio,
		// 			$canton,
		// 			$contacto,
		// 			$cargo,
		// 			$telefono,
		// 			$dia,
		// 			$distancia,
		// 			$socios,
		// 			$familias,
		// 			$genero,
		// 			$hijos,
		// 			$discapacidad
		// 		);
		// 		echo $rspta ? 3 : 4;
		// 	}
		break;

	case 'desactivar':
		$rspta = $categoria->desactivar($idcategoria);
		echo $rspta ? "Categoría Desactivada" : "Categoría no se puede desactivar";
		break;

	case 'activar':
		$rspta = $categoria->activar($idcategoria);
		echo $rspta ? "Categoría activada" : "Categoría no se puede activar";
		break;

	case 'mostrar':
		$rspta = $categoria->mostrar($idcategoria);
		//Codificar el resultado utilizando json
		echo json_encode($rspta);
		break;

	case 'listar':
		$rspta = $categoria->listar();
		//Vamos a declarar un array
		$data = array();

		while ($reg = $rspta->fetch_object()) {
			$data[] = array(
				"0" => ($reg->condicion) ? '<button class="btn btn-warning" onclick="mostrar(' . $reg->idcategoria . ')"><i class="fas fa-edit"></i></button>' .
					' <button class="btn btn-danger" onclick="desactivar(' . $reg->idcategoria . ')"><i class="far fa-times-circle"></i></button>' :
					'<button class="btn btn-warning" onclick="mostrar(' . $reg->idcategoria . ')"><i class="fas fa-edit"></i></button>' .
					' <button class="btn btn-primary" onclick="activar(' . $reg->idcategoria . ')"><i class="fa fa-check"></i></button>',
				"1" => $reg->nombre,
				"2" => $reg->telefono,
				"3" => ($reg->condicion) ? '<span class="label bg-green">Activado</span>' :
					'<span class="label bg-red">Desactivado</span>'
			);
		}
		$results = array(
			"sEcho" => 1, //Información para el datatables
			"iTotalRecords" => count($data), //enviamos el total registros al datatable
			"iTotalDisplayRecords" => count($data), //enviamos el total registros a visualizar
			"aaData" => $data
		);
		echo json_encode($results);

		break;
}
