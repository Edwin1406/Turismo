<?php
require_once "../model/Categoria.php";

$categoria = new Categoria();

$problemas_sociales = isset($_POST["problemas_sociales"]) ? limpiarCadena($_POST["problemas_sociales"]) : "";

$editar= isset($_POST["editar"]) ? limpiarCadena($_POST["editar"]) : "";


$idorganizacion= isset($_POST["idorganizacion"]) ? limpiarCadena($_POST["idorganizacion"]) : "";


switch ($_GET["op"]) {

	case 'guardarPer':
		//Insertamos datos persona

				//Insertammos demas aspectos cualitativos
				if (empty($editar)) {
					$rspta = $categoria->insertarPer(
                        $idorganizacion,
                        $problemas_sociales
                 
					);
					echo $rspta ? $idorganizacion : 0;
				} else {
					$rspta = $categoria->editarPer(
						$idorganizacion,
						$problemas_sociales
					);
					echo $rspta ? -1 : -2;
				}


		
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
