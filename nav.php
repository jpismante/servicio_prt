<nav class="navbar navbar-inverse">
	<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					</button>
					<!------- LOGO PAGINA IZQUIERDO ---->
					<a class="navbar-brand" href="menu_principal.php">Servicio PRT</a>
				</div>
			<!------------------------------------------------------------->
				<form class="navbar-form navbar-right">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Buscar usuario">
					</div>
					<button type="submit" class="btn btn-default">
						Buscar
					</button>
				</form> 
			<!------- BARRA NAV BOTON GESTION USUARIO--------------->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
						<!--  CODIGO PARA MENU ADMINISTRADOR -->	
						<?php
							if ($_SESSION['id_rol']==1)
							{
						?>							
							<li class="dropdown ">
								<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
								<ul class="dropdown-menu">
										<li><a href="#" onclick="add_user();">Gestion Usuarios</a></li>
								</ul>
							</li>
							<li class="dropdown ">
								<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vehículos <span class="caret"></span></a>
									<ul class="dropdown-menu">
											<li><a href="#" onclick="buscar_informe();">Ver Informes Vehículos</a></li>
											<li><a href="#">Ver Clientes</a></li>
											<li><a href="#">Ver Informes revisión</a></li>
									</ul>
							</li>
								<!------------------------------------------------------------------->	
								<!--  CODIGO PARA MENU JEFE MECANICO -->	
						<?php
							}else
								if($_SESSION['id_rol']==2)
								{
						?>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vehiculos <span class="caret"></span></a>
										<ul class="dropdown-menu">
												<li><a href="#" onclick="buscar_informe();">Ver Informes vehiculos</a></li>
												<li role="separator" class="divider"></li>
												<li><a href="#">Gestionar Clientes</a></li>
												<li role="separator" class="divider"></li>
												<li><a href="#">Gestionar Vehículos</a></li>
										</ul>
									</li>
									<ul class="nav navbar-nav">
											<li>
											<a href="#" onclick="ver_procedimiento(); "   role="button" aria-haspopup="true" aria-expanded="false">Iniciar revisión</a>
											</li>
									</ul>
									<!------------------------------------------------------------------->	
									<!--  CODIGO PARA MENU  MECANICO REVISOR -->	
						<?php
								}else 
									if ($_SESSION['id_rol']==3)
									{
						?>				
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vehiculos <span class="caret"></span></a>
											<ul class="dropdown-menu">
													<li><a href="#">Ver antecedentes vehiculos</a></li>
													<li role="separator" class="divider"></li>
													<li><a href="#" onclick="buscar_informe();">Ver Informes</a></li>
													<li role="separator" class="divider"></li>
													<li><a href="#">Ver Clientes</a></li>
													<li role="separator" class="divider"></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="#"   role="button" aria-haspopup="true" aria-expanded="false">Iniciar revisión</a>
										</li>
										<!------------------------------------------------------------------->
										<!--  CODIGO PARA MENU  AYUDANTE REVISOR -->	
							<?php	
									}else 
									if($_SESSION['id_rol']==4)
									{
							?>	
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vehiculos <span class="caret"></span></a>
												<ul class="dropdown-menu">
														<li><a href="#">Ver antecedentes vehiculos</a></li>
												</ul>
										</li>
										<!------------------------------------------------------------------->	
							<?php		
									}
							?>
				</ul>
				<!------------------------------------------------------------------->	
				<!--------- BARRA NAV BOTON CERRAR SESION--------------->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/users/edit">Perfil</a></li>
					<li><a rel="nofollow" data-method="delete" href="desconectar_usuario.php">Cerrar sesión</a></li>
				</ul>
			</div>
			<!------------------------------------------------------------------->
	</div>
</nav>