
window.addEventListener("load", load, false);

function load()
{
	var botonEnviar = document.getElementById ("enviar");
	botonEnviar.addEventListener ("click", verificarDatos, false);
}

function verificarDatos()
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
	var cedula = document.getElementById ("cedula").value;
	var contrasenia = document.getElementById("contrasenia").value;
	var confirmacion = document.getElementById("confirmacion").value;
	var fechaNaciminento = document.getElementById("fechaNacimiento").value;
	var hombre = document.getElementById("hombre");
	var mujer = document.getElementById ("mujer");
	var genero;
	if (isNaN(cedula))
	{
		alert ("La cédula debe ser un valor numérico");
		return;
	}
	if (contrasenia != confirmacion)
	{
		alert ("La dos contraseñas deben coincidir");
		return;
	}
	if (hombre.checked)
	{
		genero = "hombre";
	}
	else
	{
		if (mujer.checked)
		{
			genero = "mujer";
		}
		else
		{
			alert("No se seleccionó un género");
			return;
		}
	}
	alert (datos[7].value);
	/**
	 * Se le envian los datos a la clase registro, que se encargará de las validaciones que requieren al servidor.
	 */
	$.post("../../Backend/controladores/Registro.php", 
			{nombres:datos[0].value,
			apellidos:datos[1].value,
			username:datos[2].value,
			cedula:cedula,
			email:datos[4],
			contrasenia:contrasenia,
			fechaNaciminento:fechaNaciminento,
			genero:genero,
			ciudad:datos[10].value,
			pais:datos[11].value},
			function()
			{
				alert("El servidor dice: Hola");
				location ("Login.html");
			});
}