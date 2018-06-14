<?php
	$host = "ec2-23-21-238-28.compute-1.amazonaws.com";
	$user ="anjjmaptvflzwt";
	$pw = "7c4a2861b9398fbd924df37ac4ccc75d173006388205912d74b6289a630422d6";
	$db ="df4orf8aamnp52";

//DECLARACION DE VARIABLES DE CONEXION A BASE DE DATOS 

	$conexion = new pg_connect($host, $user, $pw, $db);	
	//	'localhost', 'root','','servicio_prt');
	$consulta = '';

	if($conexion->connect_errno)
	{
		echo 'Error en la conexion';
		exit;
	};
?>



 