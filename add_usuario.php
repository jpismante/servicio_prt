<?php
include ("ver_usuarios.php");
session_start();
include("autenticar_usuario.php");



if ($_GET['accion']=='nuevo'){
	
	$consulta_add_user = insertar_user ($_GET['name'], $_GET['pass'],$_GET['email'], $_GET['rut'], $_GET['tuser'], $_GET['estado']);
/*echo '<script language=javascript>
		alert("Usuario creado correctamente")
		self.location="menu_principal.php"

</script>';*/
}

?>
<!--INICIO FORMULARIO INGRESAR NUEVO USUARIO-->
<link rel="stylesheet" href="css/tabla_add.css">
			<div >
					<table align="center" class="tabla_add_user">
						<tbody>
							<tr>
								<td>
									Nombre usuario:<input type="text" id="in_new_nombre_usuario" required>
								</td>
							</tr>
							<tr>
								<td>
									Contraseña usuario:<input type="text" id="in_new_contrasena_usuario" required>
								</td>
							</tr>
							<tr>
								<td>
									Correo usuario:<input type="text" id="in_new_correo_usuario" required>
								</td>
							</tr>
							<td>
									Rut usuario:<input type="text" id="in_new_rut_usuario" required>
								</td>
							</tr>
							
							<tr>
								<td>
								
								Estado:
								<select name="estado_usuario" id="estado_usuario" required>
								
									<option value="1" selected="selected">Activo</option>
									<option value="2">Inhabilitado</option>
									
								</select>
								</td>
							</tr>	
							<br>
							<tr>
								<td>
								
								Tipo usuario:<select name="tipo_usuario" id="tipo_usuario" required>
									<option value="" selected="selected">--seleccione--</option>
								<option value="2">Jefe Mecánico</option>
								<option value="3">Mecánico Revisor</option>
								<option value="4">Ayudante Mecánico</option>
									
								</select>
								</td>
							</tr>	
						
						</tbody>
							<tr>
								<td>
									<input type="button" onclick="nuevo_user();" value="Guardar">
									<input type="button" value ="Limpiar">
								</td>
							</tr>
					</table>
			</div>						
<!--FIN FORMULARIO INGRESAR NUEVO USUARIO-->