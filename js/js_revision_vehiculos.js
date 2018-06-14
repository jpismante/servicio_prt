function ver_procedimiento()
{
	var  xhttp_ver_proces = new XMLHttpRequest();
	xhttp_ver_proces.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			var prueba = document.getElementById("form_proces").innerHTML = this.responseText;
			document.getElementById("form_add").innerHTML="";
			limpia();
			  
				
		}
	};
	xhttp_ver_proces.open("GET", "procedimientos.php");
	xhttp_ver_proces.send();
};
function ocultar_procedimiento(val)
{
	if ("div_2"== val){
		document.getElementById("div_2").style.display = "block";
		document.getElementById("div_3").style.display = "none";
		document.getElementById("div_4").style.display = "none";
		document.getElementById("div_5").style.display = "none";
    }else if ("div_3"== val)
	{
		document.getElementById("div_2").style.display = "none";
		document.getElementById("div_3").style.display = "block";
		document.getElementById("div_4").style.display = "none";
		document.getElementById("div_5").style.display = "none";
		
		
	}else if ("div_4"== val)
	{
		document.getElementById("div_2").style.display = "none";
		document.getElementById("div_3").style.display = "none";
		document.getElementById("div_4").style.display = "block";
		document.getElementById("div_5").style.display = "none";
		
		
	}else if ("div_5"== val)
	{
		document.getElementById("div_2").style.display = "none";
		document.getElementById("div_3").style.display = "none";
		document.getElementById("div_4").style.display = "none";
		document.getElementById("div_5").style.display = "block";
		
		
	}
};

function limpia()
{
		document.getElementById("div_2").style.display = "block";
		document.getElementById("div_3").style.display = "none";
		document.getElementById("div_4").style.display = "none";
		document.getElementById("div_5").style.display = "none";
};

function buscar_informe()
{
	var  xhttp_buscar_inf = new XMLHttpRequest();
	xhttp_buscar_inf.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			var prueba = document.getElementById("form_proces").innerHTML = this.responseText;
			document.getElementById("form_add").innerHTML="";
			document.getElementById("btn_filtro").innerHTML="";
			document.getElementById("cuerpo").innerHTML="";
			limpia();
			  
				
		}
	};
	xhttp_buscar_inf.open("GET", "buscar_patente.php");
	xhttp_buscar_inf.send();
};


function ver_informe()
{
	var  xhttp_ver_inf = new XMLHttpRequest();
	xhttp_ver_inf.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			var prueba = document.getElementById("form_proces").innerHTML = this.responseText;
			document.getElementById("form_add").innerHTML="";
			document.getElementById("btn_filtro").innerHTML="";
			document.getElementById("cuerpo").innerHTML="";

			limpia();
			  
				
		}
	};
	xhttp_ver_inf.open("GET", "informe_vehiculo.php?patente="+document.getElementById("buscar_inf").value);
	xhttp_ver_inf.send();
};






