<?php
require_once "../model/Categoria.php";

$categoria = new Categoria();



$infraestructura2= isset($_POST["infraestructura2"]) ? limpiarCadena($_POST["infraestructura2"]) : "";
$tamanio_predio= isset($_POST["tamanio_predio"]) ? limpiarCadena($_POST["tamanio_predio"]) : "";
$escrituras= isset($_POST["escrituras"]) ? limpiarCadena($_POST["escrituras"]) : "";
$valor_inversion_activos= isset($_POST["valor_inversion_activos"]) ? limpiarCadena($_POST["valor_inversion_activos"]) : "";
$ingresos_mensuales= isset($_POST["ingresos_mensuales"]) ? limpiarCadena($_POST["ingresos_mensuales"]) : "";
$egresos_mensuales= isset($_POST["egresos_mensuales"]) ? limpiarCadena($_POST["egresos_mensuales"]) : "";
$ahorro_mensual= isset($_POST["ahorro_mensual"]) ? limpiarCadena($_POST["ahorro_mensual"]) : "";
$personas_bono= isset($_POST["personas_bono"]) ? limpiarCadena($_POST["personas_bono"]) : "";
//metodo de guardar dos datos//
$bono_institucion_localidad= isset($_POST["bono_institucion_localidad"]) ? limpiarCadena($_POST["bono_institucion_localidad"]) : "";
$bono_institucion= isset($_POST["bono_institucion"]) ? limpiarCadena($_POST["bono_institucion"]) : "";
// $bono_institucion_localidad = $bono_institucion_localidad ." ".$bono_institucion;

$permiso_funcionamiento= isset($_POST["permiso_funcionamiento"]) ? limpiarCadena($_POST["permiso_funcionamiento"]) : "";
$categoria_emprendimiento= isset($_POST["categoria_emprendimiento"]) ? limpiarCadena($_POST["categoria_emprendimiento"]) : "";
$aprovicionamiento_stock= isset($_POST["aprovicionamiento_stock"]) ? limpiarCadena($_POST["aprovicionamiento_stock"]) : "";
$materiales= isset($_POST["materiales"]) ? limpiarCadena($_POST["materiales"]) : "";
$prodcutos= isset($_POST["prodcutos"]) ? limpiarCadena($_POST["prodcutos"]) : "";
$cantidas_producto= isset($_POST["cantidas_producto"]) ? limpiarCadena($_POST["cantidas_producto"]) : "";
$meses_produce	= isset($_POST["meses_produce"]) ? limpiarCadena($_POST["meses_produce"]) : "";
$calidad_producto= isset($_POST["calidad_producto"]) ? limpiarCadena($_POST["calidad_producto"]) : "";
$fuente_financiamiento= isset($_POST["fuente_financiamiento"]) ? limpiarCadena($_POST["fuente_financiamiento"]) : "";

//2 variables 
$distribucion= isset($_POST["distribucion"]) ? limpiarCadena($_POST["distribucion"]) : "";
$distribucion1= isset($_POST["distribucion1"]) ? limpiarCadena($_POST["distribucion1"]) : "";

// $distribucion = $distribucion ." ".$distribucion1;

$venta_productos= isset($_POST["venta_productos"]) ? limpiarCadena($_POST["venta_productos"]) : "";
$tecnologia= isset($_POST["tecnologia"]) ? limpiarCadena($_POST["tecnologia"]) : "";
$innovacion= isset($_POST["innovacion"]) ? limpiarCadena($_POST["innovacion"]) : "";

$investigacion= isset($_POST["investigacion"]) ? limpiarCadena($_POST["investigacion"]) : "";

$actualizacion= isset($_POST["actualizacion"]) ? limpiarCadena($_POST["actualizacion"]) : "";


$mercado= isset($_POST["mercado"]) ? limpiarCadena($_POST["mercado"]) : "";
$imagen_corporativa= isset($_POST["imagen_corporativa"]) ? limpiarCadena($_POST["imagen_corporativa"]) : "";
$info_marca 	= isset($_POST["info_marca"]) ? limpiarCadena($_POST["info_marca"]) : "";
$info_etiqueta= isset($_POST["info_etiqueta"]) ? limpiarCadena($_POST["info_etiqueta"]) : "";
$info_producto	= isset($_POST["info_producto"]) ? limpiarCadena($_POST["info_producto"]) : "";
$empaque_producto	= isset($_POST["empaque_producto"]) ? limpiarCadena($_POST["empaque_producto"]) : "";

//metodo de 3 variables 
$actividades_economicas	= isset($_POST["actividades_economicas"]) ? limpiarCadena($_POST["actividades_economicas"]) : "";
$actividades_economicas1 = isset($_POST["actividades_economicas1"]) ? limpiarCadena($_POST["actividades_economicas1"]) : "";
$actividades_economicas2	= isset($_POST["actividades_economicas2"]) ? limpiarCadena($_POST["actividades_economicas2"]) : "";
$actividades_economicas3	= isset($_POST["actividades_economicas3"]) ? limpiarCadena($_POST["actividades_economicas3"]) : "";
$actividades_economicas4	= isset($_POST["actividades_economicas4"]) ? limpiarCadena($_POST["actividades_economicas4"]) : "";
$actividades_economicas5	= isset($_POST["actividades_economicas5"]) ? limpiarCadena($_POST["actividades_economicas5"]) : "";




$capacitacion_temas= isset($_POST["capacitacion_temas"]) ? limpiarCadena($_POST["capacitacion_temas"]) : "";
$act_asociativas_comunitarias	= isset($_POST["act_asociativas_comunitarias"]) ? limpiarCadena($_POST["act_asociativas_comunitarias"]) : "";
$apoyo_entidades_desarrollo= isset($_POST["apoyo_entidades_desarrollo"]) ? limpiarCadena($_POST["apoyo_entidades_desarrollo"]) : "";
$reg_marca= isset($_POST["reg_marca"]) ? limpiarCadena($_POST["reg_marca"]) : "";

$reg_sanitario= isset($_POST["reg_sanitario"]) ? limpiarCadena($_POST["reg_sanitario"]) : "";

//union
$proyectos_apoyo= isset($_POST["proyectos_apoyo"]) ? limpiarCadena($_POST["proyectos_apoyo"]) : "";
$proyectos_apoyo1= isset($_POST["proyectos_apoyo1"]) ? limpiarCadena($_POST["proyectos_apoyo1"]) : "";

$proyectos_apoyo2= isset($_POST["proyectos_apoyo2"]) ? limpiarCadena($_POST["proyectos_apoyo2"]) : "";
$proyectos_apoyo3= isset($_POST["proyectos_apoyo3"]) ? limpiarCadena($_POST["proyectos_apoyo3"]) : "";
$proyectos_apoyo4= isset($_POST["proyectos_apoyo4"]) ? limpiarCadena($_POST["proyectos_apoyo4"]) : "";
$proyectos_apoyo5= isset($_POST["proyectos_apoyo5"]) ? limpiarCadena($_POST["proyectos_apoyo5"]) : "";



$editar= isset($_POST["editar"]) ? limpiarCadena($_POST["editar"]) : "";

$idorganizacion= isset($_POST["idorganizacion"]) ? limpiarCadena($_POST["idorganizacion"]) : "";



switch ($_GET["op"]) {

		//-------------------Persona-----------------------
	case 'guardarEco':
		//Insertamos datos persona


				//Insertammos demas aspectos informativos
				if (empty($editar)) {
					$rspta = $categoria->insertarEco(
						$idorganizacion,
                        $infraestructura2,
                        $tamanio_predio,
                        $escrituras,
                        $valor_inversion_activos,
                        $ingresos_mensuales,
                        $egresos_mensuales,
                        $ahorro_mensual,
                        $personas_bono,
                        $bono_institucion_localidad,
						$bono_institucion,
                        $permiso_funcionamiento,
                        $categoria_emprendimiento,
                        $aprovicionamiento_stock,
                        $materiales,
                        $prodcutos,
                        $cantidas_producto,	
                        $meses_produce,	
                        $calidad_producto,
                        $fuente_financiamiento,
                        $distribucion,
						$distribucion1,
                        $venta_productos,
                        $tecnologia,
						$innovacion,
						$investigacion,
						$actualizacion,
                        $mercado,
                        $imagen_corporativa,
                        $info_marca, 	
                        $info_etiqueta,	
                        $info_producto,	
                        $empaque_producto,	
                        $actividades_economicas,
						$actividades_economicas1,
						$actividades_economicas2,
						$actividades_economicas3,
						$actividades_economicas4,
						$actividades_economicas5,
                        $capacitacion_temas,
                        $act_asociativas_comunitarias,	
                        $apoyo_entidades_desarrollo,
						$reg_marca,
						$reg_sanitario,
                        $proyectos_apoyo,
						$proyectos_apoyo1,
						$proyectos_apoyo2,
						$proyectos_apoyo3,
						$proyectos_apoyo4,
						$proyectos_apoyo5
					);
					echo $rspta ? $idorganizacion : 0;
				} else {
					$rspta = $categoria->editarEco(
						$idorganizacion,
						$infraestructura2,
                        $tamanio_predio,
						$escrituras,
						$valor_inversion_activos,
                        $ingresos_mensuales,
                        $egresos_mensuales,
                        $ahorro_mensual,
                        $personas_bono,
						$bono_institucion_localidad,
						$bono_institucion,
                        $permiso_funcionamiento,
						$categoria_emprendimiento,
                        $aprovicionamiento_stock,
						$materiales,
                        $prodcutos,
                        $cantidas_producto,	
                        $meses_produce,
						$calidad_producto,
                        $fuente_financiamiento,
                        $distribucion,
						$distribucion1,	
						$venta_productos,
                        $tecnologia,
						$innovacion,
						$investigacion,
						$actualizacion,
                        $mercado,
                        $imagen_corporativa,
                        $info_marca, 	
                        $info_etiqueta,	
                        $info_producto,	
                        $empaque_producto,	
						$actividades_economicas,
						$actividades_economicas1,
						$actividades_economicas2,
						$actividades_economicas3,
						$actividades_economicas4,
						$actividades_economicas5,
                        $capacitacion_temas,
                        $act_asociativas_comunitarias,	
                        $apoyo_entidades_desarrollo,
						$reg_marca,
						$reg_sanitario,
                        $proyectos_apoyo,
						$proyectos_apoyo1,
						$proyectos_apoyo2,
						$proyectos_apoyo3,
						$proyectos_apoyo4,
						$proyectos_apoyo5
					
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
