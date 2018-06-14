<?php
//CODIGO PARA FINALIZAR SESION
	session_start();
	
		if ($_SESSION['username'])
		{
		session_destroy();
		
			echo '<script language = javascript>
							alert("Su sesion ha terminado correctamente")
							self.location="index.php"
						</script>';
		}else
		{
			
			echo '<script language = javascript>
							alert("No ha iniciado ninguna session, por favor registrarse")
							self.location="index.php"
						</script>';
		};
?>

		
			
			
			
			
			
			
			
		
		
			
		
		
		