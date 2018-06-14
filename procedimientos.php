<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<?php
		include("conecta.php");
		session_start();
		include_once("autenticar_usuario.php");
		include ("ver_usuarios.php");
		$consulta_proces = procedimientos();
	?>
<form action='guarda.php' method='post'>

					<table border='1' width='80%'>
					<tr>
					<td>Patente</td>
					<td><input type='text' id='patente' name='patente'></td>
					
					</tr>
					<tr>
						<td colspan='2'>

	<?php
		$name_proces=" ";
		$name_categoria=" ";
		$detalle_pregunta=" ";
		$string=" ";
		$string_boton=" ";

		while($usuario = $consulta_proces->fetch_assoc())
		{
			if($name_proces!=$usuario['nombre_procedimiento'])
			{
				
				if($name_proces!=" ")
				{
					
					$string = $string."</table><br><br><br>";
					$string = $string."</div>";
				}

			$string_boton = $string_boton."<input type='button' onclick=ocultar_procedimiento('div_".$usuario['id_categoria']."') value='".$usuario['nombre_procedimiento']."'>";
			
			$string = $string."<div id='div_".$usuario['id_categoria']."'>";
	
			$string = $string."<table border='1'>";
				$string = $string."<tr>";
					$string = $string. "<td colspan='2'><h1>" .$usuario['nombre_procedimiento']."</h1></td>" ;
				$string = $string. "</tr>";
				
				if($usuario['nombre_procedimiento']=="Inspeccion visual")
				{
					$string = $string. "<tr>";
						$string = $string. "<td colspan='2'><h3>Tipos de vehículos a los cuales se aplica:</h3></td>";
					$string = $string. "</tr>";
					
					$string = $string. "<tr>";
						$string = $string.	"<td colspan='2'>
											-Vehículo de pasajeros con hasta nueve asientos, incluido del del conductor 
											<br>
											-Vehículo de carga con capacidad hasta 1.750kg
											<br>
											-Motocicletas
										</td>";
					$string = $string. "</tr>";
				}
				if($usuario['nombre_procedimiento']=="Luces")
				{
					$string = $string. "<tr>";
					$string = $string. "<td colspan='2'><h3>Tipos de vehículos a los cuales se aplica:</h3></td>";
				$string = $string. "</tr>";
				
				$string = $string. "<tr>";
					$string = $string.	"<td colspan='2'>
										-Vehículo de pasajeros con hasta nueve asientos, incluido del del conductor 
										<br>
										-Vehículo de carga con capacidad hasta 1.750kg
										<br>
										-Motocicletas
									</td>";
				$string = $string. "</tr>";
					
					$string = $string. "<tr>";
						$string = $string. "<td colspan='2'><h3>Base Legal:</h3></td>";
					$string = $string. "</tr>";
			
					$string = $string. "<tr>";
						$string = $string.	"<td colspan='2'>
										Titulos V. VIII D.F L. Nº 1 de 2007 de Transporte y Justicia quie fijó el Texto Refundido, Coordinado y 
										Sistematizado de al ley Nº 18.290 de tránsito - DS Nº 156/90 - Res Nº 129/93
								</td>";
					$string = $string. "</tr>";
					
					$string = $string. "<tr>";
						$string = $string. "<td colspan='2'><h3>Recomendaciones:</h3></td>";
					$string = $string. "</tr>";
			
					$string = $string. "<tr>";
						$string = $string.	"<td colspan='2'>
										<li> Las ruedas delanteras deben estar alineadas respecto a la carrocería.</li>
										<li> Los neumáticos deben estar a una presión de aire normal de operación.</li>
										<li> El vehículo debe estar sin carga en su interior y con el freno de estacionamiento accionado.</li>
										<li>Los resortes y amortiguadores deben estar en su posición normal de estabilidad, en el caso de vehículos con suspensión
										neumática, el motor debe estar en funcionamiento.</li>
										<li> Si el vehículo está equipado con un sistema de control manual de ajuste con respecto a la carga, verivicar que el control esté en la posicion sin carga.</li>
								</td>";
					$string = $string. "</tr>";
					
				}
				if($usuario['nombre_procedimiento']=="Frenos")
				{
					$string = $string. "<tr>";
					$string = $string. "<td colspan='2'><h3>Tipos de vehículos a los cuales se aplica:</h3></td>";
				$string = $string. "</tr>";
				
				$string = $string. "<tr>";
					$string = $string.	"<td colspan='2'>
										-Vehículo de pasajeros con hasta nueve asientos, incluido del del conductor 
										<br>
										-Vehículo de carga con capacidad hasta 1.750kg
										<br>
										-Remolques y Semiremolques con capacidad de carga util entre 750kg y 1750kg
									</td>";
				$string = $string. "</tr>";
					
					$string = $string. "<tr>";
						$string = $string. "<td colspan='2'><h3>Base Legal:</h3></td>";
					$string = $string. "</tr>";
			
					$string = $string. "<tr>";
						$string = $string.	"<td colspan='2'>
										Titulos V. VIII D.F L. Nº 1 de 2007 de Transporte y Justicia quie fijó el Texto Refundido, Coordinado y 
										Sistematizado de al ley Nº 18.290 de tránsito - DS Nº 156/90 - Res Nº 156/90
								</td>";
					$string = $string. "</tr>";
					
					$string = $string. "<tr>";
						$string = $string. "<td colspan='2'><h3>Observaciones:</h3></td>";
					$string = $string. "</tr>";
			
					$string = $string. "<tr>";
						$string = $string.	"<td colspan='2'>
										<li>Los neumaticos deben estar a una presión normal de operación</li>
										<li> La aplicación de los frenos debe ser gradual para evitar que el vehículo sea lanzado fuera de los rodillos.</li>
										<li> Evitar colocación del vehículo sobre los rodillos mientras estos estén en movimiento.</li>
										<li>Se debe evitar que los neumáticos deslicen en los rodillos al aplicar los frenos.</li>
										<li>Si el banco de frenos no permite la medición a vehículo con tracción 4WD permanente deben medirse con un accesorio especial para el frenómetro.</li>
								</td>";
					$string = $string. "</tr>";
					
					$string = $string. "<tr>";
						$string = $string.	"<td colspan='2'>
										Cuando se trate de remolques de peso bruto vehícular inferior a 3.500kg y con capacidad de carga entre 750 y 1750kg y posean freno de inercia, esta prueba no se efetúa a este tipo de vehículos.
								</td>";
					$string = $string. "</tr>";
				
				}
				
			}
			
			$name_proces=$usuario['nombre_procedimiento'];
//-------------------------------------------------------------------------------------			
			if($name_categoria!=$usuario['nombre_categoria'])
			{
				$string = $string. "<tr>";
					$string = $string. "<td colspan='2'><h3>" .$usuario['nombre_categoria']."</h3></td>" ;
				$string = $string. "</tr>";
			}
			$name_categoria=$usuario['nombre_categoria'];
// ------------------------------------------------------------------------------------
			if($detalle_pregunta!=$usuario['detalle_pregunta'])
			{
				$string = $string. "<tr>";
					$string = $string. "<td>" .$usuario['detalle_pregunta']."</td>" ;
					$string = $string. "<td colspan='2'><input type='".$usuario['tipo_input']."'  id='".$usuario['id_pregunta']."' name='".$usuario['id_pregunta']."' ></td>" ;
				$string = $string. "</tr>";
			}

			$detalle_pregunta=$usuario['detalle_pregunta'];
		}
		echo $string_boton;
		echo $string;
	?>
		<tr>
			<td colspan="2" align="right">
				<input type="submit"  value="Finalizar revisión">
			</td>
		</tr>
			</td>
		</tr>
</table>
		
		</form>


	
				
			
			
			

