function registrarse()
{
    if(document.getElementById("nombre").value!="" && document.getElementById("apellido").value!="" && document.getElementById("id").value!=""
      && document.getElementById("nickname").value!="" && document.getElementById("email").value!="" && document.getElementById("fechaNacimiento").value!="" && document.getElementById("pass").value!=""){ 
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