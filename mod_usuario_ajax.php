<?php
	include ("ver_usuarios.php");
	session_start();
	include("autenticar_usuario.php");
?>

<?php
		if ($_GET['accion']=='modificar')
		{
			$consulta = modificar_user($_GET['id'], $_GET['id_estado']);
			while($usuario = $consulta->fetch_assoc())
			{
?>			<!--GENERA CAMPOS DE TEXTO PARA MODIFICAR-->
				<table width='100%'>
					<tr>
						<td width='5%'><?php echo $usuario['id_usuario']; ?></td>
						<td width='15%'><input class='form-control' type='text'  value='<?php echo $usuario['nombre_usuario']; ?>' name="in_nombre_usuario" id="in_nombre_usuario<?php echo $usuario['id_usuario']; ?>" ></td>
						<td width='15%'><input type='text'  value='<?php echo $usuario['contrasena_usuario']; ?>' name="in_contrasena_usuario" id="in_contrasena_usuario<?php echo $usuario['id_usuario']; ?>" class='form-control'></td>
						<td width='15%'><input type='text'  value='<?php echo $usuario['correo_usuario']; ?>' name="in_correo_usuario"id="in_correo_usuario<?php echo $usuario['id_usuario']; ?>" class='form-control'></td>
						<td width='15%'>
							<select id="in_rol<?php echo $usuario['id_usuario']; ?>"  class='form-control' >
								<?php			
										$consulta_ver_rol = ver_rol ();	
										while($rol_usuario=$consulta_ver_rol->fetch_assoc())
										{
											echo "<option value=".$rol_usuario['id_rol']."";
												if($rol_usuario['id_rol']==$usuario['id_rol'])
												{
													echo " selected";
												};
													echo ">".$rol_usuario['descripcion_rol']."</option>";
										}
								?>									
							</select>
						</td>
						<td width='15%'>
							<select id="in_estado<?php echo $usuario['id_usuario']; ?>"  class='form-control' >
								<?php			
										$consulta_ver_estado = ver_estado ();	
										while($estado_usuario=$consulta_ver_estado->fetch_assoc())
										{
											echo "<option value=".$estado_usuario['id_estado_usuario']."";
												if($estado_usuario['id_estado_usuario']==$usuario['id_estado_usuario'])
												{
													echo " selected";
												};
													echo ">".$estado_usuario['detalle_estado']."</option>";
										}
								?>									
							</select>
						</td>
						<td width='5%'><a  href="#"   onclick='guardar_user(<?php echo $usuario['id_usuario']; ?>);'   class="link_cursor"> Guardar </a></td>
					</tr>
				</table>
				<!------------------------------------------------------------------->
<?php
			}
		}else
		{
			//FUNCION QUE RECIVE LOS DATOS QUE SE VAN A ACTUALIZAR
			$consulta_actualiza = actualizar_user($_GET['n'], $_GET['e'], $_GET['p'], $_GET['id'], $_GET['r'], $_GET['es']);
			$consulta = modificar_user($_GET['id'], $_GET['id_estado']);
			while($usuario = $consulta->fetch_assoc())
			{
?>
				<!--CARGA TABLA  USUARIOS CON LOS  DATOS MODIFICADOS -->
					<table    width='100%' border="1">
								<tr>
									<td width='5%' align="center"><?php echo $usuario['id_usuario']; ?></td>
									<td width='15%' align="center"><?php echo $usuario['nombre_usuario']; ?></td>
									<td width='15%' align="center"><?php echo $usuario['contrasena_usuario']; ?> </td>
									<td width='15%' align="center"><?php echo $usuario['correo_usuario']; ?></td>
									<td width='15%' align="center"><?php echo $usuario['descripcion_rol']; ?></td>
									<td width='15%' align="center"><?php echo $usuario['detalle_estado']; ?></td>
									<td width='5%'> <a href="#" onclick='modifica_user(<?php echo $usuario['id_usuario']; ?>);' class="link_cursor"> Modificar </a></td>
								</tr>
							</table>
				<!------------------------------------------------------------------->
<?php
			}
		};
?>