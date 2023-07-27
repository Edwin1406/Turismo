<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

class Categoria
{
	//Implementamos nuestro constructor
	public function __construct()
	{
	}

	//---------------------------PERSONA---------------------------------------------
	public function insertarPersona($nombres, $telefono)
	{
		$sql = "INSERT INTO persona (nombres, telefono
		)
		VALUES (
				'$nombres',
				'$telefono'
				)";
		return ejecutarConsulta($sql);
	}


	//Implementamos un método para editar registros
	public function editarPersona(
		$idpersona,
		$nombres,
		$telefono,
	) {
		$sql = "UPDATE persona SET nombres='$nombres',telefono='$telefono' WHERE id_persona='$idpersona'";
		return ejecutarConsulta($sql);
	}


	//---------------------------ORGANIZACION---------------------------------------------
	public function insertarOrg($nombre, $idpersona)
	{
		$sql = "INSERT INTO organizacion (nombre, id_persona
		)
		VALUES (
				'$nombre',
				'$idpersona'
				)";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editarOrg(
		$idorganizacion,
		$nombre,
		$idpersona,
	) {
		$sql = "UPDATE organizacion SET nombre='$nombre',id_persona='$idpersona' WHERE id_organizacion='$idorganizacion'";
		return ejecutarConsulta($sql);
	}


	



	//---------------------------ASPECTOS INFORMATIVOS---------------------------------------------
	public function insertarInfo(
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
	) {
		$sql = "INSERT INTO aspectos_informativos(id_organizacion,
		fecha,
		legalizado,
		tipo_emprendimiento,
		parroquia_barrio,
     	comunidad,
		cargo,
		dia_reunion,
		distancia,
		num_socios,
		num_familias,
		genero,
		num_hijos,
		num_discapacitados,
		vulnerabilidad,
		otroVulnerabilidad,
		nivel_instruccion,
		apoyo_ong,
		apoyo
		)
		VALUES ('$idorganizacion',
	'$fecha',
	'$legalizado',
	'$tipoEmprendimiento',
	'$barrio',
	'$comunidad',
	'$cargo',
	'$dia',
	'$distancia',
	'$socios',
	'$familias',
	'$genero',
	'$hijos',
	'$discapacidad',
	'$vulnerabilidad',
	'$otroVulnerabilidad',
	'$nivel_instruccion',
	'$apoyo_ong',
	'$apoyo'
	)";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editarInfo(
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
	) {
		$sql = "UPDATE aspectos_informativos SET fecha='$fecha',legalizado='$legalizado', tipo_emprendimiento='$tipoEmprendimiento', parroquia_barrio='$barrio', comunidad='$comunidad', cargo='$cargo', dia_reunion='$dia', distancia='$distancia', num_socios='$socios', num_familias='$familias', genero='$genero', num_hijos='$hijos', num_discapacitados='$discapacidad', vulnerabilidad= '$vulnerabilidad', nivel_instruccion= '$nivel_instruccion', apoyo_ong= '$apoyo_ong' WHERE id_organizacion = '$idorganizacion'";
		return ejecutarConsulta($sql);
	}


//---------------------------ASPECTOS ECONOMICOS---------------------------------------------
public function insertarEco(
	$idorganizacion,
	$infraestructura,
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
//estos aumente
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
) {
	$sql = "INSERT INTO aspectos_economicos (id_organizacion,
 infraestructura,
		tamanio_predio,
		escrituras,
		valor_inversion_activos,
		ingresos_mensuales,
		egresos_mensuales,
		ahorro_mensual,
		personas_bono,
		bono_institucion_localidad,
		bono_institucion,
		permiso_funcionamiento,
		categoria_emprendimiento,
		aprovicionamiento_stock,
		materiales,
		prodcutos,
		cantidas_producto,	
		meses_produce,	
		calidad_producto,
		fuente_financiamiento,
		distribucion,
		distribucion1,
		venta_productos, 
		tecnologia,
		innovacion,
		investigacion,
		actualizacion,
		mercado,
		imagen_corporativa,
		info_marca, 	
		info_etiqueta,	
		info_producto,	
		empaque_producto,	
		actividades_economicas,
		actividades_economicas1,
		actividades_economicas2,
		actividades_economicas3,
		actividades_economicas4,
		actividades_economicas5,
		capacitacion_temas,
		act_asociativas_comunitarias,	
		apoyo_entidades_desarrollo,
		reg_marca,
		reg_sanitario,
		proyectos_apoyo,
		proyectos_apoyo1,
		proyectos_apoyo2,
		proyectos_apoyo3,
		proyectos_apoyo4,
		proyectos_apoyo5
	)
	VALUES ('$idorganizacion',
	'$infraestructura',
		'$tamanio_predio',
		'$escrituras',
		'$valor_inversion_activos',
		'$ingresos_mensuales',
		'$egresos_mensuales',
		'$ahorro_mensual',
		'$personas_bono',
		'$bono_institucion_localidad',
		'$bono_institucion',
		'$permiso_funcionamiento',
		'$categoria_emprendimiento',
		'$aprovicionamiento_stock',
		'$materiales',
		'$prodcutos',
		'$cantidas_producto',	
		'$meses_produce',	
		'$calidad_producto',
		'$fuente_financiamiento',
		'$distribucion',
		'$distribucion1',
		'$venta_productos', 
		'$tecnologia',
	    '$innovacion',
		'$investigacion',
		'$actualizacion',
		'$mercado',
		'$imagen_corporativa',
		'$info_marca', 	
		'$info_etiqueta',	
		'$info_producto',	
		'$empaque_producto',	
		'$actividades_economicas',
		'$actividades_economicas1',
		'$actividades_economicas2',
		'$actividades_economicas3',
		'$actividades_economicas4',
		'$actividades_economicas5',
		'$capacitacion_temas',
		'$act_asociativas_comunitarias',	    
		'$apoyo_entidades_desarrollo',
		'$reg_marca',
		'$reg_sanitario',
		'$proyectos_apoyo',
		'$proyectos_apoyo1',
-- //esto agregue
		'$proyectos_apoyo2',
		'$proyectos_apoyo3',
		'$proyectos_apoyo4',
		'$proyectos_apoyo5'
)";
	return ejecutarConsulta($sql);
}

//Editar
public function editarEco(
	$idorganizacion,
	$infraestructura,
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
){
	$sql = "UPDATE aspectos_economicos SET infraestructura='$infraestructura',tamanio_predio='$tamanio_predio',
	 escrituras='$escrituras', valor_inversion_activos='$valor_inversion_activos', ingresos_mensuales='$ingresos_mensuales', egresos_mensuales='$egresos_mensuales', ahorro_mensual='$ahorro_mensual', personas_bono='$personas_bono', bono_institucion_localidad='$bono_institucion_localidad', bono_institucion='$bono_institucion', permiso_funcionamiento='$permiso_funcionamiento', categoria_emprendimiento='$categoria_emprendimiento', aprovicionamiento_stock='$aprovicionamiento_stock', materiales='$materiales',  prodcutos= '$prodcutos', cantidas_producto= '$cantidas_producto', meses_produce= '$meses_produce', calidad_producto= '$calidad_producto', fuente_financiamiento= '$fuente_financiamiento', distribucion= '$distribucion', distribucion1= '$distribucion1', venta_productos= '$venta_productos', tecnologia= '$tecnologia', innovacion= '$innovacion', investigacion= '$investigacion', actualizacion= '$actualizacion', mercado= '$mercado', imagen_corporativa= '$imagen_corporativa', info_marca= '$info_marca', info_etiqueta= '$info_etiqueta', info_producto= '$info_producto', empaque_producto= '$empaque_producto', actividades_economicas= '$actividades_economicas', actividades_economicas1= '$actividades_economicas1', actividades_economicas2= '$actividades_economicas2', actividades_economicas3= '$actividades_economicas3', actividades_economicas4= '$actividades_economicas4', actividades_economicas5= '$actividades_economicas5', capacitacion_temas= '$capacitacion_temas', act_asociativas_comunitarias= '$act_asociativas_comunitarias', apoyo_entidades_desarrollo= '$apoyo_entidades_desarrollo', reg_marca= '$reg_marca', reg_sanitario= '$reg_sanitario', proyectos_apoyo= '$proyectos_apoyo', proyectos_apoyo1= '$proyectos_apoyo1', proyectos_apoyo2= '$proyectos_apoyo2', proyectos_apoyo3= '$proyectos_apoyo3', proyectos_apoyo4= '$proyectos_apoyo4', proyectos_apoyo5= '$proyectos_apoyo5' WHERE id_organizacion = '$idorganizacion'";
	return ejecutarConsulta($sql);

}


//---------------------------PERCEPCION PERSONA ---------------------------------------------
public function insertarPer(
	$idorganizacion,
	$problemas_sociales
	
) {
	$sql = "INSERT INTO percepcion_persona (
	id_organizacion,
	problemas_sociales
	)
	VALUES (	
	'$idorganizacion',
	'$problemas_sociales'
	
)";
	return ejecutarConsulta($sql);
}

public function editarPer($idorganizacion,
				$problemas_sociales
	) {
		$sql = "UPDATE percepcion_persona SET 
		problemas_sociales='$problemas_sociales' WHERE id_organizacion='$idorganizacion'";
		return ejecutarConsulta($sql);
	}

//---------------------------ASPECTOS CUALITATIVOS---------------------------------------------
public function insertarCual(
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

) {
	$sql = "INSERT INTO aspectos_cualitativas (id_organizacion,
	 organizacion_asosiacion,
	 organizacion,	
	subsidios_apoyos,
	subsidios,
	analfabetismo_asociacion,
	analfabetismo,
	dependencia_economicaPrincipal,
	dependencia,
	concentracion_actividades,
	concentracion,
	aporte_mujer,
	aporte,
	vias_acceso,
	vias,
	infraestructura_basica,
	infraestructura,	
	iniciativas_productivas,
	iniciativas,	
	centro_salud,
	centro,
	actividades_estacionales,
	actividades,	
	asociacion_consideracion,
	asociacion,	
	fuente_principla,
	fuente,
	vende_productos,
	vende
	)
	VALUES ('$idorganizacion',
	'$organizacion_asosiacion',
	'$organizacion',
	'$subsidios_apoyos',
	'$subsidios',
	'$analfabetismo_asociacion',
	'$analfabetismo',	
	'$dependencia_economicaPrincipal',
	'$dependencia',
	'$concentracion_actividades',
	'$concentracion',
	'$aporte_mujer',
	'$aporte',
	'$vias_acceso',
	'$vias',
	'$infraestructura_basica',
	'$infraestructura',	
	'$iniciativas_productivas',
	'$iniciativas',	
	'$centro_salud',
	'$centro',
	'$actividades_estacionales',
	'$actividades',	
	'$asociacion_consideracion',
	'$asociacion',	
	'$fuente_principla',
	'$fuente',
	'$vende_productos',
	'$vende'
)";
	return ejecutarConsulta($sql);
}

//Editar Cual
public function editarCual( $idorganizacion,
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
)
{
	$sql = "UPDATE aspectos_cualitativas SET 
	organizacion_asosiacion='$organizacion_asosiacion',
	organizacion='$organizacion',
	subsidios_apoyos= '$subsidios_apoyos',
	subsidios= '$subsidios',
	analfabetismo_asociacion='$analfabetismo_asociacion',
	analfabetismo='$analfabetismo',
	dependencia_economicaPrincipal='$dependencia_economicaPrincipal',
	dependencia='$dependencia',
	concentracion_actividades='$concentracion_actividades',
	concentracion='$concentracion',
	aporte_mujer='$aporte_mujer',
	aporte='$aporte',
	vias_acceso='$vias_acceso',
	vias='$vias',
	infraestructura_basica='$infraestructura_basica',
	infraestructura='$infraestructura',
	iniciativas_productivas='$iniciativas_productivas',
	iniciativas='$iniciativas',
	centro_salud='$centro_salud',
	centro='$centro',
	actividades_estacionales='$actividades_estacionales',
	actividades='$actividades',
	asociacion_consideracion='$asociacion_consideracion',
	asociacion='$asociacion',
	fuente_principla='$fuente_principla',
	fuente='$fuente',
	vende_productos= '$vende_productos',
	vende= '$vende' WHERE id_organizacion='$idorganizacion'";
	return ejecutarConsulta($sql);
}

	
//------------------Form Identificacion---------------------
public function insertarIdentificacion(
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
) {
	$sql = "INSERT INTO identificacion_diagnostico (  id_organizacion,
	dirigente_organizacion,
	distancia_asociacion,
	vias_acceso,
	tipo_vias,
	via_motocicleta,
	numero_familias,
	dias_adecuados,
	principal_actividad,
	comentario_ingresos,
	comentario_economico,
	comentario_persona,
	comentarios_cualitativos,
	recomen_tecnico,
	nombre_tecnico,
	recomen_director,
	nombre_director,
	razon_tecnico,
	razon_director,
	fecha
	)
	VALUES ('$idorganizacion',
	'$dirigente',
    '$distancia',
	'$vias',
	'$tipoVias',
	'$accesoMotos',
	'$familias',
	'$dia_reunion',
	'$tipo_actividad',
	'$ingresos',
	'$actividades',
	'$percepcion',
	'$organizativo',
	'$recomendacion_tecnico',
	'$nombre_tecnico',
	'$recomendacion_director',
	'$nombre_director',
	'$razon_tecnico',
	'$razon_director',
	'$fecha'
)";
	return ejecutarConsulta($sql);
}

	//Implementamos un método para editar registros
	public function editarIdentificacion(
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
	) {
		$sql = "UPDATE identificacion_diagnostico SET 
		dirigente_organizacion='$dirigente', 
		distancia_asociacion= '$distancia',
		vias_acceso='$vias',
		tipo_vias='$tipoVias',
		via_motocicleta='$accesoMotos',
	 	numero_familias='$familias',
		dias_adecuados='$dia_reunion',
		principal_actividad='$tipo_actividad',
	 	 comentario_ingresos='$ingresos',
	     comentario_economico='$actividades',
	 	 comentario_persona='$percepcion',
	 	 comentarios_cualitativos='$organizativo',
	 	 recomen_tecnico='$recomendacion_tecnico',
	 	 nombre_tecnico= '$nombre_tecnico',
	 	 recomen_director='$recomendacion_director', 
	 	 nombre_director= '$nombre_director',
		 razon_tecnico= '$razon_tecnico',
		 razon_director= '$razon_director' WHERE id_organizacion='$idorganizacion'";
		return ejecutarConsulta($sql);
	}



	/* 

		
	 	principal_actividad='$tipo_actividad',
	 	 comentario_ingresos='$ingresos',
	     comentario_economico='$actividades',
	 	 comentario_persona='$percepcion',
	 	 comentarios_cualitativos='$organizativo',
	 	 recomen_tecnico='$recomendacion_tecnico',
	 	 nombre_tecnico= '$nombre_tecnico',
	 	 recomen_director='$recomendacion_director', 
	 	 nombre_director= '$nombre_director' 
*/

	


	//----------------ESTO NOO-----------

	//Implementamos un método para desactivar categorías
	public function desactivar($idcategoria)
	{
		$sql = "UPDATE categoria SET condicion='0' WHERE idcategoria='$idcategoria'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar categorías
	public function activar($idcategoria)
	{
		$sql = "UPDATE categoria SET condicion='1' WHERE idcategoria='$idcategoria'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idorganizacion)
	{
		$sql = "SELECT i.*, o.nombre, p.id_persona, p.nombres, p.telefono FROM aspectos_informativos i INNER JOIN organizacion o ON i.id_organizacion = o.id_organizacion INNER JOIN persona p ON o.id_persona = p.id_persona WHERE i.id_organizacion = $idorganizacion";
		//SELECT i.*, o.nombre, p.nombres, p.telefono FROM aspectos_informativos i INNER JOIN organizacion o ON i.id_organizacion = o.id_organizacion INNER JOIN persona p ON o.id_persona = p.id_persona WHERE i.id_organizacion = '43';
		
		global $conexion;
		$query = $conexion->query($sql);
        $row = $query->fetch_assoc();
        return $row;
		// return ejecutarConsultaSimpleFila($sql);
	}


	public function mostrar2($idorganizacion)
	{

		$sql = "SELECT * FROM aspectos_economicos WHERE id_organizacion = $idorganizacion";
		//SELECT i.*, o.nombre, p.nombres, p.telefono FROM aspectos_informativos i INNER JOIN organizacion o ON i.id_organizacion = o.id_organizacion INNER JOIN persona p ON o.id_persona = p.id_persona WHERE i.id_organizacion = '43';
		
		global $conexion;
		$query = $conexion->query($sql);
        $row = $query->fetch_assoc();
        return $row;


	
	}





	public function mostrar3($idorganizacion)
	{

		$sql = "SELECT * FROM percepcion_persona WHERE id_organizacion = $idorganizacion";
		//SELECT i.*, o.nombre, p.nombres, p.telefono FROM aspectos_informativos i INNER JOIN organizacion o ON i.id_organizacion = o.id_organizacion INNER JOIN persona p ON o.id_persona = p.id_persona WHERE i.id_organizacion = '43';
		
		global $conexion;
		$query = $conexion->query($sql);
        $row = $query->fetch_assoc();
        return $row;


	
	}


	public function mostrar4($idorganizacion)
	{

		$sql = "SELECT * FROM aspectos_cualitativas WHERE id_organizacion = $idorganizacion";
		//SELECT i.*, o.nombre, p.nombres, p.telefono FROM aspectos_informativos i INNER JOIN organizacion o ON i.id_organizacion = o.id_organizacion INNER JOIN persona p ON o.id_persona = p.id_persona WHERE i.id_organizacion = '43';
		
		global $conexion;
		$query = $conexion->query($sql);
        $row = $query->fetch_assoc();
        return $row;
	
	}

	public function mostrar5($idorganizacion)
	{

		$sql = "SELECT * FROM identificacion_diagnostico WHERE id_organizacion = $idorganizacion";
		//SELECT i.*, o.nombre, p.nombres, p.telefono FROM aspectos_informativos i INNER JOIN organizacion o ON i.id_organizacion = o.id_organizacion INNER JOIN persona p ON o.id_persona = p.id_persona WHERE i.id_organizacion = '43';
		
		global $conexion;
		$query = $conexion->query($sql);
        $row = $query->fetch_assoc();
        return $row;
	
	}


	//Implementar un método para listar los registros
	public function listar()
	{
		$sql = "SELECT o.id_organizacion, p.nombres,o.nombre, p.telefono ,ai.comunidad FROM persona p INNER JOIN organizacion o ON p.id_persona = o.id_persona INNER JOIN aspectos_informativos ai ON o.id_organizacion = ai.id_organizacion;";
		return ejecutarConsulta($sql);
	}
	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql = "SELECT * FROM categoria where condicion=1";
		return ejecutarConsulta($sql);
	}
}
