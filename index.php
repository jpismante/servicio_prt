<html>
	<head>
		<?php
			include("conecta.php");
		?>
		<link rel = "stylesheet" href="css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="js/bootstrap.min.js">
	</head>
		<body>
			<!---------------- BARRA DE NAVEGACION --------------->
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">Servicio PRT</div>
			</nav>
			<!----------------------------------------------------------------->
			<div class="container">
				<div class="jumbotron">
					<div class="container">
						<div class="row">
							<div class="col-md-4"></div>
							<div class="panel col-md-4">
								<h2>Ingreso a sistema</h2>
			<!--------------------------------------------------------------------------------->
			<!-------------------------- FORMULARIO LOGIN ---------------------------->		
									<form class="new_user" id="new_user" action="acceso_usuario.php" method="POST">			
			<!-------------------------- INPUT NOMBRE USUARIO LOGIN --------------->		
												<div class="input-group">
														<input type="email" class="form-control" value  name="username" id="username" placeholder="Usuario" aria-describedby="basic-addon2"  required>
														<span class="input-group-addon" id="basic-addon2">
															@Gmail.com
														</span>
												</div>
			<!------------------------------------------------------------------------------------>
												<br>
			<!--------------------- INPUT PASSWORD USUARIO LOGIN ------------------>		
												<div class="input-group">
														<input autocomplete="off" class="form-control" placeholder="Contraseña" type="password" name="pass" id="pass" required>
														<span class="glyphicon input-group-addon glyphicon-asterisk">	
														</span>
												</div>
			<!------------------------------------------------------------------------------------>
												<br>			
												<div class="actions">
													<input type="submit" name="btn_login" value="Ingresar" class="btn btn-primary" data-disable-with="Ingresar">
												</div>
									</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>
</html>
										
	
		




	
	
	
					
	
	
	
	
	
	
	
			
			
			
					


		
		
		
		
		
		
		
	
	
	
	
	
	









	