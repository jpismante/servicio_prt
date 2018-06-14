<?php

//PAGINA PARA REALIZAR LA COMPARACION DE DATOS DE LOGIN Y LA BASE DE DATOS

		include("conecta.php");
			
			// CONEXION A LA BASE DE DATOS 
			$con=mysqli_connect($host,$user,$pw,$db) or die("Problemas al conectar");
			
			if (!isset($_SESSION))
			{
				session_start();
			}
			
			// DECLARACION DE VARIABLES CAMPOS DE TEXTO LOGIN 
			$username=$_POST['username'];
			$password=$_POST['pass'];
			
			// LLAMADO Y DELCLARACION DE VARIABLES CON PROCEDIMIENTO ALMACENADO DE LOGIN 
			
			$sql= ("call sp_Login('".$username."', '".$password."')");
			
			//SENTENCIA DE EJECUCION VARIABLE "SQL" Y HACER REFERENCIA A LA TABLA USUARIO 
			$resultado= mysqli_query($con,$sql) or die (mysql_error());
			$fila = mysqli_fetch_array($resultado);
			
			// RECORRER TABLA USUARIO PARA COMPROBAR INFORMACION INGRESADA EN EL LOGIN 
			
			if (!$fila[0])
			{
			echo ' <script language = javascript>
							("Usuario o Password errado, por favor verifique.")
							self.location="index.php"
						</script>';
			}else
			{
						$_SESSION['username']=$fila['correo_usuario'];
						$_SESSION['pass']=$fila['contrasena_usuario'];
						$_SESSION['id_rol']=$fila['id_rol_fk'];
						$_SESSION['id_usuario']=$fila['id_usuario'];
						
						
				
						header("Location: menu_principal.php");
			}
?>