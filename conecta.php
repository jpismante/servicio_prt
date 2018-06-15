<?php
	$host = "23.21.238.28";
	$user ="anjjmaptvflzwt";
	$pw = "7c4a2861b9398fbd924df37ac4ccc75d173006388205912d74b6289a630422d6";
	$db ="df4orf8aamnp52";
	$port="5432";
	
	
	$conexion = pg_connect("host=$host, port=$port, user=$user, 
	pass=$pw, dbname=$db");

		if($conexion->connect_errno)
		{
			echo 'Error en la conexion PL';
			exit;
		};

	//DECLARACION DE VARIABLES DE CONEXION A BASE DE DATOS 


			$conexion = new pg_connect($host, $user, $pw, $db);	
				
			$consulta = '';
			
			

?>
		


 