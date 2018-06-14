 <?php
 
 include("ver_usuarios.php");
 include("conecta.php");
 	session_start();
 	include_once("autenticar_usuario.php");
 $i = 1;
 
 while($i <= 45){
	 
	 if(isset($_POST[$i])){
		 
		 if ($_POST[$i]=='on'){
			 $val = '1';
		 }else{
			$val = $_POST[$i];
			}
		
		 }else{ 
		 $val = '0';

		 
		 
	 }	 
	 
	 $consulta_insert_preguntas = insert_preguntas ($i, $val,$_POST['patente'],$_SESSION['id_usuario']);
		 $i++;
		 
		
 }
 echo '<script lang=javascript>
				alert("Datos Guardados correctamente");
				self.location="menu_principal.php"
					</script>'; 
 ?>