<!DOCTYPE html> 

<html lang="ES"> 

	<?php
	include("conecta.php");
	session_start();
	include_once("autenticar_usuario.php");
 ?>

			<!------------------INICIO IMPORTAR CSS Y JS DE BOOSTRAP LOCAL ------------------------------>

	<head> 
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		
		<title>Servicio PRT</title>

		<link href="css/styleTabla.css" rel="stylesheet"> 
		<link href="css/bootstrap.min.css" rel="stylesheet"> 
		
		<script src="js/js_revision_vehiculos.js"></script>
		<script src="js/js_gestion_usuario.js"></script>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> 
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> 
<!------------------------------------------------------------------------------->
	</head>
		<body>
				<?php
					include("nav.php");
				?>
					<!----- IMPORTAR JS DE BOOSTRAP LOCAL ---------------------------->
					<script src="js/jquery-3.3.1.min.js"></script> 
					<script src="js/bootstrap.min.js"></script>
					<!------------------------------------------------------------------------------->
					<!-- INICIO CUERPO TABLA GESTION USUARIO -->
					<div class="container">
						<div class="jumbotron">
	
							<div id="form_add">
								<h1>Bienvenido a Sistema PRT</h1>
							</div>
								<hr><br>
								<div id="btn_filtro"></div><br>
								<div id="cuerpo" ></div>
								<div id="form_proces"></div>
						</div>
					</div>
					<!-- FIN CUERPO TABLA GESTION USUARIO -->
		</body>
 </html>	
				
								
					