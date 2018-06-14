<?php
	$con=mysqli_connect($host,$user,$pw,$db) or die("Problemas al conectar");
	
		//AUTENTICAR USUARIO ENTRE LOGIN Y BASE DE DATOS		
		if (!$_SESSION)
		{
			echo ' <script language = javascript>
							alert("usuario no autentificado")
							self.location="index.php"
						</script>';
		};
	$name_user=$_SESSION['username'];
?>
	
