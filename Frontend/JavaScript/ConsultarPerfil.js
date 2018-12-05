function consultar() {
    
    $.post("../../Backend/controladores/ConsultarPerfil.php", {}, function (respuesta) {
        var datosUsuario = eval(respuesta);
        alert(datosUsuario);
        $("#a").text("hola"+datosUsuario[0].username);
        $("#b").text(datosUsuario[0].nombreCompleto);
        $("#c").text(datosUsuario[0].cedula);
        $("#d").text(datosUsuario[0].fechaDeNacimiento);
        $("#e").text(datosUsuario[0].ciudad);
        $("#f").text(datosUsuario[0].pais);
        alert("El servidor dice: " + respuesta);
    });
}