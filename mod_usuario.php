<?php
	include ("ver_usuarios.php");
	
	session_start();
	include("autenticar_usuario.php");
?>
<!--  CREACION DE ENCABEZADO TABLA PARA MOSTRAR USUARIOS / GESTION DE USUARIOS -->
	<div class="table-scroll">
		<table align = "center" width='100%' >
			<thead >
				<tr>
					<th width='5%'>ID</th>
					<th width='15%' >Nombre Usuario</th>
					<th width='15%' >Contraseña</th>
					<th width='15%' >Correo</th>
					<th width='15%' >Rol</th>
					<th width='10%' >Estado</th>
					<th width='5%' >Accion</th>
				</tr>
			</thead> 
	<!----------------------------------------------------------------------------------------------------------->
	<!--  CREACION DE  TABLA PARA MOSTRAR USUARIOS / GESTION DE USUARIOS DESDE LA BASE DE DATOS -->
		
			<tbody >
				<?php
					$consulta_ver= view_users($_GET['filtro']);
					while($usuario=$consulta_ver->fetch_assoc())
					{
				?>
						<tr>
							<td colspan='7'>
								<div  id='Actualiza_usuario_<?php echo $usuario['id_usuario']; ?>'>
									<table  width='100%' border="1">
										<tr>
											<td width='5%' align="center"><?php echo $usuario['id_usuario']; ?></td>
											<td width='15%' align="center"><?php echo $usuario['nombre_usuario']; ?></td>
											<td width='15%' align="center"><?php echo $usuario['contrasena_usuario']; ?></td>
											<td width='15%' align="center"><?php echo $usuario['correo_usuario']; ?></td>
											<td width='15%' align="center"><?php echo $usuario['descripcion_rol']; ?></td>
											<td width='15%' align="center"><?php echo $usuario['detalle_estado']; ?></td>
											<td width='5%'> <a href="#" onclick='modifica_user(<?php echo $usuario['id_usuario']; ?>);' class="link_cursor"> Modificar </a></td>
										</tr>
									</table>
								</div>
							</td>
						</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
	