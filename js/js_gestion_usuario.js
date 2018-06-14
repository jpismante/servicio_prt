
	//INICIO CREACION FUNCION AJAX PARA MOSTRAR USUARIOS EN MENU GESTION
function ver_user(a)
{
	var  xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById("cuerpo").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "mod_usuario.php?filtro="+a);
	xhttp.send();
};
		
		//FIN CREACION FUNCION AJAX PARA MOSTRAR USUARIOS EN MENU GESTION

function check()
{
		var  checkBox = document.getElementById("check_filtro").checked;
		var chk;
		if(checkBox==true)
		{
			document.getElementById("check_filtro");
			chk = "2";
		}else
		{
			document.getElementById("check_filtro");
			chk = "1";
		}
		ver_user(chk);
};
		//PRUEBA CHECK 

function  ver_inhabilitados()
{
	var  xhttp_btn_filtro = new XMLHttpRequest();
	xhttp_btn_filtro.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById("btn_filtro").innerHTML = this.responseText;
		}
	}
	xhttp_btn_filtro.open("GET", "btn_filtro.php");
	xhttp_btn_filtro.send();
};
		//PRUEBA CHECK 
		
function add_user()
{
	var  xhttp_add = new XMLHttpRequest();
	xhttp_add.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById("form_add").innerHTML = this.responseText;
			ver_inhabilitados();
			ver_user(1);
			document.getElementById("form_proces").innerHTML="";
		}
	};
	var  url= "add_usuario.php?accion=";
	xhttp_add.open("GET", url);
	xhttp_add.send();
};
			
		//FIN CODIGOS AJAX  GESTION TABLA USUARIOS
		//INICIO CODIGO AJAX CAMBIO CAMPOS TEXTOS PARA EDITAR USUARIOS

	
		

function modifica_user(id) 
{
	var xhttp_modifica = new XMLHttpRequest();
	xhttp_modifica.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
		document.getElementById("Actualiza_usuario_"+id).innerHTML = this.responseText;
		}
	};
	var  checkBox = document.getElementById("check_filtro").checked;
	var chk;
		if(checkBox==true)
		{
				chk = "2";
			document.getElementById("check_filtro");
		}else
		{
			document.getElementById("check_filtro");
			chk = "1";
		}
	xhttp_modifica.open("GET", "mod_usuario_ajax.php?id="+id+"&id_estado="+chk+"&accion=modificar");
	xhttp_modifica.send();
};
	
		//FIN CODIGO AJAX CAMBIO CAMPOS TEXTOS PARA EDITAR USUARIOS
		<!------------INICIO CODIGO AJAX PARA LLAMAR FUNCION ACTUALIZAR DATOS --->
function guardar_user(id)
{

	var  xhttp_guarda = new  XMLHttpRequest();
	xhttp_guarda.onreadystatechange = function()
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById("Actualiza_usuario_"+id).innerHTML = this.responseText;
		}
	};
	var  checkBox = document.getElementById("check_filtro").checked;
	var chk;
		if(checkBox==true)
		{
			chk = "2";
			document.getElementById("check_filtro");
			
		}else
		{
			document.getElementById("check_filtro");
			chk = "1";
		}
	var url=  "mod_usuario_ajax.php?id="+id+"&id_estado="+chk+"&accion=guardar";
			url = url + "&n="+ document.getElementById("in_nombre_usuario"+id).value;
			url = url + "&e="+ document.getElementById("in_correo_usuario"+id).value;
			url = url + "&p="+ document.getElementById("in_contrasena_usuario"+id).value;
			url = url + "&r="+ document.getElementById("in_rol"+id).value;
			url = url + "&es="+ document.getElementById("in_estado"+id).value;
		xhttp_guarda.open("GET", url);
		xhttp_guarda.send();
};
		
			
//FIN CODIGO AJAX PARA LLAMAR FUNCION ACTUALIZAR DATOS 
function nuevo_user()
{
	var  xhttp_nuevo = new  XMLHttpRequest();
	xhttp_nuevo.onreadystatechange = function()
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById("form_add").innerHTML = this.responseText;
		}
	};
	
	var  url= "add_usuario.php?accion=nuevo";
		url = url + "&name="+ document.getElementById("in_new_nombre_usuario").value;
		url = url + "&pass="+ document.getElementById("in_new_contrasena_usuario").value;
		url = url + "&email="+ document.getElementById("in_new_correo_usuario").value;
		url = url + "&rut="+ document.getElementById("in_new_rut_usuario").value;
		url = url + "&tuser="+  document.getElementById("tipo_usuario").options[document.getElementById("tipo_usuario") .selectedIndex].value;  
		url = url + "&estado="+  document.getElementById("estado_usuario").options[document.getElementById("estado_usuario") .selectedIndex].value; 
	
		if( document.getElementById("estado_usuario").options[document.getElementById("estado_usuario") .selectedIndex].value==1)
		{
			add_user();
		}
	xhttp_nuevo.open("GET", url);
	xhttp_nuevo.send();
};
	
