function registrarse()
{
    if(document.getElementById("nombres").value!="" && document.getElementById("apellidos").value!="" && document.getElementById("cedula").value!=""
      && document.getElementById("usuario").value!="" && document.getElementById("email").value!="" && document.getElementById("fechaNacimiento").value!="" && document.getElementById("contrasenia").value!=""){ 
          $.post("../../backend/controllers/Registro.php",{id:document.getElementById("id").value, nombre:document.getElementById("nombre").value, apellido:document.getElementById("apellido").value, nickname:document.getElementById("nickname").value, email:document.getElementById("email").value, genero:document.getElementById("genero").value, fechaNacimiento:document.getElementById("fechaNacimiento").value, pass:document.getElementById("pass").value  },function(respuesta){
              alert("El servidor respondio asi: "+respuesta);
              location("index.html");
	  });
	}	
	else
	{
		alert("Campos vacios");
	}
}