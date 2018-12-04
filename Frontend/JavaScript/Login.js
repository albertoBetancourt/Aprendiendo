
window.addEventListener("load", load, false);

function load()
{
	var botonIngresar = document.getElementById ("ingresar");
	botonIngresar.addEventListener ("click", verificarDatos, false);
}

function verificarDatos ()
{
    var datos = document.getElementsByName("datos");
    for (let i=0; i<datos.length; i++)
	{
		if (datos[i].value == "")
		{
			alert ("Hay campos vacíos");
			return;
		}
    }
    $.post("../../Backend/controladores/InicioSesion.php", 
			{username:datos[0].value, contrasena:datos[1].value},
			function(respuesta)
			{
				alert("El servidor dice: "+respuesta);
				location ("../HTML/Comunidad.html");
			});
}