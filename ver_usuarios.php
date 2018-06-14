<?php

	include ("conecta.php");

//------INICIO SENTENCIA CONEXION A BASE DE DATOS 
			$con = mysqli_connect ($host, $user, $pw, $db) or die ("Problemas al conectar con base de datos");
				if(mysqli_connect_errno())
				{
					echo "Error al conectar con MySQL ".mysqli_errno();
				
				}
//------FIN SENTENCIA CONEXION A BASE DE DATOS 


		

//------INICIO FUNCION VER USUARIO Y LLAMADO A PROCEDIMIENTO ALMACENADO VIEW_USER 
			function view_users($id_filtro)
			{
			global $conexion, $consulta_ver;
				$sql = 'select 
									id_usuario, nombre_usuario, contrasena_usuario, correo_usuario, descripcion_rol, id_rol, detalle_estado
							from 
									usuario inner join rol
							ON
									usuario.id_rol_fk = rol.id_rol
								inner join estado_usuario
							ON
									estado_usuario.id_estado_usuario = usuario.id_estado_fk
							where 
									id_estado_fk = '.$id_filtro.'
									order by id_usuario ASC';
			return $conexion->query($sql);
			};
//------FIN FUNCION VER USUARIO Y LLAMADO A PROCEDIMIENTO ALMACENADO VIEW_USER 
		
				



//------INICIO FUNCION MOSTRAR USUARIOS
			function modificar_user($id, $id_estado)
			{
			global $con, $consulta;
				$sql = 'select 
									id_usuario, nombre_usuario, contrasena_usuario, correo_usuario, descripcion_rol, id_rol, detalle_estado, id_estado_usuario
								from 
									usuario inner join rol
								ON
									usuario.id_rol_fk=rol.id_rol
								inner join estado_usuario
								ON
									estado_usuario.id_estado_usuario = usuario.id_estado_fk
									where id_estado_fk = '.$id_estado.'
								and
									id_usuario = '.$id.'';
			return $con->query($sql);
			};
			
//------INICIO FUNCION MOSTRAR USUARIOS
					
//------INICIO FUNCION ACTUALIZAR USUARIOS
							
							 



			function actualizar_user($nombre_usuario, $correo_usuario, $contrasena_usuario, $id_usuario, $id_rol_fk, $id_estado_usuario)
			{
			global $con, $consulta_actualiza;
				$sql = 'update usuario 
										set nombre_usuario = "'.$nombre_usuario.'",
										correo_usuario = "'.$correo_usuario.'",
										contrasena_usuario = "'.$contrasena_usuario.'",
										id_rol_fk = '.$id_rol_fk.',
										id_estado_fk = '.$id_estado_usuario.'
							where 
										id_usuario = '.$id_usuario.'';
			return $con->query($sql);
			};
			
//------FIN FUNCION ACTUALIZAR USUARIOS



//------INICIO FUNCION AÑADIR USUARIOS

			function insertar_user($nombre_usuario, $contrasena_usuario, $correo_usuario, $rut_usuario, $id_rol_usuario_fk, $id_estado_fk )
			{
			global $con, $consulta_add_user;
				$sql= 'insert into usuario
									(nombre_usuario, contrasena_usuario, correo_usuario, rut_usuario, id_rol_fk, id_estado_fk) 
							values
									("'.$nombre_usuario.'", "'.$contrasena_usuario.'", "'.$correo_usuario.'",  '.$rut_usuario.', '.$id_rol_usuario_fk.', '.$id_estado_fk.')';
			return $con->query($sql);
			};
//------FIN FUNCION AÑADIR USUARIOS
	
			function ver_rol ()
			{
			global $con, $consulta_ver_rol;
				$sql= 'select 
									id_rol, descripcion_rol
							from 
									rol';
			return $con->query($sql);
			};
							
			function ver_estado ()
			{
			global $con, $consulta_ver_estado;
				$sql = 'select 
									id_estado_usuario, detalle_estado
							from 
									estado_usuario';
			return $con->query($sql);
			};
		
		function procedimientos ()
		{
			global $con, $consulta_proces;
			$sql = 'select id_categoria, nombre_procedimiento, id_sub_categoria, nombre_categoria, id_pregunta, detalle_pregunta, tipo_input
						from categoria_procedimiento inner join sub_categoria
						ON
						categoria_procedimiento.id_categoria = sub_categoria.id_categoria_fk
						inner join pregunta_categoria
						ON
						pregunta_categoria.id_sub_categoria_fk = sub_categoria.id_sub_categoria';
			return $con->query($sql);
		};
	function insert_preguntas($id_pregunta_fk, $valor_pregunta, $patente, $id_usuario_fk)
	{
	global $con, $consulta_insert_preguntas;		
				$sql='insert into procedimiento_valor (valor_pregunta, id_pregunta_fk, patente, id_usuario_fk)
						values ("'.$valor_pregunta.'", '.$id_pregunta_fk.', "'.$patente.'", "'.$id_usuario_fk.'")';
	return $con->query($sql);
	};
	
	function select_informe($patente)
	{
	global $con, $consulta_informe;		
				$sql='select id_categoria, nombre_procedimiento, id_sub_categoria, nombre_categoria, id_pregunta, detalle_pregunta, tipo_input,
				procedimiento_valor.patente, procedimiento_valor.valor_pregunta, procedimiento_valor.fecha_revision
				from categoria_procedimiento inner join sub_categoria
				ON
				categoria_procedimiento.id_categoria = sub_categoria.id_categoria_fk
				inner join pregunta_categoria
				ON
				pregunta_categoria.id_sub_categoria_fk = sub_categoria.id_sub_categoria
				inner join procedimiento_valor
				ON
				procedimiento_valor.id_pregunta_fk = pregunta_categoria.id_pregunta
				where procedimiento_valor.patente="'.$patente.'"';
	return $con->query($sql);
	};
?>
	
	
	


