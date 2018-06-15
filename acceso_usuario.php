<?php

//PAGINA PARA REALIZAR LA COMPARACION DE DATOS DE LOGIN Y LA BASE DE DATOS

		include("conecta.php");
			
			// CONEXION A LA BASE DE DATOS 
			$conexion=pg_connect($host,$user,$pw,$db) ;
			
			$dbconn = pg_connect("host=23.21.238.28 dbname=df4orf8aamnp52 user=anjjmaptvflzwt password=7c4a2861b9398fbd924df37ac4ccc75d173006388205912d74b6289a630422d6")  or die('No se ha podido conectar: ' . pg_last_error());
			
			if (!isset($_SESSION))
			{
				session_start();
			}
			
			// DECLARACION DE VARIABLES CAMPOS DE TEXTO LOGIN 
			$username=$_POST['username'];
			$password=$_POST['pass'];
			
			// LLAMADO Y DELCLARACION DE VARIABLES CON PROCEDIMIENTO ALMACENADO DE LOGIN 
			
			$sql= ("call sp_Login('".$username."', '".$password."')");
			echo $sql;
			
			//SENTENCIA DE EJECUCION VARIABLE "SQL" Y HACER REFERENCIA A LA TABLA USUARIO 
			$resultado= pg_query($con,$sql) or die ("No se ha podido establecer conexión ".pg_last_error());
			echo $con;
			echo $Sql;
			$fila = pg_fetch_array($resultado);
			

			
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
						
						
				
						//header("Location: menu_principal.php");
			}
?>