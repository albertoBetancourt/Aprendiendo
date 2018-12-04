function consultar() {
    reserva = document.getElementById("reservas").value;
    $.post("../../backend/controllers/ConsultaPerfil.php", {}, function (respuesta) {
        var data = eval(respuesta);
        $("#n").text(datasUsuario[0].username);
        $("#c").text(datasUsuario[0].nombres);
        $("#e").text(datasUsuario[0].apellidos);
        $("#f").text(datasUsuario[0].cedula);
        $("#f").text(datasUsuario[0].genero);
        $("#f").text(datasUsuario[0].fechaNacimiento);
        $("#f").text(datasUsuario[0].email);
        $("#f").text(datasUsuario[0].ciudad);
        $("#f").text(datasUsuario[0].pais);

    });
}