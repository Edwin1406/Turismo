<?php
require_once "../model/Categoria.php";

$categoria = new Categoria();

//Id para editar
$idorganizacion = isset($_POST["idorganizacion"]) ? limpiarCadena($_POST["idorganizacion"]) : "";


$idpersona = isset($_POST["idpersona"]) ? limpiarCadena($_POST["idpersona"]) : "";

//Persona
$nombres = isset($_POST["nombres"]) ? limpiarCadena($_POST["nombres"]) : "";
$telefono = isset($_POST["telefono"]) ? limpiarCadena($_POST["telefono"]) : "";

//Organizacion
$nombre = isset($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) : "";

//Aspectos informativos
$fecha = isset($_POST["fecha"]) ? limpiarCadena($_POST["fecha"]) : "";
$legalizado = isset($_POST["legalizado"]) ? $_POST["legalizado"] : "";
$tipoEmprendimiento = isset($_POST["tipo_emprendimiento"]) ? limpiarCadena($_POST["tipo_emprendimiento"]) : "";
$barrio = isset($_POST["parroquia_barrio"]) ? limpiarCadena($_POST["parroquia_barrio"]) : "";
$comunidad = isset($_POST["canton"]) ? limpiarCadena($_POST["canton"]) : "";
$contacto = isset($_POST["persona_contacto"]) ? limpiarCadena($_POST["persona_contacto"]) : "";
$cargo = isset($_POST["cargo"]) ? limpiarCadena($_POST["cargo"]) : "";

$dia = isset($_POST["dia_reunion"]) ? limpiarCadena($_POST["dia_reunion"]) : "";
$distancia = isset($_POST["distancia2"]) ? limpiarCadena($_POST["distancia2"]) : "";
$socios = isset($_POST["num_socios"]) ? limpiarCadena($_POST["num_socios"]) : "";
$familias = isset($_POST["num_familias"]) ? limpiarCadena($_POST["num_familias"]) : "";
$genero = isset($_POST["genero"]) ? limpiarCadena($_POST["genero"]) : "";
$hijos = isset($_POST["num_hijos"]) ? limpiarCadena($_POST["num_hijos"]) : "";
$discapacidad = isset($_POST["num_discapacitados"]) ? limpiarCadena($_POST["num_discapacitados"]) : "";

//metodo para que puedas guardar dos variables 
$vulnerabilidad = isset($_POST["vulnerabilidad"]) ? limpiarCadena($_POST["vulnerabilidad"]) : "";
$otroVulnerabilidad= isset($_POST["otroVulnerabilidad"]) ? limpiarCadena($_POST["otroVulnerabilidad"]) : "";
// $vulnerabilidad = $vulnerabilidad ." ".$otroVulnerabilidad;

$nivel_instruccion= isset($_POST["nivel_instruccion"]) ? limpiarCadena($_POST["nivel_instruccion"]) : "";

//metiodo para validar dos datos 
$apoyo_ong= isset($_POST["apoyo_ong"]) ? limpiarCadena($_POST["apoyo_ong"]) : "";
$apoyo= isset($_POST["apoyo"]) ? limpiarCadena($_POST["apoyo"]) : "";

// $apoyo_ong = $apoyo_ong ." ".$apoyo;





switch ($_GET["op"]) {

		//-------------------Persona-----------------------
	case 'guardaryeditarPersona':
		//Insertamos datos persona
		if (empty($idpersona)) {
			$categoria->insertarPersona(
				$nombres,
				$telefono
			);
			// Obtiene el ID de la persona recién insertada
			$idpersona = mysqli_insert_id($conexion);
			//echo "El ID de la persona insertada es: " . $idpersona;

			//Insertamos nombre de la organizacion
			if ($idpersona) {
				$categoria->insertarOrg($nombre, $idpersona);
				$idorganizacion = mysqli_insert_id($conexion);

				//Insertammos demas aspectos informativos
				if ($idorganizacion) {
					$rspta = $categoria->insertarInfo(
						$idorganizacion,
						$fecha,
						$legalizado,
						$tipoEmprendimiento,
						$barrio,
						$comunidad,				
						$cargo,
						$dia,
						$distancia,
						$socios,
						$familias,
						$genero,
						$hijos,
						$discapacidad,
						$vulnerabilidad,
						$otroVulnerabilidad,
						$nivel_instruccion,
						$apoyo_ong,
						$apoyo
					);
					echo $rspta ? $idorganizacion : 0;
				}
			}
			
		} else {
			$categoria->editarPersona(
				$idpersona,
				$nombres,
				$telefono
			);

			$categoria->editarOrg(
				$idorganizacion, $nombre, $idpersona
			);

			$rspta=$categoria->editarInfo(
				$idorganizacion,
				$fecha,
				$legalizado,
				$tipoEmprendimiento,
				$barrio,
				$comunidad,
				$cargo,
				$dia,
				$distancia,
				$socios,
				$familias,
				$genero,
				$hijos,
				$discapacidad,
				$vulnerabilidad,
				$nivel_instruccion,
				$apoyo_ong
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
		$rspta = $categoria->mostrar($idorganizacion);
		//Codificar el resultado utilizando json
		echo json_encode($rspta);
		break;

	case 'mostrar2':
			$rspta = $categoria->mostrar2($idorganizacion);
			//Codificar el resultado utilizando json
			echo json_encode($rspta);
			break;

	case 'mostrar3':
				$rspta = $categoria->mostrar3($idorganizacion);
				//Codificar el resultado utilizando json
				echo json_encode($rspta);
				break;


	case 'mostrar4':
					$rspta = $categoria->mostrar4($idorganizacion);
					//Codificar el resultado utilizando json
					echo json_encode($rspta);
					break;

	case 'mostrar5':
					$rspta = $categoria->mostrar5($idorganizacion);
					//Codificar el resultado utilizando json
					echo json_encode($rspta);
					break;
			
			
		
	// case 'mostrar2':
	// 	break

	case 'listar':
		$rspta = $categoria->listar();
		//Vamos a declarar un array
		$data = array();

		while ($reg = $rspta->fetch_object()) {
			$data[] = array(
				// "0"=>'<button title="Editar" class="btn btn-warning" onclick="mostrar('.$reg->id_organizacion.')"><i class="fas fa-edit"></i></button>'. '<button title="Editar" class="btn btn-primary" onclick="mostrar2('.$reg->id_organizacion.')"><i class="fas fa-edit"></i></button>'.
                // ' <button class="btn btn-danger" onclick="desactivar('.$reg->id_organizacion.')"><i class="far fa-times-circle"></i></button>',
				"0"=>'<select id="dropdownOpciones" class="btn btn-warning dropdown-toggle" onchange="mostrarFormulario(this.value, '.$reg->id_organizacion.')">
				<option class="dropdown-item" value="">Editar</option>
				<option class="dropdown-item" value="mostrar1">Editar (mostrar1)</option>
				<option class="dropdown-item" value="mostrar2">Editar (mostrar2)</option>
				<option class="dropdown-item" value="mostrar3">Editar (mostrar3)</option>
				<option class="dropdown-item" value="mostrar4">Editar (mostrar4)</option>
				<option class="dropdown-item" value="mostrar5">Editar (mostrar5)</option>
			</select>' 
					,
				"1" => $reg->nombres,
				"2" => $reg->nombre,
				"3" => $reg->telefono,
				"4" => $reg->comunidad,
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

